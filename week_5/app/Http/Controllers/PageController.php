<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
        return view('page.home');
    }

    public function getProducts() {
        return view('page.products-list');
    }

    public function getDetail() {
        return view('page.product-detail');
    }

    public function getBlog() {
        return view('page.blog');
    }

    public function getBlogSingle() {
        return view('page.blog-single');
    }

    public function get404() {
        return view('page.404');
    }

    public function getCart() {
        return view('page.cart');
    }

    public function getCheckout() {
        return view('page.checkout');
    }

    public function getLogin() {
        return view('page.login');
    }

    public function getContactUs() {
        return view('page.contact-us');
    }
}
