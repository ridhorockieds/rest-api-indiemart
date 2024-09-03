<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                // 'id' => Str::uuid(),
                'id' => '1da36374-d7b9-44e7-a9aa-692086e6d595',
                'name' => 'Lactasoy Drink Soy Milk Original Clasic 250mL',
                'category_id' => 2,
                'image' => 'https://assets.klikindomaret.com/products/20037021/20037021_thumb.jpg?Version.20.01.1.01',
                'link' => 'https://www.klikindomaret.com/product/drink-soy-milk-1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // 'id' => Str::uuid(),
                'id' => 'f426d784-0dbd-40a6-9d5d-f8a5cee6e34a',
                'name' => 'Delmonte Boba Milk Tea Red Velvet 240Ml',
                'category_id' => 2,
                'image' => 'https://assets.klikindomaret.com/products/20117682/20117682_thumb.jpg?Version.20.01.1.01',
                'link' => 'https://www.klikindomaret.com/product/boba-milk-tea-1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // 'id' => Str::uuid(),
                'id' => 'c1deabb1-b1f4-46f3-a810-2006d3f786d8',
                'name' => 'Pringles Potato Crisps Original 102G',
                'category_id' => 3,
                'image' => 'https://assets.klikindomaret.com/products/20023846/20023846_thumb.jpg?Version.20.01.1.01',
                'link' => 'https://www.klikindomaret.com/product/potato-crisps-3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
