<?php

namespace App\Http\Controllers;

use App\Models\Selling;
use App\Models\category;
use App\Models\subcategory;


use Illuminate\Http\Request;
use Illuminate\Support\str;


class SellingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $products = Selling::all();
       return view('backend.top_selling.sellinglist',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::all();
        $subcategories = subcategory::all();

        $sellings = Selling::all();
        return view('backend.top_selling.add_selling',compact('sellings','categories','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           
            'title'=>'required',
            'status'=>'required',
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('storage/images'),$imageName);
        $sellings = new Selling;
        $sellings->category_id = $request->category;
        $sellings->subcategory_id = $request->scategory;
        $sellings->title = $request->title;
        $sellings->description = $request->desc;
        $sellings->slug = str::slug($request->title);
        $sellings->images = $imageName;
        $sellings->price = $request->price;
        $sellings->discount = $request->sdiscount;
        $sellings->status = $request->status;
        $sellings->save();

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
        $product = Selling::find($id);

        
        $categories = category::all();
        $subcategories = subcategory::all();

        return view('backend.top_selling.edit_product',compact('product','categories','subcategories'));
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
        Selling::destroy($id);
        return redirect()->back();
    }

    public function restore()
    {
        Selling::withTrashed(32)->restore();  
    }

    public function deletePermanent()
    {
        Selling::withTrashed(32)->forceDelete();  
    }
}
