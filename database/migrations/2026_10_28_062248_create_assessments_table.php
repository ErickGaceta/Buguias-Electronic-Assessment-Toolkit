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
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('barangay_id')->constrained('barangays')->cascadeOnDelete();
            $table->foreignId('assessment_period_id')->constrained('assessment_periods')->cascadeOnDelete();
            $table->string('assessment_name');
            $table->string('status')->default('pending');
            $table->timestamps();
            $table->unique(['barangay_id','assessment_period_id','assessment_name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessments');
    }
};
