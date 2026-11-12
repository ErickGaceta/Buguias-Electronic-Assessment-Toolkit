
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MonthlySubmissionEvidence extends Model
{
    protected $fillable = [
        'monthly_submission_id',
        'evidence_name',
        'original_filename',
        'google_drive_file_id',
        'mime_type',
        'file_size',
        'uploaded_by',
    ];

    public function submission(): BelongsTo
    {
        return $this->belongsTo(
            MonthlySubmission::class,
            'monthly_submission_id'
        );
    }

    public function uploader(): BelongsTo
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
}
