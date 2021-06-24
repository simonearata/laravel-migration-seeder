<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('partenza',100);
            $table->string('destinazione',100);
            $table->dateTime('andata', 0);
            $table->dateTime('ritorno', 0);
            $table->string('alloggio',100);
            $table->tinyInteger('persone');
            $table->string('descrizione',150);
            $table->float('prezzo',10,2)->nullable();
            $table->tinyInteger('posti_rimasti')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels');
    }
}
