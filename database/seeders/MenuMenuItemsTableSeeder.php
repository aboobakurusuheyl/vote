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
                'id' => 3,
                'menu_id' => 1,
                'name' => 'MNQF',
                'locale' => 'en_US',
                'class' => 'App\\Nova\\MenuBuilderTypes\\PageLink',
                'value' => NULL,
                'target' => '_self',
                'data' => '{"page": "2"}',
                'parent_id' => NULL,
                'order' => 2,
                'enabled' => 1,
                'created_at' => '2021-11-24 14:40:37',
                'updated_at' => '2021-11-24 14:40:37',
            ),
            2 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'name' => 'Local',
                'locale' => 'en_US',
                'class' => 'App\\Nova\\MenuBuilderTypes\\PageLink',
                'value' => NULL,
                'target' => '_self',
                'data' => '{"page": "3"}',
                'parent_id' => 11,
                'order' => 1,
                'enabled' => 1,
                'created_at' => '2021-11-24 14:41:04',
                'updated_at' => '2021-11-27 05:47:47',
            ),
            3 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'name' => 'Media',
                'locale' => 'en_US',
                'class' => 'OptimistDigital\\MenuBuilder\\MenuItemTypes\\MenuItemTextType',
                'value' => NULL,
                'target' => '_self',
                'data' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'enabled' => 1,
                'created_at' => '2021-11-24 14:41:22',
                'updated_at' => '2021-11-27 05:47:47',
            ),
            4 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'name' => 'News',
                'locale' => 'en_US',
                'class' => 'App\\Nova\\MenuBuilderTypes\\PageLink',
                'value' => NULL,
                'target' => '_self',
                'data' => '{"page": "5"}',
                'parent_id' => 5,
                'order' => 1,
                'enabled' => 1,
                'created_at' => '2021-11-24 14:41:33',
                'updated_at' => '2021-11-24 14:41:35',
            ),
            5 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'name' => 'Event',
                'locale' => 'en_US',
                'class' => 'App\\Nova\\MenuBuilderTypes\\PageLink',
                'value' => NULL,
                'target' => '_self',
                'data' => '{"page": "4"}',
                'parent_id' => 5,
                'order' => 2,
                'enabled' => 1,
                'created_at' => '2021-11-24 14:41:50',
                'updated_at' => '2021-11-24 14:41:54',
            ),
            6 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'name' => 'Files',
                'locale' => 'en_US',
                'class' => 'OptimistDigital\\MenuBuilder\\MenuItemTypes\\MenuItemTextType',
                'value' => NULL,
                'target' => '_self',
                'data' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'enabled' => 1,
                'created_at' => '2021-11-25 03:31:59',
                'updated_at' => '2021-11-27 05:47:47',
            ),
            7 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'name' => 'Circular',
                'locale' => 'en_US',
                'class' => 'App\\Nova\\MenuBuilderTypes\\PageLink',
                'value' => NULL,
                'target' => '_self',
                'data' => '{"page": "8"}',
                'parent_id' => 8,
                'order' => 1,
                'enabled' => 1,
                'created_at' => '2021-11-25 03:32:09',
                'updated_at' => '2021-11-25 03:32:12',
            ),
            8 => 
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
                'order' => 7,
                'enabled' => 1,
                'created_at' => '2021-11-25 03:32:25',
                'updated_at' => '2021-12-26 08:30:41',
            ),
            9 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'name' => 'Approved Institution',
                'locale' => 'en_US',
                'class' => 'OptimistDigital\\MenuBuilder\\MenuItemTypes\\MenuItemTextType',
                'value' => NULL,
                'target' => '_self',
                'data' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'enabled' => 1,
                'created_at' => '2021-11-27 05:47:33',
                'updated_at' => '2021-11-27 05:47:36',
            ),
            10 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'name' => 'Oversea',
                'locale' => 'en_US',
                'class' => 'App\\Nova\\MenuBuilderTypes\\PageLink',
                'value' => NULL,
                'target' => '_self',
                'data' => '{"page": "9"}',
                'parent_id' => 11,
                'order' => 2,
                'enabled' => 1,
                'created_at' => '2021-11-27 05:54:17',
                'updated_at' => '2021-11-27 05:54:20',
            ),
            11 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'name' => 'Contact',
                'locale' => 'en_US',
                'class' => 'OptimistDigital\\MenuBuilder\\MenuItemTypes\\MenuItemStaticURLType',
                'value' => '/contact',
                'target' => '_self',
                'data' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'enabled' => 1,
                'created_at' => '2021-11-28 05:38:33',
                'updated_at' => '2021-12-26 08:30:28',
            ),
        ));
        
        
    }
}