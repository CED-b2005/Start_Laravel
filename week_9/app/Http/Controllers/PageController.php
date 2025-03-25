<?php

namespace App\Http\Controllers;

use App\Models\BillDetail;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
use App\Models\TypeProduct;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;


class PageController extends Controller
{
    public function postAdminAdd(Request $request)
    {
        $product = new Product();
        $file_name = null;
        if ($request->hasFile('inputImage')) {
            $file = $request->file('inputImage');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('source/image/product'), $file_name);
        }

        $product->name = $request->input('inputName');
        $product->image = $file_name;
        $product->description = $request->input('inputDescription');
        $product->unit_price = $request->input('inputPrice');
        $product->promotion_price = $request->input('inputPromotionPrice');
        $product->unit = $request->input('inputUnit');
        $product->new = $request->input('inputNew');
        $product->id_type = $request->input('inputType');

        $product->save();

        return redirect()->route('admin.index')->with('success', 'Sản phẩm đã được thêm thành công!');
    }
    public function postAdminEdit(Request $request)
    {
        $id = $request->editId;
        $product = Product::find($id);
        if ($request->hasFile('editImage')) {
            $file = $request->file('editImage');
            $fileName = $file->getClientOriginalName('editImage');
            $file->move('source/image/product/', $fileName);
            $product->image = $fileName;
        }

        if ($request->file('editImage') != null) {
            $product->image = $fileName;
        }

        $product->name = $request->editName;
        $product->description = $request->editDescription;
        $product->unit_price = $request->editPrice;
        $product->promotion_price = $request->editPromotionPrice;
        $product->unit = $request->editUnit;
        $product->new = $request->editNew;
        $product->id_type = $request->editType;
        $product->save();
        return redirect()->route('admin.index')->with('success', 'Cập nhật sản phẩm thành công!');
    }

    public function getIndexAdmin()
    {
        $products = Product::all();
        return view('pageadmin.admin')->with(['products' => $products, 'sumSold' => count(BillDetail::all())]);
    }
    public function getAdminAdd()
    {
        return view('pageadmin.formAdd');
    }
    public function postAdminDelete($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('admin.index')->with('error', 'Sản phẩm không tồn tại!');
        }

        $product->delete();
        return redirect()->route('admin.index')->with('success', 'Sản phẩm đã bị xóa!');
    }

    public function getAdminEdit($id)
    {
        $product = Product::find($id);
        return view('pageadmin.formEdit')->with('product', $product);
    }
    public function exportAdminProduct()
    {
        return "Chức năng export chưa được triển khai.";
    }

    public function index()
    {
        $slide = Slide::all();
        $loai_sp = TypeProduct::all();
        return view('trangchu', compact('loai_sp'));
    }
    public function getIndex()
    {
        $slide = Slide::all();
        $new_product = Product::where('new', 1)->paginate(4);
        $promotion_product = Product::where('promotion_price', '<>', 0)->paginate(8);
        $loai_sp = TypeProduct::all();
        return view('page.trangchu', compact('slide', 'new_product', 'promotion_product', 'loai_sp'));
    }
    public function getLoaiSp($type)
    {
        $sp_theoloai = Product::where('id_type', $type)->get();
        $type_product = TypeProduct::all();
        $sp_khac = Product::where('id_type', '<>', $type)->paginate(3);
        $loai_sp = TypeProduct::all();
        return view('page.loai_sanpham', compact('sp_theoloai', 'type_product', 'sp_khac', 'loai_sp'));
    }
    public function getDetail(Request $request)
    {
        $sanpham = Product::where('id', $request->id)->first();
        $splienquan = Product::where('id', '<>', $sanpham->id, 'and', 'id_type', $sanpham->id_type)->paginate(3);
        $comments = Comment::where('id_product', $request->id)->get();
        return view('page.chitiet_sanpham', compact('sanpham', 'splienquan', 'comments'));
    }
    public function getContact()
    {
        return view('page.lienhe');
    }
    public function getAbout()
    {
        return view('page.about');
    }

    public function postComment(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required|string|max:500',
        ]);
        $sanpham = Product::find($id);
        if (!$sanpham) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại.');
        }
        Comment::create([
            'id_product' => $id,
            'username' => Auth::user()->name ?? 'Tố Loan',
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('success', 'Bình luận đã được thêm.');
    }
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        if (!$keyword) {
            return view('page.search', ['products' => collect()]);
        }
        $products = Product::where('name', 'LIKE', "%{$keyword}%")->paginate(8);

        return view('page.search', compact('products'));
    }

    public function postSearch(Request $request){
        $products = Product::where('name', 'LIKE', '%'.$request->search.'%')->paginate(6);
        return view('page.search', compact('products'));
    }
}
