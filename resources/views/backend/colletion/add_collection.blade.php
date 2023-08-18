@extends('backend.admin')
@section('content')

<section class="section">
    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                @if(session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif
            @if(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
            @endif
                    <h5 class="card-title">General Form Elements</h5>

                    <!-- General Form Elements -->
                    <form action="{{route('collections.store')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                @csrf
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title">
                                <span style="color:red"> @error('title')
                        {{$message}}
                        @enderror
                        </span>
                            </div>
                        </div>  
                         <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>   
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Links</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="link">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                            <select name="status" class="form-control"  id="fname" placeholder="Status">                     
                           <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                            </div>
                        </div>
                        
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit Form</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>

    </div>

    

</section>
@endsection+9