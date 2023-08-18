<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\subcategory;
use Illuminate\Http\Request;
use illuminate\Support\str;
class subcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = subcategory::all();
        return view('backend.category.subcategory_list',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::all();

        return view('backend.category.add_subcategory',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category'=>'required',
            'title'=>'required',
            'status'=>'required',
        ]);
        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('storage/images'),$imageName);
        $scategory = new subcategory;
        $scategory->category = $request->category;
        $scategory->title = $request->title;
        $scategory->slug =str::slug( $request->title);
        // $scategory->images = $imageName;
    
        $scategory->status = $request->status;
        $scategory->save();
        session()->flash('success','New SubCategory added successfully!');
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
