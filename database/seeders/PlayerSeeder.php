<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dateOfBirth = date('Y-m-d', strtotime('01-02-1976'));

        DB::table('players')->insert([
        "name"=>"Leo",
            "surname"=>"Messi",
            "date_of_birth"=>$dateOfBirth,
            "team_id"=>1
        ]);
    }
}
