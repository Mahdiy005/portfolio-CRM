<?php

namespace Database\Seeders;

use App\Models\ExperiencSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperiencSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExperiencSection::create([
            'title' => 'My Expertise',
            'sub_title' => 'Provide Wide Range of Digital Services',
        ]);
    }
}
