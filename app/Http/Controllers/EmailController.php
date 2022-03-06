<?php

namespace App\Http\Controllers;

use App\Mail\NotifyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

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
            Log::debug(Config::get('constants.badIps'));
            Mail::to(env('MAIL_MY_EMAIL'))->send(new NotifyMail(Config::get('constants.mail.subject.to_me_spy'), $formData, Config::get('constants.mail.view.to_me_spy'), $ip));
            return redirect('/awfulMessage');
        }
        Mail::to($formData['mail'])->send(new NotifyMail(Config::get('constants.mail.subject.to_client'), $formData, Config::get('constants.mail.view.to_client')));
        Mail::to(env('MAIL_MY_EMAIL'))->send(new NotifyMail(Config::get('constants.mail.subject.to_me'), $formData, Config::get('constants.mail.view.to_me')));
     
        if (Mail::failures()) {
            return redirect()->route('/contact', false);
        }else{
            return redirect()->route('/contact', true);
        }
    }
}
