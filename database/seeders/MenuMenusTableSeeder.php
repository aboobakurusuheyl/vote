<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_menus')->delete();
        
        \DB::table('menu_menus')->insert(array (
            0 => 
            array (
                'created_at' => '2021-11-24 14:32:24',
                'id' => 1,
                'name' => 'Navigation',
                'slug' => 'header',
                'updated_at' => '2021-11-24 14:32:24',
            ),
        ));
        
        
    }
}