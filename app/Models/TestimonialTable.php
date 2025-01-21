<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestimonialTable extends Model
{
    protected $fillable = ['message', 'user_name', 'position', 'testimonial_section_id'];

    public function testimonialSection()
    {
        return $this->belongsTo(TestimonialSection::class, 'testimonial_section_id', 'id');
    }
}
//testiomonialTable->testimonialSection
