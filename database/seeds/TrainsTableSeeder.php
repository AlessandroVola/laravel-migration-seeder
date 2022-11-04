<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i = 0;$i < 100; $i++){
        $train = new Train();
        $train->azienda = $faker->name();
        $train->stazione_partenza = $faker->name();
        $train->stazione_arrivo = $faker->name();
        $train->orario_partenza = $faker->dateTimeAD();
        $train->orario_arrivo = $faker->dateTimeAD();
        $train->codice_treno = $faker->randomNumber(1,0,120);
        $train->numero_carrozze = $faker->randomNumber(1,0,25);
        $train->in_orario = $faker->boolean();
        $train->cancellato = $faker->boolean();
        $train->save();
    }
    }
}
