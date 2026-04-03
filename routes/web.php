<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function() {
    return 'Hello World!';
});

Route::get('/contact',[ContactController::class,'index'])->name('contact.index');

Route::post('/contact/confirm',[ContactController::class,'confirm'])->name('contact.confirm');

Route::post('/contact/send',[ContactController::class,'send'])->name('contact.send');

Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');

Route::post('/login',[LoginController::class,'login'])->name('login.submit');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin',function() {return view('admin.index');})->name('admin.index');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/account', [HomeController::class, 'account'])->name('account');

Route::get('/member', [HomeController::class, 'member'])->name('member');

Route::get('/inquiry', [HomeController::class, 'inquiryList'])->name('inquiry.index');
Route::get('/inquiry/{id}', [HomeController::class, 'inquiry'])->name('inquiry');
Route::get('/inquiry/{id}/edit', [HomeController::class, 'inquiry'])->name('inquiry.edit');
Route::put('/inquiry/{id}', [HomeController::class, 'updateInquiry'])->name('inquiry.update');

Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('user.edit');

Route::put('/users/{user}', [UserController::class, 'update'])->name('user.update');

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
// Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');