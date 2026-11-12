
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AssessmentEvidence extends Model
{
    protected $fillable = [
        'assessment_id',
        'assessment_result_id',
        'evidence_name',
        'original_filename',
        'google_drive_file_id',
        'mime_type',
        'file_size',
        'uploaded_by',
        'review_status',
        'remarks',
    ];

    public function assessment(): BelongsTo
    {
        return $this->belongsTo(Assessment::class);
    }

    public function result(): BelongsTo
    {
        return $this->belongsTo(
            AssessmentResult::class,
            'assessment_result_id'
        );
    }

    public function uploader(): BelongsTo
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
}
