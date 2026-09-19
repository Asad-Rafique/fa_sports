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
        if (
            Schema::hasTable('articles') &&
            !Schema::hasColumn('articles', 'playbook_featured')
        ) {
            Schema::table('articles', function (Blueprint $table) {
                $table->boolean('playbook_featured')
                    ->default(false)
                    ->after('team_story');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (
            Schema::hasTable('articles') &&
            Schema::hasColumn('articles', 'playbook_featured')
        ) {
            Schema::table('articles', function (Blueprint $table) {
                $table->dropColumn('playbook_featured');
            });
        }
    }
};