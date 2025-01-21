<?php

namespace Database\Seeders;

use App\Models\WorkTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkTable::create([
            'name' => 'Conerter App',
            'github_link' => 'https://github.com',
            'work_section_id' => '1'
        ]);
    }
}
