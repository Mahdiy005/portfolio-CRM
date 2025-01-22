<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactTable extends Model
{
    protected $fillable = ['name', 'email', 'mobile', 'message', 'contact_section_id'];
}
