<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dateOfBirth = date('d-m-Y', strtotime('01-1-76'));
        $dateOfBirth2 = date('d-m-Y', strtotime('01-1-99'));

        DB::table('teams')->insert([
                [
                    "name"=>"Manchester City",
                    "year_of_foundation"=> '1970-06-01'
                ],
                [
                    "name"=>"Liverpool",
                    "year_of_foundation"=> '1970-06-01'
                ]
        ]
        );
    }
}
