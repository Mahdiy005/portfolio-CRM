<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateExpertiseHeaderRequest;
use App\Models\ExperiencSection;
use Illuminate\Http\Request;

class ExperiencSectionController extends Controller
{
    public function editHedaers()
    {
        $data = ExperiencSection::first();
        return view('dashboared.expertis.edit-headers', compact('data'));
    }

    public function updateHedaers(UpdateExpertiseHeaderRequest $request, ExperiencSection $experiencSection)
    {
        $data = $request->validated();
        $experiencSection->update($data);
        return back()->with('updateExpertisSectionHedaerStatus', 'Updated Succesfully');
    }
}
