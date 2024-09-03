<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prices')->insert([
            [
                'product_id' => '1da36374-d7b9-44e7-a9aa-692086e6d595',
                'price' => 8500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'f426d784-0dbd-40a6-9d5d-f8a5cee6e34a',
                'price' => 8500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'c1deabb1-b1f4-46f3-a810-2006d3f786d8',
                'price' => 26600,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'f426d784-0dbd-40a6-9d5d-f8a5cee6e34a',
                'price' => 10000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
