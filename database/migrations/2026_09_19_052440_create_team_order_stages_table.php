<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('team_order_stages', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('step_number');   // 1..6
            $table->string('name');                   // DISCOVER, DESIGN, SAMPLE, APPROVE, PRODUCE, DELIVER
            $table->string('description');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('team_order_stages');
    }
};
