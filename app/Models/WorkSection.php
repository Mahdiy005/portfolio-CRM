<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkSection extends Model
{
    protected $fillable = ['title', 'sub_title', 'is_enabled'];

    public function works()
    {
        return $this->hasMany(WorkTable::class, 'work_section_id', 'id');
    }
}
//workSection->works
