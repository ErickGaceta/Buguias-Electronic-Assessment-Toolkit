<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AssessmentIndicator extends Model
{
    protected $fillable = [
        'indicator_name',
        'indicator_description',
    ];

    public function results(): HasMany
    {
        return $this->hasMany(
            AssessmentResult::class,
            'assessment_indicator_id'
        );
    }
}
