<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('partnership_requests')) {
            Schema::create('partnership_requests', function (Blueprint $table) {
                $table->id();

                $table->enum('type', ['partner', 'distributor'])
                    ->default('partner');

                $table->string('full_name');
                $table->string('email');
                $table->string('phone')->nullable();
                $table->string('company_name')->nullable();
                $table->string('country_region')->nullable();
                $table->string('business_type')->nullable();
                $table->text('message')->nullable();
                $table->string('status')->default('new');

                $table->timestamps();
            });
        } else {
            if (!Schema::hasColumn('partnership_requests', 'full_name')) {
                Schema::table('partnership_requests', function (Blueprint $table) {
                    $table->string('full_name')->nullable()->after('type');
                });
            }

            if (!Schema::hasColumn('partnership_requests', 'company_name')) {
                Schema::table('partnership_requests', function (Blueprint $table) {
                    $table->string('company_name')->nullable()->after('phone');
                });
            }

            if (!Schema::hasColumn('partnership_requests', 'country_region')) {
                Schema::table('partnership_requests', function (Blueprint $table) {
                    $table->string('country_region')->nullable()->after('company_name');
                });
            }

            if (!Schema::hasColumn('partnership_requests', 'business_type')) {
                Schema::table('partnership_requests', function (Blueprint $table) {
                    $table->string('business_type')->nullable()->after('country_region');
                });
            }

            if (!Schema::hasColumn('partnership_requests', 'status')) {
                Schema::table('partnership_requests', function (Blueprint $table) {
                    $table->string('status')->default('new')->after('message');
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partnership_requests');
    }
};