<?php			
			
namespace App\Http\Controllers;			
			
use Illuminate\Http\Request;			
			
class ShopController extends Controller			
{			
    public function getIndex(){			
    	return view('shop.homeshop');		
    }	
    
    				
    public function getLoaiSp(){				
    	return view('shop.loai_sanphamshop');			
    }		
    
    public function getChitiet(){				
	    return view('shop.chitiet_sanphamshop');				
	    }				

        		
   public function getLienhe(){		
    return view('shop.lienheshop');		
    }		

    		
  public function getAbout(){		
    return view('shop.aboutshop');		
    }		

		


}				

			
