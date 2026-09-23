<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('category'); // SPORT, PERFORMANCE, GEAR, INNOVATION, TEAMS, MANUFACTURING, FA SPORTS
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('excerpt')->nullable();
            $table->string('cover_image');
            $table->boolean('is_featured')->default(false); // hero story on The Playbook
            $table->boolean('is_trending')->default(false);  // shows in ticker
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
