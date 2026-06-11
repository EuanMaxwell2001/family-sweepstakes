<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\Team;
use Illuminate\Database\Seeder;

class SweepstakeSeeder extends Seeder
{
    public function run(): void
    {
        $draws = [
            ['name' => 'Morven', 'is_office' => false, 'teams' => [
                ['name' => 'Japan',         'country_code' => 'jp'],
                ['name' => 'Uruguay',       'country_code' => 'uy'],
                ['name' => 'Sweden',        'country_code' => 'se'],
                ['name' => 'United States', 'country_code' => 'us'],
                ['name' => 'Algeria',       'country_code' => 'dz'],
            ]],
            ['name' => 'Ellen', 'is_office' => false, 'teams' => [
                ['name' => 'Paraguay',               'country_code' => 'py'],
                ['name' => 'Canada',                 'country_code' => 'ca'],
                ['name' => 'Morocco',                'country_code' => 'ma'],
                ['name' => 'Mexico',                 'country_code' => 'mx'],
                ['name' => 'Bosnia and Herzegovina', 'country_code' => 'ba'],
            ]],
            ['name' => 'Calum', 'is_office' => false, 'teams' => [
                ['name' => 'Colombia', 'country_code' => 'co'],
                ['name' => 'Iraq',     'country_code' => 'iq'],
                ['name' => 'Turkey',   'country_code' => 'tr'],
                ['name' => 'Portugal', 'country_code' => 'pt'],
                ['name' => 'Curaçao',  'country_code' => 'cw'],
            ]],
            ['name' => 'Euan', 'is_office' => false, 'teams' => [
                ['name' => 'Cape Verde Islands', 'country_code' => 'cv'],
                ['name' => 'Argentina',          'country_code' => 'ar'],
                ['name' => 'Ecuador',            'country_code' => 'ec'],
                ['name' => 'Ghana',              'country_code' => 'gh'],
                ['name' => 'Norway',             'country_code' => 'no'],
            ]],
            ['name' => 'Alex', 'is_office' => false, 'teams' => [
                ['name' => "Côte d'Ivoire", 'country_code' => 'ci'],
                ['name' => 'Iran',          'country_code' => 'ir'],
                ['name' => 'Australia',     'country_code' => 'au'],
                ['name' => 'Austria',       'country_code' => 'at'],
                ['name' => 'South Africa',  'country_code' => 'za'],
            ]],
            ['name' => 'Susie', 'is_office' => false, 'teams' => [
                ['name' => 'Spain',    'country_code' => 'es'],
                ['name' => 'Congo DR', 'country_code' => 'cd'],
                ['name' => 'England',  'country_code' => 'gb-eng'],
                ['name' => 'Brazil',   'country_code' => 'br'],
                ['name' => 'Germany',  'country_code' => 'de'],
            ]],
            ['name' => 'Gus', 'is_office' => false, 'teams' => [
                ['name' => 'Netherlands',  'country_code' => 'nl'],
                ['name' => 'Saudi Arabia', 'country_code' => 'sa'],
                ['name' => 'France',       'country_code' => 'fr'],
                ['name' => 'Egypt',        'country_code' => 'eg'],
                ['name' => 'Qatar',        'country_code' => 'qa'],
            ]],
            ['name' => 'Louis', 'is_office' => false, 'teams' => [
                ['name' => 'Senegal',        'country_code' => 'sn'],
                ['name' => 'Tunisia',        'country_code' => 'tn'],
                ['name' => 'Korea Republic', 'country_code' => 'kr'],
                ['name' => 'Uzbekistan',     'country_code' => 'uz'],
                ['name' => 'Jordan',         'country_code' => 'jo'],
            ]],
            ['name' => 'Yasmin', 'is_office' => false, 'teams' => [
                ['name' => 'Haiti',          'country_code' => 'ht'],
                ['name' => 'New Zealand',    'country_code' => 'nz'],
                ['name' => 'Croatia',        'country_code' => 'hr'],
                ['name' => 'Panama',         'country_code' => 'pa'],
                ['name' => 'Czech Republic', 'country_code' => 'cz'],
            ]],
            ['name' => 'Higgins', 'is_office' => true, 'teams' => [
                ['name' => 'Scotland',    'country_code' => 'gb-sct'],
                ['name' => 'Switzerland', 'country_code' => 'ch'],
                ['name' => 'Belgium',     'country_code' => 'be'],
            ]],
        ];

        foreach ($draws as $draw) {
            $person = Person::firstOrCreate(
                ['name' => $draw['name']],
                ['is_office' => $draw['is_office']]
            );

            foreach ($draw['teams'] as $team) {
                Team::firstOrCreate(
                    ['person_id' => $person->id, 'name' => $team['name']],
                    ['country_code' => $team['country_code']]
                );
            }
        }
    }
}
