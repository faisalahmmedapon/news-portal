<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {




        $categories = [
            [
                "name"=> "Html",
            ],
            [
                "name"=> "Css",
            ],
            [
                "name"=> "Js",
            ],
            [
                "name"=> "Json",
            ],
            [
                "name"=> "Php",
            ],
            [
                "name"=> "Laravel",
            ],
        ];
        foreach ($categories as $category) {
            Category::updateOrCreate($category);
        }
    }
}
