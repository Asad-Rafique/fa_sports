<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quote_requests', function (Blueprint $table) {
            $table->id();

            // 01 / CONTACT INFORMATION
            $table->string('name');
            $table->string('company')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('country')->nullable();

            // 02 / PRODUCT INTEREST — one or more of: Performance Apparel, Team Kits,
            // Training Wear, Footwear, Gloves, Accessories, Custom Sportswear
            $table->json('product_interests')->nullable();

            // 03 / YOUR REQUIREMENTS
            $table->text('requirements');

            // 04 / PREFERRED CONTACT — email | whatsapp | phone
            $table->string('preferred_contact')->nullable();

            $table->enum('status', ['new', 'reviewing', 'responded', 'closed'])->default('new');
            $table->text('admin_notes')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quote_requests');
    }
};
