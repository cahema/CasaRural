<?php

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\NewsletterController;
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
    return redirect('index');
});

Route::get('/index', function () {
   return view('index');
});

Route::get('/facebook', function() {
    return view('facebook');
});

Route::get('/galeria', function() {
    return view('galeria');
});

Route::get('/contacto', function() {
    return view('contacto');
});
Route::get('/login', function() {
    return view('login');
});

Route::get('/config', function() {
    return view('config');
});
Route::post('/enviarNewsletter', [NewsletterController::class, 'send']);

Route::get('/test', function () {
   return view('Test');
});
