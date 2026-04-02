<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdmissionStep;
use App\Models\AdmissionRequirement;

class AdmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $steps = [
            [
                'step_number' => 1,
                'title' => 'Fomu ya Maombi / Application Form',
                'description' => 'Chukua fomu ya maombi kutoka ofisi ya shule au pakua mtandaoni.',
                'icon' => 'bi-file-earmark-text',
            ],
            [
                'step_number' => 2,
                'title' => 'Usaili / Interview',
                'description' => 'Mwanafunzi atafanyiwa usaili wa kirafiki ili kupima uwezo wake.',
                'icon' => 'bi-people',
            ],
            [
                'step_number' => 3,
                'title' => 'Matokeo / Results',
                'description' => 'Matokeo ya usaili yatatolewa ndani ya siku tatu za kazi.',
                'icon' => 'bi-clipboard-check',
            ],
            [
                'step_number' => 4,
                'title' => 'Usajili / Registration',
                'description' => 'Baada ya kufaulu, mzazi atakamilisha taratibu za usajili na malipo.',
                'icon' => 'bi-check-circle',
            ],
        ];

        foreach ($steps as $step) {
            AdmissionStep::updateOrCreate(['step_number' => $step['step_number']], $step);
        }

        $requirements = [
            [
                'title' => 'Umri / Age',
                'requirement' => 'Mwanafunzi awe na umri unaostahiki kulingana na darasa analoandikishwa.',
                'category' => 'General',
            ],
            [
                'title' => 'Nyaraka / Documents',
                'requirement' => 'Cheti cha kuzaliwa (Original na Copy), Picha 2 za hivi karibuni.',
                'category' => 'General',
            ],
            [
                'title' => 'Afya / Health',
                'requirement' => 'Ripoti ya afya kutoka kwa daktari anayetambulika.',
                'category' => 'Medical',
            ],
        ];

        foreach ($requirements as $req) {
            AdmissionRequirement::updateOrCreate(['title' => $req['title']], $req);
        }
    }
}
