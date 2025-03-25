<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\SumController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\CovidController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
});

Route::get('onlyRoute', function () {
    echo 'Hello PNV';
});

Route::get('routeWithController', [MyController::class, 'hello']);

Route::get('routeWithController', [MyController::class, 'helloWithView']);

Route::get('test', [MyController::class, 'index']);

//form controller

Route::get('showForm', [SumController::class, 'showForm']);

Route::post('sum', [SumController::class, 'sum']);

//
Route::get('index', [PostController::class, 'index']);

Route::get('create', [PostController::class, 'create']);

//Route group
Route::prefix('test')->group(function () {
    Route::get('route1', function () {
        echo "Test route 1";
    });

    Route::get('route2', function () {
        echo "Test route 2";
    });
});

// singUp
Route::get('signUpForm', [SignUpController::class, 'index']);
Route::post('signUpForm', [SignUpController::class, 'displayInfor']);

// Covid
Route::get('/covid', [CovidController::class, 'getData']);

//shopper
Route::get('home', [PageController::class, 'getIndex'])->name('home');
Route::get('blog', [PageController::class, 'getBlog'])->name('blog');
Route::get('blog-single', [PageController::class, 'getBlogSingle'])->name('blogSingle');
Route::get('products-list', [PageController::class, 'getProducts'])->name('products');
Route::get('product-detail', [PageController::class, 'getDetail'])->name('productDetail');
Route::get('404', [PageController::class, 'get404'])->name('404');
Route::get('cart', [PageController::class, 'getCart'])->name('cart');
Route::get('checkout', [PageController::class, 'getCheckout'])->name('checkout');
Route::get('login', [PageController::class, 'getLogin'])->name('login');
Route::get('contact-us', [PageController::class, 'getContactUs'])->name('contact-us');