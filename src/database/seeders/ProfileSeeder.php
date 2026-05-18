<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Profile::create([
            'name' => 'John Doe',
            'title' => 'Full Stack Developer',
            'description' => "Welcome to my portfolio! I specialize in building robust web applications using Laravel, Tailwind CSS, and various modern technologies. This space highlights my journey, skills, and the projects I've built along the way.",
        ]);
    }
}
