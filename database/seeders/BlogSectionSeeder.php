<?php

namespace Database\Seeders;

use App\Models\BlogSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogSection::create([
            'title' => 'Blog',
            'sub_title' => 'Blog & Articles',
        ]);
    }
}
