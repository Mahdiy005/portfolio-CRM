<?php

namespace Database\Seeders;

use App\Models\WorkSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkSection::create([
            'title' => 'Creative Work',
            'sub_title' => 'Check My Portfolio',
        ]);
    }
}
