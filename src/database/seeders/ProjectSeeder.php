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
            'title' => 'Sistem Kolaborasi Tim Developer: Implementasi Kanban Board dan Issue Tracker',
            'slug' => 'sistem-kolaborasi-tim-developer',
            'short_description' => 'Platform kolaborasi in-house yang terpusat, responsif, dan terintegrasi langsung dengan GitHub via Two-Way Sync menggunakan arsitektur TALL Stack.',
            'thumbnail' => null,
            'github_url' => null,
            'is_final_project' => true,
            'pdf_report' => null,
            'progress_status' => 'In Progress',
            'is_published' => true,
        ]);
    }
}
