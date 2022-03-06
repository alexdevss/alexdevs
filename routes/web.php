<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
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
Route::middleware('cache.headers:public;max_age=31536000;etag')->group(function () {
    Route::get('/', function () {return view('welcome');});
    Route::get('/services', function () {return view('services');});
    Route::get('/projects', function () {return view('projects');});
    Route::get('/about', function () {return view('about');});
    Route::get('/contact/{sended?}', function ($sended = false) {return view('contact')->with('sended', $sended);})->name('/contact');
    Route::get('/awfulMessage', function () {return view('awful_message');})->name('/awful_message');
    Route::get('/legality', function () {return view('legality');});
    Route::get('/privacity', function () {return view('privacity');});
    Route::get('/cookies', function () {return view('cookies')->with('cookies', Config::get('constants.cookies'));});
    
    // Mail routes
    Route::post('/sendEmail', [EmailController::class, 'sendEmail']);
});