<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;

use App\Shop;

use App\Option;

use App\Picture;

use App\OptionValue;

use App\Tag;

use Alert;

use Image;

use Validator;




class ProductController extends Controller
{



    public function postAddProducts(Request $request, Shop $shop)
    {
        $this->validate($request, [
            'name' => 'required',
            'category' => 'required|numeric',
            'color' => 'required',
            'description' => 'required|max:500',
            'stock' => 'required',
            'price' => 'required'
        ]);

        try
        {

            //Generating a Slug
            $count = Product::where('name', $request->name)->count();

            if($count)
            {
                $slug = str_slug($request->name, '-') . '-' . $count;

            }else
            {
                $slug = str_slug($request->name, '-');
            }



            //<editor-fold desc="Saving The Product to the shop">
            $product = new Product;

            $product->category_id = $request->category;

            $product->name = $request->name;

            $product->slug = $slug;

            $product->description = $request->description;

            $product->price = 1 * $request->price;

            if (!$request->not_price  || $request->not_price < $request->price){

                $request->not_price = 1.25 * $request->price;

                $product->notPrice = $request->not_price;

            }else{

                $product->notPrice = $request->not_price;

            }

            $product->stock = 1 * $request->stock;

            $shop->products()->save($product);
            //</editor-fold>

            $options = new Option;

            $options->type = "color";

            $options->name = "color";

            $product->options()->save($options);

            $colors = explode(",",$request->color);

            $i = 0;

            foreach ($colors as $color){
                if($color){

                    $option_value = new OptionValue;
                    $option_value->value = $color;
                    $options->optionValues()->save($option_value);

                    $r[$i] = $option_value->id;
                    $i++;

                }

            }

            if($request->tags){

                $tags = explode(",", $request->tags);

                foreach ($tags as $t){

                    $tag = new Tag;

                    $tag->name = $t;

                    $product->tags()->save($tag);

                }

            }

            if($request->option_names){

                $o = explode(",", $request->option_names);

                foreach($o as $op){

                    $opt = explode("*-*", $op);

                    $z = sizeof($opt);

                    $options = new Option;

                    for ($i = 0; $i < $z; $i++){

                        if ($i == 0){

                           $options->name = $opt[$i];

                        }elseif ($i == 1){

                            if($opt[$i] == 1){

                                $options->type = "checkbox";

                            }elseif ($opt[$i] == 2){

                                $options->type = "select";

                            }

                        }

                    }

                    $product->options()->save($options);

                    $v = explode(",", $request->option_values);

                    foreach($v as $va){

                        $val = explode("*_*", $va);

                        $y = sizeof($val);

                        $option_value =  new OptionValue;

                        for ($i = 0; $i < $y; $i++){

                            if ($i == 0){

                                $option_value->value = $val[$i];

                            }elseif($i == 1){

                                if($val[$i] == $options->name){

                                    $options->optionValues()->save($option_value);

                                }

                            }

                        }

                    }




                }


            }


            return response($r, 200);


        }catch(\Exception $e)
        {
            return response($e, 422);
        }



    }




    public function postAddColor(Request $request, OptionValue $optionValue){

        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        if ($validator->passes()) {

            try
            {

                $image = $request->file('image');

                $option = Option::find($optionValue->option_id);

                $product = Product::find($option->product_id);

                $filename = $product->slug . '_' . $option->id . '_' . $optionValue->id. '.' . $image->getClientOriginalExtension();


                $img = Image::make($image);
                $img->fit(350, 450, function ($constraint) {
                    $constraint->upsize();
                });
                $img->save(public_path('/images/Fashion/Products/' . $filename));

                $picture = new Picture;

                $picture->image_url = '/images/Fashion/Products/' . $filename;

                $optionValue->pictures()->save($picture);

                $out = [$picture->image_url];


                return response($out, 200);


            }catch(\Exception $e)
            {
                return response($e, 422);
            }

        }else{

            $errors = $validator->errors()->all();

            return response($errors, 422);

        }

    }

}
