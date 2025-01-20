<?php

namespace Database\Seeders;

use App\Models\SkillSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SkillSection::create([
            'title' => 'My Skills',
            'sub_title' => 'Beautiful & Unique Digital Experiences',
            'descrption' => 'Nostrum exercitationem ullam corporis suscipit laborioa nisi ut aliquid exrea commodi consequatur magni dolores aos qui ratione voluptatem nesciunt.Quia voluptas sit aspernatur aut odit aut fugit, sed ruiano consequntar magni dolores.',
        ]);
    }
}
