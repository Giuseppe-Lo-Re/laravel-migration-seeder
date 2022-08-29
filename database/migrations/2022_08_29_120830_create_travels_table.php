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
            // id
            $table->id();
            // destination
            $table->string('destination', 50);
            // departure
            $table->date('departure');
            // accommodation
            $table->string('accommodation', 20);
            // duration
            $table->tinyInteger('duration');
            // description
            $table->text('description');
            // refundable
            $table->boolean('refundable');
            // price
            $table->float('price', 6, 2);
            // timestamps
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
