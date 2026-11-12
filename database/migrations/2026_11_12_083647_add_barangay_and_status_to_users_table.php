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
        Schema::table('users', function (Blueprint $table) {
            if (! Schema::hasColumn('users', 'user_type')) {
                $table->string('user_type')->default('barangay');
            }
            if (! Schema::hasColumn('users', 'designation')) {
                $table->string('designation')->nullable();
            }
            if (! Schema::hasColumn('users', 'position')) {
                $table->string('position')->nullable();
            }
            if (! Schema::hasColumn('users', 'office_name')) {
                $table->string('office_name')->nullable();
            }
            if (! Schema::hasColumn('users', 'is_active')) {
                $table->boolean('is_active')->default(true);
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
