<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class, 'index']);
Route::get('/trang-chu',[HomeController::class, 'index']);
Route::get('/product', function() {
    return view('pages.product');
});
Route::get('/contact', function() {
    return view('pages.contact');
});
Route::get('/news', function() {
    return view('pages.news');
});

Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin-dashboard',[AdminController::class, 'dashboard']);
Route::get('/logout',[AdminController::class, 'logout']);
Route::get('/add-category-product', [CategoryProductController::class, 'add_category_product']);
Route::get('/all-category-product', [CategoryProductController::class, 'all_category_product']);
Route::post('/save-category-product',[CategoryProductController::class, 'save_category_product']);
