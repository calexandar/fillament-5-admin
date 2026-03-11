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
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('subtitle')->nullable();
            $table->string('button_text')->nullable();
            $table->string('button_link')->nullable();
            $table->string('background_image')->nullable();
            $table->string('stat_1_value')->default('250');
            $table->string('stat_1_label')->default('Projects Completed');
            $table->string('stat_2_value')->default('90');
            $table->string('stat_2_label')->default('Expert Designers');
            $table->string('stat_3_value')->default('150');
            $table->string('stat_3_label')->default('Happy Clients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};
