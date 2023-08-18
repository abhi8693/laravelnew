<?php

namespace App\Http\Controllers;

use App\Models\subcategory;
use illuminate\Support\Str;

use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = category::all();
        return view('backend.category.category_list', compact('categories'));
    }

    public function getSubcategory(Request $request)
    {
        $subcategories = subcategory::where('category', $request->category)->get();
        return response()->json($subcategories);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::all();

        return view('backend.category.add_category', compact('categories'));
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
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('storage/images'),$imageName);
        $category = category::where('title', $request->title)->first();

        if ($category == NULL) {
            $category = new category;
            $category->title = $request->title;
            $category->slug = str::slug($request->title);
            $category->images = $imageName;

            $category->status = $request->status;
            $category->save();

            session()->flash('success', 'New Category added successfully!');
            return redirect()->back();
        }
        session()->flash('error', 'category already exist');
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
        $categories = category::findOrfail($id);
        // dd($blog->toArray());
        return view('backend.category.edit_category', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {


        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storage/images'), $imageName);
        $category = category::find($request->id);
        $category->title = $request->title;
        $category->images = $imageName;
     
        $category->status = $request->status;
        $category->save();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        category::whereId($id)->delete();
        return redirect()->route('categories.index');
    }
}
