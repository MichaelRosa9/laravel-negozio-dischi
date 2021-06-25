<?php

use Illuminate\Database\Seeder;
use App\Disc;

use Faker\Generator as Faker;

class DiscsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<100; $i++){

            $new_disc = new Disc();
            $new_disc->title = $faker->word();
            $new_disc->author = $faker->word();
            $new_disc->label = $faker->word();
            $new_disc->price = $faker->randomFloat(2, 1 , 999);
            $new_disc->genre = $faker->word();
            $new_disc->date_public = $faker->date();
            $new_disc->type = $faker->word();
            $new_disc->save();
        }
    }
}
