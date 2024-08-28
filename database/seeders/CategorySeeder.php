<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'stationery special items',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'susu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'cemilan biskuit',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
