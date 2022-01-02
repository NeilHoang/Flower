<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
           'name' => Str::random(10),
           'description' => Str::random(20),
            'quantity' => '1',
            'price' => '123123',
            'sale' => '3123',
        ]);
    }
}
