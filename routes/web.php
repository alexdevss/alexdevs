<?php

use App\Mail\ContactMailable;
use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/sendEmail', function (HttpRequest $request) {
    $data = array(
        'name' => $request->name,
        'last_names' => $request->last_name,
        'mail'=> $request->email,
        'message'=> $request->description,
        'phone' => $request->phone
    );
    Mail::to('hola@alexdevs.es')->send(new ContactMailable);

    return "Mensaje enviado";
});
