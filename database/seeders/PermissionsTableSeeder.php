<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'user-create',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 17:43:40',
                'updated_at' => '2022-01-20 17:43:40',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'institute-create',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 17:44:13',
                'updated_at' => '2022-01-20 17:44:13',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'course-create',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 17:44:30',
                'updated_at' => '2022-01-20 17:44:30',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'user-view-all',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 17:48:49',
                'updated_at' => '2022-01-20 17:49:35',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'user-view',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 17:59:12',
                'updated_at' => '2022-01-20 17:59:12',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'user-update',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 17:59:32',
                'updated_at' => '2022-01-20 17:59:32',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'user-delete',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 17:59:52',
                'updated_at' => '2022-01-20 17:59:52',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'user-restore',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:00:19',
                'updated_at' => '2022-01-20 18:00:19',
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'institute-view-all',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:02:19',
                'updated_at' => '2022-01-20 18:02:19',
            ),
            9 => 
            array (
                'id' => 12,
                'name' => 'institute-view',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:02:38',
                'updated_at' => '2022-01-20 18:02:38',
            ),
            10 => 
            array (
                'id' => 13,
                'name' => 'institute-update',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:02:58',
                'updated_at' => '2022-01-20 18:02:58',
            ),
            11 => 
            array (
                'id' => 14,
                'name' => 'institute-delete',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:03:18',
                'updated_at' => '2022-01-20 18:03:18',
            ),
            12 => 
            array (
                'id' => 15,
                'name' => 'course-view-all',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:07:14',
                'updated_at' => '2022-01-20 18:07:14',
            ),
            13 => 
            array (
                'id' => 16,
                'name' => 'course-view',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:07:20',
                'updated_at' => '2022-01-20 18:07:20',
            ),
            14 => 
            array (
                'id' => 17,
                'name' => 'course-update',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:07:37',
                'updated_at' => '2022-01-20 18:07:37',
            ),
            15 => 
            array (
                'id' => 18,
                'name' => 'course-delete',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:07:46',
                'updated_at' => '2022-01-20 18:07:46',
            ),
            16 => 
            array (
                'id' => 19,
                'name' => 'mnqf-view-all',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:23:58',
                'updated_at' => '2022-01-20 18:23:58',
            ),
        ));
        
        
    }
}