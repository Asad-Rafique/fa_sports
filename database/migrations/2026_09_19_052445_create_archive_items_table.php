<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('archive_items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('era')->nullable();       // e.g. "Early 2000s"
            $table->string('category');               // Product | Design | Material | Packaging | Milestone
            $table->text('description')->nullable();
            $table->string('image');                  // real archival product photo path — cite source in the code comment
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('archive_items');
    }
};
