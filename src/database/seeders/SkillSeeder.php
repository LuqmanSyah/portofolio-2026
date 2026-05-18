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
            ['name' => 'Laravel', 'category' => 'Backend', 'icon' => null],
            ['name' => 'Vue.js', 'category' => 'Frontend', 'icon' => null],
            ['name' => 'MySQL', 'category' => 'Database', 'icon' => null],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
