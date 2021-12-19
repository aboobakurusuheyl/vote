<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MnqfsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mnqfs')->delete();
        
        \DB::table('mnqfs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'level' => 1,
                'title' => 'CERTIFICATE I',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'level' => 2,
                'title' => 'CERTIFICATE II',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'level' => 3,
                'title' => 'CERTIFICATE III',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'level' => 4,
                'title' => 'CERTIFICATE IV',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'level' => 5,
                'title' => 'DIPLOMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'level' => 6,
                'title' => 'ADVANCED DIPLOMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'level' => 7,
                'title' => 'BACHELOR\'S DEGREE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'level' => 7,
                'title' => 'BACHELOR\'S DEGREE WITH HONOURS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'level' => 8,
                'title' => 'POSTGRADUATE DIPLOMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'level' => 4,
                'title' => 'ADVANCED CERTIFICATE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'level' => 6,
                'title' => 'ASSOCIATE DEGREE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'level' => 8,
                'title' => 'GRADUATE CERTIFICATE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'level' => 8,
                'title' => 'POSTGRADUATE CERTIFICATE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'level' => 8,
                'title' => 'POSTGRADUATE DIPLOMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'level' => 10,
                'title' => 'DOCTORAL DEGREE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'level' => 9,
                'title' => 'MASTER\'S DEGREE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}