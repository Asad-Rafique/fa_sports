<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('material_samples', function (Blueprint $table) {
            $table->id();
            $table->string('name');        // Technical Mesh, Performance Fabric, Reinforced Stitching, ...
            $table->string('slug')->unique();
            $table->string('description');
            $table->string('image');
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('material_samples');
    }
};
