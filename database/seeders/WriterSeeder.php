<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    public function run(): void
    {
        Writer::create([
            'name' => 'John Doe',
            'bio' => 'Expert in Data Science',
            'photo' => 'john.jpg',
        ]);

        Writer::create([
            'name' => 'Jane Smith',
            'bio' => 'Cybersecurity Specialist',
            'photo' => 'jane.jpg',
        ]);
    }
}
