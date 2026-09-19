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
        if (Schema::hasColumn('partnership_requests', 'name')) {
            Schema::table('partnership_requests', function (Blueprint $table) {
                $table->dropColumn('name');
            });
        }

        if (Schema::hasColumn('partnership_requests', 'company')) {
            Schema::table('partnership_requests', function (Blueprint $table) {
                $table->dropColumn('company');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (!Schema::hasColumn('partnership_requests', 'name')) {
            Schema::table('partnership_requests', function (Blueprint $table) {
                $table->string('name')->nullable();
            });
        }

        if (!Schema::hasColumn('partnership_requests', 'company')) {
            Schema::table('partnership_requests', function (Blueprint $table) {
                $table->string('company')->nullable();
            });
        }
    }
};