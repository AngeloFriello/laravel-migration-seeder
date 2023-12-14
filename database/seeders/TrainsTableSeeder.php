<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Testing\Fakes\Fake;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(Faker $faker)
    {
        for($i = 0;$i < 100; $i++){

            $new_train = new Train();

            $new_train->train_code = $faker->unique()->bothify('?#?#?#?#?#');
            $new_train->company = $faker->word();
            $new_train->departure_state = $faker->city();
            $new_train->arrival_state = $faker->city();
            $new_train->departure_time = $faker->date('y-m-d')->time();
            $new_train->arrival_time = $faker->date('y-m-d')->time();
            $new_train->wagons_number = $faker->randomNumber(3);
            $new_train->on_time = $faker->boolean();
            $new_train->cancelled = $faker->boolean();

            $new_train->save();
        }
    }
}
