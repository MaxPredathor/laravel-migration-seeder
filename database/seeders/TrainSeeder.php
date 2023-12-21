<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i < 10; $i++) {

            $train = new Train();
            $train->azienda = $faker->company();
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->dateTime();
            $train->orario_di_arrivo = $faker->dateTime();
            $train->giorno_di_partenza = $faker->dateTimeBetween('-1 day', '+1 day');
            $train->giorno_di_arrivo = $faker->dateTimeBetween('-1 day', '+2 day');
            $train->codice_treno = $faker->ean13();
            $train->numero_carrozze = $faker->numberBetween(1, 20);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
        }
    }
}
