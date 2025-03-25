@extends('layouts.master')
@section('content')
<style>
    .container {
        margin-top: 30px;
        margin-bottom: 30px;
        margin-left: 150px;
    }
</style>
<div class="container mt-5 justify-center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg rounded">
                <div class="card-header text-white text-center py-3">
                    <h2 class="mb-0">Hồ Sơ Của Tôi</h2>
                </div>
                <div class="card-body p-4">
                    <div class="mb-4">
                        <h5 class="mb-3"><i class="bi bi-person-fill me-2"></i> Thông tin cá nhân</h5>
                        <div class="list-group">
                            <div class="list-group-item">
                                <strong>Tên:</strong> {{ $user->name }}
                            </div>
                            <div class="list-group-item">
                                <strong>Email:</strong> {{ $user->email }}
                            </div>
                            <div class="list-group-item">
                                <strong>Ngày tạo tài khoản:</strong> {{ $user->created_at->format('d/m/Y H:i:s') }}
                            </div>
                            <div class="list-group-item">
                                <strong>Ngày cập nhật cuối:</strong> {{ $user->updated_at->format('d/m/Y H:i:s') }}
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <form id="logoutForm" action="{{ route('logout') }}" method="GET" style="display: inline;">
                            @csrf
                            <button type="button" class="btn btn-danger btn-lg" onclick="handleLogout()">
                                <i class="bi bi-box-arrow-right me-2"></i> Đăng xuất
                            </button>
                        </form>
                    </div>

                    <script>
                        function handleLogout() {
                            localStorage.clear();
                            document.getElementById("logoutForm").submit();
                        }
                    </script>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">