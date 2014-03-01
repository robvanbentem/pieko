<?php

/**
 * @author Rob van Bentem
 * @created 07-02-2014 4:14 PM
 *
 * @description  
 */

class ShopTableSeeder extends Seeder {

    public function run()
    {
        DB::table('shops')->delete();

        Shop::create(array('name' => 'Supermarkt', 'default' => 1));
        Shop::create(array('name' => 'Visboer'));
        Shop::create(array('name' => 'Anytyme'));
        Shop::create(array('name' => 'Vietnamees'));
        Shop::create(array('name' => 'Overig'));
    }}