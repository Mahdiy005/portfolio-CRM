<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\SkillSection;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function create()
    {
        return view('dashboared.skills.create-skill');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'progress' => 'required',
            'section_skill_id' => 'exists:skill_sections,id',
        ]);
        Skill::create($data);
        return back()->with('createSkillSection', 'New Skill Added Succefully');
    }

    public function show()
    {
        $allSkills = Skill::all();
        return view('dashboared.skills.show-skills', compact('allSkills'));
    }

    public function edit(string $id)
    {
        $skill = Skill::findOrFail($id);
        return view('dashboared.skills.edit-skill', compact('skill'));
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'progress' => 'required',
            'section_skill_id' => 'required|exists:skill_sections,id',
        ]);

        Skill::findOrFail($id)->update($data);
        return back()->with('updateSkill', 'Updated Succefully');
    }

    public function destroy(string $id)
    {
        Skill::findOrFail($id)->delete();
        return back()->with('deletedSkillStatus', 'Deleted Successfully');
    }
}
