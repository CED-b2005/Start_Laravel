<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Hiển thị danh sách tài nguyên.
     */
    public function index()
    {
        return "Danh sách người dùng";  
    }

    public function create()
    {
        return "Tạo danh sách";
    }

    /**
     * Lưu tài nguyên mới.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Hiển thị tài nguyên cụ thể.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Hiển thị form chỉnh sửa tài nguyên cụ thể.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Cập nhật tài nguyên trong kho dữ liệu.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Xóa tài nguyên khỏi kho dữ liệu.
     */
    public function destroy(string $id)
    {
        //
    }
}
