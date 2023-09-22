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
        Category::factory()->create([
            'name' => 'Laravel',
            'slug' => 'laravel'
        ]);

        Category::factory()->create([
            'name' => 'Javascript',
            'slug' => 'javascript'
        ]);

        Category::factory()->create([
            'name' => 'AlpineJs',
            'slug' => 'alpinejs'
        ]);

        // Define the number of categories you want to create
        $numCategories = 5;

        // Use the Category factory to create categories
        Category::factory($numCategories)->create();

    }
}
