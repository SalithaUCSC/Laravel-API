<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Product::create([
            'name' => 'Product 1',
            'price' => 20,
            'category' => 'electronics',
            'availability' => 1
        ]);

        \App\Product::create([
            'name' => 'Product 2',
            'price' => 10,
            'category' => 'accessories',
            'availability' => 1
        ]);

        \App\Product::create([
            'name' => 'Product 3',
            'price' => 35,
            'category' => 'house-hold',
            'availability' => 0
        ]);

        \App\Product::create([
            'name' => 'Product 4',
            'price' => 22,
            'category' => 'electronics',
            'availability' => 1
        ]);

        \App\Product::create([
            'name' => 'Product 5',
            'price' => 15,
            'category' => 'accessories',
            'availability' => 0
        ]);

    }
}
