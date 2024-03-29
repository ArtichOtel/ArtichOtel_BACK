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
        Schema::create('optional_services', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->json('name');
            $table->float('u_price');
            $table->boolean('by_person');
            $table->integer('nb_day');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('optional_services');
    }
};
