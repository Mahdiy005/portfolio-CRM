<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $fillable = ['name', 'work_table_id'];

    public function workTable()
    {
        return $this->belongsTo(WorkTable::class, 'work_table_id', 'id');
    }
}

//technology->workTable
