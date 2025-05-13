<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password'),
            'id_type' => 1,
            'id_no' => 1,
            'gender' => 'female',
            'dob' => Carbon::create('1990', '05', '13'),
            'address' => '1234 Elm Street Springfield, IL 62704 United States'
        ]);
    }
}
