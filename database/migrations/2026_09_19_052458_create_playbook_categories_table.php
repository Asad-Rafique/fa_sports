<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('playbook_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('number');   // 01..04
            $table->string('name');              // PERFORMANCE, TEAMWEAR, MINDSET, CRAFT
            $table->string('slug')->unique();
            $table->string('description');       // short 1-2 line description
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('playbook_categories');
    }
};
