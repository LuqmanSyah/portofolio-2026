<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Report::create([
            'title' => 'Laporan Awal Project Akhir',
            'slug' => 'laporan-awal-project-akhir',
            'text' => '<p><strong>Solusi yang ditawarkan:</strong></p><p>Sistem ini menawarkan solusi manajemen portofolio yang komprehensif.</p><p><strong>Analisis Masalah & Kebutuhan Sistem:</strong></p><p>Kebutuhan untuk menampilkan skill dan project.</p><p><strong>Arsitektur & Tech Stack:</strong></p><p>Laravel, Filament, Tailwind UI.</p><p><strong>Rencana Perancangan (Diagram):</strong></p><p>ERD telah disiapkan dengan relasi One to Many.</p>'
        ]);
    }
}
