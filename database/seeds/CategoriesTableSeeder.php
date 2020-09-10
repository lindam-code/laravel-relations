<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
          'Relax',
          'Palestra',
          'Concentrazione',
          'Meditazione',
          'Ricarica',
          'Carica',
          'Decompressione',
        ];

        foreach ($categories as $category) {
          $new_category = new Category();
          $new_category->name = $category;
          $new_category->save();
        }
    }
}
