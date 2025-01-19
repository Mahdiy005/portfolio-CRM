<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LandingSection extends Model
{
    protected $fillable = ['name', 'description', 'image', 'email', 'is_enabled'];
}
