@extends('layouts.master')

@section('content')
<style>
    .container {
        margin-top: 30px;
        margin-bottom: 30px;
        margin-left: 150px;
        width: 70%;
    }
    .text-center {
        margin-top: 10px;
    }
</style>
<div class="container">
    <h2 class="text-center mb-1">Đăng ký</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Họ tên:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Mật khẩu:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Xác nhận mật khẩu:</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Đăng ký</button>
        <div class="text-center mt-3">
            <p>Đã có tài khoản?<a href="{{ route('login') }}">Đăng nhập</a></p>
        </div>
    </form>
</div>
@endsection