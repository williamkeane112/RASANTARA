<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('users')->insert([
        [
            'email' => 'user@gmail.com',
            'username' => 'user',
            'password' => Hash::make(1234)
        ],
        [
            'email' => 'use2r@gmail.com',
            'username' => 'user2',
            'password' => Hash::make(1234)
        ],
        ]);
    }
}
