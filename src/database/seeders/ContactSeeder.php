<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Project Inquiry',
            'message' => 'I would like to discuss a potential project with you.',
            'is_read' => false,
        ]);
    }
}
