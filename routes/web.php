<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\RoleController;
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

Route::get('/login', function() {
    return view('login');
});

Route::get('/config',
    [ConfigController::class, 'index']
);
Route::post('/guardarConfiguracion',
    [ConfigController::class, 'update']
);
Route::post('/enviarNewsletter',
    [NewsletterController::class, 'send']
);
Route::post('/modificarEmail',
    [UserController::class, 'update']
);

Route::get('/test', function () {
   return view('Test');
});

Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'bookings' => BookingController::class,
    'configs' => ConfigController::class,
]);
