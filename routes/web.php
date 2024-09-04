<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;

// Route::get('/hello', [WelcomeController::class,'hello']);

// Route::get('/index', [HomeController::class,'index']);

// Route::get('/about', [AboutController::class,'about']);

//Route::get('/articles/{id}', [ArticlesController::class,'articles']);

//Route::resource('Photos', PhotoController::class);

//Route::resource('photos', PhotoController::class)->only(['index', 'show']);

// Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);
   

// Route::get('/world', function () {
//     return 'World';
// });

// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya '.$name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });

// Route::get('/user/{name?}', function ($name='John') {
//     return 'Nama saya '.$name;
// });

// Route::get('/greeting', function (){
//     return view('blog.hello', ['name' => 'Triaji Ibnu']);
// });

Route::get('/greeting', [WelcomeController::class, 'greeting']);

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/category/food-beverage', [ProductController::class, 'foodBeverage'])->name('product.food-beverage');
    Route::get('/category/beauty-health', [ProductController::class, 'beautyHealth'])->name('product.beauty-health');
    Route::get('/category/home-care', [ProductController::class, 'homeCare'])->name('product.home-care');
    Route::get('/category/baby-kid', [ProductController::class, 'babyKid'])->name('product.baby-kid');
});