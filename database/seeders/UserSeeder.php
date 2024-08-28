<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'fullname' => 'Administrator',
                'email' => 'admin@mail.com',
                'password' => Hash::make('rahasiaku'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
