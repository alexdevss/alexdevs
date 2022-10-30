<?php

namespace App\Http\Controllers;

use App\Mail\NotifyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class CaptchaController extends Controller
{
    function verify(Request $request){
        $form_data = request_to_array($request);
        if(empty_request($form_data)){
            Log::debug('ERROR');
        }

        $url = Config::get('captcha.verify_url') . "?secret=" . env('RECAPTCHA_SECRET_KEY') . "&response=" . $request['token'];
        
        Log::debug("-------------------------- URL CAPTCHA -----------------------------");
        Log::debug($url);
        $response = Http::withHeaders('Access-Control-Allow-Origin', '*')->post($url);
        Log::debug("-------------------------- RESPONSE CAPTCHA -----------------------------");
        Log::debug($response);
        return json_encode(['success' => true, 'response' => $response]);

    }
}
