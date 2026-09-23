<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('glove_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');           // GOALKEEPER GLOVES, BOXING GLOVES, TRAINING GLOVES, BATTING GLOVES, PROTECTION GLOVES
            $table->string('slug')->unique();
            $table->string('image');
            $table->json('labels');           // ["GRIP","IMPACT","CONTROL","FLEX","PROTECTION","DURABILITY"] subset
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('glove_types');
    }
};
