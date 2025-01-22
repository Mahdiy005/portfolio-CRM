<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    //blog_section_id

    public function create()
    {
        return view('dashboared.blog.create-blog');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'user_name' => 'required',
            'content' => 'required',
            'image' => 'required',
            'blog_section_id' => '',
        ]);
        if($request->hasFile('image')) {
            $image = $request->image;
            $newImgName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('blogs', $newImgName, 'public');
            $data['image'] = $newImgName;
        }
        Blog::create($data);
        return back()->with('createBlogStatus', 'Created Successfully');
    }

    public function index()
    {
        $blogs = Blog::all();
        return view('dashboared.blog.index', compact('blogs'));
    }

    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('dashboared.blog.edit-blog', compact('blog'));
    }

    public function update(Request $request, string $id)
    {
        $blog = Blog::findOrFail($id);
        $data = $request->validate([
            'title' => 'required',
            'user_name' => 'required',
            'content' => 'required',
            'image' => 'required',
        ]);
        if($request->hasFile('image')) {
            if ($blog->image && Storage::exists('public/blogs/' . $blog->image)) {
                Storage::delete('public/blogs/' . $blog->image);
            }
            $image = $request->image;
            $newImgName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('blogs', $newImgName, 'public');
            $data['image'] = $newImgName;
        }
        $blog->update($data);
        return to_route('blog-table.index')->with('updateBlogStatus', 'Updated Successfully');
    }

    public function destroy(string $id)
    {
        Blog::findOrFail($id)->delete();
        return to_route('blog-table.index')->with('deleteBlogStatus', 'Deleted Successfully');
    }

    public function blogDeatils(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('dashboared.blog.blog-details', compact('blog'));
    }
}
