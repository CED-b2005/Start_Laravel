<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EshopperController extends Controller
{
    public function getEshopperIndex(){
        return view('eshopper.EshopperHomepage');
    }
    public function getEshopperLogin(){
        return view('eshopper.EshopperLogin');
    }
    public function getEshopperDetail(){
        return view('eShopper.EshopperProductdetail');
    }
    public function getEshopperShop(){
        return view('eshopper.EshopperShop');
    }
    public function getEshopperBlog(){
        return view('eshopper.EshopperBlog') ;
       }
    public function getEshopper404(){
        return view('eshopper.Eshopper404') ;
    }  
    public function getEshopperContact(){
        return view('eshopper.EshopperContact') ;
       }  
       public function getEshopperBlogSingle(){
        return view('eshopper.EshopperBlogSingle') ;
       }  
       public function getEshopperCart(){
        return view('eshopper.EshopperCart') ;
       }  
}
