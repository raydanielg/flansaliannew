<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members = [
            [
                'name' => 'John Smith',
                'position' => 'Head Teacher',
                'email' => 'headteacher@fransalian.ac.tz',
                'phone' => '+255 749 770 703',
                'bio' => 'Experienced educator with over 15 years of leadership in primary education.',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Mary Johnson',
                'position' => 'Deputy Head Teacher',
                'email' => 'deputy@fransalian.ac.tz',
                'phone' => '+255 688 367 100',
                'bio' => 'Passionate about student development and academic excellence.',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Grace Mwakalinga',
                'position' => 'Academic Coordinator',
                'email' => 'academic@fransalian.ac.tz',
                'phone' => null,
                'bio' => 'Coordinates curriculum delivery and supports teaching staff.',
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($members as $member) {
            Team::create($member);
        }
    }
}
