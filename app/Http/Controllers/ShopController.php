<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Shop;

use Flashy;

use Validator;

use Image;




class ShopController extends Controller
{



    public function postShopCreate(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:24',
            'tagline' => 'max:42',
            'web_url' => 'url',
            'address' => 'required',
            'featured' => 'required'
        ]);


        try
        {

            if(!Shop::where('user_id', $request->user()->id)->first())
            {
                //Generating a Slug
                $count = Shop::where('name', $request->name)->count();

                if($count)
                {
                    $slug = str_slug($request->name, '-') . '-' . $count;
                }else
                {
                    $slug = str_slug($request->name, '-');
                }




                //Creating  the shop
                $shop = new Shop();

                $shop->name = $request->name;

                $shop->slug = $slug;

                $shop->tagline = $request->tagline;

                $shop->web_url = $request->web_url;

                $shop->address = $request->address;

                $shop->featured = $request->featured;



                //Saving the created shop with the logged in user
                $request->user()->shop()->save($shop);

                //returns a diifferent view if featured
                if($shop->featured)
                {
                    Flashy::success('Congratulations You have created your Boosted Fashion Shop');
                    return redirect()->route('shop-dashboard');

                }else
                {
                    Flashy::success('Welldone You have created your Fashion Shop');
                    return redirect()->route('shop-dashboard');
                }

            }else
            {


                //Creating  the shop
                $shop = Shop::where('user_id', $request->user()->id)->first();

                $shop->name = $request->name;

                $shop->tagline = $request->tagline;

                $shop->web_url = $request->web_url;

                $shop->address = $request->address;

                $shop->featured = $request->featured;




                $shop->save();

                //returns a diifferent view if featured
                if($shop->featured)
                {
                    Flashy::success('Congratulations You have created your Boosted Fashion Shop');
                    return back();

                }else
                {
                    Flashy::success('Welldone You have created your Fashion Shop');
                    return back();
                }

            }


        }catch (\Exception $e)
        {
            return $e;
        }


    }




    public function postImageUpload(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        try
        {
            if ($validator->passes())
            {

                if ($request->hasFile('logo'))
                {

                    if($shop = Shop::where('user_id', $request->user()->id)->first())
                    {

                        $key = str_replace('-', '_', $shop->slug);

                        $logo = $request->file('logo');

                        $filename = time() . '_' . $key . '.' . $logo->getClientOriginalExtension();


                        $img = Image::make($logo);
                        $img->fit(200,100);
                        $img->save(public_path('/images/Fashion/Shops/' . $filename));

                        $shop->image_url = '/images/Fashion/Shops/' . $filename;
                        $shop->save();


                        Flashy::success('Shop Logo updated');
                        return back();

                    }

                }else
                {
                    Flashy::error('Oops!! No Shop Logo to update');
                    return back();
                }


            }else
            {

                Flashy::error('Oops!! Failed to update Shop Logo, Make sre its an image less than 2MB');
                return back();
            }



        }catch (\Exception $e)
        {
            return $e;
        }


    }




    public function getRemoveImage(Request $request)
    {

        try
        {

            $shop = Shop::where('user_id', $request->user()->id)->first();

            $shop->image_url = NULL;

            $shop->save();

            $respond = [ 'name' => $shop->name, 'tagline' => $shop->tagline];

            return response($respond, 200);

        }catch(\Exception $e)
        {
            return response($e, 422);
        }

    }





}
