@extends('layouts.master')

@section('content')
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <h4>Sản phẩm yêu thích</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">{{ count($wishlist) }} sản phẩm được yêu thích</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach($wishlist as $item)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="detail/{{ $item['id'] }}">
                                            <img width="200" height="200" src="/source/image/product/{{ $item['image'] }}" alt="{{ $item['name'] }}">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{ $item['name'] }}</p>
                                        <p class="single-item-price" style="text-align:left;font-size: 15px;">
                                            <span class="flash-sale">{{ number_format($item['price']) }} Đồng</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{ route('themgiohang', $item['id']) }}">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                        <a class="remove-from-wishlist" href="{{ route('wishlist.remove', $item['id']) }}">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <a class="beta-btn primary" href="detail/{{ $item['id'] }}">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div> <!-- .beta-products-list -->
                </div>
            </div>
        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
