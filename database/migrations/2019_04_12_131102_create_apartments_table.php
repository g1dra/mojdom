<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->smallInteger('floor');
            $table->smallInteger('rooms');
            $table->smallInteger('bathrooms');
            $table->smallInteger('terrace');
            $table->boolean('air_conditioning');
            $table->boolean('elevator');
            $table->boolean('furniture');
            $table->boolean('pool');
            $table->boolean('parking');
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
        Schema::dropIfExists('apartments');
    }
}
