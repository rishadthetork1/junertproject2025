<?php

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/design1', function () {
    return view('design1');
});
Route::get('/design2', function () {
    return view('design2');
});
Route::get('/design3', function () {
    return view('design3');
});

Route::get('/send-test', function () {
    Mail::to('rishadrandom@gmail.com')->send(new TestMail());  
    return 'Email sent!';
});