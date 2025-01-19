<?php

namespace Database\Seeders;

use App\Models\LandingSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LandingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LandingSection::create([
            'name' => 'Your Name Here',
            'description' => 'What You Can Do ?!',
            'image' => '1737260549-banner-01.webp',
            'email' => '005@mail.com',
        ]);
    }
}
