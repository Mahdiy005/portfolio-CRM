<?php

namespace Database\Seeders;

use App\Models\ContactSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactSection::create([
            'title' => 'Get in Touch',
            'sub_title' => 'Any Questions? Feel Free to Contact',
            'location' => '121 King Street Melbourne, 3000, Australia',
            'phone' => '+91 9527818693',
            'email' => '005@mail.com',
            'site_link' => 'https://www.google.com',
        ]);
    }
}
