<?php

namespace App\Http\Controllers;

use App\Mailer;

use App\Mail\ContactMail;

use App\Mail\FeedbackMail;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Controller;

use Flashy;





class MailController extends Controller
{

    public function postContactUs(Request $request){

        // Validation
        $this->validate($request, [
            'msg' => 'required|max:1200',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $mail = new Mailer();
        $mail->name = $request->name;
        $mail->email = $request->email;
        $mail->phone = $request->phone;
        $mail->message = $request->msg;
        $mail->contact = true;
        $mail->feedback = false;

        $mail->save();

        Mail::to('contact@monumenta.biz')->send(new ContactMail($mail));
        Flashy::success("Mail sent successfully");
        return redirect()->back();


    }

    public function postFeedback(Request $request){

        // Validation
        $this->validate($request, [
            'msg' => 'required|max:1200',
            'FirstName' => 'required',
            'LastName' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $name = $request->FirstName + ' ' + $request->LastName;

        $mail = new Mailer();
        $mail->name = $name;
        $mail->email = $request->email;
        $mail->phone = $request->phone;
        $mail->message = $request->msg;
        $mail->contact = false;
        $mail->feedback = true;

        $mail->save();

        Mail::to('contact@monumenta.biz')->send(new FeedbackMail($mail));
        Flashy::success("Mail sent successfully");
        return redirect()->back();

    }
}
