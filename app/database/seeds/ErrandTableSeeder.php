<?php

/**
 * Created by: Rob van Bentem
 * Date: 3/4/14
 * Time: 9:34 PM
 */
class ErrandTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('errands')->delete();

        Errand::create(array( // 1
            'user_id' => 1,
            'product_id' => 4,
            'amount' => 1,
            'date_from' => date('Y-m-d'),
            'date_to' => date('Y-m-d', time() + 60 * 60 * 24 * 0)
        ));

        Errand::create(array( // 2
            'user_id' => 2,
            'product_id' => 3,
            'amount' => 1,
            'date_from' => date('Y-m-d'),
            'date_to' => date('Y-m-d', time() + 60 * 60 * 24 * 1)
        ));

        Errand::create(array( // 3
            'user_id' => 3,
            'product_id' => 6,
            'amount' => 2,
            'date_from' => date('Y-m-d'),
            'date_to' => date('Y-m-d', time() + 60 * 60 * 24 * 2)
        ));

        Errand::create(array( // 4
            'user_id' => 2,
            'product_id' => 1,
            'amount' => 2,
            'date_from' => date('Y-m-d'),
            'date_to' => date('Y-m-d', time() + 60 * 60 * 24 * 3)
        ));

        Errand::create(array( // 5
            'user_id' => 2,
            'product_id' => 5,
            'amount' => 1,
            'date_from' => date('Y-m-d'),
            'date_to' => date('Y-m-d', time() + 60 * 60 * 24 * 4)
        ));

        Errand::create(array( // 6
            'user_id' => 3,
            'product_id' => 2,
            'amount' => 1,
            'date_from' => date('Y-m-d'),
            'date_to' => date('Y-m-d', time() + 60 * 60 * 24 * 5)
        ));
    }
}