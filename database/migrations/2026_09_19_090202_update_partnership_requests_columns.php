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

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('partnership_requests', function (Blueprint $table) {
            $columns = [
                'full_name',
                'company_name',
                'country_region',
                'business_type',
                'status',
            ];

            foreach ($columns as $column) {
                if (Schema::hasColumn('partnership_requests', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};