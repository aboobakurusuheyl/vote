<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'created_at' => '2021-11-15 08:46:20',
                'email' => 'xaayin@gmail.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'Mohamed Niyaaz',
                'password' => '$2y$10$Hbwzp2TaEaci0DxHfeI6oeoZ31OLjP8QgV6aTSXb2/xKuK0xTzqCO',
                'remember_token' => NULL,
                'updated_at' => '2021-11-15 08:46:20',
            ),
            1 => 
            array (
                'created_at' => '2021-11-15 08:46:20',
                'email' => 'aboobakurusuhail@gmail.com',
                'email_verified_at' => NULL,
                'id' => 2,
                'name' => 'Aboobakuru Suhail',
                'password' => '$2y$10$U7iaq74dYoOAHm1InEPTuu.BhlGQQ4QH44zaMKvOQ9lCRnlv7aT4O',
                'remember_token' => NULL,
                'updated_at' => '2021-11-15 08:46:20',
            ),

        ));
        
        
    }
}