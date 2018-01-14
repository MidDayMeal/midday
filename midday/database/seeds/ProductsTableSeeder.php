<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
        	'name' => 'Deshi Vatt',
        	'slug' => 'vatt',
        	'details' => 'The Best Quality Vatt',
        	'price' => '20'
        ]);

        Product::create([
        	'name' => 'Fish',
        	'slug' => 'fish',
        	'details' => 'fish carri',
        	'price' => '35'
        ]);

        Product::create([
        	'name' => 'Desi Dal',
        	'slug' => 'dal',
        	'details' => 'Testy dal',
        	'price' => '15'
        ]);

        Product::create([
        	'name' => 'Veg Salad',
        	'slug' => 'salad',
        	'details' => 'Testy vagi salad',
        	'price' => '15'
        ]);
    }
}
