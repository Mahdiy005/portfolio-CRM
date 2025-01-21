<?php

namespace Database\Seeders;

use App\Models\TestimonialSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TestimonialSection::create([
            'title' => 'Testimonials',
            'sub_title' => 'Happy Clients Feedback',
        ]);
    }
}
