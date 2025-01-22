<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogSection extends Model
{
    protected $fillable = ['title', 'sub_title', 'is_enabled'];

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'blog_section_id', 'id');
    }
}

//blogSection->blogs
