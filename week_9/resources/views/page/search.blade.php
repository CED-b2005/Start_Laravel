@extends('layouts.master')

@section('content')
<style>
    .container {
        margin-top: 30px;
        margin-bottom: 30px;
    }
</style>
<div class="container d-flex flex-wrap gap-5 justify-content-between">
    @foreach ($products as $product)
    <div class="card" style="width: 18rem;">
        <img src="/source/image/product/{{ $product->image }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class=" card-text">{{ $product->name }}</p>
            <p class="card-text">{{ $product->unit_price }}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    @endforeach
</div>
@endsection