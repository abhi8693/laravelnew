@extends('frontend.admin')
@section('content')


<main>

    <div class="container margin_30">
        <div class="row small-gutters">

            @foreach($products as $pro)
            <div class="col-6 col-md-4 col-xl-3">

                <div class="grid_item">

                    <figure>
                        <span class="ribbon off">-30%</span>
                        <a href="{{route('product.detail',$pro->slug)}}">
                            <img class="img-fluid lazy" src="/storage/images/{{$pro->images}}" alt="">
                        </a>
                        <div data-countdown="2019/05/15" class="countdown"></div>
                    </figure>
                    <a href="{{route('product.detail',$pro->slug)}}">
                        <h3>{{$pro->title}}</h3>
                    </a>
                    <div class="price_box">
                        <span class="new_price">{{$pro->discount}}</span>
                        <span class="old_price">{{$pro->price}}</span>
                    </div>
                    <ul>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                    </ul>
                    
                </div>
                
            </div>
            @endforeach

            <div class="pagination__wrapper">
                <ul class="pagination">
                    <li><a href="#0" class="prev" title="previous page">&#10094;</a></li>
                    <li>
                        <a href="#0" class="active">1</a>
                    </li>
                    <li>
                        <a href="#0">2</a>
                    </li>
                    <li>
                        <a href="#0">3</a>
                    </li>
                    <li>
                        <a href="#0">4</a>
                    </li>
                    <li><a href="#0" class="next" title="next page">&#10095;</a></li>
                </ul>
            </div>


        </div>

    </div>

</main>





@endsection