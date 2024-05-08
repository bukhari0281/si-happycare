<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tourist_destinations', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->longText("description");
            $table->foreignId('wisata_kategori_id')->constrained();

            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('bahasa_tourist_health_destination', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bahasa_id')->constrained();
            $table->foreignId('tourist_destination_id')->constrained()->nullable();
            $table->foreignId('health_destination_id')->constrained()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tourist_destinations');
        Schema::dropIfExists('bahasas');
    }
};
