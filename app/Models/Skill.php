<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['name', 'progress', 'section_skill_id'];
    public function skillSection()
    {
        return $this->belongsTo(SkillSection::class, 'section_skill_id', 'id');
    }
}
//$skill->skillSection
