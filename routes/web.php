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



Route::group([], function () {


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


Route::group(['domain' => 'fashion.localhost'], function () {

    Route::get('/home', function () {
        return view('Fashion.index');
    })->name('fashion-home');

    Route::get('/about', function (){
        return view('Fashion.pages.about');
    })->name('fashion-about');

    Route::get('/Faq', function (){
        return view('Fashion.pages.fashion-faq');
    })->name('fashion-faq');

    Route::get('/contact', function (){
        return view('Fashion.pages.fashion-contact-us');
    })->name('fashion-contact-us');

    Route::get('/logout', [
        'uses' => 'UserController@getLogout',
        'as' => 'fashion-logout'
    ])->middleware('auth');

});
