<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;

class sliderController extends Controller
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
        $sliders = slider::all();
        return view('backend.slider.add_slider', compact('sliders'));  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'status' => 'required',
        ]);
        $category = slider::where('title', $request->title)->first();
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('storage/images'),$imageName);
        if ($category == NULL) {
            $category = new slider;
            $category->title = $request->title;
            $category->description = $request->desc;
            $category->images = $imageName ;
            $category->links = $request->link;
            $category->status = $request->status;
            $category->save();

            session()->flash('success', ' Added successfully!');
            return redirect()->back();
        }
        session()->flash('error', ' Already exist');
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
