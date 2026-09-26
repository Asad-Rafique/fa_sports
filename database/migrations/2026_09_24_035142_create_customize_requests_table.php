
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customize_requests', function (Blueprint $table) {
            $table->id();

            // Kit information
            $table->string('sport');
            $table->string('kit_type');

            // Team information
            $table->string('team_name');
            $table->string('contact_name');
            $table->string('email');
            $table->string('phone');

            // Customization
            $table->string('primary_color')->nullable();
            $table->string('secondary_color')->nullable();
            $table->string('accent_color')->nullable();

            $table->string('player_name')->nullable();
            $table->string('player_number')->nullable();

            $table->boolean('logo_required')->default(false);
            $table->boolean('player_names')->default(false);
            $table->boolean('player_numbers')->default(false);

            // Order
            $table->unsignedInteger('quantity')->default(1);

            // Performance / fabric
            $table->string('fabric')->nullable();
            $table->text('performance_requirements')->nullable();

            // Uploaded logo
            $table->string('logo_path')->nullable();

            // Extra requirements
            $table->text('additional_requirements')->nullable();

            // Request status
            $table->string('status')->default('new');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customize_requests');
    }
};
