<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->nullable();
            $table->enum('color', ['black', 'cream', 'golden', 'red']);
            $table->enum('group', ['countershaded', 'solid']);
            $table->enum('shade', ['dark', 'medium', 'light']);
            $table->string('image');
            $table->enum('rarity', ['common', 'uncommon', 'rare', 'special']);
            $table->enum('gained', ['custom', 'ncl', 'breed', 'applicator', 'combo', 'exclusive']);
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
        Schema::dropIfExists('bases');
    }
}
