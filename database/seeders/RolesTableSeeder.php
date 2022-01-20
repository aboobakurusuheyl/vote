<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Administrator',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 17:34:23',
                'updated_at' => '2022-01-20 17:34:23',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'DataEntry',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 17:45:14',
                'updated_at' => '2022-01-20 17:51:43',
            ),
        ));
        
        
    }
}