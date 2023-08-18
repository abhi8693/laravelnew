@extends('backend.admin')
@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Sub-Category_list</h5>

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>

                                <th scope="col">category</th>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">created_at</th>
                                <th scope="col">Opretions</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subcategories as $scat)

                            <tr>
                                <td>{{$scat['category']}}</td>

                                <td>{{$scat['title']}}</td>
                                <td>{{$scat['images']}}</td>
                                <td>{{$scat['status']}}</td>
               
                                <td>{{date('d-m-Y',strtotime($scat['created_at']))}}</td>
                                <td>
                                    <a href="{{route('categories.edit',$scat['id'])}}" class="btn btn-success">Edit</a>

                                    <a href="{{route('subcategories.delete',$scat['id'])}}" onclick=" return confirm('are you sure');" class="btn btn-danger">Delete</a>

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