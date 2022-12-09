<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = DB::table('products') ->paginate(8);
        $categories = Categories::all();
        $structured = [];

        if ($categories) {
            foreach ($categories as $category) {
              $structured[$category->id] = $category;
            };
        }

        return view('admin.products.index', compact('products', 'structured'));
    }

    public function create()
    {
        $categories = Categories::all();

        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:40|unique:products,name',
            'category_id' => 'required',
            'content' => 'required',
        ]);
        
        $product = Products::create($validated);

        return to_route('admin.products.index')->with('message', 'Sėkmingai sukurtas produktas');
    }

    public function edit(Products $product)
    {
        $categories = Categories::all();
        $files = '';
        
        if (!sizeof($product->getMedia('files')) == 0) {
            $files = $product->getMedia('files')[0];
        }

        return view('admin.products.edit', compact('product', 'categories', 'files'));
    }

    public function update(Request $request, Products $product)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:40',
            'category_id' => 'required',
            'content' => 'required',
        ]);
 
        $product->update($validated);

        return to_route('admin.products.index')->with('message', 'Sėkmingai atnaujintas produktas');
    }

    public function destroy(Products $product)
    {
        $product->delete();

        return back()->with('message', 'Klausimas "'.$product['name'].'" ištrintas!');
    }

    public function show(Request $request)
    {
        $search_text = $request->input('query');
        $categories = Categories::all();
        $structured = [];

        if ($categories) {
            foreach ($categories as $category) {
              $structured[$category->id] = $category;
            };
        }

        $products = DB::table('products') 
            ->where('name','LIKE','%'.$search_text.'%')
            ->orWhere('tags','LIKE','%'.$search_text.'%')
            ->paginate(10);
    
        return view('admin.products.index', compact('products', 'structured'));
    }
}
