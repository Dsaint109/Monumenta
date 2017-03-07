<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

use App\Http\Requests;

use App\Category;

use App\Product;

use App\Shop;




class FashionPagesController extends Controller
{

    //Dependency injections
    public function __construct(Category $category, Shop $shop)
    {
        $this->categories = $category->all();

        $this->shops = $shop->all();

    }
    //end Dependency injections



    public function index()
    {


        //region some dependencies needed by all pages

        $currentRoute = Route::currentRouteName();

        $categories = $this->categories;

        $shops = $this->shops;

        $shops->load('user');

        $categories->load('products.optionValues');




        //form an array of it
        $with = ['categories' => $categories, 'shops' => $shops, 'route' => $currentRoute ];


        //endregion

        return view('Fashion.index', $with);

    }


    public function getAbout()
    {

        //region some dependencies needed by all pages

        $currentRoute = Route::currentRouteName();

        $categories = $this->categories;

        $shops = $this->shops;



        $shops->load('user');

        $categories->load('products');



        //form an array of it
        $with = ['categories' => $categories, 'shops' => $shops, 'route' => $currentRoute];


        //endregion


        return view('Fashion.pages.about', $with);

    }


    public function getFaq()
    {

        //region some dependencies needed by all pages

        $currentRoute = Route::currentRouteName();

        $categories = $this->categories;

        $shops = $this->shops;



        $shops->load('user');

        $categories->load('products');



        //form an array of it
        $with = ['categories' => $categories, 'shops' => $shops, 'route' => $currentRoute];


        //endregion



        return view('Fashion.pages.fashion-faq', $with);
    }


    public function getContact()
    {
        //region some dependencies needed by all pages

        $currentRoute = Route::currentRouteName();

        $categories = $this->categories;

        $shops = $this->shops;



        $shops->load('user');

        $categories->load('products');



        //form an array of it
        $with = ['categories' => $categories, 'shops' => $shops, 'route' => $currentRoute];


        //endregion

        return view('Fashion.pages.fashion-contact-us', $with);
    }


    public function getSell()
    {
        //region some dependencies needed by all pages

        $currentRoute = Route::currentRouteName();

        $categories = $this->categories;

        $shops = $this->shops;



        $shops->load('user');

        $categories->load('products');



        //form an array of it
        $with = ['categories' => $categories, 'shops' => $shops, 'route' => $currentRoute];


        //endregion

        return view('Fashion.pages.sell', $with);
    }


    public function getDashboard(Request $request)
    {

        //region some dependencies needed by all pages

        $currentRoute = Route::currentRouteName();

        $categories = $this->categories;

        $shops = $this->shops;

        $shop = $shops->where('user_id', $request->user()->id)->first();


        $shop->load('user');

        $categories->load('products');



        //form an array of it
        $with = ['categories' => $categories, 'shops' => $shops, 'shop' => $shop, 'route' => $currentRoute];


        //endregion

        return view('Fashion.pages.dashboard', $with);

    }


    public function getAddProducts(Request $request)
    {

        //region some dependencies needed by all pages

        $currentRoute = Route::currentRouteName();

        $categories = $this->categories;

        $shops = $this->shops;

        $shop = $shops->where('user_id', $request->user()->id)->first();


        $shop->load('user');

        $categories->load('products');



        //form an array of it
        $with = ['categories' => $categories, 'shops' => $shops,  'shop' => $shop, 'route' => $currentRoute];


        //endregion


        return view('Fashion.pages.add-products', $with);

    }


    public function getEditProduct(Request $request, Product $product)
    {

        //region some dependencies needed by all pages

        $currentRoute = Route::currentRouteName();

        $categories = $this->categories;

        $shops = $this->shops;

        $shop = $shops->where('user_id', $request->user()->id)->first();


        $shop->load('user');

        $product->load([
            'tags' => function($query){
                $query->pluck('name');
            }, 'reviews']);

        $colors = $product->options()->where('type', 'color')->first()->optionValues->all();

        $i = 0;
        foreach ($colors as $color)
        {
            $picture[$i] = $color->pictures()->get();
            $i++;
        }

        $opt = $product->options()->where('type', 'checkbox')->orwhere('type', 'select')->get()->take(2);

        $opt->load('optionValues');

        //form an array of it
        $with = [
                'categories' => $categories,
                'shops' => $shops,
                'shop' => $shop,
                'route' => $currentRoute,
                'product' => $product,
                'colors' => $colors,
                'pictures' => $picture,
                'opt' => $opt
                ];


        //endregion


        return view('Fashion.pages.edit-product', $with);

    }


    public function getAllProducts(Request $request)
    {

        //region some dependencies needed by all pages

        $currentRoute = Route::currentRouteName();

        $categories = $this->categories;

        $shops = $this->shops;

        $shop = $shops->where('user_id', $request->user()->id)->first();

        $shop->load('user', 'products.tags');

        $products = $shop->products()->latest('created_at')->paginate(9);

        $products->load('optionValues.pictures');

        $categories->load('products');



        //form an array of it
        $with = ['categories' => $categories, 'shops' => $shops,  'shop' => $shop, 'route' => $currentRoute, 'products' => $products];


        //endregion

        if ($request->ajax()) {
            return view('Fashion.products.load', ['products' => $products])->render();
        }

        return view('Fashion.pages.my-products', $with);

    }


    public function getAllCategory(Request $request, $category)
    {

        //region some dependencies needed by all pages

        $currentRoute = Route::currentRouteName();

        $categories = $this->categories;

        $shops = $this->shops;

        $category = $categories->where('name', $category)->first();

        if ($category)
        {

            $category->load('products.tags');

            $products = $category->products()->latest('created_at')->paginate(9);

            $products->load('optionValues.pictures');



            //form an array of it
            $with = ['categories' => $categories, 'category' => $category, 'shops' => $shops, 'route' => $currentRoute, 'products' => $products];


            //endregion

            if ($request->ajax()) {
                return view('Fashion.products.category-load', ['products' => $products])->render();
            }

            return view('Fashion.pages.category-products', $with);


        }else{

            Flashy::error('Sorry something is wrong.');
            return redirect()->route('fashion-home');

        }


    }


    public function getProduct($product)
    {

        $product = Product::where('slug', $product)->first();


        if ($product)
        {
            $currentRoute = Route::currentRouteName();

            $categories = $this->categories;

            $shops = $this->shops;

            $shop = $product->shop()->first();

            $product->load([
                'tags' => function($query){
                    $query->pluck('name');
                }, 'reviews']);

            $colors = $product->optionValues()->where('value', 'like', '#%')->get();

            $color = $product->optionValues()->where('value', 'like', '#%')->first();

            $color->load('pictures');



            $opt = $product->options()->where('type', 'checkbox')->orwhere('type', 'select')->get()->take(2);

            $opt->load('optionValues');

            //form an array of it
            $with = [
                'categories' => $categories,
                'shops' => $shops,
                'shop' => $shop,
                'route' => $currentRoute,
                'product' => $product,
                'colors' => $colors,
                'color' => $color,
                'opt' => $opt
            ];

            return view('Fashion.pages.single-product', $with);


        }else{

            return abort(404);
        }



    }



}
