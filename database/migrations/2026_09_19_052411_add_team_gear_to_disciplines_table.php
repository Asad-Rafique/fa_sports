<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('disciplines', function (Blueprint $table) {
            // Recommended team equipment for this sport, e.g.
            // ["Custom Jersey","Shorts","Socks","Football Boots","Goalkeeper Gloves","Sports Bag"]
            $table->json('team_gear')->nullable()->after('gear_categories');
        });
    }

    public function down(): void
    {
        Schema::table('disciplines', function (Blueprint $table) {
            $table->dropColumn('team_gear');
        });
    }
};
