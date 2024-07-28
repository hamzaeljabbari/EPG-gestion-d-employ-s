<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postules', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('email');
            $table->date('date_de_naissance');
            $table->string('genre');
            $table->string('Téléphone');
            $table->string('message');
            $table->string('cv');
            //$table->int('idn');
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
        Schema::dropIfExists('postules');
    }
};
