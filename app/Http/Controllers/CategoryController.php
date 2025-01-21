<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\WorkTable;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('dashboared.work.create-category');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);
        Category::create($data);
        return back()->with('createCategoryStatus', 'New Category Added Succefully');
    }

    public function show()
    {
        $categories = Category::all();
        return view('dashboared.work.show', compact('categories'));
    }

    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('dashboared.work.edit-category', compact('category'));
    }

    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->validate([
            'name' => ''
        ]);
        $category->update($data);
        return to_route('category.show')->with('updateCategoryStatus', 'Updated Succefully');
    }

    public function destroy(string $id)
    {
        Category::findOrFail($id)->delete();
        return to_route('category.show')->with('deleteCategoryStatus', 'Deleted Succefully');

    }

}
