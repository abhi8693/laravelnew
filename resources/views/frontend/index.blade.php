@extends('frontend.admin')
@section('content')

<main>
	<div id="carousel-home">
		<div class="owl-carousel owl-theme">
			@foreach($sliders as $slider)
			<div class="owl-slide cover" style="background-image: url(/storage/images/{{$slider->images}})">
				<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
					<div class="container">
						<div class="row justify-content-center justify-content-md-end">
							<div class="col-lg-6 static">
								<div class="slide-text text-end white">
									<h2 class="owl-slide-animated owl-slide-title">
									{{$slider->title}}
									</h2>
									<p class="owl-slide-animated owl-slide-subtitle">
									{{$slider->description}}
									</p>
									<div class="owl-slide-animated owl-slide-cta">
										<a class="btn_1" href="{{$slider->links}}" role="button">Shop Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach

		</div>
		<div id="icon_drag_mobile"></div>
	</div>
	<!--/carousel-->

	<ul id="banners_grid" class="clearfix">
	@foreach($collections as $coll)

		<li>
			<a href="{{$coll->links}}" class="img_container">
				<img src="/storage/images/{{$coll->images}}" data-src="/storage/images/{{$coll->images}}" alt="" class="lazy" />
				<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
					<h3>{{$coll->title}}</h3>
					<div><span class="btn_1">Shop Now</span></div>
				</div>
			</a>
		</li>
		@endforeach
		
	</ul>
	<!--/banners_grid -->

	<div class="container margin_60_35">
		<div class="main_title">
			<h2>Top Selling</h2>
			<span>Products</span>
			<p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
		</div>
		<div class="row small-gutters">
		@foreach($sellings as $sell)

			<div class="col-6 col-md-4 col-xl-3">
				<div class="grid_item">
					<figure>
						<span class="ribbon off">-30%</span>
						<a href="{{route('product.detail',$sell->slug)}}">
							<img class="img-fluid lazy" src="/storage/images/{{$sell->images}}" data-src="/storage/images/{{$sell->images}}" alt="" />
							<img class="img-fluid lazy" src="{{asset('assetss/img/products/product_placeholder_square_medium.jpg')}}" data-src="img/products/shoes/1_b.jpg" alt="" />
						</a>

					</figure>
					<div class="rating">
						<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
					</div>
					<a href="{{route('product.detail',$sell->slug)}}">
						<h3>{{$sell->title}}</h3>
					</a>
					<div class="price_box">
						<span class="new_price">{{$sell->discount}}</span>
						<span class="old_price">{{$sell->price}}</span>
					</div>
					<ul>
						<li>
							<a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a>
						</li>
						<li>
							<a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
						</li>
						<li>
							<a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
						</li>
					</ul>
				</div>
				<!-- /grid_item -->
			</div>
		
			<!-- /col -->
			@endforeach

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
	@foreach($banner as $bann)
	<div class="featured lazy" data-bg="url('/storage/images/{{$bann->images}}')">
		<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
			<div class="container margin_60">
				<div class="row justify-content-center justify-content-md-start">
					<div class="col-lg-6 wow" data-wow-offset="150">
						<h3>{{$bann->title}}</h3>
						<p>
						{{$bann->discription}}
						</p>
						<div class="feat_text_block">
							<div class="price_box">
								<span class="new_price">{{$bann->discount}}</span>
								<span class="old_price">{{$bann->price}}</span>
							</div>
							<a class="btn_1" href="{{$bann->links}}" role="button">Show Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach
	<!-- /featured -->



	<div class="bg_gray">
		<div class="container margin_30">
			<div id="brands" class="owl-carousel owl-theme">
				<div class="item">
					<a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_1.png" alt="" class="owl-lazy" /></a>
				</div>
				<!-- /item -->
				<div class="item">
					<a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_2.png" alt="" class="owl-lazy" /></a>
				</div>
				<!-- /item -->
				<div class="item">
					<a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_3.png" alt="" class="owl-lazy" /></a>
				</div>
				<!-- /item -->
				<div class="item">
					<a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_4.png" alt="" class="owl-lazy" /></a>
				</div>
				<!-- /item -->
				<div class="item">
					<a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_5.png" alt="" class="owl-lazy" /></a>
				</div>
				<!-- /item -->
				<div class="item">
					<a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_6.png" alt="" class="owl-lazy" /></a>
				</div>
				<!-- /item -->
			</div>
			<!-- /carousel -->
		</div>
		<!-- /container -->
	</div>
	<!-- /bg_gray -->

	<div class="container margin_60_35">
		<div class="main_title">
			<h2>Latest News</h2>
			<span>Blog</span>
			<p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
		</div>
		<div class="row">
		@foreach($blogs as $blog)

			<div class="col-lg-6">
				<a class="box_news" href="blog.html">
					<figure>
						<img src="/images/{{$blog->images}}"  alt="" width="150px" height="300" class="lazy" />
						<figcaption><strong>28</strong>Dec</figcaption>
					</figure>
					<ul>
						<li>by Mark Twain</li>
						<li>20.11.2017</li>
					</ul>
					<h4>{{$blog->title}}</h4>
					<p>
					{{$blog->description}}
					</p>
				</a>
			</div>
			<!-- /box_news -->
			@endforeach
			<!-- /box_news -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</main>
@endsection