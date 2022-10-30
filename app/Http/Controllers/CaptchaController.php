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
            return json_encode(['success' => false]);
        }

        $url = Config::get('constants.captcha_url') . "?secret=" . env('RECAPTCHA_SECRET_KEY') . "&response=" . $request['token'];
        $response = json_decode(Http::post($url), true);
        Log::debug('---------------------------------------- RESPONSE -------------------------------------------');
        Log::debug($response);
        Log::debug($response['success']);
        if($response['success'] == "0"){
            return json_encode(['success' => false]);
        }

        return json_encode(['success' => false]);

    }
}
