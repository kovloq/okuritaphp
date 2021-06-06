<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\BrandController;
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
Route::get('contact/thank',[App\Http\Controllers\ContactController::class, 'thank']);

Route::middleware(["auth"])->group(function () {
	//MyPage
	Route::get('mypage',[App\Http\Controllers\MypageController::class, 'index'])->name('mypage');
	Route::get('mypage/order',[App\Http\Controllers\OrderController::class, 'index'])->name('order');
	//Profile
	Route::get('mypage/profile',[App\Http\Controllers\ProfileController::class, 'index']);
	Route::get('mypage/email',[App\Http\Controllers\ProfileController::class, 'email']);
	Route::get('mypage/password',[App\Http\Controllers\ProfileController::class, 'password']);
	Route::get('mypage/email/{id}',[App\Http\Controllers\ProfileController::class, 'post_email']);
	Route::get('mypage/password/{id}',[App\Http\Controllers\ProfileController::class, 'post_password']);
	Route::put('mypage/profile/{id}',[App\Http\Controllers\ProfileController::class, 'update']);
});


// Help
Route::get('help/about',[App\Http\Controllers\HelpController::class, 'about'])->name('about');
Route::get('help/privacy-policy',[App\Http\Controllers\HelpController::class, 'policy'])->name('policy');
Route::get('help/corporate-profile',[App\Http\Controllers\HelpController::class, 'corporate'])->name('corporate');
Route::get('help/terms-of-service',[App\Http\Controllers\HelpController::class, 'terms'])->name('terms');
Route::get('help/usage-fee',[App\Http\Controllers\HelpController::class, 'fee'])->name('fee');
Route::get('help/shipping-method',[App\Http\Controllers\HelpController::class, 'shipping'])->name('shipping');
Route::get('help/payment-method',[App\Http\Controllers\HelpController::class, 'payment'])->name('payment');
// Product
Route::get('product',[App\Http\Controllers\ProductController::class, 'index'])->name('product');
Route::get('product/detail',[App\Http\Controllers\ProductController::class, 'detail'])->name('product_detail');
Route::get('faq',[App\Http\Controllers\FaqController::class, 'index'])->name('faq');
// Admin
Route::middleware(["auth:admin"])->prefix('admin')->group(function () {
	Route::get('/',[App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('admin');
	Route::resource('brand',App\Http\Controllers\Admin\BrandController::class);
	Route::resource('category',App\Http\Controllers\Admin\CategoryController::class);
	Route::resource('product',App\Http\Controllers\Admin\ProductController::class);
	Route::resource('order',App\Http\Controllers\Admin\OrderController::class);
	Route::resource('shipping',App\Http\Controllers\Admin\ShippingController::class);
	Route::resource('shipping.fee',App\Http\Controllers\Admin\ShippingFeeController::class);
	Route::resource('user',App\Http\Controllers\Admin\UserController::class);
	// Route::get("order"[])
});
// Admin auth Login
Route::prefix('admin')->namespace('Admin')->group(function () {
	Route::get('login',[App\Http\Controllers\Admin\AuthController::class, 'showLoginForm'])->name("admin_login");
    Route::post('login',[App\Http\Controllers\Admin\AuthController::class, 'login']);
    Route::post('logout',[App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('admin.logout');
});
//
// Lazismu
Route::get('lazismu',[App\Http\Controllers\LazismuController::class, 'index'])->name("lazismu");
Route::post('pdf',[App\Http\Controllers\LazismuController::class, 'pdf'])->name("lazismu_pdf");