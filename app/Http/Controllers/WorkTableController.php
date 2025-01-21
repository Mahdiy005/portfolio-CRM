<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\WorkTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkTableController extends Controller
{
    public function index()
    {
        $workTables = WorkTable::all();
        return view('dashboared.work.show-work', compact('workTables'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('dashboared.work.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'categories' => 'required|array',
            'categories.*' => 'required|exists:categories,id',
            'image' => 'required',
            'github_link' => 'required',
            'work_section_id' => ''
        ]);
        $image = $request->image;
        $newImgName = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('projects', $newImgName, 'public');
        $data['image'] = $newImgName;

        $workTable = WorkTable::create([
            'name' => $data['name'],
            'image' => $data['image'],
            'github_link' => $data['github_link'],
            'work_section_id' => $data['work_section_id']
        ]);

        $workTable->categories()->attach($data['categories']);
        return back()->with('createWorkStatus', 'New Project Added Succefully');
    }

    public function delete(string $id)
    {
        WorkTable::findOrFail($id)->delete();
        return to_route('work.index')->with('deleteWorkStatus', 'Deleted Succefully');
    }

    public function edit(string $id)
    {
        $workTable = WorkTable::findOrFail($id);
        $categories = Category::all();
        return view('dashboared.work.edit-work', compact('workTable', 'categories'));
    }

    public function update(Request $request, string $id)
    {
        $workTable = WorkTable::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'github_link' => 'required|url',
            'categories' => 'nullable|array',
            'categories.*' => 'exists:categories,id',
            'image' => 'nullable|image|max:2048',
        ]);
        if($request->hasFile('image')) {
            if(Storage::exists('public/projects/' . $workTable->image)) {
                Storage::delete('public/projects/' . $workTable->image);
            }
            $image = $request->image;
            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('projects', $newImageName, 'public');
            $data['image'] = $newImageName;
        }

        if(isset($data['categories'])) {
            $workTable->categories()->sync($data['categories']);
        }

        $workTable->update($data);

        return to_route('work.index')->with('updateWorkStatus', 'Updated Succefully');
    }
}
