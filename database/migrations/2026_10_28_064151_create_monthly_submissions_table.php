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
        Schema::create('monthly_submissions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('barangay_id')
                ->constrained('barangays')
                ->restrictOnDelete();

            $table->string('report_type'); // e.g. BaRCO
            $table->unsignedSmallInteger('report_month');
            $table->unsignedSmallInteger('report_year');

            $table->string('status')->default('draft');
            $table->timestamp('submitted_at')->nullable();

            $table->foreignId('reviewed_by')
                ->nullable()
                ->constrained('users')
                ->restrictOnDelete();

            $table->timestamp('reviewed_at')->nullable();
            $table->text('review_remarks')->nullable();

            $table->timestamps();

            $table->unique([
                'barangay_id',
                'report_type',
                'report_month',
                'report_year',
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monthly_submissions');
    }
};
