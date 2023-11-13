<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = array(
            [
                'meta_title' => 'Politics',
                'meta_keyword' => 'Politics',
                'meta_description' => 'Politics',
                'title' => 'Politics',
                'slug' => 'politics',
                'image' => 'https://images.unsplash.com/photo-1541872703-74c5e44368f9?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHBvbGl0aWNzfGVufDB8fDB8fHww',
                'description' => 'Politics',
                'category_id' => '1',
                'sub_category_id' => '1',
                'user_id' => '1',
                'views' => '1',
            ],
            [
                'meta_title' => 'Business',
                'meta_keyword' => 'Business',
                'meta_description' => 'Business',
                'title' => 'Business',
                'slug' => 'Business',
                'image' => 'https://images.unsplash.com/photo-1541872703-74c5e44368f9?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHBvbGl0aWNzfGVufDB8fDB8fHww',
                'description' => 'Business',
                'category_id' => '1',
                'sub_category_id' => '1',
                'user_id' => '1',
                'views' => '1',
            ],
            [
                'meta_title' => 'Corporate',
                'meta_keyword' => 'Corporate',
                'meta_description' => 'Corporate',
                'title' => 'Corporate',
                'slug' => 'Corporate',
                'image' => 'https://images.unsplash.com/photo-1541872703-74c5e44368f9?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHBvbGl0aWNzfGVufDB8fDB8fHww',
                'description' => 'Corporate',
                'category_id' => '1',
                'sub_category_id' => '1',
                'user_id' => '1',
                'views' => '1',
            ],
            [
                'meta_title' => 'Health',
                'meta_keyword' => 'Health',
                'meta_description' => 'Health',
                'title' => 'Health',
                'slug' => 'Health',
                'image' => 'https://images.unsplash.com/photo-1541872703-74c5e44368f9?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHBvbGl0aWNzfGVufDB8fDB8fHww',
                'description' => 'Health',
                'category_id' => '1',
                'sub_category_id' => '1',
                'user_id' => '1',
                'views' => '1',
            ],
            [
                'meta_title' => 'Education',
                'meta_keyword' => 'Education',
                'meta_description' => 'Education',
                'title' => 'Education',
                'slug' => 'Education',
                'image' => 'https://images.unsplash.com/photo-1541872703-74c5e44368f9?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHBvbGl0aWNzfGVufDB8fDB8fHww',
                'description' => 'Education',
                'category_id' => '1',
                'sub_category_id' => '1',
                'user_id' => '1',
                'views' => '1',
            ],
            [
                'meta_title' => 'Science',
                'meta_keyword' => 'Science',
                'meta_description' => 'Science',
                'title' => 'Science',
                'slug' => 'Science',
                'image' => 'https://images.unsplash.com/photo-1541872703-74c5e44368f9?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHBvbGl0aWNzfGVufDB8fDB8fHww',
                'description' => 'Science',
                'category_id' => '1',
                'sub_category_id' => '1',
                'user_id' => '1',
                'views' => '1',
            ],
            [
                'meta_title' => 'Foods',
                'meta_keyword' => 'Foods',
                'meta_description' => 'Foods',
                'title' => 'Foods',
                'slug' => 'Foods',
                'image' => 'https://images.unsplash.com/photo-1541872703-74c5e44368f9?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHBvbGl0aWNzfGVufDB8fDB8fHww',
                'description' => 'Foods',
                'category_id' => '1',
                'sub_category_id' => '1',
                'user_id' => '1',
                'views' => '1',
            ],
            [
                'meta_title' => 'Business',
                'meta_keyword' => 'Business',
                'meta_description' => 'Business',
                'title' => 'Business',
                'slug' => 'Business',
                'image' => 'https://images.unsplash.com/photo-1541872703-74c5e44368f9?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHBvbGl0aWNzfGVufDB8fDB8fHww',
                'description' => 'Business',
                'category_id' => '1',
                'sub_category_id' => '1',
                'user_id' => '1',
                'views' => '1',
            ],
            [
                'meta_title' => 'Entertainment',
                'meta_keyword' => 'Entertainment',
                'meta_description' => 'Entertainment',
                'title' => 'Entertainment',
                'slug' => 'Entertainment',
                'image' => 'https://images.unsplash.com/photo-1541872703-74c5e44368f9?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHBvbGl0aWNzfGVufDB8fDB8fHww',
                'description' => 'Entertainment',
                'category_id' => '1',
                'sub_category_id' => '1',
                'user_id' => '1',
                'views' => '1',
            ],
            [
                'meta_title' => 'Travel',
                'meta_keyword' => 'Travel',
                'meta_description' => 'Travel',
                'title' => 'Travel',
                'slug' => 'Travel',
                'image' => 'https://images.unsplash.com/photo-1541872703-74c5e44368f9?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHBvbGl0aWNzfGVufDB8fDB8fHww',
                'description' => 'Travel',
                'category_id' => '1',
                'sub_category_id' => '1',
                'user_id' => '1',
                'views' => '1',
            ],
            [
                'meta_title' => 'Lifestyle',
                'meta_keyword' => 'Lifestyle',
                'meta_description' => 'Lifestyle',
                'title' => 'Lifestyle',
                'slug' => 'Lifestyle',
                'image' => 'https://images.unsplash.com/photo-1541872703-74c5e44368f9?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHBvbGl0aWNzfGVufDB8fDB8fHww',
                'description' => 'Lifestyle',
                'category_id' => '1',
                'sub_category_id' => '1',
                'user_id' => '1',
                'views' => '1',
            ],


        );
        foreach ($posts as $post) {
            Post::updateOrCreate($post);
        }
    }
}