<?php

use App\Http\Controllers\Tong_Controller;
use App\Http\Controllers\Hello_Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NhapSV_Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ViewErrorBag;

Route::get('/', function () {
    return view('welcome');
});

Route::GET('/formtong', [Tong_Controller::class,'show_form']) -> name('formtinhtong');
Route::POST('/formtong', [Tong_Controller::class, 'handleCalculator']);

Route::GET('/hello', function(){
    return 'Hello PNV';
});

Route::GET('/khongcoView', [Hello_Controller::class, 'show_hello']);
Route::GET('/coView', [Hello_Controller::class, 'show_hello_view']);
Route::GET('/cobien', [Hello_Controller::class, 'show_hello_cobien']);
Route::GET('/nhieubien', [Hello_Controller::class, 'show']);

Route::GET('/show_form', [Tong_Controller::class, 'show_frm']);

Route::group(['prefix' => 'tutorial'], function()
{
    Route::get('/aws', function() {
        echo "aws tutorial";
    });
    Route::get('/jira', function() {
        echo "jira tutorial";
    });
    Route::get('/testing', function() {
        echo "testing tutorial";
    });
}
);

Route::resource('posts', PostController::class);

Route::get('/nhapSV', [NhapSV_Controller::class, 'show_form']);
Route::post('/nhapSV', [NhapSV_Controller::class, 'handleAddStudent'])->name('handleAddStudent');