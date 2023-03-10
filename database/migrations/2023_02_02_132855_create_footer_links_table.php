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
        Schema::create('footer_link', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('footer_id')->constrained('footers');
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
        Schema::dropIfExists('footer_link');
    }
};
