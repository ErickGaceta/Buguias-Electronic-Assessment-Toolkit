<?php

namespace Database\Seeders;

use App\Models\Barangay;
use Illuminate\Database\Seeder;

class BarangaySeeder extends Seeder
{
    public function run(): void
    {
        $barangays = [
            'Abatan',
            'Amgaleyguey',
            'Amlimay',
            'Baculongan Norte',
            'Baculongan Sur',
            'Bangao',
            'Buyacaoan',
            'Calamagan',
            'Catlubong',
            'Lengaoan',
            'Loo',
            'Natubleng',
            'Poblacion',
            'Sebang',
        ];

        foreach ($barangays as $name) {
            Barangay::firstOrCreate([
                'barangay_name' => $name,
            ]);
        }
    }
}
