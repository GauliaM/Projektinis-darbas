<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories') ->paginate(8);

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:40',
        ]);
        
        Categories::create($validated);

        return to_route('admin.categories.index')->with('message', 'Sėkmingai sukurta kategorija');
    }

    public function edit(Categories $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Categories $category)
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        $category->update($validated);

        return to_route('admin.categories.index')->with('message', 'Sėkmingai atnaujinta kategorija');
    }

    public function destroy(Categories $category)
    {
        $category->delete();

        return back()->with('message', 'Kategorija "'.$category['name'].'" ištrinta!');
    }
}
