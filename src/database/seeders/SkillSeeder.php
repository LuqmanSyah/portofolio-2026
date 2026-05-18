<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            // Languages
            ['name' => 'Javascript', 'category' => 'Languages', 'icon' => null],
            ['name' => 'Typescript', 'category' => 'Languages', 'icon' => null],
            ['name' => 'PHP', 'category' => 'Languages', 'icon' => null],
            ['name' => 'Java', 'category' => 'Languages', 'icon' => null],

            // Frontend
            ['name' => 'Next.js', 'category' => 'Frontend', 'icon' => null],
            ['name' => 'React', 'category' => 'Frontend', 'icon' => null],
            ['name' => 'Tailwind CSS', 'category' => 'Frontend', 'icon' => null],

            // Backend
            ['name' => 'Laravel', 'category' => 'Backend', 'icon' => null],
            ['name' => 'Node.js', 'category' => 'Backend', 'icon' => null],

            // Database
            ['name' => 'MySQL', 'category' => 'Database', 'icon' => null],
            ['name' => 'PostgreSQL', 'category' => 'Database', 'icon' => null],

            // Tools
            ['name' => 'Git', 'category' => 'Tools', 'icon' => null],
            ['name' => 'Docker', 'category' => 'Tools', 'icon' => null],
            ['name' => 'VS Code', 'category' => 'Tools', 'icon' => null],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
