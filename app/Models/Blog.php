<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['image', 'user_name', 'title', 'content', 'blog_section_id'];

    public function blogSection()
    {
        return $this->belongsTo(BlogSection::class, 'blog_section_id', 'id');
    }
}

//blog->blogSection
