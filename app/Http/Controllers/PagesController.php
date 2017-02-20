<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\User;

use App\Detail;

use App\Http\Requests;


class PagesController extends Controller
{


    //
    public function index()
    {
        return view('index');
    }



    /**
     * Gets the Currently Logged in User's profile
     * @return View         ProfilePage
     */
    public function getProfile()
    {
        $user = Auth::user();
        $user->load('details');

        return view('pages.profile', compact('user'));

    }

    public function getOtherProfile(Detail $detail, $slug)
    {
        $d = $detail->where('slug', $slug)->first();

        if ($d)
        {
            $user = $d->user;

            if (Auth::user())
            {
                if (Auth::user()->id == $user->id)
                {
                    return redirect('profile');

                }else {

                    $user->load('details');

                    return view('pages.other-profile',compact('user'));

                }

            }else {

                $user->load('details');

                return view('pages.other-profile', compact('user'));

            }

        }else{

            abort(404);
        }



    }



    public function getLogin()
    {
        return view('home-login');
    }

    public function getRegister()
    {
        return view('home-register');
    }

    public function getHowItWorks()
    {
        return view('pages.howitworks');
    }

    public function getSitemap()
    {
        return back();
    }

    public function getFrequentlyAskedQuestions()
    {
        return back();
    }

    public function getFeedback()
    {
        return view('pages.feedback');
    }

    public function getContactUs()
    {
        return view('pages.contact');
    }

    public function getRegion()
    {
        return back();
    }

    public function getTermsAndConditions()
    {
        return view('pages.terms');
    }

    public function getPopularSearches()
    {
        return back();
    }

    public function getPrivacy()
    {
        return view('pages.privacy');
    }

    public function getAppDownload()
    {
        return view('pages.appdownload');
    }



}
