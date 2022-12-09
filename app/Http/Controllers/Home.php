<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class Home extends Controller
{
    public function index()
    {
        $products = DB::table('products') ->paginate(10);
        $categories = Categories::all();
        $structuredCategories = [];

        if ($categories) {
          foreach ($categories as $category) {
            $structuredCategories[$category->id] = $category;
          };
        }

        return view('home', ['products'=>$products], compact('structuredCategories'));
    }

    public function search(Request $request)
    {
        $categories = Categories::all();
        $structuredCategories = [];
  
        if ($categories) {
          foreach ($categories as $category) {
            $structuredCategories[$category->id] = $category;
          };
        }

        $search_text = $request->input('query');
        $search_category = $request["category_id"];

        if ($search_category && is_numeric($search_category)) {
          $products = DB::table('products')
            ->where('category_id', '=', $search_category)
            ->where(function ($query) use ($search_text) { 
              $query->where('name','LIKE','%'.$search_text.'%')
                ->orWhere('tags','LIKE','%'.$search_text.'%');
            })
          ->paginate(10);
        } else {
          $products = DB::table('products') 
          ->where('name','LIKE','%'.$search_text.'%')
          ->orWhere('tags','LIKE','%'.$search_text.'%')
          ->paginate(10);
        }
  
        return view('home', ['products'=>$products], compact('structuredCategories'));
    }
}
