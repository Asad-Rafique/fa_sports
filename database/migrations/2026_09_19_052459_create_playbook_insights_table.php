<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('playbook_insights', function (Blueprint $table) {
            $table->id();
            $table->string('label');       // FIT, CONTROL, DURABILITY
            $table->string('metric');      // 360°, 0.3s, 300+
            $table->string('description'); // short supporting line
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('playbook_insights');
    }
};
