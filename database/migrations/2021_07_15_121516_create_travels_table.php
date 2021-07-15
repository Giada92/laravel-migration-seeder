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
            $table->string('destination', 100);
            $table->string('period', 50); //15/07/2021 - 20/07/2021
            $table->unsignedTinyInteger('n_people'); //numero massimo di partecipanti
            $table->float('price', 8, 2);
            $table->mediumText('description'); //itinerary
            $table->boolean('is_avelable'); //se ancora è possibile partecipare 
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
