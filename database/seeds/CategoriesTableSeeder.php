<?php

use Illuminate\Database\Seeder;

// importiamo il modello category

use App\Category;

// use Faker\Generator as Faker;

use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = config('categories');


      foreach ($categories as $category) {
        $newCategory = new Category();

        // $newCategory->name = $category->name

      }
    }
}
