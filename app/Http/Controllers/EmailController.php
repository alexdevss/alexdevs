<?php

namespace App\Http\Controllers;

use App\Mail\NotifyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class EmailController extends Controller
{
    function sendEmail (Request $request) {
        Log::debug("AQUI");
        Log::debug($request->_token);
        $formData = array(
            'name' => $request->name,
            'last_names' => $request->last_names,
            'mail'=> $request->email,
            'message'=> $request->description,
            'phone' => $request->phone
        );
        Mail::to($formData['mail'])->send(new NotifyMail($formData));
     
        if (Mail::failures()) {
            $response['success'] = false;
            $response['message'] = 'Ha ocurrido un error';
            return $response;
        }else{
            $response['success'] = true;
            $response['message'] = 'Mensaje enviado correctamente';
             return $response;
        }
    }
}
