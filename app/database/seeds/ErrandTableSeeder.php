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
            'date' => date('Y-m-d H:i:s')
        ));

        Errand::create(array( // 2
            'user_id' => 2,
            'product_id' => 3,
            'amount' => 1,
            'date' => date('Y-m-d H:i:s')
        ));

        Errand::create(array( // 3
            'user_id' => 3,
            'product_id' => 6,
            'amount' => 2,
            'date' => date('Y-m-d H:i:s')
        ));

        Errand::create(array( // 4
            'user_id' => 2,
            'product_id' => 1,
            'amount' => 2,
            'date' => date('Y-m-d H:i:s')
        ));

        Errand::create(array( // 5
            'user_id' => 2,
            'product_id' => 5,
            'amount' => 1,
            'date' => date('Y-m-d H:i:s')
        ));

        Errand::create(array( // 6
            'user_id' => 3,
            'product_id' => 2,
            'amount' => 1,
            'date' => date('Y-m-d H:i:s')
        ));
    }
}