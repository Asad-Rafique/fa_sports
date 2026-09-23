<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('craft_items', function (Blueprint $table) {
            $table->id();
            $table->string('section'); // making | material | details | standard
            $table->unsignedInteger('number')->nullable(); // 01, 02, 03...
            $table->string('title');
            $table->string('description');
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('craft_items');
    }
};
