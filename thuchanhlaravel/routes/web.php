<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandProductController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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
Route::get('/unactive-category-product/{category_product_id}',[CategoryProductController::class, 'unactive_category_product']);
Route::get('/active-category-product/{category_product_id}',[CategoryProductController::class, 'active_category_product']);
Route::get('/add-brand-product',[BrandProductController::class, 'add_brand_product']);
Route::get('/all-brand-product',[BrandProductController::class, 'all_brand_product']);
Route::post('/save-brand-product',[BrandProductController::class, 'save_brand_product']);
Route::get('/unactive-brand-product/{brand_product_id}',[BrandProductController::class, 'unactive_brand_product']);
Route::get('/active-brand-product/{brand_product_id}',[BrandProductController::class, 'active_brand_product']);
Route::get('/edit-brand-product/{brand_product_id}',[BrandProductController::class, 'edit_brand_product']);
Route::post('/update-brand-product/{brand_product_id}',[BrandProductController::class, 'update_brand_product']);
Route::get('/delete-brand-product/{brand_product_id}',[BrandProductController::class, 'delete_brand_product']);
Route::get('/add-product',[ProductController::class, 'add_product']);
Route::post('/save-product',[ProductController::class, 'save_product']);
Route::get('/all-product', [ProductController::class, 'all_product']);
Route::get('/unactive-product/{product_id}',[ProductController::class, 'unactive_product']);
Route::get('/active-product/{product_id}',[ProductController::class, 'active_product']);
Route::get('/edit-product/{product_id}',[ProductController::class, 'edit_product']);
Route::post('/update-product/{product_id}',[ProductController::class, 'update_product']);
Route::get('/delete-product/{product_id}', [ProductController::class, 'delete_product']);
Route::get('/danh-muc-san-pham/{slug_category_product}',[ProductController::class, 'show_category_home']);
Route::get('/thuong-hieu-san-pham/{brand_slug}',[ProductController::class, 'show_brand_home']);
Route::get('/chi-tiet-san-pham/{product_slug}',[ProductController::class, 'details_product']);

