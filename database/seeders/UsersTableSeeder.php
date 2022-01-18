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
                'id' => 1,
                'name' => 'Mohamed Niyaaz',
                'email' => 'xaayin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Hbwzp2TaEaci0DxHfeI6oeoZ31OLjP8QgV6aTSXb2/xKuK0xTzqCO',
                'remember_token' => NULL,
                'created_at' => '2021-11-15 08:46:20',
                'updated_at' => '2021-11-15 08:46:20',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Aboobakuru Suhail',
                'email' => 'aboobakurusuhail@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$U7iaq74dYoOAHm1InEPTuu.BhlGQQ4QH44zaMKvOQ9lCRnlv7aT4O',
                'remember_token' => NULL,
                'created_at' => '2021-11-15 08:46:20',
                'updated_at' => '2021-11-15 08:46:20',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Abdulla Rashees Moosa',
                'email' => 'a.rasheed@mqa.gov.mv',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DW9XONZha/60w.NHzShFze6y8k5tXdaOTlF0qn9i4qejhS4n.YUiy',
                'remember_token' => NULL,
                'created_at' => '2022-01-17 21:43:16',
                'updated_at' => '2022-01-17 21:43:16',
            ),
        ));
        
        
    }
}