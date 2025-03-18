<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Congcontroller extends Controller
{
    public function tinhcong(Request $request)
    {
        // Lấy giá trị từ form
        $num1 = $request->input('num1', null);
        $num2 = $request->input('num2', null);

        // Khởi tạo giá trị mặc định cho sum
        $sum = null;

        // Kiểm tra nếu cả 2 giá trị có tồn tại
        if ($num1 !== null && $num2 !== null) {
            $sum = $num1 + $num2;
        }

        // Trả về view với kết quả
        return view('sum', compact('num1', 'num2', 'sum'));
    }
}
