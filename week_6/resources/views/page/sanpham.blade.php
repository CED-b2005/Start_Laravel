@extends('master')
@section('content')

</html>
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h6 class="inner-title">San Pham {{$sanpham->name}}</h6>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb font-large">
        <a href="/trangchu">Home</a> / <span>Details</span>
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
            <img src="source/source/image/product/{{$sanpham->image}}" alt="">
          </div>
          <div class="col-sm-8">
            <div class="single-item-body">
              <p class="single-item-title">
              <h2>{{$sanpham->name}}</h2>
              </p>
              <p class="single-item-price" style="text-align:left;font-size: 15px;">
                <span> @if($sanpham->promotion_price==0)
                  <span class="flash-sale">{{number_format($sanpham->unit_price)}} Đồng</span>
                  @else
                  <span class="flash-del">{{number_format($sanpham->unit_price)}} Đồng </span>
                  <span class="flash-sale">{{number_format($sanpham->promotion_price)}} Đồng</span>
                  @endif</span>
              </p>
            </div>

            <div class="clearfix"></div>
            <div class="space20">&nbsp;</div>

            <div class="single-item-desc">
              <p>{{$sanpham->description}}</p>
            </div>
            <div class="space20">&nbsp;</div>

            <p>So luong:</p>
            <div class="single-item-options">

              <select class="wc-select" name="color">
                <option>So luong</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>

              <div class="clearfix"></div>
            </div>
          </div>
        </div>

        <div class="space40">&nbsp;</div>
        <div class="woocommerce-tabs">
                    <ul class="tabs">
                        <li><a href="#tab-description">Description</a></li>
                        <li><a href="#tab-reviews">Reviews ({{ $sanpham->comments->count() }})</a></li>
                    </ul>

                    <div class="panel" id="tab-description">
                        <p>{{ $sanpham->description }}</p>
                    </div>

                    <div class="panel" id="tab-reviews">
                        @if (!$sanpham->comments->isEmpty())
                            @foreach ($sanpham->comments as $comment)
                                <p>{{ $comment->username }}: {{ $comment->comment }}</p>
                            @endforeach
                        @else
                            <p>Chưa có đánh giá nào</p>
                        @endif
                    </div>
                </div>
        <div class="space50">&nbsp;</div>
        <div class="beta-products-list">
          <h4>Related Products</h4>

          <div class="row">
            @foreach($splienquan as $sp)
            <div class="col-sm-4">
              <div class="single-item">
                <div class="single-item-header">
                  <a href="detail/{{$sp->id}}"><img src="source/source/image/product/{{$sp->image}}" alt=""></a>
                </div>
                @if($sp->promotion_price==!0)
                <div class="ribbon-wrapper">
                  <div class="ribbon sale">Sale</div>
                </div>
                @endif
                <div class="single-item-body">
                  <p class="single-item-title">{{$sp->name}}</p>
                  <p class="single-item-price" style="text-align:left;font-size: 15px;">
                    @if($sp->promotion_price==0)
                    <span class="flash-sale">{{number_format($sp->unit_price)}} Đồng</span>
                    @else
                    <span class="flash-sale">{{number_format($sp->promotion_price)}} Đồng</span>
                    <span class="flash-del">{{number_format($sp->unit_price)}} Đồng </span>
                    @endif
                  </p>
                </div>
                <div class="single-item-caption">

                  <a class="beta-btn primary" href="detail/{{$sp->id}}">Details <i class="fa fa-chevron-right"></i></a>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div> <!-- .beta-products-list -->
      </div>
      <div class="col-sm-3 aside">
        <div class="widget">
          <h3 class="widget-title">Best Sellers</h3>
          <div class="widget-body">
            <div class="beta-sales beta-lists">
            @foreach ($bestSeller as $bsl)
            <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="source/source/image/product/{{$bsl->image}}"
                    alt=""></a>
                <div class="media-body">
                  {{$bsl -> name}}
                  <span class="beta-sales-price">{{number_format($bsl -> unit_price)}} </span>
                </div>
              </div>
            @endforeach
              <!-- <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/1.png"
                    alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/2.png"
                    alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/3.png"
                    alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/4.png"
                    alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div> -->
            </div>
          </div>
        </div> <!-- best sellers widget -->
        <div class="widget">
          <h3 class="widget-title">New Products</h3>
          <div class="widget-body">
            <div class="beta-sales beta-lists">
            @foreach ($products as $new)
            <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="source/source/image/product/{{$new->image}}"
                    alt=""></a>
                <div class="media-body">
                  {{$new -> name}}
                  <span class="beta-sales-price">{{number_format($new -> unit_price)}} </span>
                </div>
              </div>
            @endforeach
              <!-- <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/1.png"
                    alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/2.png"
                    alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/3.png"
                    alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/4.png"
                    alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div> -->
            </div>
          </div>
        </div> <!-- best sellers widget -->
      </div>
    </div>
  </div> <!-- #content -->
</div> <!-- .container -->

@endsection
