<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WishlistController;

Route::get('/product', [PageController::class, 'getIndex']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/lienhe', [PageController::class, 'getContact'])->name('lienhe');
Route::get('/about', [PageController::class, 'getAbout'])->name('about');
Route::get('/themgiohang/{id}', [CartController::class, 'addToCart'])->name('themgiohang');
Route::get('/loai-san-pham/{id}', [PageController::class, 'getLoaiSp'])->name('loaisanpham');
Route::get('/trang-chu', [PageController::class, 'getIndex'])->name('trang-chu');
Route::get('/type/{id}', [PageController::class, 'getLoaiSp'])->name('loaisanpham');
Route::get('/detail/{id}', [PageController::class, 'getDetail'])->name('detail');
Route::post('/comment/{id}', [PageController::class, 'postComment'])->name('post.comment');
//Admin
Route::get('/admin', [PageController::class, 'getIndexAdmin'])->name('admin.index');

Route::get('/admin-add-form', [PageController::class, 'getAdminAdd'])->name('add-product');
Route::post('/admin-add-form', [PageController::class, 'postAdminAdd']);

Route::get('/admin-edit-form/{id}', [PageController::class, 'getAdminEdit'])->name('admin-edit');
Route::post('/admin-edit-form/{id}', [PageController::class, 'postAdminEdit']);
Route::delete('/admin-delete/{id}', [PageController::class, 'postAdminDelete'])->name('admin-delete');

Route::get('/admin-export', [PageController::class, 'exportAdminProduct'])->name('export');

// Route::get('/return-vnpay', function () {
//     return view('vnpay.return-vnpay');
// });


Route::get('/search', [PageController::class, 'search'])->name('search');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/profile', [AuthController::class, 'showProfile'])->name('profile');

Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
Route::get('/wishlist/add/{id}', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
Route::get('/wishlist/remove/{id}', [WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');
