@extends('master')

@section('content')
<div class="fullwidthbanner-container">
    <div class="fullwidthbanner">
        <div class="bannercontainer">
            <div class="banner">
                <ul>
                    @foreach($slide as $sl)
                        <li data-transition="boxfade" data-slotamount="20">
                            <div class="slotholder">
                                <div class="tp-bgimg defaultimg" 
                                    style="background-image:url('{{ asset('source/image/slide/'.$sl->image) }}'); 
                                    background-size: cover; background-position: center center;">
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="tp-bannertimer"></div>
    </div>
</div>

<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <!-- New Products -->
                    <div class="beta-products-list">
                        <h4>New Products</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">{{ count($new_product) }} styles found</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach($new_product as $product)
                                <div class="col-sm-3">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="product.html">
                                                <img src="{{ asset('source/image/product/'.$product->image) }}" 
                                                     alt="{{ $product->name }}" 
                                                     style="width: 270px; height: 312px">
                                            </a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{ $product->name }}</p>
                                            <p class="single-item-price">
                                                <span>${{ $product->unit_price }}</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="#"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="#">Details <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div> 

                    <div class="space50">&nbsp;</div>

                    <!-- Promotion Products -->
                    <div class="beta-products-list">
                        <h4>Top Products</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">{{ count($promotion_product) }} styles found</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach($promotion_product as $product)
                                <div class="col-sm-3">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="product.html">
                                                <img src="{{ asset('source/image/product/'.$product->image) }}" 
                                                     alt="{{ $product->name }}" 
                                                     style="width: 270px; height: 312px">
                                            </a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{ $product->name }}</p>
                                            <p class="single-item-price">
                                                <span>${{ $product->promotion_price }}</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="#"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="#">Details <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div> 
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
