<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BlogSectionSeeder::class,
            CategorySeeder::class,
            ContactSectionSeeder::class,
            ExperiencSectionSeeder::class,
            ExperinceSeeder::class,
            LandingSeeder::class,
            SkillSectionSeeder::class,
            TestimonialsSeeder::class,
            WorkSectionSeeder::class,
            WorkTableSeeder::class
        ]);
    }
}
