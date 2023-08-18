<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
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
        $sellings = Banner::all();
        return view('backend.Banner.add_banner',compact('sellings'));
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
        $sellings = new banner;
        $sellings->title = $request->title;
        $sellings->images = $imageName;
        $sellings->Discription = $request->disc;

        $sellings->price = $request->price;
        $sellings->discount = $request->discount;
        $sellings->links = $request->link;
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
