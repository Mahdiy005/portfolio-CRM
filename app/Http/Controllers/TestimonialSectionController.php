<?php

namespace App\Http\Controllers;

use App\Models\TestimonialSection;
use Illuminate\Http\Request;

class TestimonialSectionController extends Controller
{
    public function editHeaders()
    {
        $testHeadrs = TestimonialSection::first();
        return view('dashboared.testimonials.edit-headrs', compact('testHeadrs'));
    }

    public function updateHeaders(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
        ]);
        TestimonialSection::findOrFail($id)->update($data);
        return back()->with('updateTestiStatus', 'Updated Succefully');
    }


}
