<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Post One',
                'excerpt' => 'Summary of Post One',
                'body' => 'Body of Post One',
                'image_path' => 'Empty',
                'is_published' => false,
                'min_to_read' => 2,            
            ],
            [
                'title' => 'Post OTwo',
                'excerpt' => 'Summary of Post Two',
                'body' => 'Body of Post Two',
                'image_path' => 'Empty',
                'is_published' => false,
                'min_to_read' => 2,            
            ]
        ];

        foreach($posts as $key => $value) {
            Post::create($value);
        }
    }
}
