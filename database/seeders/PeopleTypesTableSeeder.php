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
                'description' => '-',
                'id' => 1,
                'name' => 'Board Member',
                'updated_at' => '2021-11-26 14:44:48',
            ),
            1 => 
            array (
                'created_at' => '2021-11-26 14:45:07',
                'description' => 'Senior Staffs',
                'id' => 2,
                'name' => 'Senior Staffs',
                'updated_at' => '2021-11-26 14:45:07',
            ),
        ));
        
        
    }
}