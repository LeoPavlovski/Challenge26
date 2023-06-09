<?php

namespace Database\Seeders;

use App\Models\ROLES;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**php
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>"Leo",
            "email"=>"leo.te2011@hotmail.com",
            "password"=>Hash::make("12345"),
            "role_id"=>ROLES::ADMIN->value
        ]);
    }
}
