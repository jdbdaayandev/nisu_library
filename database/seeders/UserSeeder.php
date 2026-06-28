<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $data = [
            [
                'name' => 'June Delrey B. Da-ayan',
                'email' => 'jdbdaayan@gmail.com',
                'email_verified_at' => $now,
                'password' => Hash::make('daayan1996'),
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ];

        DB::table('users')->insert($data);
    }
}
