<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Idées', 'En cours', 'Terminé'];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
