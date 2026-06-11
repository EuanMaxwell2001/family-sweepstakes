<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Seeder;

class SweepstakeSeeder extends Seeder
{
    public function run(): void
    {
        $participants = [
            'Euan', 'Calum', 'Morven', 'Ellen', 'Angus',
            'Sooz', 'Alex', 'Louis', 'Yasmin',
        ];

        foreach ($participants as $name) {
            Person::firstOrCreate(
                ['name' => $name],
                ['is_office' => false]
            );
        }

        // Higgins gets the leftover teams (shared family slot)
        Person::firstOrCreate(
            ['name' => 'Higgins'],
            ['is_office' => true]
        );
    }
}
