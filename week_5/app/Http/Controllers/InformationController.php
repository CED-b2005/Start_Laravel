<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function ifForm()
    {
        $users = session('users', []);
        return view('formInfo', compact('users'));
    }

    public function displayInfor(Request $request)
    {
        // Kiểm tra dữ liệu đầu vào
        $request->validate([
            'name' => 'required|string|max:100',
            'age' => 'required|integer|min:1|max:150',
            'date' => 'required',
            'phone' => 'required',
            'web' => 'nullable',
            'address' => 'required|string|max:255',
        ]);

        // Nếu dữ liệu hợp lệ, lưu vào session
        $user = [
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'date' => $request->input('date'),
            'phone' => $request->input('phone'),
            'web' => $request->input('web'),
            'address' => $request->input('address'),
        ];

        $users = session('users', []);
        $users[] = $user;
        session(['users' => $users]);

        return redirect()->route('ifForm')->withInput();
    }
}



