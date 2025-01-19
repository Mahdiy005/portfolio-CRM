<?php

namespace Database\Seeders;

use App\Models\Experienc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experienc::create([
            'title' => 'Web Design',
            'icon' => '<i class="fa-solid fa-code"></i>',
            'description' => 'Dolor repellendus temporibus autem quibusdam officiis debitis rerum neces aibus minima veniam.',
            'experince_section_id' => 1,
        ]);
        Experienc::create([
            'title' => 'Web Development',
            'icon' => '<i class="fa-solid fa-blog"></i>',
            'description' => 'Dolor repellendus temporibus autem quibusdam officiis debitis rerum neces aibus minima veniam.',
            'experince_section_id' => 1,
        ]);
        Experienc::create([
            'title' => 'AWS',
            'icon' => '<i class="fa-brands fa-aws"></i>',
            'description' => 'Dolor repellendus temporibus autem quibusdam officiis debitis rerum neces aibus minima veniam.',
            'experince_section_id' => 1,
        ]);
    }
}
