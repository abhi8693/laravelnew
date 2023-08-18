<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Blogs = Blog::all();
        return view('backend.Blog.Add_Blog', compact('Blogs'));  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imageName);
        $products = new Blog;
        $products->title = $request->title;
        $products->discription = $request->disc;
        $products->images = $imageName;
        $products->slug = str::slug($request->title);
        $products->status = $request->status;
        $products->save();
        session()->flash('success',' added successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
