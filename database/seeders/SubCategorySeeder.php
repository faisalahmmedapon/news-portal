<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $sub_categories = array(
            ['name' => 'Politics','category_id' => 1],
            ['name' => 'Business','category_id' => 2],
            ['name' => 'Corporate','category_id' => 3],
            ['name' => 'Health','category_id' => 4],
            ['name' => 'Education','category_id' => 5],
            ['name' => 'Science','category_id' => 6],
            ['name' => 'Foods','category_id' => 7],
            ['name' => 'Entertainment','category_id' => 8],
            ['name' => 'Travel','category_id' => 9],
            ['name' => 'Lifestyle','category_id' => 10],
        );
        foreach ($sub_categories as $category) {
            SubCategory::updateOrCreate($category);
        }
    }
}