<?php

namespace App\Http\Controllers;

use App\Models\ContactTable;
use Illuminate\Http\Request;

class ContactTableController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'message' => 'required',
            'contact_section_id' => 'required',
        ]);
        ContactTable::create($data);
        return back();
    }

    public function index()
    {
        $contacts = ContactTable::all();
        return view('dashboared.contact.index', compact('contacts'));
    }

    public function destroyContact(string $id)
    {
        ContactTable::findOrFail($id)->delete();
        return back()->with('deleteStatus', 'Deleted Successfully');
    }
}
