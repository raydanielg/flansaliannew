<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fee;

class FeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fees = [
            [
                'level_en' => 'Pre-Primary I',
                'level_sw' => 'Elimu ya awali hatua I',
                'tuition_fees' => '390,000',
                'food' => '200,000',
                'stationery' => '170,000',
                'other_expenses' => '35,000',
                'total' => '795,000/=',
                'term_1' => '412,500',
                'term_2' => '382,500',
            ],
            [
                'level_en' => 'Pre-Primary II',
                'level_sw' => 'Elimu ya awali hatua II',
                'tuition_fees' => '390,000',
                'food' => '200,000',
                'stationery' => '170,000',
                'other_expenses' => '35,000',
                'total' => '795,000/=',
                'term_1' => '412,500',
                'term_2' => '382,500',
            ],
            [
                'level_en' => 'Std 1',
                'level_sw' => 'Darasa I',
                'tuition_fees' => '440,000',
                'food' => '200,000',
                'stationery' => '205,000',
                'other_expenses' => '35,000',
                'total' => '880,000/=',
                'term_1' => '455,000',
                'term_2' => '425,000',
            ],
        ];

        foreach ($fees as $fee) {
            Fee::create($fee);
        }
    }
}
