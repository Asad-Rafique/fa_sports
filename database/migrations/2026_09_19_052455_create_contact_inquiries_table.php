<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_inquiries', function (Blueprint $table) {
            $table->id();

            // Route chosen on "CHOOSE YOUR ROUTE" — team-club | custom-sportswear | oem-private-label | general
            $table->string('route')->nullable();

            // Step 1 — WHO ARE YOU?
            $table->string('organization_type')->nullable(); // Individual, Team/Club, Academy, School, Business, Brand, Retailer, Distributor, Other

            // Step 2 — WHAT BRINGS YOU TO FA SPORTS?
            $table->string('enquiry_type')->nullable(); // Sportswear, Team Kits, ... OEM/Private Label, General Enquiry

            // Step 3 — PROJECT DETAILS
            $table->string('project_name')->nullable();
            $table->string('sport')->nullable();
            $table->string('quantity')->nullable();       // kept as a string enquiry field, not a purchase quantity
            $table->string('target_market')->nullable();
            $table->date('required_date')->nullable();
            $table->text('project_requirements')->nullable();

            // Step 4 — YOUR DETAILS
            $table->string('name');
            $table->string('company')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();

            // Step 5 — MESSAGE
            $table->text('message');
            $table->string('attachment')->nullable(); // stored path on the private disk

            // Admin / lifecycle
            $table->enum('status', ['new', 'reviewing', 'responded', 'closed'])->default('new');
            $table->text('admin_notes')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_inquiries');
    }
};
