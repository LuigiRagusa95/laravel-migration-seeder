<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\TravelPackage;

class TravelPackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 30; $i++) {
            $new_travel_package = new TravelPackage();
            $new_travel_package->room = $faker->numberBetween(1, 2);
            $new_travel_package->travellers = $faker->numberBetween(1, 6);
            $new_travel_package->going_to = $faker->sentence();
            $new_travel_package->leaving_from = $faker->sentence();
            $new_travel_package->departing = $faker->dateTime();
            $new_travel_package->returning = $faker->dateTime();

            $new_travel_package->save();
        }
    }
}
