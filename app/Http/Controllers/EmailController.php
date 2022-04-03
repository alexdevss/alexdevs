<?php

namespace App\Http\Controllers;

use App\Mail\NotifyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    function sendEmail (Request $request) {
        
        $formData = array(
            'name' => $request->name,
            'last_names' => $request->last_names,
            'mail'=> $request->email,
            'description'=> $request->description,
            'phone' => $request->phone
        );

        if(check_empty_request($formData) === false){
            $ip = $request->ip();
            Config::set('constants.badIps', $ip);
            Mail::to(env('MAIL_MY_EMAIL'))->send(new NotifyMail(Config::get('constants.mail.subject.to_me_spy'), $formData, Config::get('constants.mail.view.to_me_spy'), $ip));
            return redirect('/awfulMessage');
        }

        Mail::to($formData['mail'])->send(new NotifyMail(Config::get('constants.mail.subject.to_client'), $formData, Config::get('constants.mail.view.to_client')));
        Log::debug("MAIL TO CLIENT");
        Log::debug(Mail::failures());
        if(Mail::failures()){
            return redirect()->route('/contact', false);
        } else {
            Mail::to(env('MAIL_MY_EMAIL'))->send(new NotifyMail(Config::get('constants.mail.subject.to_me'), $formData, Config::get('constants.mail.view.to_me')));
            Log::debug("MAIL TO ME");
            Log::debug(Mail::failures());
            return redirect()->route('/contact', Mail::failures() ? false : true);
        }
     
    }
}
