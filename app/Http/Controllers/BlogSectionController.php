<?php

namespace App\Http\Controllers;

use App\Models\BlogSection;
use Illuminate\Http\Request;

class BlogSectionController extends Controller
{
    public function editHeaders()
    {
        $blogSection = BlogSection::first();
        return view('dashboared.blog.updated-hedaers', compact('blogSection'));
    }

    public function updateHeaders(Request  $request, string $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
        ]);
        BlogSection::findOrFail($id)->update($data);
        return back()->with('updateBlogHeadersStatus', 'Updated Successfully');
    }
}
