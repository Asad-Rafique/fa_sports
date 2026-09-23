<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('product_type')->nullable()->after('category');   // Jersey, Shorts, Boots, Duffel Bag, ...
            $table->string('material')->nullable()->after('product_type');   // e.g. "Technical Mesh"
            $table->string('performance_level')->nullable()->after('material'); // Standard | Pro | Elite

            // Detailed key:value spec sheet, e.g. {"Grip":"High traction rubber outsole","Weight":"210g"}
            $table->json('technical_specs')->nullable()->after('specs');

            // 0-100 scores used only by the Compare Gear tool on The Gear Index
            // {"weight":80,"durability":85,"flexibility":75,"breathability":70,"grip":90,"performance_level":88}
            $table->json('compare_metrics')->nullable()->after('performance_index');

            $table->boolean('is_new')->default(false)->after('is_storytelling');
            $table->string('status')->default('active')->after('is_new'); // active | archived | coming_soon
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'product_type', 'material', 'performance_level',
                'technical_specs', 'compare_metrics', 'is_new', 'status',
            ]);
        });
    }
};
