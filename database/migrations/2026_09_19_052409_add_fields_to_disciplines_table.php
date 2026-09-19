<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('disciplines', function (Blueprint $table) {

            if (!Schema::hasColumn('disciplines', 'slug')) {
                $table->string('slug')->unique()->after('id');
            }

            if (!Schema::hasColumn('disciplines', 'name')) {
                $table->string('name')->after('slug');
            }

            if (!Schema::hasColumn('disciplines', 'tagline')) {
                $table->string('tagline')->nullable()->after('name');
            }

            if (!Schema::hasColumn('disciplines', 'cover_image')) {
                $table->string('cover_image')->nullable()->after('tagline');
            }

            if (!Schema::hasColumn('disciplines', 'cover_video')) {
                $table->string('cover_video')->nullable()->after('cover_image');
            }

            if (!Schema::hasColumn('disciplines', 'sort_order')) {
                $table->integer('sort_order')->default(0)->after('cover_video');
            }
        });
    }

    public function down(): void
    {
        Schema::table('disciplines', function (Blueprint $table) {

            $columns = [];

            foreach ([
                'slug',
                'tagline',
                'cover_image',
                'cover_video',
                'sort_order'
            ] as $column) {
                if (Schema::hasColumn('disciplines', $column)) {
                    $columns[] = $column;
                }
            }

            if (!empty($columns)) {
                $table->dropColumn($columns);
            }
        });
    }
};