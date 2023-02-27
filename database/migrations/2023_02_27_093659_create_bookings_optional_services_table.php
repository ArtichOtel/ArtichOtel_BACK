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
        Schema::create('bookings_optional_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bookings_id')->constrained('bookings');
            $table->foreignId('optional_services_id')->constrained('optional_services');
            $table->integer('multiplicator');
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
        Schema::dropIfExists('bookings_optional_services');
    }
};
