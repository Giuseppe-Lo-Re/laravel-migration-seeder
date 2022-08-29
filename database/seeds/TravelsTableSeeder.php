<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $accommodation = [
            'Hotel',
            'B & B',
            'Camping',
            'resort',
            'SPA'
        ];

        for($i = 0; $i <=4; $i++) {
            // creo una nuoa riga:
            $new_travel = new Travel();
            // popolo le righe:
            $new_travel->destination = $faker->city();
            $new_travel->departure = $faker->dateTime();
            $new_travel->accommodation = $faker->randomElement($accommodation);
            $new_travel->duration = $faker->randomDigitNotNull();
            $new_travel->description = $faker->text();
            $new_travel->refundable = rand(0, 1);
            $new_travel->price = rand(200, 3000);
            // salvo la riga
            $new_travel->save();
        }
    }
}
