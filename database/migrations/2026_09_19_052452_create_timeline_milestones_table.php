<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('timeline_milestones', function (Blueprint $table) {
            $table->id();
            $table->string('year');                 // e.g. "2004", "2011-2014"
            $table->string('title');                // e.g. THE BEGINNING, FIRST GEAR
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('image');                // archive image — real archival/product photo path
            $table->string('product_image')->nullable(); // product image for that era
            $table->string('achievement')->nullable();    // "important achievement" callout
            $table->string('category')->nullable();       // Origin | Product | Manufacturing | Global | Technology | Today
            $table->string('milestone_type')->nullable();  // e.g. "founding", "breakthrough", "expansion"
            $table->unsignedInteger('sort_order')->default(0);
            $table->string('status')->default('published'); // published | draft
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('timeline_milestones');
    }
};
