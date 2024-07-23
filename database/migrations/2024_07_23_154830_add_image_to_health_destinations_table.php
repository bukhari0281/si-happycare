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
        Schema::table('health_destinations', function (Blueprint $table) {
            $table->after('description', function ($table) {
                $table->string('image')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('health_destinations', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
};
