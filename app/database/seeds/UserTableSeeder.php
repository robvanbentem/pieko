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
        User::create(array('name' => 'Arjan', 'short_name' => 'AS', 'enabled' => 1));
        User::create(array('name' => 'Joshua', 'short_name' => 'JvD', 'enabled' => 1));
        User::create(array('name' => 'Maarten', 'short_name' => 'MT', 'enabled' => 1));
        User::create(array('name' => 'Ernstjan', 'short_name' => 'EJ', 'enabled' => 1));
        User::create(array('name' => 'Henri', 'short_name' => 'HvL', 'enabled' => 1));
        User::create(array('name' => 'Dienet', 'short_name' => 'DE', 'enabled' => 1));
    }
}