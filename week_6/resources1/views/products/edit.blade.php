@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Chỉnh sửa sản phẩm</h2>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Tên sản phẩm</label>
            <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" required class="form-control mb-2">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Mô tả</label>
            <textarea id="description" name="description" class="form-control mb-2">{{ old('description', $product->description) }}</textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">Giá</label>
            <input type="number" id="price" name="price" value="{{ old('price', $product->price) }}" required class="form-control mb-2" min="0" step="0.01">
            @error('price')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="quantity">Số lượng</label>
            <input type="number" id="quantity" name="quantity" value="{{ old('quantity', $product->quantity) }}" required class="form-control mb-3" min="0">
            @error('quantity')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>
@endsection