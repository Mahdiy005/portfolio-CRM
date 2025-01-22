<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSection extends Model
{
    protected $fillable = ['title', 'sub_title', 'location', 'phone', 'email', 'site_link'];

    public function contacts()
    {
        return $this->hasMany(ContactTable::class, 'contact_section_id', 'id');
    }
}
