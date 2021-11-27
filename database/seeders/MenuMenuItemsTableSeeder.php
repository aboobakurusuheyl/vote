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
                'class' => 'App\\Nova\\MenuBuilderTypes\\PageLink',
                'created_at' => '2021-11-24 14:36:34',
                'data' => '{"page": "1"}',
                'enabled' => 1,
                'id' => 1,
                'locale' => 'en_US',
                'menu_id' => 1,
                'name' => 'MQA',
                'order' => 1,
                'parent_id' => NULL,
                'target' => '_self',
                'updated_at' => '2021-11-24 14:38:40',
                'value' => NULL,
            ),
            1 => 
            array (
                'class' => 'App\\Nova\\MenuBuilderTypes\\PageLink',
                'created_at' => '2021-11-24 14:40:37',
                'data' => '{"page": "2"}',
                'enabled' => 1,
                'id' => 3,
                'locale' => 'en_US',
                'menu_id' => 1,
                'name' => 'MNQF',
                'order' => 2,
                'parent_id' => NULL,
                'target' => '_self',
                'updated_at' => '2021-11-24 14:40:37',
                'value' => NULL,
            ),
            2 => 
            array (
                'class' => 'App\\Nova\\MenuBuilderTypes\\PageLink',
                'created_at' => '2021-11-24 14:41:04',
                'data' => '{"page": "3"}',
                'enabled' => 1,
                'id' => 4,
                'locale' => 'en_US',
                'menu_id' => 1,
                'name' => 'Local',
                'order' => 1,
                'parent_id' => 11,
                'target' => '_self',
                'updated_at' => '2021-11-27 05:47:47',
                'value' => NULL,
            ),
            3 => 
            array (
                'class' => 'OptimistDigital\\MenuBuilder\\MenuItemTypes\\MenuItemTextType',
                'created_at' => '2021-11-24 14:41:22',
                'data' => NULL,
                'enabled' => 1,
                'id' => 5,
                'locale' => 'en_US',
                'menu_id' => 1,
                'name' => 'Media',
                'order' => 4,
                'parent_id' => NULL,
                'target' => '_self',
                'updated_at' => '2021-11-27 05:47:47',
                'value' => NULL,
            ),
            4 => 
            array (
                'class' => 'App\\Nova\\MenuBuilderTypes\\PageLink',
                'created_at' => '2021-11-24 14:41:33',
                'data' => '{"page": "5"}',
                'enabled' => 1,
                'id' => 6,
                'locale' => 'en_US',
                'menu_id' => 1,
                'name' => 'News',
                'order' => 1,
                'parent_id' => 5,
                'target' => '_self',
                'updated_at' => '2021-11-24 14:41:35',
                'value' => NULL,
            ),
            5 => 
            array (
                'class' => 'App\\Nova\\MenuBuilderTypes\\PageLink',
                'created_at' => '2021-11-24 14:41:50',
                'data' => '{"page": "4"}',
                'enabled' => 1,
                'id' => 7,
                'locale' => 'en_US',
                'menu_id' => 1,
                'name' => 'Event',
                'order' => 2,
                'parent_id' => 5,
                'target' => '_self',
                'updated_at' => '2021-11-24 14:41:54',
                'value' => NULL,
            ),
            6 => 
            array (
                'class' => 'OptimistDigital\\MenuBuilder\\MenuItemTypes\\MenuItemTextType',
                'created_at' => '2021-11-25 03:31:59',
                'data' => NULL,
                'enabled' => 1,
                'id' => 8,
                'locale' => 'en_US',
                'menu_id' => 1,
                'name' => 'Files',
                'order' => 5,
                'parent_id' => NULL,
                'target' => '_self',
                'updated_at' => '2021-11-27 05:47:47',
                'value' => NULL,
            ),
            7 => 
            array (
                'class' => 'App\\Nova\\MenuBuilderTypes\\PageLink',
                'created_at' => '2021-11-25 03:32:09',
                'data' => '{"page": "8"}',
                'enabled' => 1,
                'id' => 9,
                'locale' => 'en_US',
                'menu_id' => 1,
                'name' => 'Circular',
                'order' => 1,
                'parent_id' => 8,
                'target' => '_self',
                'updated_at' => '2021-11-25 03:32:12',
                'value' => NULL,
            ),
            8 => 
            array (
                'class' => 'App\\Nova\\MenuBuilderTypes\\PageLink',
                'created_at' => '2021-11-25 03:32:25',
                'data' => '{"page": "7"}',
                'enabled' => 1,
                'id' => 10,
                'locale' => 'en_US',
                'menu_id' => 1,
                'name' => 'Downloads',
                'order' => 2,
                'parent_id' => 8,
                'target' => '_self',
                'updated_at' => '2021-11-25 03:32:28',
                'value' => NULL,
            ),
            9 => 
            array (
                'class' => 'OptimistDigital\\MenuBuilder\\MenuItemTypes\\MenuItemTextType',
                'created_at' => '2021-11-27 05:47:33',
                'data' => NULL,
                'enabled' => 1,
                'id' => 11,
                'locale' => 'en_US',
                'menu_id' => 1,
                'name' => 'Approved Institution',
                'order' => 3,
                'parent_id' => NULL,
                'target' => '_self',
                'updated_at' => '2021-11-27 05:47:36',
                'value' => NULL,
            ),
            10 => 
            array (
                'class' => 'App\\Nova\\MenuBuilderTypes\\PageLink',
                'created_at' => '2021-11-27 05:54:17',
                'data' => '{"page": "9"}',
                'enabled' => 1,
                'id' => 12,
                'locale' => 'en_US',
                'menu_id' => 1,
                'name' => 'Oversea',
                'order' => 2,
                'parent_id' => 11,
                'target' => '_self',
                'updated_at' => '2021-11-27 05:54:20',
                'value' => NULL,
            ),
        ));
        
        
    }
}