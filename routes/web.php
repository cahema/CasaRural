<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\UserController;
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
Route::post('/contacto',
    [BookingController::class, 'store']
);

Route::get('/login',
    [LoginController::class, 'index']
)->name('login');
Route::post('/login',
    [LoginController::class, 'authenticate']
);
Route::get('/logout',
    [LoginController::class, 'logout']
)->middleware('auth');

Route::get('/config',
    [ConfigController::class, 'index']
)->middleware('auth');
Route::post('/guardarConfiguracion',
    [ConfigController::class, 'update']
)->middleware('auth');
Route::post('/enviarNewsletter',
    [NewsletterController::class, 'send']
)->middleware('auth');
Route::post('/modificarEmail',
    [UserController::class, 'update']
)->middleware('auth');
Route::post('/borrarEmail',
    [UserController::class, 'destroy']
)->middleware('auth');
Route::post('/nuevoUsuario',
    [UserController::class, 'store']
)->middleware('auth');

Route::get('/test', function () {
   return view('Test');
})->middleware('auth');
