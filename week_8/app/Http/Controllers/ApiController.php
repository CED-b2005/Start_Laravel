<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $data = [
            ['id' => 1, 'name' => 'Product A', 'price' => 100, 'category' => 'Electronics'],
            ['id' => 2, 'name' => 'Product B', 'price' => 200, 'category' => 'Books'],
            ['id' => 3, 'name' => 'Product C', 'price' => 150, 'category' => 'Clothing'],
        ];

        return response()->json(['data'=>$data]);
    }
}