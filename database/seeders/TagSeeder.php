<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = array(
            ['name' => 'Politics',],
            ['name' => 'Business'],
            ['name' => 'Corporate'],
            ['name' => 'Health'],
            ['name' => 'Education'],
            ['name' => 'Science'],
            ['name' => 'Foods'],
            ['name' => 'Business'],
            ['name' => 'Entertainment'],
            ['name' => 'Travel'],
            ['name' => 'Lifestyle'],
        );
        foreach ($tags as $tag) {
            Tag::updateOrCreate($tag);
        }
    }
}