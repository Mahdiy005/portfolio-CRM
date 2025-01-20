<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillSection extends Model
{
    protected $fillable = ['title', 'sub_title', 'cv', 'description'];
    public function skills()
    {
        return $this->hasMany(Skill::class, 'section_skill_id', 'id');
    }
}

//skillSection->skills
