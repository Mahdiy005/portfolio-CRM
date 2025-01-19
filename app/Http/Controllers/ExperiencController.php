<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateExpertiseRequest;
use App\Models\Experienc;

use Illuminate\Http\Request;

class ExperiencController extends Controller
{
    public function create()
    {
        return view('dashboared.expertis.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'title' => '',
            'icon' => '',
            'description' => '',
            'experince_section_id' => ''
        ]);
        // dd($data);
        Experienc::create($data);
        return back()->with('createExpertisStatus', "New Expert Added Succefully");
    }

    public function show()
    {
        $data = Experienc::all();
        return view('dashboared.expertis.show-all', compact('data'));
    }

    public function edit(string $id)
    {
        $experienc = Experienc::find($id);
        return view('dashboared.expertis.edit-experience', compact('experienc'));
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'icon' => 'required|string',
            'description' => 'nullable|string',
        ]);
        Experienc::find($id)->update($data);
        return back()->with('updateSingleExperienceStatus', 'Updated Succefully');
    }

    public function destroy(string $id)
    {
        Experienc::find($id)->delete();
        return back()->with('deleteExperienceStatus', 'Experience Deleted Succeefully');
    }
}
