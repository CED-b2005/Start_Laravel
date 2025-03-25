<?php

use App\Http\Controllers\CreateTableController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\DatabaseSetupController;
use App\Http\Controllers\ShoppeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

// Route::controller(ProductController::class)
//     ->name('products.')
//     ->prefix('products')
//     ->group(function () {
//         // Danh sách sản phẩm
//         Route::get('/', 'index')->name('index');
//         // Hiển thị form thêm sản phẩm
//         Route::get('/create', 'create')->name('create');
//         // Xử lý lưu sản phẩm mới
//         Route::post('/store', 'store')->name('store');
//         // Hiển thị form chỉnh sửa sản phẩm
//         Route::get('/{id}/edit', 'edit')->name('edit');
//         // Cập nhật sản phẩm
//         Route::put('/{id}', 'update')->name('update');
//         // Xóa sản phẩm
//         Route::delete('/{id}', 'destroy')->name('destroy');
//     });

// Route::get('/productss', [ShowController::class, 'index'])->name('productss.index');

// Route::get('index', [PageController::class, 'index'])->name('trang-chu');
// Route::get('loai_sanpham', [PageController::class, 'getLoaiSp'])->name('loai_sanpham');
// Route::get('chitiet_sanpham', [PageController::class, 'getChitietSp'])->name('chitiet_sanpham');
// Route::get('lienhe_sanpham', [PageController::class, 'getLienheSp'])->name('lienhe_sanpham');
// Route::get('about', [PageController::class, 'getAbout'])->name('about');
// Route::get('content', [PageController::class, 'getContent'])->name('content');

// Route::get('/Shopee',[ShopController::class, 'index']);

// Route::get('database', function () {
//     Schema::create('loaisanpham2', function ($table) {
//         $table->increments('id');
//         $table->string('name', 200);
//         $table->decimal('price', 10 , 2);
//         $table->string('image');
//         $table->timestamps();
//     });
//     echo "finished to create table";
// });


Route::get('/', function () {
    return view('welcome');
});

Route::get('/master',[ShoppeController::class,'master']);
Route::get('/cart',[ShoppeController::class,'cart']);
Route::get('/checkout',[ShoppeController::class,'checkout']);
Route::get('/shop',[ShoppeController::class,'shop']);
Route::get('/product_details',[ShoppeController::class,'product_details']);
Route::get('/contact_us',[ShoppeController::class,'contact_us']);
Route::get('/blog',[ShoppeController::class,'blog']);
Route::get('/blog_singe',[ShoppeController::class,'blog_singe']);
Route::get('/login',[ShoppeController::class,'login']);
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
Route::get('/laravel_db', [DatabaseController::class, 'createTables']);

