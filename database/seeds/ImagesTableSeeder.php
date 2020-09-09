<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Image;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

      public function run(Faker $faker)
      {
          for ($i=0; $i < 3; $i++) {
            $new_image = new Image();
            $new_image->url = $faker->imageUrl(200,100);
            $new_image->album_id = $i + 1;
            $new_image->save();
          }
      }

}
