<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\View\ViewException;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();
        return view('admin.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate(
        [
                'name'        => 'required', 
                'description' => 'required'
                ]
            );
            $category = Category::create($validateData);
            return redirect('/category')->with('success', 'category created successfully');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.edit', compact('category'));
    }

    public function update(Request $request, string $id)
    {
        $validateData = $request->validate(
            [
                'name'          => 'required',
                'description'   => 'required'
            ]
        );
        $category = Category::findOrFail($id);
        $category->update($validateData);
        
        return redirect('/category')->with('success', 'Category updated successfully');
    }
    
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('/category')->with('success', 'Category deleted successfully');
    }
}
