<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart($id) {
        $product = Product::find($id);
        $cart = session()->get('cart', []);

        if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại!');
        }

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->promotion_price ? $product->promotion_price : $product->unit_price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng!');
    }
}
