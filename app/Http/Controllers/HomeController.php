<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\category;
use App\Models\collection;
use App\Models\Comment;
use App\Models\Selling;
use App\Models\slider;
use App\Models\subcategory;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = slider::where('status', 1)->get();
        $categories = category::where('status', 1)->get();
        $subcategories = subcategory::where('status', 1)->get();
        $collections = collection::where('status', 1)->orderby('id', 'desc')->limit(3)->get();
        $sellings = Selling::where('status', 1)->orderby('id', 'desc')->limit(4)->get();
        $banner = Banner::where('status', 1)->limit(1)->get();
        $blogs = Blog::where('status', 1)->orderby('id', 'desc')->limit(6)->get();
        return view('frontend.index', compact('sliders', 'categories', 'subcategories', 'collections', 'sellings', 'banner', 'blogs'));
    }




    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    public function product($slug = 0)
    {
        $product = Selling::with('comments')->where('slug', $slug)->first();
        $category_id = $product->category_id;
        $related_products = Selling::where('category_id', $category_id)->get();
        if ($product) {
            return view('frontend.product-detail', compact('product', 'related_products'));
        }
        abort(404);
    }

    public function category($slug = null, $slug1 = null)
    {
        $subcat_id =  subcategory::whereSlug($slug1)->pluck('id')->first();
        $products = Selling::where('subcategory_id', $subcat_id)->get();
        return view('frontend.product-detail', compact('products'));
    }

    public function productss($params = null)
    {
        if ($params != null) {
            $subcate = subcategory::whereSlug($params)->first();
            if ($subcate) {
                $products = Selling::where('subcategory_id', $subcate->id)->get();

                return view('frontend.product-view', compact('subcate', 'products'));
            }
            return abort(404);
        }
    }

    public function products($params = null)
    {
        if ($params != null) {
            $category = category::whereSlug($params)->first();
            if ($category) {
                $products = Selling::where('category_id', $category->id)->get();
                return view('frontend.product-view', compact('category', 'products'));
            }
            return abort(404);
        }
    }
    public function blog()
    {
        $blogs = Blog::where('status', 1)->orderby('id', 'desc')->limit(6)->get();
        return view('frontend.blog', compact('blogs'));
    }
    public function comment()
    {
        $comments = Comment::all();

        return view('frontend.comment', compact('comments'));
    }
    public function search(Request $request)
    {
        $search = $request['query'];
        if ($search != null) {
            $products = Selling::where('title', 'Like', '%' . $search . '%')->get();
            if (count($products) > 0) {
                return view('frontend.search', compact('products'));
            }
        }
        return abort(404);
    }

    
}
