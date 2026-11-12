<?php

namespace Database\Seeders;

use App\Enums\UserType;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $admins = [
            [
                'name' => 'Erick C. Gaceta',
                'email' => env('SEED_DILG_EMAIL', 'mlgoo@example.com'),
                'designation' => 'DILG - Buguias',
                'position' => 'MLGOO Clerk',
            ],
        ];

        foreach ($admins as $data) {
            $user = User::updateOrCreate(
                ['email' => $data['email']],
                [
                    'name' => $data['name'],
                    'password' => env('SEED_ADMIN_PASSWORD', 'ChangeMe-12345!'),
                    'user_type' => UserType::Admin,
                    'designation' => $data['designation'],
                    'position' => $data['position'],
                    'office_name' => 'DILG Buguias',
                    'is_active' => true,
                ],
            );

            // Not in $fillable, so set it explicitly
            $user->forceFill(['email_verified_at' => now()])->save();
        }
    }
}