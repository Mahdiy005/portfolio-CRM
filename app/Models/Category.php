<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'work_table_id'];

    public function workTables()
    {
        return $this->belongsToMany(WorkTable::class, 'category_work', 'category_id', 'work_table_id');
    }
}

//category->workTables
