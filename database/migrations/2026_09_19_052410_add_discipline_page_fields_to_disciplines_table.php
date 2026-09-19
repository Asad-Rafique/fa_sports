<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('disciplines', function (Blueprint $table) {
            // Big kinetic sub-line, e.g. "SPEED. CONTROL. DOMINANCE." for Football
            $table->string('statement')->nullable()->after('tagline');

            // 4 labels for "WHAT DOES YOUR GAME ASK OF YOU?" e.g. ["Speed","Mobility","Endurance","Control"]
            $table->json('priorities')->nullable()->after('statement');

            // 7-key map for "THE DEMANDS CHANGE. THE STANDARD DOESN'T."
            // {"speed":90,"power":70,"mobility":85,"precision":75,"protection":60,"endurance":85,"control":90}
            $table->json('indicators')->nullable()->after('priorities');

            // Recommended gear categories for "DISCIPLINE x GEAR", e.g. ["Jerseys","Shorts","Football Boots", ...]
            $table->json('gear_categories')->nullable()->after('indicators');
        });
    }

    public function down(): void
    {
        Schema::table('disciplines', function (Blueprint $table) {
            $table->dropColumn(['statement', 'priorities', 'indicators', 'gear_categories']);
        });
    }
};
