<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // PERFORMANCE APPAREL | FOOTWEAR | GLOVES & PROTECTION | TRAINING | ACCESSORIES
            $table->string('category')->nullable()->after('discipline_id');

            $table->json('colors')->nullable()->after('specs');   // ["Black","White","Red"]
            $table->json('sizes')->nullable()->after('colors');   // ["XS","S","M","L","XL"]
            $table->json('gallery')->nullable()->after('image');  // extra images for quick-view

            // FA PERFORMANCE INDEX — animated technical scores (0-100)
            $table->json('performance_index')->nullable()->after('gallery');
            $table->boolean('show_performance_index')->default(false)->after('performance_index');

            $table->boolean('is_storytelling')->default(false)->after('is_featured'); // large cinematic featured-product section
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'category', 'colors', 'sizes', 'gallery',
                'performance_index', 'show_performance_index', 'is_storytelling',
            ]);
        });
    }
};
