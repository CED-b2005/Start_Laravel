<?php

use App\Http\Controllers\SumController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\CovidController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TaoController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\TrangchuController;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome'); // Trỏ đến file Blade 'welcome.blade.php'
});

Route::get('/',function(){
    return view('signup');
});

Route::post('/calculate', function (Request $request) {
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $result = $num1 + $num2; // Thực hiện phép toán cộng

    return view('welcome', compact('num1', 'num2', 'result'));
})->name('calculate');

Route::get('/welcom', function(){
    return 'Chào mừng các bạn đến với PNV';
});
Route::get('/users', [PostController::class, 'index']);
Route::resource('posts', PostController::class);
Route::get('/signup', [SignupController::class, 'index'])->name('signup.index');
Route::post('/signup', [SignupController::class, 'displayInfor'])->name('signup.store');
Route::get('/covid', [CovidController::class, 'getData']);
// Route::resource('/product', ProductController::class);	

Route::get('/products', [ProductController::class, 'index'])->name('products.index');				
Route::get('/create', [ProductController::class, 'create'])->name('products.create'); 
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/show', [ShowController::class, 'shows'])->name('products.showss');				
Route::get('trang', [PageController::class, 'getIndex'])->name('trangchu');
Route::get('sanpham', [PageController::class, 'getLoaiSp'])->name('loaisanpham');
Route::get('chitiet', [PageController::class, 'getChitiet'])->name('chitietsanpham');
Route::get('lienhe', [PageController::class, 'getLienhe'])->name('lienhe');
Route::get('gioithieu', [PageController::class, 'getAbout'])->name('about');

Route::get('home', [ShopController::class, 'gethome'])->name('home');

Route::get('/database', function () {
    if (!Schema::hasTable('products')) {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // ID tự động tăng
            $table->string('name'); // Tên sản phẩm
            $table->decimal('price', 10, 2); // Giá sản phẩm
            $table->string('image'); // Đường dẫn ảnh
            $table->timestamps(); // created_at & updated_at
        });

        return "Bảng 'products' đã được tạo!";
    } else {
        return "Bảng 'products' đã tồn tại!";
    }
});

Route::get('/controller', [TaoController::class , 'createProductsTable']);

Route::get('homeshop', [ShopController::class, 'getIndex'])->name('trangchu');
Route::get('sanphamshop', [ShopController::class, 'getLoaiSp'])->name('loaisanpham');
Route::get('chitietshop', [ShopController::class, 'getChitiet'])->name('chitietsanpham');
Route::get('lienheshop', [ShopController::class, 'getLienhe'])->name('lienhe');
Route::get('gioithieushop', [ShopController::class, 'getAbout'])->name('about');

Route::get('/create-tables', [TableController::class, 'createTables']);
Route::get('/trangchu', [TrangchuController::class, 'getIndex']);
Route::get('/type/{id}', [TrangchuController::class, 'getLoaiSp']);	

// Cake Shop
Route::get('/loai-san-pham/{type}', [PageController::class, 'getLoaiSP']);
Route::get('/trangchu', [TrangchuController::class,'getIndex']);
Route::get('/type/{id}', [PageController::class, 'getLoaiSp']);