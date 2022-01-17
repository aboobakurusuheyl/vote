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
            5 => 
            array (
                'id' => 17,
                'menu_id' => 2,
                'name' => 'BlackListed',
                'locale' => 'en_US',
                'class' => 'OptimistDigital\\MenuBuilder\\MenuItemTypes\\MenuItemStaticURLType',
                'value' => '/blacklisted',
                'target' => '_self',
                'data' => NULL,
                'parent_id' => NULL,
                'order' => 17,
                'enabled' => 1,
                'created_at' => '2022-01-13 18:31:37',
                'updated_at' => '2022-01-13 18:31:37',
            ),
            6 => 
            array (
                'id' => 18,
                'menu_id' => 2,
                'name' => 'Media',
                'locale' => 'en_US',
                'class' => 'App\\Nova\\MenuBuilderTypes\\PageLink',
                'value' => NULL,
                'target' => '_self',
                'data' => '{"page": "5"}',
                'parent_id' => NULL,
                'order' => 18,
                'enabled' => 1,
                'created_at' => '2022-01-13 18:31:54',
                'updated_at' => '2022-01-13 18:31:54',
            ),
            7 => 
            array (
                'id' => 19,
                'menu_id' => 2,
                'name' => 'Quick Links',
                'locale' => 'en_US',
                'class' => 'OptimistDigital\\MenuBuilder\\MenuItemTypes\\MenuItemStaticURLType',
                'value' => '/quick-links',
                'target' => '_self',
                'data' => NULL,
                'parent_id' => NULL,
                'order' => 19,
                'enabled' => 1,
                'created_at' => '2022-01-13 18:32:45',
                'updated_at' => '2022-01-13 18:32:45',
            ),
            8 => 
            array (
                'id' => 20,
                'menu_id' => 3,
                'name' => 'Footer item 1',
                'locale' => 'en_US',
                'class' => 'OptimistDigital\\MenuBuilder\\MenuItemTypes\\MenuItemStaticURLType',
                'value' => 'mqa.gov.mv',
                'target' => '_self',
                'data' => '[]',
                'parent_id' => NULL,
                'order' => 20,
                'enabled' => 1,
                'created_at' => '2022-01-13 18:36:23',
                'updated_at' => '2022-01-13 18:40:13',
            ),
            9 => 
            array (
                'id' => 21,
                'menu_id' => 3,
                'name' => 'Footer Item 2',
                'locale' => 'en_US',
                'class' => 'OptimistDigital\\MenuBuilder\\MenuItemTypes\\MenuItemStaticURLType',
                'value' => 'mqa.gov.mv',
                'target' => '_self',
                'data' => '[]',
                'parent_id' => NULL,
                'order' => 21,
                'enabled' => 1,
                'created_at' => '2022-01-13 18:36:33',
                'updated_at' => '2022-01-13 18:40:36',
            ),
            10 => 
            array (
                'id' => 22,
                'menu_id' => 3,
                'name' => 'Footer item 3',
                'locale' => 'en_US',
                'class' => 'OptimistDigital\\MenuBuilder\\MenuItemTypes\\MenuItemStaticURLType',
                'value' => 'mqa.gov.mv',
                'target' => '_self',
                'data' => NULL,
                'parent_id' => NULL,
                'order' => 22,
                'enabled' => 1,
                'created_at' => '2022-01-13 18:41:05',
                'updated_at' => '2022-01-13 18:41:05',
            ),
            11 => 
            array (
                'id' => 23,
                'menu_id' => 3,
                'name' => 'footer item 4',
                'locale' => 'en_US',
                'class' => 'OptimistDigital\\MenuBuilder\\MenuItemTypes\\MenuItemStaticURLType',
                'value' => 'mqa.gov.mv',
                'target' => '_self',
                'data' => NULL,
                'parent_id' => NULL,
                'order' => 23,
                'enabled' => 1,
                'created_at' => '2022-01-13 18:41:25',
                'updated_at' => '2022-01-13 18:41:25',
            ),
        ));
        
        
    }
}