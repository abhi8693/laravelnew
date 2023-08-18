@extends('backend.admin')
@section('content')

<section class="section">
    <div class="row">
        <div class="col-lg-10">

            <div class="card">
                <div class="card-body">
                    @if(session()->has('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    @if(session()->has('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                    @endif
                    <h5 class="card-title">Add Products</h5>

                    <!-- General Form Elements -->
                    <form action="{{route('Selling_products.store')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">category</label>
                            <div class="col-sm-10">
                                <select name="category" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                                    @endforeach
                                </select>
                                <span style="color:red"> @error('title')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Sub Category</label>
                            <div class="col-sm-10">
                                <select name="scategory" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach($subcategories as $scat)
                                    <option value="{{$cat->id}}">{{$scat->title}}</option>
                                    @endforeach
                                </select>
                                <span style="color:red"> @error('title')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" id="title" placeholder="Add New Title">
                                <span style="color:red"> @error('title')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="desc" id="desc" placeholder="description">
                                <span style="color:red"> @error('desc')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                       
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Images</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="image" id="image" placeholder="Images">
                                <span style="color:red"> @error('image')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                     
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="price" id="price" placeholder="Price">
                                <span style="color:red"> @error('price')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Discount Price</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="sdiscount" id="discount" placeholder=" Discount">
                                <span style="color:red"> @error('sdiscount')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <select name="status" class="form-control" name="status" id="fname" placeholder="Status">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <button type="submit" name="save" class="btn btn-primary">Submit Form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

