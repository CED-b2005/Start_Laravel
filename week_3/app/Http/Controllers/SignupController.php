<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;

class SignupController extends Controller
{
    public function index()
    {
        return view('signup');
    }

    // public function displayInfor(SignupRequest $request)
    // {
    //     $user = [
    //         'name' => $request->input("name"),
    //         'age' => $request->input("age"),
    //         'date' => $request->input("date"),
    //         'phone' => $request->input("phone"),
    //         'web' => $request->input("web"),
    //         'address' => $request->input("address"),
    //     ];

    //     return view('signup', compact('user'));
    // }

    

    public function displayInfor(SignUpRequest $request) {
        // Lấy dữ liệu session, nếu là chuỗi thì giải mã JSON thành mảng
        $userSession = session('userSession', '[]');
        if (is_string($userSession)) {
            $userSession = json_decode($userSession, true);
        }

        // Lưu dữ liệu mới
        $user = [
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'date' => $request->input('date'),
            'phone' => $request->input('phone'),
            'web' => $request->input('web'),
            'address' => $request->input('address'),
        ];

        // Thêm user vào session
        $userSession[] = $user;
        session(['userSession' => json_encode($userSession)]);

        // Trả về view với dữ liệu session
        return view('signup', compact('userSession'));
    }
    
    public function clear() {
        Session::forget('userSession');
        return redirect('/');
    }
}

