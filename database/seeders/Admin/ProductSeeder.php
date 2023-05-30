<?php

namespace Database\Seeders\Admin;

use App\Models\Admin\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'product_name' => 'My Website',
            'product_img' => 'admin/product_img/mywebsite.png',
            'product_description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque incidunt minus dignissimos iusto error aliquid nostrum quod delectus labore exercitationem ipsa, molestias, impedit ea, eius officiis doloribus cupiditate laudantium voluptatum.'
        ]);
        Product::create([
            'product_name' => 'My Website 2',
            'product_img' => 'admin/product_img/mywebsite.png',
            'product_description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque incidunt minus dignissimos iusto error aliquid nostrum.'
        ]);
    }
}
