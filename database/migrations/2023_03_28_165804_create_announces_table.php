zz<?php

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
        Schema::create('announces', function (Blueprint $table) {
            $table->id();
            $table->string('poste');
            $table->string('nom_entreprise');
            $table->date('délais');
            $table->string('description');
            $table->string('site');
            /*$table->foreignId('adminid')
                ->constrained('admins')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('userid')
                ->constrained('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');*/
            
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
        Schema::dropIfExists('announces');
    }
};
