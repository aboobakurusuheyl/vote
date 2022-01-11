<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuMenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_menu_items')->delete();
        
        \DB::table('menu_menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'name' => 'MQA',
                'locale' => 'en_US',
                'class' => 'App\\Nova\\MenuBuilderTypes\\PageLink',
                'value' => NULL,
                'target' => '_self',
                'data' => '{"page": "1"}',
                'parent_id' => NULL,
                'order' => 1,
                'enabled' => 1,
                'created_at' => '2021-11-24 14:36:34',
                'updated_at' => '2021-11-24 14:38:40',
            ),
            1 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'name' => 'Downloads',
                'locale' => 'en_US',
                'class' => 'App\\Nova\\MenuBuilderTypes\\PageLink',
                'value' => NULL,
                'target' => '_self',
                'data' => '{"page": "10"}',
                'parent_id' => NULL,
                'order' => 5,
                'enabled' => 1,
                'created_at' => '2021-11-25 03:32:25',
                'updated_at' => '2022-01-11 10:37:24',
            ),
            2 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'name' => 'Quality Assurance',
                'locale' => 'en_US',
                'class' => 'App\\Nova\\MenuBuilderTypes\\PageLink',
                'value' => NULL,
                'target' => '_self',
                'data' => '{"page": "13"}',
                'parent_id' => NULL,
                'order' => 2,
                'enabled' => 1,
                'created_at' => '2022-01-11 10:36:09',
                'updated_at' => '2022-01-11 10:36:13',
            ),
            3 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'name' => 'Qualification Register',
                'locale' => 'en_US',
                'class' => 'App\\Nova\\MenuBuilderTypes\\PageLink',
                'value' => NULL,
                'target' => '_self',
                'data' => '{"page": "3"}',
                'parent_id' => NULL,
                'order' => 3,
                'enabled' => 1,
                'created_at' => '2022-01-11 10:36:40',
                'updated_at' => '2022-01-11 10:37:27',
            ),
            4 => 
            array (
                'id' => 16,
                'menu_id' => 1,
                'name' => 'Regulation and Standards',
                'locale' => 'en_US',
                'class' => 'App\\Nova\\MenuBuilderTypes\\PageLink',
                'value' => NULL,
                'target' => '_self',
                'data' => '{"page": "15"}',
                'parent_id' => NULL,
                'order' => 4,
                'enabled' => 1,
                'created_at' => '2022-01-11 10:37:13',
                'updated_at' => '2022-01-11 10:37:27',
            ),
        ));
        
        
    }
}