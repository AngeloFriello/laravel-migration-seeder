<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(Faker $faker): void
    {
        for($i = 0;$i < 100; $i++){

            $new_train = new Train();

            $new_train->train_code = $faker->unique()->bothify('?#?#?#?#?#');
            $new_train->company = $faker->word();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->dateTime();
            $new_train->arrival_time = $faker->dateTime();
            $new_train->wagons_number = $faker->randomNumber(2);
            $new_train->on_time = $faker->boolean();
            $new_train->cancelled = $faker->boolean();

            $new_train->save();
        }
    }
}
