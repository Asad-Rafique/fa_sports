<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customization_requests', function (Blueprint $table) {
            $table->id();

            $table->json('selected_sections')->nullable();
            $table->json('customizations')->nullable();

            $table->string('name');
            $table->string('email');
            $table->string('phone');

            $table->string('status')->default('new');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customization_requests');
    }
};