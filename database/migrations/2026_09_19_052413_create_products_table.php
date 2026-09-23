<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('discipline_id')->nullable()->constrained()->nullOnDelete();
            $table->string('series')->nullable();      // e.g. PERFORMANCE SERIES
            $table->string('name');                    // e.g. FA-X PRO JERSEY
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->json('specs')->nullable();         // ["LIGHTWEIGHT","BREATHABLE",...]
            $table->decimal('price', 10, 2)->default(0);
            $table->string('image');                   // primary editorial image
            $table->boolean('is_featured')->default(false); // shown on homepage
            $table->boolean('is_white_section')->default(false); // white editorial vs dark
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
