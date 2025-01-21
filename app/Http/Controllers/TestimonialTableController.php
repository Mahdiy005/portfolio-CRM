<?php

namespace App\Http\Controllers;

use App\Models\TestimonialTable;
use Illuminate\Http\Request;

class TestimonialTableController extends Controller
{
    public function create()
    {
        return view('dashboared.testimonials.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'message' => 'required',
            'user_name' => 'required',
            'position' => 'required',
            'testimonial_section_id' => ''
        ]);
        TestimonialTable::create($data);
        return back()->with('createTestiStatus', 'Created Succefully');
    }

    public function index()
    {
        $testimonials = TestimonialTable::all();
        return view('dashboared.testimonials.index', compact('testimonials'));
    }

    public function edit(string $id)
    {
        $testimonial = TestimonialTable::findOrFail($id);
        return view('dashboared.testimonials.edit-testimonials', compact('testimonial'));
    }

    public function update(Request $request, string $id)
    {
        $testimonial = TestimonialTable::findOrFail($id);
        $data = $request->validate([
            'message' => 'required',
            'user_name' => 'required',
            'position' => 'required',
            'testimonial_section_id' => '',
        ]);
        $testimonial->update($data);
        return back()->with('updateTestimonialStatus', 'Updated Succefully');
    }

    public function destroy(string $id)
    {
        TestimonialTable::findOrFail($id)->delete();
        return back()->with('deleteTestimonialStatus', 'Deleted Succefully');
    }
}
