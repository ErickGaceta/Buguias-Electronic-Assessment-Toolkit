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
        Schema::create('monthly_submission_evidence', function (Blueprint $table) {
            $table->id();

            $table->foreignId('monthly_submission_id')
                ->constrained('monthly_submissions')
                ->restrictOnDelete();

            $table->string('evidence_name');
            $table->string('original_filename');
            $table->string('google_drive_file_id')->unique();
            $table->string('mime_type')->nullable();
            $table->unsignedBigInteger('file_size')->nullable();

            $table->foreignId('uploaded_by')
                ->constrained('users')
                ->restrictOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monthly_submission_evidence');
    }
};
