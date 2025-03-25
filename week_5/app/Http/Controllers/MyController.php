<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    // public function showForm()
    // {
    //     return view('form');
    // }

    // public function sum()
    // {
    //     return view('form');
    // }

    // public function hello()
    // {
    //     echo 'Hello PNV 2';
    // }

    // public function helloWithView()
    // {
    //     $hello = 'Hello PNV 3';
    //     return view('hello', ['heli' => $hello]);
    // }

    public function index()
    {
        $title = "This is a title";
        $description = "This is a description";
        $copyright = "Learn right web";
        return view('test')->with([
            'title' => $title,
            'description' => $description,
            'copyright' => "Learn right web",
        ]);
    }
}
