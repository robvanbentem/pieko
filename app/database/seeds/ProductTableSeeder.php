<?php

/**
 * Created by: Rob van Bentem
 * Date: 3/4/14
 * Time: 9:30 PM
 */
class ProductTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('products')->delete();

        Product::create(array('shop_id' => 1, 'name' => 'Frikandelbroodje', 'price' => 0.99));
        Product::create(array('shop_id' => 1, 'name' => 'Coca Cola 0.33L', 'price' => 0.53));
        Product::create(array('shop_id' => 1, 'name' => 'Half tarwe', 'price' => 1.03));
        Product::create(array('shop_id' => 1, 'name' => 'Kaas 48+ belegen Jumbo', 'price' => 2.14));
        Product::create(array('shop_id' => 1, 'name' => 'Grilwordt kaas plakjes', 'price' => 1.08));
        Product::create(array('shop_id' => 1, 'name' => 'Croissant ham kaas', 'price' => 0.79));
    }
}