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
                'id' => 1,
                'name' => 'Navigation',
                'slug' => 'header',
                'created_at' => '2021-11-24 14:32:24',
                'updated_at' => '2021-11-24 14:32:24',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Top Menu',
                'slug' => 'top',
                'created_at' => '2022-01-13 18:30:47',
                'updated_at' => '2022-01-13 18:30:47',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Footer',
                'slug' => 'footer',
                'created_at' => '2022-01-13 18:36:08',
                'updated_at' => '2022-01-13 18:36:08',
            ),
        ));
        
        
    }
}