@extends('frontend.admin')
@section('content')
<main class="bg_gray">
	<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
			</div>
			<h1>{{$product->title}}</h1>
		</div>
		<!-- /page_header -->
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="owl-carousel owl-theme prod_pics magnific-gallery">
					<div class="item">
						<a href="img/products/shoes/product_detail_1.jpg" title="Photo title"><img src="/storage/images/{{$product->images}}" alt=""></a>
					</div>
					<!-- /item -->

					<!-- /item -->
				</div>
				<!-- /carousel -->
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->

	<div class="bg_white">
		<div class="container margin_60_35">
			<div class="row justify-content-between">
				<div class="col-lg-6">
					<div class="prod_info version_2">

						<span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i><em>4 reviews</em></span>
						<h3>{{$product->title}}</h3>
						<p><br>{{$product->description}}</p>
						<p>{{$product->description}}</p>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="prod_options version_2">
						<div class="row mt-3">
							<div class="col-lg-7 col-md-6">
								<div class="price_main"><span class="new_price">{{$product->discount}}</span><span class="percentage">-20%</span> <span class="old_price">{{$product->price}}</span></div>
							</div>
							<div class="col-lg-5 col-md-6">

								<div class="btn_add_to_cart"><a href="{{route('add_to_cart',$product->id)}}" class="btn_1">Add to Cart</a></div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
	</div>

	<!-- /bg_white -->

	<div class="tabs_product bg_white version_2">
		<div class="container">
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">Description</a>
				</li>
				<li class="nav-item">
					<a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">Reviews</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /tabs_product -->

	<div class="tab_content_wrapper">
		<div class="container">
			<div class="tab-content" role="tablist">
				<div id="pane-A" class="card tab-pane fade active show" role="tabpanel" aria-labelledby="tab-A">

					<div id="collapse-A" role="tabpanel" aria-labelledby="heading-A">
						<div class="card-body">
							<div class="row justify-content-between">
								<div class="col-lg-6">
									<h3>Details</h3>
									<p>Lorem ipsum dolor sit amet, in eleifend <strong>inimicus elaboraret</strong> his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.</p>
									<p>Vis ei ipsum conclusionemque. Te enim suscipit recusabo mea, ne vis mazim aliquando, everti insolens at sit. Cu vel modo unum quaestio, in vide dicta has. Ut his laudem explicari adversarium, nisl <strong>laboramus hendrerit</strong> te his, alia lobortis vis ea.</p>
									<p>Perfecto eleifend sea no, cu audire voluptatibus eam. An alii praesent sit, nobis numquam principes ea eos, cu autem constituto suscipiantur eam. Ex graeci elaboraret pro. Mei te omnis tantas, nobis viderer vivendo ex has.</p>
								</div>
								<div class="col-lg-5">
									<h3>Specifications</h3>
									<div class="table-responsive">
										<table class="table table-sm table-striped">
											<tbody>
												<tr>
													<td><strong>Color</strong></td>
													<td>Blue, Purple</td>
												</tr>
												<tr>
													<td><strong>Size</strong></td>
													<td>150x100x100</td>
												</tr>
												<tr>
													<td><strong>Weight</strong></td>
													<td>0.6kg</td>
												</tr>
												<tr>
													<td><strong>Manifacturer</strong></td>
													<td>Manifacturer</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- /table-responsive -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /TAB A -->
				<div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
					
					<div id="collapse-B" role="tabpanel" aria-labelledby="heading-B">
						<div class="card-body">
							@foreach($product->comments as $comment)
							<div class="row justify-content-between">

								<div class="col-lg-5">
									<div class="review_content">
										<div class="clearfix add_bottom_10">
											<span class="rating">
												<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><em>5.0/5.0</em></span>
											<em>Published 4 days ago</em>
										</div>
										<h4>"Excellent"</h4>
										<p>{{$comment->comment}}</p>
									</div>
								</div>
							</div>
							@endforeach

							<div class="row justify-content-center">
								<div class="col-lg-8">
									<div class="write_review">
										<h1>Write a review for {{$product->title}}</h1>
										<form action="{{route('comments.store')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
											@csrf
											<input type="hidden" value="{{$product->id}}" name="product_id" />
											<div class="rating_submit">
												<div class="form-group">
													<label class="d-block">Overall rating</label>
													<span class="rating mb-0">
														<input type="radio" class="rating-input" id="5_star" name="rating" value="5"><label for="5_star" class="rating-star"></label>
														<input type="radio" class="rating-input" id="4_star" name="rating" value="4"><label for="4_star" class="rating-star"></label>
														<input type="radio" class="rating-input" id="3_star" name="rating" value="3"><label for="3_star" class="rating-star"></label>
														<input type="radio" class="rating-input" id="2_star" name="rating" value="2"><label for="2_star" class="rating-star"></label>
														<input type="radio" class="rating-input" id="1_star" name="rating" value="1"><label for="1_star" class="rating-star"></label>
													</span>
												</div>
											</div>
											<div class="form-group">
												<label>Your comment</label>
												<textarea class="form-control" name="comment" style="height: 180px;" placeholder="Write your comment to help others learn about this online business"></textarea>
											</div>
											<input type="submit" class="btn_1">
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- /card-body -->
					</div>

				</div>
				<!-- /tab B -->
			</div>
			<!-- /tab-content -->
		</div>
		<!-- /container -->
	</div>
	<!-- /tab_content_wrapper -->

	<div class="bg_white">
		<div class="container margin_60_35">
			<div class="main_title">
				<h2>Related</h2>
				<span>Products</span>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
			</div>
			<div class="owl-carousel owl-theme products_carousel">
				@foreach($related_products as $related)

				<div class="item">
					<div class="grid_item">
						<span class="ribbon new">New</span>
						<figure>
							<a href="product-detail-1.html">
								<img class="owl-lazy" src="/storage/images/{{$related->images}}" alt="">
							</a>
						</figure>
						<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
						<a href="product-detail-1.html">
							<h3>{{$related->title}}</h3>
						</a>
						<div class="price_box">
							<span class="new_price">{{$related->discount}}</span>
						</div>
						<ul>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
						</ul>
					</div>
					<!-- /grid_item -->
				</div>
				<!-- /item -->
				@endforeach

				<!-- /item -->

				<!-- /item -->
			</div>
			<!-- /products_carousel -->
		</div>
		<!-- /container -->
	</div>
	<!-- /bg_white -->

</main>





@endsection