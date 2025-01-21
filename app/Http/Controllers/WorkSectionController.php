<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\WorkSection;
use App\Models\WorkTable;
use Illuminate\Http\Request;

class WorkSectionController extends Controller
{
    public function editHeaders()
    {
        $workSection = WorkSection::first();
        return view('dashboared.work.edit-headers', compact('workSection'));
    }

    public function updateHeaders(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'sub_title' => '',
        ]);
        // dd($data);

        WorkSection::findOrFail($id)->update($data);
        return back()->with('updateWorkSection', 'Updated Succesfully');
    }

}
