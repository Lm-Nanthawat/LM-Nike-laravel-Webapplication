<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/register/step1', [RegisterController::class, 'showStep1'])->name('registers.step1');
Route::post('/register/step1', [RegisterController::class, 'postStep1'])->name('registers.postStep1');
Route::get('/register/step2', [RegisterController::class, 'showStep2'])->name('registers.step2');
Route::post('/register/step2', [RegisterController::class, 'postStep2'])->name('registers.postStep2');

Route::get('/login/step1', [LoginController::class, 'showLogin'])->name('logins.step1');
Route::post('/login/step1', [LoginController::class, 'postLogin'])->name('logins.postStep1');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');


Route::get('/cart', [CartController::class, 'showCart'])->name('pages.cart');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::get('/Men', function () {
    return view('pages.men');
});

Route::get('/Men/Shoes', function () {
    return view('pages.subpages.men_shoes');
});


Route::get('/Women', function () {
    return view('pages.women');
});