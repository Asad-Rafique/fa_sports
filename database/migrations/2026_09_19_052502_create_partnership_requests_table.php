<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        // Table already exists in the database.
    }

    public function down(): void
    {
        // Do not drop the existing partnership_requests table.
    }
};