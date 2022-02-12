<?php

namespace App\Http\Controllers;

use App\Mail\NotifyMail;
use Illuminate\Http\Request;
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
        if(empty($formData['name'])){
            return redirect('/awfulMessage');
        }
        Mail::to($formData['mail'])->send(new NotifyMail($formData));
     
        if (Mail::failures()) {
            return redirect()->route('/contact', false);
        }else{
            return redirect()->route('/contact', true);
        }
    }
}
