<?php

/**
 * @author Rob van Bentem
 * @created 07-02-2014 4:02 PM
 *
 * @description
 */
class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();

        User::create(array('name' => 'Rob', 'short_name' => 'RvB', 'enabled' => 1));
        User::create(array('name' => 'Rurik', 'short_name' => 'RW', 'enabled' => 1));
        User::create(array('name' => 'Luuk', 'short_name' => 'LH', 'enabled' => 1));
    }
}