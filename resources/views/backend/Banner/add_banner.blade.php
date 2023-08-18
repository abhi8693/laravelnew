@extends('backend.admin')
@section('content')

<section class="section">
    <div class="row">
        <div class="col-lg-8">

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
                    <form action="{{route('banners.store')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" id="discount" placeholder=" title">
                                <span style="color:red"> @error('title')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div> 
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Discription</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="disc" id="discount" placeholder=" Discription">
                                <span style="color:red"> @error('title')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div> 
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label"> Images</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="image" id="discount" placeholder=" Image">
                                <span style="color:red"> @error('title')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="price" id="discount" placeholder=" Price">
                                <span style="color:red"> @error('title')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Discount Price</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="discount" id="discount" placeholder=" Discount Price">
                                <span style="color:red"> @error('title')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Links</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="link" id="discount" placeholder=" Link">
                                <span style="color:red"> @error('title')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                            <select name="status" class="form-control"  name="status" id="fname" placeholder="Status">
                        <option value="">Select Status</option>

                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                            </div>
                        </div>
                            <div class="col-lg-10">
                                <button type="submit" class="btn btn-primary">Submit Form</button>
                            </div>
                        

                    </form>
                </div>
            </div>

        </div>

    </div>

    

</section>
@endsection