<?php


namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\User;
use App\Detail;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Response;
use Flashy;
use Config;
use Alert;
use Image;
use Validator;

class UserController extends Controller
{


    /**
     * This registers a new User
     * @param  Request $request This would contain the input
     * @return View         Previous Page
     */
    public function postSignup(Request $request)
    {
        //Validation process
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'Firstname' => 'required|max:30',
            'Lastname' => 'required|max:40',
            'password' => 'required|min:4'
        ]);

        $email = $request->email;
        $name = $request->Firstname . ' ' . $request->Lastname;
        $password = bcrypt($request->password);

        //Creating the user using the Model
        $user = new User();
        $user->email = $email;
        $user->name = $name;
        $user->password = $password;

        $user->save();  //Saving the Created User


        //Creating a details row for the user
        $details = new Detail();
        $details->user_id = $user->id;
        $details->slug = $request->Firstname . '.' . $request->Lastname . '.' . $user->id;

        $details->save();   //Saving the Created Details row

        //Login the user
        Auth::login($user);


        //Alert the user for success
        Alert::success('You are now registered', 'Welldone!! ');


        //Check if there is a url[named route] to redirect to
        if($request->_redirect)
        {
            $rname = $request->_redirect;
            return redirect()->route($rname);   //redirect to that route

        }else
        {
            return redirect()->route('profile');   //If not redirect to profile
        }

    }




    /**
     * This is the Login method
     * @param  Request $request [description]
     * @param  User    $user    [description]
     * @return View           [description]
     */
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            if($request->_redirect)
            {
                $rname = $request->_redirect;
                Flashy::success('You are now logged in');
                return redirect()->route($rname);
            }else
            {
                Flashy::success('You are now logged in');
                return redirect()->route('profile');
            }

        }

        Flashy::error('Oops, Wrong email and password combination');

        return back();

    }




    /**
     * Sets the Currently Logged in user's Avatar
     *
     */
    public function postAvatar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
/*
        if ($validator->passes()) {

            $user = Auth::user();

            try
            {
                if ($request->hasFile('avatar')) {
                    $key = explode("@", $user->email);
                    $avatar = $request->file('avatar');

                    $filename = time() . '_' . $user->name . '_' . $key[0] . '.' . $user->id . '.' . $avatar->getClientOriginalExtension();

                    $img = Image::make($avatar);
                    $img->fit(400);
                    $img->save(public_path('/images/uploads/profile/' . $filename));

                    $user->avatar = $filename;

                    $user->save();

                    $respond = ['link' => public_path('/images/uploads/profile/' . $filename)];

                    return response($respond, 200);
                }

            } catch (\Exception $e)
            {
                return response($e, 422);
            }

        }else
        {
            $errors = $validator->errors()->all();

            return response($errors, 422);
        }
        */
        if ($validator->passes())
        {

            $user = Auth::user();

            if ($request->hasFile('avatar')) {
                $key = explode("@", $user->email);
                $avatar = $request->file('avatar');

                $filename = time() . '_' . $user->name . '_' . $key[0] . '.' . $user->id . '.' . $avatar->getClientOriginalExtension();

                $img = Image::make($avatar);
                $img->fit(400);
                $img->save(public_path('/images/uploads/profile/' . $filename));

                $user->avatar = $filename;
                $user->save();

                Flashy::success('Profile Photo updated');
                return view('pages.profile', compact('user'));
            }

            Alert::error('Failed to update Profile Picture', 'Oops!!');
            return view('pages.profile', compact('user'));
        }else
        {
            $errors = $validator->errors()->all();
            foreach ( $errors as $error) {
                Alert::error($error, 'Oops!!');
            }
            return view('pages.profile', compact('user'));
        }

    }




    /**
     * Logs out the currently Logged in User
     * @return View         HomePage
     */
    public function getLogout()
    {
        Auth::logout();

        Flashy::success('You are now Logged out.');

        return redirect()->route('home');
    }



    public function postDetails(Request $request)
    {
        $this->validate($request, [
            'phone' => 'numeric',
            'age' => 'numeric'
        ]);


        try
        {

            $explodedName = explode(' ', $request->name);

            $firtname = $explodedName[0];

            $lastName = $explodedName[1];

            $user = Auth::user();

            $user->name = $request->name;

            $user->save();

            $details = $user->details;

            $details->slug = $firtname . '.' . $lastName . '.' . $user->id;

            $details->age = $request->age;

            $details->phone = $request->phone;

            $details->address = $request->address;

            $details->facebook = $request->facebook;

            $details->twitter = $request->twitter;

            $details->google = $request->google;

            $details->linkedin = $request->linkedin;

            $details->save();

            $respond = [
                'name'=> $user->name,
                'age' => $details->age,
                'phone' => $details->phone,
                'address' => $details->address,
                'facebook' => $details->facebook,
                'twitter' => $details->twitter,
                'google' => $details->google,
                'linkedin' => $details->linkedin
            ];

            return response($respond, 200);


        }catch (\Exception $e)
        {
            return response($e, 422);
        }
    }



    public function postBio(Request $request)
    {

        try
        {
            $user = Auth::user();
            $detail = $user->details;

            $detail->bio = $request->bio;

            $detail->save();

            $respond = ['bio' => $detail->bio];

            return response($respond, 200);



        }catch(\Exception $e)
        {
            return response($e, 422);
        }

    }



}