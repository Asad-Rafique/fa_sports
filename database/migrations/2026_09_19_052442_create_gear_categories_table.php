<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gear_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('number');   // 01..08, shown large in Category Navigation
            $table->string('name');              // MATCH KITS, APPAREL, FOOTWEAR, GLOVES, BAGS, PROTECTION, TRAINING GEAR, ACCESSORIES
            $table->string('slug')->unique();
            $table->string('description');
            $table->string('image');
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gear_categories');
    }
};
