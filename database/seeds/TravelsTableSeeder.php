<?php

use App\Travel;
use Illuminate\Database\Seeder;
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
        for ($i=0; $i < 100; $i++) { 
            
            $new_travel = new Travel();
            $new_travel->partenza = $faker->city();
            $new_travel->destinazione = $faker->city();
            $new_travel->andata = $faker->dateTimeThisYear();
            $new_travel->ritorno = $faker->dateTimeThisYear();
            $new_travel->alloggio = $this->typeAlloggio();
            $new_travel->persone = $faker->numberBetween(0, 10);
            $new_travel->descrizione = $faker->sentence();
            $new_travel->prezzo = $faker->numberBetween(500, 1000);
            $new_travel->posti_rimasti = $faker->numberBetween(0, 10);
            $new_travel->save();
        }
    }

    private function typeAlloggio(){
        $arr = ['casa privata', 'hotel', 'villetta', 'loft'];
        shuffle($arr);
        return $arr[0];
    }
}
