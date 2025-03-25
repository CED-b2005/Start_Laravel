<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SignUpController extends Controller
{
    public function index()
    {
        return view('signUpForm');
    }

    public function displayInfor(signUpRequest $Request)
    {
        $users = session('userSession', []);

        $user = [
            'name' => $name = $Request->input('name'),
            'age' => $age = $Request->input('age'),
            'date' => $date = $Request->input('date'),
            'phone' => $phone = $Request->input('phone'),
            'web' => $web = $Request->input('web'),
            'address' => $address = $Request->input('address')
        ];

        $users[] = $user;
        session(['userSession' => $users]);

        return view('signUpForm')->with('users', $users);
    }
}
