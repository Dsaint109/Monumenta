<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// GET Routes ->
/*
 *---------------------------------------------------------------------------
 * All the routes that have to do with the URL have been assigned to
 * their respective views/controllers.
 * --------------------------------------------------------------------------
*/



Route::group(['domain' => 'monumenta.biz'], function () {


    Route::get('/', [
        'uses' => 'PagesController@index',
        'as' => 'home'
    ]);

    Route::get('/Login', [
        'uses' => 'PagesController@getLogin',
        'as' => 'home_login',
        'middleware' => 'guest'
    ]);

    Route::get('/login', [
        'uses' => 'PagesController@getLogin',
        'as' => 'home_login',
        'middleware' => 'guest'
    ]);

    Route::get('/Register', [
        'uses' => 'PagesController@getRegister',
        'as' => 'register',
        'middleware' => 'guest'
    ]);

    Route::get('/How-It-Works', [
        'uses' => 'PagesController@getHowItWorks',
        'as' => 'howitworks'
    ]);

    Route::get('/Sitemap', [
        'uses' => 'PagesController@getSitemap',
        'as' => 'sitemap'
    ]);

    Route::get('/Frequently-Asked-Questions', [
        'uses' => 'PagesController@getFrequentlyAskedQuestions',
        'as' => 'faq'
    ]);

    Route::get('/Feedback', [
        'uses' => 'PagesController@getFeedback',
        'as' => 'feedback'
    ]);

    Route::get('/Contact-Us', [
        'uses' => 'PagesController@getContactUs',
        'as' => 'contact'
    ]);

    Route::get('/Region', [
        'uses' => 'PagesController@getRegion',
        'as' => 'regions'
    ]);

    Route::get('/Terms-and-Conditions', [
        'uses' => 'PagesController@getTermsAndConditions',
        'as' => 'terms'
    ]);

    Route::get('/Popular-Searches',[
        'uses' => 'PagesController@getPopularSearches',
        'as' => 'popular-searches'
    ]);

    Route::get('/Privacy', [
        'uses' => 'PagesController@getPrivacy',
        'as' => 'privacy'
    ]);

    Route::get('/Monumenta-App-Download', [
        'uses' => 'PagesController@getAppDownload',
        'as' => 'appdownload'
    ]);

    Route::get('/profile', [
        'uses' => 'PagesController@getProfile',
        'middleware' => 'auth',
        'as' => 'profile'
    ]);

    Route::get('/profile/{slug}', [
        'uses' => 'PagesController@getOtherProfile',
        'as' => 'other-profile'
    ]);






    Route::get('/Logout',[
        'uses'=> 'UserController@getLogout',
        'as'=> 'Logout'
    ])->middleware('auth');

    Route::get('/logout',[
        'uses'=> 'UserController@getLogout',
        'as'=> 'logout'
    ])->middleware('auth');






// POST Routes ->
    /*
     *---------------------------------------------------------------------------
     * All the routes that have to do with forms and posting of data have
     * been assigned to their respective views/controllers.
     * --------------------------------------------------------------------------
     */

    Route::post('/Contact-Us', [
        'uses' => 'MailController@postContactUs',
        'as' => 'postContactUs'
    ]);

    Route::post('/Feedback', [
        'uses' => 'MailController@postFeedback',
        'as' => 'postFeedback'
    ]);

    Route::post('/Register', [
        'uses' => 'UserController@postSignup',
        'as' => 'postSignup'
    ]);

    Route::post('/Login', [
        'uses' => 'UserController@postLogin',
        'as' => 'postLogin'
    ]);

    Route::post('/profile', [
        'uses' => 'UserController@postAvatar',
        'as' => 'editAvatar'
    ]);

    Route::post('/details', [
        'uses' => 'UserController@postDetails'
    ]);

    Route::post('/bio', [
       'uses' => 'UserController@postBio'
    ]);


});


// Route Groups: I ->
/*
 * ---------------------------------------------------------------------------
 * This contains the route groups for the subdomains
 * ---------------------------------------------------------------------------
 */


Route::group(['domain' => 'fashion.monumenta.biz'], function () {



    //GET ROUTES

    Route::get('/home', [
        'uses' => 'FashionPagesController@index',
        'as' => 'fashion-home'
    ]);

    Route::get('/about',[
        'uses' => 'FashionPagesController@getAbout',
        'as' => 'fashion-about'
    ]);

    Route::get('/Faq',[
        'uses' => 'FashionPagesController@getFaq',
        'as' => 'fashion-faq'
    ]);

    Route::get('/contact', [
        'uses' => 'FashionPagesController@getContact',
        'as' => 'fashion-contact-us'
    ]);

    Route::get('/Category/{category}', [
        'uses' => 'FashionPagesController@getAllCategory'
    ]);

    Route::get('/Sell', [
        'uses' => 'FashionPagesController@getSell',
        'as' => 'fashion-sell'
    ])->middleware('auth.fash', 'owns.shop.away');

    Route::get('/Dashboard', [
        'uses' => 'FashionPagesController@getDashboard',
        'as' => 'shop-dashboard'
    ])->middleware('auth.fash', 'owns.shop.to');

    Route::get('/My-Products/Add', [
        'uses' => 'FashionPagesController@getAddProducts',
        'as' => 'shop-add-products'
    ])->middleware('auth.fash', 'owns.shop.to');

    Route::get('/My-Products/All', [
        'uses' => 'FashionPagesController@getAllProducts',
        'as' => 'shop-my-products'
    ])->middleware('auth.fash', 'owns.shop.to');

    Route::get('/My-Products/{product}', [
        'uses' => 'FashionPagesController@getEditProduct',
        'as' => 'shop-edit-product'
    ])->middleware('auth.fash', 'owns.shop.to', 'product.own');

    Route::get('/{product}', [
        'uses' => 'FashionPagesController@getProduct'
    ]);






    Route::get('/Fdwa2KT3hLnVzFwzlzEauNUz8xdM38XTOlxR1sPL2b8XDqHALRxlTom9TPGk', [
        'uses' => 'ShopController@getRemoveImage'
    ])->middleware('auth.fash', 'owns.shop.to');



    Route::get('/logout', [
        'uses' => 'UserController@getLogout',
        'as' => 'fashion-logout'
    ])->middleware('auth');





    // POST Routes ->
    /*
     *---------------------------------------------------------------------------
     * All the routes that have to do with forms and posting of data have
     * been assigned to their respective views/controllers.
     * --------------------------------------------------------------------------
     */

    Route::post('/sell', [
        'uses' => 'ShopController@postShopCreate',
    ]);

    Route::post('/shop-image', [
        'uses' => 'ShopController@postImageUpload',
    ]);

    Route::post('/Products/{shop}/Add', [
        'uses' => 'ProductController@postAddProducts'
    ])->middleware('not.shop.own');

    Route::post('/Product/{product}/Edit', [
        'uses' => 'ProductController@postEditProduct'
    ])->middleware('not.product.own');

    Route::post('/My-Products/Add/{optionValue}', [
        'uses' => 'ProductController@postAddColor'
    ]);






    // API Routes ->

    Route::group(['prefix' => 'api'], function (){

        Route::get('/trends', [
            'uses' => 'TrendController@index',
            'as' => 'trends.index'
        ]);


    });

});

