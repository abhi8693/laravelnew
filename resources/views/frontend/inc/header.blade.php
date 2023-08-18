<header class="version_1">
	<div class="layer"></div><!-- Mobile menu overlay mask -->
	<div class="main_header">
		<div class="container">
			<div class="row small-gutters">
				<div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
					<div id="logo">
						<a href="{{route('home')}}"><img src="{{asset('assetss/img/logo.svg')}}" alt="" width="100" height="35"></a>
					</div>
				</div>
				<nav class="col-xl-6 col-lg-7">
					<a class="open_close" href="javascript:void(0);">
						<div class="hamburger hamburger--spin">
							<div class="hamburger-box">
								<div class="hamburger-inner"></div>
							</div>
						</div>
					</a>
					<!-- Mobile menu button -->
					<div class="main-menu">
						<div id="header_menu">
							<a href="dfghgfdhrt"><img src="{{asset('assetss/img/logo_black.svg')}}" alt="" width="100" height="35"></a>
							<a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
						</div>
						<ul>
							<li class="submenu">
								<a href="javascript:void(0);" class="show-submenu">Home</a>
								<ul>
									<li><a href="index.html">Slider</a></li>

								</ul>
							</li>
							<li class="megamenu submenu">
								<a href="javascript:void(0);" class="show-submenu-mega">Pages</a>
								<div class="menu-wrapper">
									<div class="row small-gutters">
										<div class="col-lg-3">
											<h3>Listing grid</h3>
											<ul>
												<li><a href="listing-grid-1-full.html">Grid Full Width</a></li>

											</ul>
										</div>
										<div class="col-lg-3">
											<h3>Listing row &amp; Product</h3>
											<ul>
												<li><a href="listing-row-1-sidebar-left.html">Row Sidebar Left</a></li>

											</ul>
										</div>
										<div class="col-lg-3">
											<h3>Other pages</h3>
											<ul>
												<li><a href="cart.html">Cart Page</a></li>

											</ul>
										</div>
										<div class="col-lg-3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
											<div class="banner_menu">
												<a href="#0">
													<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/banner_menu.jpg" width="400" height="550" alt="" class="img-fluid lazy">
												</a>
											</div>
										</div>
									</div>
									<!-- /row -->
								</div>
								<!-- /menu-wrapper -->
							</li>
							<li class="submenu">
								<a href="javascript:void(0);" class="show-submenu">Extra Pages</a>
								<ul>
									<li><a href="header-2.html">Header Style 2</a></li>

								</ul>
							</li>
							<li>
								<a href="{{route('blogs')}}">Blog</a>
							</li>
							<li>
								<a href="#0">Buy Template</a>
							</li>
						</ul>
					</div>
					<!--/main-menu -->
				</nav>
				<div class="col-xl-3 col-lg-2 d-lg-flex align-items-center justify-content-end text-end">
					<a class="phone_top" href="tel://9438843343"><strong><span>Need Help?</span>+94 423-23-221</strong></a>
				</div>
			</div>
			<!-- /row -->
		</div>
	</div>
	<!-- /main_header -->

	<div class="main_nav Sticky">
		<div class="container">
			<div class="row small-gutters">
				<div class="col-xl-3 col-lg-3 col-md-3">
					<nav class="categories">
						<ul class="clearfix">
							<li><span>
									<a href="#">
										<span class="hamburger hamburger--spin">
											<span class="hamburger-box">
												<span class="hamburger-inner"></span>
											</span>
										</span>
										Categories
									</a>
								</span>
								<div id="menu">
									<ul>
										@php
										$categories = \App\Models\category::get();
										@endphp
										@foreach($categories as $cat)
										<li><span><a href="{{route('product.view',['slug'=>$cat->slug])}}">{{$cat->title}}</a></span>
											@php
											$subcategories = \App\Models\subcategory::where('category',$cat->id)->get();
											@endphp
											@if(count($subcategories)>0)
											<ul class="">
												@foreach($subcategories as $scat)

												<li><a href="{{route('subcategory.view',['slug'=>$scat->slug])}}">{{$scat->title}}</a></li>
												@endforeach

											</ul>
											@endif
										</li>
										@endforeach
									</ul>
								</div>
							</li>
						</ul>
					</nav>
				</div>
				<div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
					<div class="custom-search-input">
						<form method="GET" action="{{route('search')}}">
							<input type="text" name="query" placeholder="Search over 10.000 products">
							<button type="submit"><i class="header-icon_search_custom"></i></button>
						</form>
					</div>
				</div>
				<div class="col-xl-3 col-lg-2 col-md-3">
					<ul class="top_tools">
						<li>
							<div class="dropdown dropdown-cart">
								<a href="cart.html" class="cart_bt"><strong>2</strong></a>
								<div class="dropdown-menu">
									<ul>
										<li>
											<a href="product-detail-1.html">
												<figure><img src="img/products/product_placeholder_square_small.jpg" data-src="img/products/shoes/thumb/1.jpg" alt="" width="50" height="50" class="lazy"></figure>
												<strong><span>1x Armor Air x Fear</span>$90.00</strong>
											</a>
											<a href="#0" class="action"><i class="ti-trash"></i></a>
										</li>
										<li>
											<a href="product-detail-1.html">
												<figure><img src="img/products/product_placeholder_square_small.jpg" data-src="img/products/shoes/thumb/2.jpg" alt="" width="50" height="50" class="lazy"></figure>
												<strong><span>1x Armor Okwahn II</span>$110.00</strong>
											</a>
											<a href="0" class="action"><i class="ti-trash"></i></a>
										</li>
									</ul>
									<div class="total_drop">
										<div class="clearfix"><strong>Total</strong><span>$200.00</span></div>
										<a href="cart.html" class="btn_1 outline">View Cart</a><a href="checkout.html" class="btn_1">Checkout</a>
									</div>
								</div>
							</div>
							<!-- /dropdown-cart-->
						</li>
						<li>
							<a href="#0" class="wishlist"><span>Wishlist</span></a>
						</li>
						<li>
							<div class="dropdown dropdown-access">
								@guest
								<a href="{{ route('login')}}" class="access_link"><span>Account</span></a>
								<div class="dropdown-menu">
									<a href="" class="btn_1">Sign In or Sign Up</a>
								</div>
								@else
								<a href="" class="access_link"><span>Account</span></a>
								<div class="dropdown-menu">
									<a class="btn_1" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
									<ul>
										<li>
											<a href="track-order.html"><i class="ti-truck"></i>Track your Order</a>
										</li>
										<li>
											<a href="account.html"><i class="ti-package"></i>My Orders</a>
										</li>
										<li>
											<a href="account.html"><i class="ti-user"></i>My Profile</a>
										</li>
										<li>
											<a href="help.html"><i class="ti-help-alt"></i>Help and Faq</a>
										</li>
									</ul>
								</div>
								@endguest
							</div>
							<!-- /dropdown-access-->
						</li>
						<li>
							<a href="javascript:void(0);" class="btn_search_mob"><span>Search</span></a>
						</li>
						<li>
							<a href="#menu" class="btn_cat_mob">
								<div class="hamburger hamburger--spin" id="hamburger">
									<div class="hamburger-box">
										<div class="hamburger-inner"></div>
									</div>
								</div>
								Categories
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- /row -->
		</div>
		<div class="search_mob_wp">
			<input type="text" class="form-control" placeholder="Search over 10.000 products">
			<input type="submit" class="btn_1 full-width" value="Search">
		</div>
		<!-- /search_mobile -->
	</div>
	<!-- /main_nav -->
</header>
<!-- /header -->