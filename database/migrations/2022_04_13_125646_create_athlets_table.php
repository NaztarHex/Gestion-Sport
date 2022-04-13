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
        Schema::create('athlets', function (Blueprint $table) {
            $table->id();
            $table->string('nom',60);
            $table->string('prenom',60);
            $table->enum('sexe',['HOMME','FEMME']);
            $table->string('photo');
            $table->integer('score')->default(0)->unsigned();
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
        Schema::dropIfExists('athlets');
    }
};