<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('footwear_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');           // FOOTBALL BOOTS, TRAINING SHOES, RUNNING SHOES, BASKETBALL SHOES, INDOOR SPORTS SHOES
            $table->string('slug')->unique();
            $table->string('image');
            $table->string('description')->nullable(); // grip, stability, comfort, movement, durability copy
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('footwear_types');
    }
};
