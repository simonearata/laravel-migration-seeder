<?php

use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_travel = new Travel();
        $new_travel->partenza = "Roma";
        $new_travel->destinazione = "Los Angeles";
        $new_travel->andata = "2021-12-20 07:05:00";
        $new_travel->ritorno = "2021-12-28 10:05:00";
        $new_travel->alloggio = "Casa in affitto";
        $new_travel->persone = "4";
        $new_travel->descrizione = "Bellissima casa a Venice Beach";
        $new_travel->prezzo = "1200.00";
        $new_travel->posti_rimasti = "10";
        $new_travel->save();
    }
}
