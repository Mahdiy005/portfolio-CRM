<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestimonialSection extends Model
{
    protected $fillable = ['title', 'sub_title', 'is_enabled'];

    public function testimonialTables()
    {
        return $this->hasMany(TestimonialTable::class, 'testimonial_section_id', 'id');
    }
}
//testimonialSection->testimonialTables
