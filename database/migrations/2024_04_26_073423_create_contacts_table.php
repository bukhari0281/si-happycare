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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string("address");
            $table->string("email");
            $table->string("phone");

            $table->foreignId("city_id")->constrained("cities");
            $table->foreignId("health_destination_id")->constrained("health_destinations")->default(null);
            $table->foreignId("tourist_destination_id")->constrained("tourist_destinations")->default(null);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
