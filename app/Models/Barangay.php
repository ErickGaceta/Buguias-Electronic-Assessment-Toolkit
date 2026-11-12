<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Barangay extends Model
{
    protected $fillable = [
        'barangay_name',
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function assessments(): HasMany
    {
        return $this->hasMany(Assessment::class);
    }

    public function monthlySubmissions(): HasMany
    {
        return $this->hasMany(MonthlySubmission::class);
    }
}
