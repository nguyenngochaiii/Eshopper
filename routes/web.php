<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogSingleController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('products', ProductController::class);
Route::resource('cart', CartController::class);
Route::resource('checkout',CheckoutController::class);
Route::resource('error',ErrorController::class);
Route::resource('blog',BlogController::class);
Route::resource('contact-us',ContactController::class);
Route::resource('login',LoginController::class);
Route::resource('blog-single',BlogSingleController::class);



Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/',[AdminController::class, 'index'])->name('index');
    Route::get('/products/create',[AdminProductController::class, 'create'])->name('products.create');
    Route::get('/products/index',[AdminProductController::class, 'index'])->name('products.index');
    Route::post('/products/',[AdminProductController::class, 'store'])->name('products.store');
    Route::get('/products/{product}/edit',[AdminProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}/',[AdminProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}/',[AdminProductController::class, 'destroy'])->name('products.destroy');
});