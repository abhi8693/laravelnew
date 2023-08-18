@extends('backend.admin')
@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Category_list</h5>

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Images</th>
                                <th scope="col">Status</th>
                                <th scope="col">created_at</th>
                                <th scope="col">Opretions</th>



                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)

                            <tr>
                                <td>{{$category['title']}}</td>
                                <td><img src="{{asset('storage/images/'.$category->images)}}" width="80px" height="80px"></td>

                                <td><span class="btn btn-xs btn-detail btn-success">{{ ($category->status===1) ? 'Active' : 'Inactive' }}</span></td>
                               
               
                                <td>{{date('d-m-Y',strtotime($category['created_at']))}}</td>
                                <td>
                                    <a href="{{route('categories.edit',$category['id'])}}" class="btn btn-success">Edit</a>

                                    <a href="{{route('categories.destroy',$category['id'])}}" onclick=" return confirm('are you sure');" class="btn btn-danger">Delete</a>

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