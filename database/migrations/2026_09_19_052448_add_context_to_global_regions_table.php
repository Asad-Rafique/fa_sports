<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('global_regions', function (Blueprint $table) {
            // 'legacy' = THE FA LEGACY global journey map, 'contact' = CONNECT WITH FA global reach map
            $table->string('context')->default('legacy')->after('region');
        });
    }

    public function down(): void
    {
        Schema::table('global_regions', function (Blueprint $table) {
            $table->dropColumn('context');
        });
    }
};
