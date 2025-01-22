<?php

namespace App\Http\Controllers;

use App\Models\ContactSection;
use Illuminate\Http\Request;

class ContactSectionController extends Controller
{
    public function edit()
    {
        $contact = ContactSection::first();
        return view('contact.edit-headers', compact('contact'));
    }

    public function updateHeaders(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'site_link' => 'required',
        ]);
        ContactSection::findOrFail($id)->update($data);
        return back()->with('updateContactHeaders', 'Updated Succefully');
    }
}
