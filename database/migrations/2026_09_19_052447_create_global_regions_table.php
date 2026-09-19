<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('global_regions', function (Blueprint $table) {
            $table->id();
            $table->string('region');            // e.g. "South Asia"
            $table->string('market')->nullable();
            $table->string('product_system')->nullable();
            $table->string('partnership')->nullable();
            $table->float('map_x')->nullable();   // percentage position on the map graphic (0-100)
            $table->float('map_y')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('global_regions');
    }
};
