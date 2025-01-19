<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experienc extends Model
{
    protected $table = 'experiencs';

    protected $fillable = ['title', 'icon', 'description', 'experince_section_id'];

    public function experienceSection()
    {
        return $this->belongsTo(ExperiencSection::class, 'experince_section_id', 'id');
    }
}
//$eperince->sectionExperience
