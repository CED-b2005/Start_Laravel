<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\BillDetail;
use App\Models\Comment;




class PageController extends Controller
{

    public function getProduct($type){
        $sanpham = Product::with('comments')->findOrFail($type); 
        $countPd = Product::count();
        $products = Product::where('new', 1)->take(4)->get();
        $bestSeller = Product::bestSellers();

        $splienquan = Product::where('id_type', '<>', $type)->paginate(3);
        if (!$sanpham) {
            abort(404);
        }
    
        return view('page.sanpham', compact('sanpham','countPd','splienquan','products','bestSeller'));
    }
    
    public function getTypeProduct(){
        $products = Product::take(10) -> get();
        $countPd = Product::count();
        return view('page.loaisanpham', compact('products','countPd'));
    }
    public function getSlide(){
        $slide = Slide::all();
        $products = Product::take(12) -> get();
        return view('page.trangchu', compact('slide','products'));
    }

    public function getAbout(){
        return view('page.about');
    }
    public function getContact(){
        return view('page.lienhe');
    }

    public function show($id) {
        $product = Product::findOrFail($id);
        $comments = Comment::where('id_product', $id)->get();
    
        return view('page.sanpham', compact('product', 'comments'));
    }
    
    
    
    public function getLoaiSp($type)
    {
        $sp_theoloai = Product::where('id_type', $type)->get();
        $countPd = Product::count();

        $type_product = ProductType::all();
        
        $sp_khac = Product::where('id_type', '<>', $type)->paginate(3);

        return view('page.loaisanpham', compact('sp_theoloai', 'type_product', 'sp_khac','countPd'));
    }

    public function getAdminAdd()
    {
        return view('pageadmin.formAdd');
    }

    // Xử lý thêm sản phẩm
    public function postAdminAdd(Request $request)
    {
        $request->validate([
            'inputName' => 'required|string|max:255',
            'inputPrice' => 'required|numeric|min:10000',
            'inputPromotionPrice' => 'nullable|numeric|min:10000',
            'inputUnit' => 'required|string|max:50',
            'inputNew' => 'required|integer|min:0|max:1',
            'inputType' => 'required|string',
            'inputImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'inputDescription' => 'nullable|string',
        ]);
    
        // Lưu ảnh
        if ($request->hasFile('inputImage')) {
            $image = $request->file('inputImage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        } else {
            $imageName = null;
        }
    
        // Thêm sản phẩm vào database
        Product::create([
            'name' => $request->inputName,
            'unit_price' => $request->inputPrice,
            'promotion_price' => $request->inputPromotionPrice ?? 0,
            'unit' => $request->inputUnit,
            'new' => $request->inputNew,
            'id_type' => $request->inputType,
            'image' => $imageName,
            'description' => $request->inputDescription,
        ]);
    
        return redirect()->route('admin.index')->with('success', 'Thêm sản phẩm thành công');
    }
    
    public function postAdminDelete($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
        }
        return $this->getIndexAdmin();
    }

    // Hiển thị form chỉnh sửa sản phẩm
    public function getAdminEdit($id)
    {
        $product = Product::find($id);
        return view('pageadmin.formEdit')->with('product', $product);
    }

    // Xử lý cập nhật sản phẩm
    public function postAdminEdit(Request $request)
    {
        $id = $request->editId;
        $product = Product::find($id);
    
        if (!$product) {
            return redirect()->back()->with('error', 'Không tìm thấy sản phẩm');
        }
    
        // Cập nhật thông tin sản phẩm
        Product::create([
            'name' => $request->editName,
            'unit_price' => $request->editPrice,
            'promotion_price' => $request->editPromotionPrice ?? 0,
            'unit' => $request->editUnit,
            'new' => $request->editNew,
            'id_type' => $request->editType,
            'description' => $request->editDescription,
        ]);
    
        // Kiểm tra xem có file ảnh mới không
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('source/source/image/product'), $imageName);
            $product->image = $imageName; // Cập nhật ảnh mới
        }
    
        $product->save(); // Lưu thay đổi vào database											
          return redirect()->route('admin.index')->with('success', 'Cập nhật sản phẩm thành công');
    }
    
    
    // Hiển thị danh sách sản phẩm
    public function getIndexAdmin()
    {
        $products = Product::all();
       
        return view('pageadmin.admin')->with(['products' => $products, 'sumSold' => count(BillDetail::all())]);													

    }                                  


    
    };
