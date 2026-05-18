<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'My First Project',
            'slug' => 'my-first-project',
            'short_description' => 'This is a short description for my first project.',
            'thumbnail' => null,
            'github_url' => 'https://github.com/example/project1',
            'is_final_project' => true,
            'pdf_report' => null,
            'progress_status' => 'Completed',
            'is_published' => true,
        ]);
    }
}
