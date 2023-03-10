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
        Schema::create('hero_link', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('hero_id')->constrained('heroes');
            $table->foreignId('link_id')->constrained('links');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hero_link');
    }
};
