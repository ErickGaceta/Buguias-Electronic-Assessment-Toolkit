<?php

namespace App\Enums;

enum UserType: string
{
    case Barangay = 'barangay';
    case Municipal = 'municipal';
    case Admin = 'admin';

    public function canAccess(AssessmentLevel $level): bool
    {
        return match ($this) {
            self::Admin => true,
            self::Barangay => $level === AssessmentLevel::Barangay,
            self::Municipal => $level === AssessmentLevel::Municipal,
        };
    }
}