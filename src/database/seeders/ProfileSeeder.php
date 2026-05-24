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
            'name' => 'Luqman Syahreno',
            'title' => 'Full-Stack Developer',
            'description' => "I'm a passionate full-stack developer who loves creating modern web applications. 🔭 Currently working on Web Development projects 💡 Love turning ideas into reality through code",
            'avatar' => 'image/profil/profil.jpg',
        ]);
    }
}
