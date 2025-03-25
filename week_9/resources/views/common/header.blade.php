<div id="header">
	<div class="header-top">
		<div class="container">

			<div class="pull-left auto-width-left">
				<ul class="top-menu menu-beta l-inline">
					<li><a href=""><i class="fa fa-home"></i> 90-92 Lê Thị Riêng, Bến Thành, Quận 1</a></li>
					<li><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
				</ul>
			</div>
			<div class="pull-right auto-width-right">
				<ul class="top-details menu-beta l-inline">
					@if(Auth::check())
					<li><a href="{{ route('profile') }}"><i class="fa fa-user"></i>Tài khoản</a></li>
					@else
					<li><a href="{{ route('register') }}">Đăng ký</a></li>
					<li><a href="{{ route('login') }}">Đăng nhập</a></li>
					@endif
				</ul>
			</div>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .header-top -->
	<div class="header-body">
		<div class="container beta-relative">
			<div class="pull-left">
				<a href="index.html" id="logo"><img src="source/assets/dest/images/logo-cake.png" width="200px" alt=""></a>
			</div>
			<div class="pull-right beta-components space-left ov ">
				<div class="space-x-4">&nbsp;</div>
				<div class="beta-comp d-flex">
					<form action="{{ route('search') }}" method="GET" class="d-flex align-items-center">
						<input type="text" name="keyword" class="form-control me-2" placeholder="Nhập từ khóa..." required>
						<button type="submit" class="btn btn-primary d-flex align-items-center">
							<i class="fa fa-search"></i>
						</button>
					</form>
				</div>


				<div class="beta-comp">
					<div class="cart">
						@php
						$cart = session()->get('cart', []);
						$totalQuantity = array_sum(array_column($cart, 'quantity'));
						@endphp
						<div class="beta-select" id="cart-toggle">
							<i class="fa fa-shopping-cart"></i> Giỏ hàng ({{ $totalQuantity }} sản phẩm)
							<i class="fa fa-chevron-down"></i>
						</div>
						<div class="beta-dropdown cart-body" id="cart-dropdown" style="display: none;">
							@if(count($cart) > 0)
							@foreach($cart as $item)
							<div class="cart-item">
								<div class="media">
									<a class="pull-left" href="#"><img src="/source/image/product/{{ $item['image'] }}" alt=""></a>
									<div class="media-body">
										<span class="cart-item-title">{{ $item['name'] }}</span>
										<span class="cart-item-amount">{{ $item['quantity'] }} * <span>{{ number_format($item['price']) }} Đồng</span></span>
									</div>
								</div>
							</div>
							@endforeach
							<div class="cart-caption">
								<div class="cart-total text-right">
									Tổng tiền: <span class="cart-total-value">
										{{ number_format(array_sum(array_map(fn($item) => $item['quantity'] * $item['price'], $cart))) }} Đồng
									</span>
								</div>
								<div class="clearfix"></div>
								<div class="center">
									<div class="space10">&nbsp;</div>
									<a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
							@else
							<p class="text-center">Giỏ hàng của bạn đang trống</p>
							@endif
						</div>
					</div>
				</div>

				<script>
					document.getElementById('cart-toggle').addEventListener('click', function() {
						let cartDropdown = document.getElementById('cart-dropdown');
						cartDropdown.style.display = (cartDropdown.style.display === 'none' || cartDropdown.style.display === '') ? 'block' : 'none';
					});
				</script>

			</div>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .header-body -->
	<div class="header-bottom" style="background-color: #0277b8;">
		<div class="container">
			<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
			<div class="visible-xs clearfix"></div>
			<nav class="main-menu">
				<ul class="l-inline ov">
					<li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
					<li><a href="#">Loai Sản phẩm</a>
						<ul class="sub-menu">
							@foreach($loai_sp as $loai)
							<li><a href="{{route('loaisanpham',$loai->id)}}">{{$loai->name}}</a></li>
							@endforeach
						</ul>
					</li>
					<li>
						<a href="{{ route('wishlist') }}">
							Sản phẩm yêu thích ({{ count(session()->get('wishlist', [])) }})
						</a>
					</li>

					<li><a href="{{route('about')}}">Giới thiệu</a></li>
					<li><a href="{{route('lienhe')}}">Liên hệ</a></li>
				</ul>
				<div class="clearfix"></div>
			</nav>
		</div> <!-- .container -->
	</div> <!-- .header-bottom -->
</div> <!-- #header -->