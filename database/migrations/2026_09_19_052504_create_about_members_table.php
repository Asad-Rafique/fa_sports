<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('about_members', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('position');
            $table->string('department')->nullable();

            $table->string('image')->nullable();

            $table->text('bio')->nullable();

            $table->unsignedInteger('sort_order')->default(0);

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_members');
    }
};