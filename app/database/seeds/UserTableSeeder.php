<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $users = array(
            array(
                    'fname' => 'David',
                    'lname' => 'Miller',
                    'email' => 'david@gmail.com',
                    'phone' => '12345'
                ),
                array(
                    'fname' => 'Rick',
                    'lname' => 'Simmons',
                    'email' => 'rick@gmail.com',
                    'phone' => '67890'
                ),
                array(
                    'fname' => 'Josh',
                    'lname' => 'Groban',
                    'email' => 'josh@gmail.com',
                    'phone' => '54321'
                ),
                array(
                    'fname' => 'Chester',
                    'lname' => 'Bennington',
                    'email' => 'chester@gmail.com',
                    'phone' => '09876'
                )
        );
        
        DB::table('users')->insert($users);
    }

}
