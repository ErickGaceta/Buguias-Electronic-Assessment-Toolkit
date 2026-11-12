<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AssessmentResult extends Model
{
    protected $fillable = [
        'assessment_id',
        'assessment_indicator_id',
        'status',
        'remarks',
    ];

    public function assessment(): BelongsTo
    {
        return $this->belongsTo(Assessment::class);
    }

    public function indicator(): BelongsTo
    {
        return $this->belongsTo(
            AssessmentIndicator::class,
            'assessment_indicator_id'
        );
    }

    public function evidence(): HasMany
    {
        return $this->hasMany(
            AssessmentEvidence::class,
            'assessment_result_id'
        );
    }
}
