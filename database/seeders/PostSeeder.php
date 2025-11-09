<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'title' => 'Introduction to Machine Learning',
            'content' => 'Machine Learning adalah cabang dari AI...',
            'published_at' => now(),
            'writer_id' => 1,
            'category' => 'Data Science',
        ]);

        Post::create([
            'title' => 'Network Security Basics',
            'content' => 'Network Security membahas tentang cara melindungi jaringan...',
            'published_at' => now(),
            'writer_id' => 2,
            'category' => 'Network Security',
        ]);
    }
}
