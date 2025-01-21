<?php

namespace App\Http\Controllers;

use App\Models\SkillSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SkillSectionController extends Controller
{
    public function edit()
    {
        $skillSection = SkillSection::first();
        return view('dashboared.skills.edit-section-skill', compact('skillSection'));
    }

    public function update(Request $request, string $id)
    {
        $skillSection = SkillSection::findOrFail($id);
        $data = $request->validate([
            'title' => '',
            'sub_title' => '',
            'descrption' => '',
            'cv' => 'nullable|mimes:pdf',
        ]);
        if($request->hasFile('cv')) {
            // 0- Delete old file
            Storage::delete("public/CV/" . $skillSection->cv);

            // 1- Capture File From Request
            $cvFile = $request->cv;
            // 2- rename file from its original
            $newCvName = time() . '-' . $cvFile->getClientOriginalName();
            // 3- Store File In Laravel Storage
            $cvFile->storeAs('CV', $newCvName, 'public');
            // Add to validated array
            $data['cv'] = $newCvName;
        }

        $skillSection->update($data);
        return back()->with('updateSkillSection', 'Updated Successfully');
    }
}
