<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config('db.products');

        foreach ($products as $product) {
            $singleproduct = new Product();
            $singleproduct -> title = $product['title'];
            $singleproduct -> img = $product['img'];
            $singleproduct -> hoverImg = $product['hoverImg'];
            $singleproduct -> description = $product['description'];
            $singleproduct -> price = $product['price'];
            $singleproduct -> availability = $product['availability'];
            $singleproduct -> save();
        }
    }
}
