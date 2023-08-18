@extends('backend.admin')
@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Products</h5>
                    <span class="btn-danger"><i class="bi bi-trash"></i>Trash {{App\Models\Selling::count()  }}</span>

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">category</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Price</th>
                                <th scope="col">Discount</th>
                                <th scope="col">Status</th>
                                <th scope="col">created_at</th>
                                <th scope="col">Opretions</th>



                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)

                            <tr>
                             <td>{{$product->Category->title}}</td>      <!-- model mai use hua hai -->
                               
                                <td>{{$product['title']}}</td>
                                <td>{{$product['description']}}</td>
                                <td><img src="{{asset('storage/images/'.$product->images)}}" width="80px" height="80px"></td>
                                <td>{{$product['price']}}</td>
                                <td>{{$product['discount']}}</td>
                                <td>{{$product['status']}}</td>
                                <td>{{date('d-m-Y',strtotime($product['created_at']))}}</td>
                                <td>
                                    <a href="{{route('selling_products.edit',$product['id'])}}" class="btn btn-success">Edit</a>

                                <a href="{{route('products.delete',$product['id'])}}" onclick=" return confirm('are you sure');" class="btn btn-danger">Delete</a>

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection