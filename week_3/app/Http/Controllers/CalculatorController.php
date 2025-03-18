<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function showForm()
    {
        return view('sum_form');
    }

    public function calculateSum(Request $request)
    {

        $sum = $request->num1 + $request->num2;

        return view('sum_form', compact('sum'));
    }

    public function hello(){
        $hello = 'welcome to PNV';
        return view('sum_form',compact('hello'));         
    }
}
