@extends('index')
@section('content')

<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Product</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Home</a> / <span>Product</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">
        <div class="row">
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-sm-4">
                        <img src="source/assets/dest/image/product/1.jpg" alt="">
                    </div>
                    <div class="col-sm-8">
                        <div class="single-item-body">
                            <p class="single-item-title">Sample Woman Top</p>
                            <p class="single-item-price">
                                <span>$34.55</span>
                            </p>
                        </div>

                        <div class="clearfix"></div>
                        <div class="space20">&nbsp;</div>

                        <div class="single-item-desc">
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo ms id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe.</p>
                        </div>
                        <div class="space20">&nbsp;</div>

                        <p>Options:</p>
                        <div class="single-item-options">
                            <select class="wc-select" name="size">
                                <option>Size</option>
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select>
                            <select class="wc-select" name="color">
                                <option>Color</option>
                                <option value="Red">Red</option>
                                <option value="Green">Green</option>
                                <option value="Yellow">Yellow</option>
                                <option value="Black">Black</option>
                                <option value="White">White</option>
                            </select>
                            <select class="wc-select" name="color">
                                <option>Qty</option>
                                <option value="1">1</option>
                                <option value="2">2</option>    
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="space40">&nbsp;</div>
                <div class="woocommerce-tabs">
                    <ul class="tabs">
                        <li><a href="#tab-description">Description</a></li>
                        <li><a href="#tab-reviews">Reviews (0)</a></li>
                    </ul>

                    <div class="panel" id="tab-description">
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                        <p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequaturuis autem vel eum iure reprehenderit qui in ea voluptate velit es quam nihil molestiae consequr, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? </p>
                    </div>
                    <div class="panel" id="tab-reviews">
                        <p>No Reviews</p>
                    </div>
                </div>
                <div class="space50">&nbsp;</div>
                <div class="beta-products-list">
                    <h4>Related Products</h4>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="single-item">
                                <div class="single-item-header">
                                    <a href="/chitiet_sanpham"><img src="source/assets/dest/image/product/111.jpg" alt=""></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">Sample Woman Top</p>
                                    <p class="single-item-price">
                                        <span>$34.55</span>
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="/chitiet_sanpham"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" href="/chitiet_sanpham">Details <i class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>