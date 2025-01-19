<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperiencSection extends Model
{
    protected $fillable = ['title', 'sub_title', 'is_enabled'];

    public function experiences()
    {
        return $this->hasMany(Experienc::class, 'experince_section_id', 'id');
    }
}
//$sectionExperience->experiences
