@extends('layouts.master')

@section('content')
<style>
    .custom-margin {
        margin-top: 30px;
        margin-bottom: 30px;
        margin-left: 350px;
        width: 70%;
    }

    .text-center {
        margin-top: 10px;
    }
</style>

<div class="container custom-margin">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Đăng Nhập</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Mật Khẩu:</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Đăng Nhập</button>
                    </form>
                    <div class="text-center mt-3">
                        <p>Chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký ngay</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection