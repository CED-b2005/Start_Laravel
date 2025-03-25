<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function sum(Request $request)
    {
        $sum = $request->soA + $request->soB;
        return view('form', compact('sum'));
    }
}
