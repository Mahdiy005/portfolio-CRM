<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkTable extends Model
{
    protected $fillable = ['name', 'image', 'github_link', 'work_section_id'];

    public function workSection()
    {
        return $this->belongsTo(WorkSection::class, 'work_section_id', 'id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_work', 'work_table_id', 'category_id');
    }
}
//$workTable->workSection
// workTable->categories
