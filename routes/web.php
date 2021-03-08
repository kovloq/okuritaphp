<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('home', [App\Http\Controllers\HomeController::class, 'index']);
// Contact
Route::get('contact',[App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('contact',[App\Http\Controllers\ContactController::class, 'store']);
Route::post('contact/thank',[App\Http\Controllers\ContactController::class, 'thank']);
//MyPage
Route::get('mypage',[App\Http\Controllers\MypageController::class, 'index'])->name('mypage');
Route::get('mypage/order',[App\Http\Controllers\OrderController::class, 'index'])->name('order');
Route::get('mypage/profile',[App\Http\Controllers\ProfileController::class, 'index'])->name('order');