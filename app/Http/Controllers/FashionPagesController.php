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

        $categories->load('products');



        //form an array of it
        $with = ['categories' => $categories, 'shops' => $shops, 'route' => $currentRoute];


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
    
    


}
