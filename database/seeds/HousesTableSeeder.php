<?php

use App\House;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) //dependency injection
    {

        //equivale a
        //$faker = new Faker();

        for ($i=0; $i<1000; $i++) {

            $house = new House();
            $house->reference_number = $faker->bothify('?????-#####');
            $house->name = $faker->words(3, true);
            $house->description = null;
            $house->amount = $faker->randomFloat(1, 20000, 1000000);
            $house->sm = $faker->numberBetween(10, 1000);
            $house->rooms = $faker->numberBetween(1, 20);
            $house->address = $faker->streetAddress();
            $house->city = $faker->city();
            $house->province = $faker->stateAbbr();
            $house->zip = $faker->postcode();
            $house->energy_rating = $faker->randomElement(['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $house->save();

        }

    }

}
