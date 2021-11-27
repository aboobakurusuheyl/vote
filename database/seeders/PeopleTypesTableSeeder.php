<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PeopleTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('people_types')->delete();
        
        \DB::table('people_types')->insert(array (
            0 => 
            array (
                'created_at' => '2021-11-26 14:44:48',
                'description' => 'Board members are responsible for make all the necessary polices and decision about MQA.',
                'id' => 1,
                'name' => 'Board Member',
                'updated_at' => '2021-11-27 05:41:56',
            ),
            1 => 
            array (
                'created_at' => '2021-11-26 14:45:07',
                'description' => 'Are responsible of administrative works in MQA',
                'id' => 2,
                'name' => 'Senior Staffs',
                'updated_at' => '2021-11-27 05:42:33',
            ),
            2 => 
            array (
                'created_at' => '2021-11-26 20:06:02',
                'description' => 'Under information act information are provided through information officer',
                'id' => 3,
                'name' => 'Information Officer',
                'updated_at' => '2021-11-27 05:43:07',
            ),
        ));
        
        
    }
}