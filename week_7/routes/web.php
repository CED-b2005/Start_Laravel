<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/trangchu', function () {
    return view('page.trangchu');
});
Route::get('/pagetrangchu', [PageController::class, 'getIndex']);
Route::get('/type/{id}', [PageController::class, 'getType']);
Route::get('/detail/{id}',[PageController::class,'getDetail']);
Route::get('/admin',[PageController::class, 'getIndexAdmin']);
Route::post('/admin-delete/{id}', [PageController::class, 'postAdminDelete']);
Route::get('/admin-edit-form/{id}', [PageController::class, 'getAdminEdit']);
Route::post('/admin-edit',[PageController::class,'postAdminEdit']);
Route::get('/admin-add-form', [PageController::class, 'getAdminAdd'])->name('add-product');
Route::post('/admin-add-form', [PageController::class,'PostAdminAdd']);
Route::get('/About', [PageController::class, 'getAbout']);
Route::get('/Contact', [PageController::class, 'getContact']);