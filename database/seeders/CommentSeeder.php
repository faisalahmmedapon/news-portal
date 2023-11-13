<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comments = array(
            ['comment' => 'Business','user_id' => 1,'post_id'=>1],
            ['comment' => 'Politics','user_id' => 1,'post_id'=>1],
            ['comment' => 'Corporate','user_id' => 1,'post_id'=>1],
            ['comment' => 'Health','user_id' => 1,'post_id'=>1],
            ['comment' => 'Education','user_id' => 1,'post_id'=>1],
            ['comment' => 'Science','user_id' => 1,'post_id'=>1],
            ['comment' => 'Foods','user_id' => 1,'post_id'=>1],
            ['comment' => 'Entertainment','user_id' => 1,'post_id'=>1],
            ['comment' => 'Travel','user_id' => 1,'post_id'=>1],
            ['comment' => 'Lifestyle','user_id' => 1,'post_id'=>1],
        );
        foreach ($comments as $comment) {
            Comment::updateOrCreate($comment);
        }
    }
}