<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// [HomeController::class, 'index']

Route::get('/', [HomeController::class, 'index'])->middleware('auth')->name('home');


Route::view('/login','login/login')->middleware('guest')->name('login');
Route::post('/login',[AuthenticatedSessionController::class, 'store']);



Route::view('/register','login/register')->middleware('guest')->name('register');
Route::post('/register',[RegisteredUserController::class, 'store']);


Route::get('/mensaje', [MensajeController::class, 'show'])->middleware('auth')->name('mensaje');
Route::post('/mensaje', [MensajeController::class, 'send'])->middleware('auth');
Route::get('/mensaje/mi-mensaje', [MensajeController::class, 'showMensaje'])->middleware('auth')->name('mensaje.mostrar');

Route::get('/{any}', function () {
    return redirect('/');
})->where('any', '.*');
