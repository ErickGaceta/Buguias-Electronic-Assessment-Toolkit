<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MonthlySubmission extends Model
{
    protected $fillable = [
        'barangay_id',
        'report_type',
        'report_month',
        'report_year',
        'status',
        'submitted_at',
        'reviewed_by',
        'reviewed_at',
        'review_remarks',
    ];

    protected function casts(): array
    {
        return [
            'report_month' => 'integer',
            'report_year' => 'integer',
            'submitted_at' => 'datetime',
            'reviewed_at' => 'datetime',
        ];
    }

    public function barangay(): BelongsTo
    {
        return $this->belongsTo(Barangay::class);
    }

    public function reviewer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'reviewed_by');
    }

    public function evidence(): HasMany
    {
        return $this->hasMany(
            MonthlySubmissionEvidence::class,
            'monthly_submission_id'
        );
    }
}
