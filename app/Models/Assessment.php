<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Assessment extends Model
{
    protected $fillable = [
        'barangay_id',
        'assessment_period_id',
        'assessment_name',
        'status',
    ];

    public function barangay(): BelongsTo
    {
        return $this->belongsTo(Barangay::class);
    }

    public function period(): BelongsTo
    {
        return $this->belongsTo(
            AssessmentPeriod::class,
            'assessment_period_id'
        );
    }

    public function results(): HasMany
    {
        return $this->hasMany(AssessmentResult::class);
    }

    public function evidence(): HasMany
    {
        return $this->hasMany(AssessmentEvidence::class);
    }
}
