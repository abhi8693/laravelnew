<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\collectionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductdetailController;
use App\Http\Controllers\SellingController;
use App\Http\Controllers\subcategoryController;
use App\Http\Controllers\sliderController;
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
Route::post('getCategories',[categoryController::class,'getSubcategory'])->name('getCategories');

 Route::prefix('admin')->middleware(['auth', 'isadmin'])->group(function () {
     

Route::get('/', function () {
    return view('backend.welcome');
});
Route::resource('sliders', sliderController::class);
Route::resource('categories', categoryController::class);
Route::resource('subcategories', subcategoryController::class);
Route::resource('collections', collectionController::class);
Route::resource('selling_products', SellingController::class);
Route::resource('banners', BannerController::class);
Route::resource('productdetailes', ProductdetailController::class);
Route::resource('blogs', BlogController::class);
Route::resource('comments', CommentController::class);
Route::get('/category/delete/{id}', [categoryController::class, 'destroy'])->name('categories.delete');
Route::get('/category/delete/{id}', [subcategoryController::class, 'destroy'])->name('subcategories.delete');
Route::get('/product/delete/{id}', [SellingController::class, 'destroy'])->name('products.delete');

Route::get('/restore',[SellingController::class, 'restore']);
});

Auth::routes();
// forntend 
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product/{slug}', [HomeController::class, 'product'])->name('product.detail');
Route::get('/products/{slug}', [HomeController::class, 'products'])->name('product.view');
Route::get('/subcategory/{slug}', [HomeController::class, 'productss'])->name('subcategory.view');

Route::get('/category/{slug}', [HomeController::class, 'category'])->name('category');
Route::get('/blog', [HomeController::class, 'blog'])->name('blogs');
Route::get('/comment', [HomeController::class,'comment'])->name('comments');
Route::get('search', [HomeController::class,'search'])->name('search');
Route::get('add-to-cart/{id}', [HomeController::class,'addToCart'])->name('add_to_cart');
Route::get('cart', [HomeController::class,'cart'])->name('cart');








 

