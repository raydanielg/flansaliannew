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
        Schema::create('fees', function (Blueprint $table) {
            $table->id();
            $table->string('level_en');
            $table->string('level_sw');
            $table->string('tuition_fees');
            $table->string('food');
            $table->string('stationery');
            $table->string('other_expenses');
            $table->string('total');
            $table->string('term_1')->nullable();
            $table->string('term_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fees');
    }
};
