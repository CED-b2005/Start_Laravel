<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WishlistController extends Controller
{
    public function index() {
        $wishlist = session()->get('wishlist', []);
        return view('page.wishlist', compact('wishlist'));
    }

    public function addToWishlist($id) {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại!');
        }

        $wishlist = session()->get('wishlist', []);

        if (!isset($wishlist[$id])) {
            $wishlist[$id] = [
                "name" => $product->name,
                "price" => $product->promotion_price ? $product->promotion_price : $product->unit_price,
                "image" => $product->image,
                "id" => $product->id
            ];
        }

        session()->put('wishlist', $wishlist);
        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào danh sách yêu thích!');
    }

    public function removeFromWishlist($id) {
        $wishlist = session()->get('wishlist', []);

        if (isset($wishlist[$id])) {
            unset($wishlist[$id]);
            session()->put('wishlist', $wishlist);
        }

        return redirect()->back()->with('success', 'Đã xóa sản phẩm khỏi danh sách yêu thích!');
    }
}

