<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Slide;
use App\Models\TypeProduct;
use Illuminate\Http\Request;

class PageController extends Controller
{
    

    public function getLoaiSP($type)
    {
        $sp_theoloai = Product::where("id_type",$type)->get();
        $type_product = TypeProduct::all();
        $sp_khac = Product::where("id_type",'<>',$type)->paginate(3);
        return view('page.loai_sanpham', compact('sp_theoloai','type_product','sp_khac'));

    }
}