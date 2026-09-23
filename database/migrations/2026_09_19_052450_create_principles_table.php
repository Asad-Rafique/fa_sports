<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('principles', function (Blueprint $table) {
            $table->id();
            $table->string('group');        // 'philosophy' (Performance Philosophy) | 'code' (The FA Code)
            $table->unsignedInteger('number')->nullable(); // 01..06 for Performance Philosophy
            $table->string('title');        // FIT, FLEXIBILITY, ... / PERFORM, PRECISION, ...
            $table->string('statement')->nullable();  // short line for philosophy cards
            $table->text('meaning')->nullable();       // shown on hover/click for FA Code words
            $table->string('image')->nullable();       // product detail image for philosophy cards
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('principles');
    }
};
