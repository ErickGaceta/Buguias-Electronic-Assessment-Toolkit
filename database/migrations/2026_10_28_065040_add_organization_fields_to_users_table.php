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
            $table->string('user_type')->default('barangay');
            // barangay, municipal, dilg, admin

            $table->string('designation')->nullable();
            // e.g. Barangay Secretary, MLGOO

            $table->string('position')->nullable();
            // e.g. Barangay Secretary, Administrative Aide

            $table->string('office_name')->nullable();
            // e.g. DILG Buguias, Municipal Government of Buguias
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'user_type',
                'designation',
                'position',
                'office_name',
            ]);
        });
    }

};
