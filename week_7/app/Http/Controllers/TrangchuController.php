<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Slide;
use App\Models\TypeProduct;
use Illuminate\Http\Request;

class TrangchuController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();
        $new_product = Product::where("new", "1")->paginate(4);
        $promotion_product = Product::where("promotion_price", ">", 0)->paginate(8);
    
        return view("page.trangchu", compact("slide", "new_product", "promotion_product"));
    }
    
}