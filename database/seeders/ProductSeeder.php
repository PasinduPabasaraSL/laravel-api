<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop',
            'price' => 999.99,
            'description' => 'A high-performance laptop for professionals.',
        ]);

        Product::create([
            'name' => 'Smartphone',
            'price' => 699.99,
            'description' => 'A latest-generation smartphone with powerful features.',
        ]);

        Product::create([
            'name' => 'Wireless Headphones',
            'price' => 199.99,
            'description' => 'Noise-canceling wireless headphones with long battery life.',
        ]);
    }
}
