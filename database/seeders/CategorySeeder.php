<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create the first three categories
        $laravelCategory = Category::factory()->create([
            'name' => 'Laravel',
            'slug' => 'laravel',
        ]);

        $javascriptCategory = Category::factory()->create([
            'name' => 'Javascript',
            'slug' => 'javascript',
        ]);

        $alpineJsCategory = Category::factory()->create([
            'name' => 'AlpineJs',
            'slug' => 'alpinejs',
        ]);

        $numPosts = 5;

        // Create 5 posts for each of the first three categories
        $this->createPostsForCategory($laravelCategory, $numPosts);
        $this->createPostsForCategory($javascriptCategory, $numPosts);
        $this->createPostsForCategory($alpineJsCategory, $numPosts);

        // Define the number of categories you want to create
        $numCategories = 5;

        // Use the Category factory to create categories
        Category::factory($numCategories)->create();

    }

    /**
     * Create specified number of posts for a category.
     */
    private function createPostsForCategory(Category $category, int $count): void
    {
        $category->posts()->createMany(
            Post::factory($count)->raw()
        );
    }
}
