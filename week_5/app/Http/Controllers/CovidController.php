<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CovidController extends Controller
{
    public function getData()
    {


        $response = Http::withOptions(['verify' => false])->get('https://jsonplaceholder.typicode.com/posts');

        $data = $response->json();
        return view('covid')->with('data', $data);
    }
}
