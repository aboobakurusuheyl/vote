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
            17 => 
            array (
                'id' => 20,
                'name' => 'mnqf-view',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:47:05',
                'updated_at' => '2022-01-20 18:47:05',
            ),
            18 => 
            array (
                'id' => 21,
                'name' => 'mnqf-create',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:47:15',
                'updated_at' => '2022-01-20 18:47:15',
            ),
            19 => 
            array (
                'id' => 22,
                'name' => 'mnqf-update',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:47:22',
                'updated_at' => '2022-01-20 18:47:22',
            ),
            20 => 
            array (
                'id' => 23,
                'name' => 'mnqf-delete',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:47:27',
                'updated_at' => '2022-01-20 18:47:27',
            ),
            21 => 
            array (
                'id' => 24,
                'name' => 'mnqf-restore',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:47:32',
                'updated_at' => '2022-01-20 18:47:32',
            ),
            22 => 
            array (
                'id' => 25,
                'name' => 'quicklink-view-all',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:48:02',
                'updated_at' => '2022-01-20 18:48:02',
            ),
            23 => 
            array (
                'id' => 26,
                'name' => 'quicklink-veiw',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:48:16',
                'updated_at' => '2022-01-20 18:48:16',
            ),
            24 => 
            array (
                'id' => 27,
                'name' => 'quicklink-create',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:48:23',
                'updated_at' => '2022-01-20 18:48:23',
            ),
            25 => 
            array (
                'id' => 28,
                'name' => 'quicklink-update',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:48:35',
                'updated_at' => '2022-01-20 18:48:35',
            ),
            26 => 
            array (
                'id' => 29,
                'name' => 'quicklink-delete',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:48:53',
                'updated_at' => '2022-01-20 18:48:53',
            ),
            27 => 
            array (
                'id' => 30,
                'name' => 'quicklink-restore',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:49:02',
                'updated_at' => '2022-01-20 18:49:02',
            ),
            28 => 
            array (
                'id' => 31,
                'name' => 'file-view-all',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:49:24',
                'updated_at' => '2022-01-20 18:49:24',
            ),
            29 => 
            array (
                'id' => 32,
                'name' => 'file-view',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:49:27',
                'updated_at' => '2022-01-20 18:49:27',
            ),
            30 => 
            array (
                'id' => 33,
                'name' => 'file-create',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:49:36',
                'updated_at' => '2022-01-20 18:49:36',
            ),
            31 => 
            array (
                'id' => 34,
                'name' => 'file-update',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:49:43',
                'updated_at' => '2022-01-20 18:49:43',
            ),
            32 => 
            array (
                'id' => 35,
                'name' => 'file-delete',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:49:50',
                'updated_at' => '2022-01-20 18:49:50',
            ),
            33 => 
            array (
                'id' => 36,
                'name' => 'hero-view-all',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:50:08',
                'updated_at' => '2022-01-20 18:50:08',
            ),
            34 => 
            array (
                'id' => 37,
                'name' => 'hero-view',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:50:12',
                'updated_at' => '2022-01-20 18:50:12',
            ),
            35 => 
            array (
                'id' => 38,
                'name' => 'hero-create',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:50:19',
                'updated_at' => '2022-01-20 18:50:19',
            ),
            36 => 
            array (
                'id' => 39,
                'name' => 'hero-update',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:50:25',
                'updated_at' => '2022-01-20 18:50:25',
            ),
            37 => 
            array (
                'id' => 40,
                'name' => 'hero-delete',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:50:33',
                'updated_at' => '2022-01-20 18:50:33',
            ),
            38 => 
            array (
                'id' => 41,
                'name' => 'gallery-view-all',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:54:25',
                'updated_at' => '2022-01-20 18:54:25',
            ),
            39 => 
            array (
                'id' => 42,
                'name' => 'gallery-view',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:54:29',
                'updated_at' => '2022-01-20 18:54:29',
            ),
            40 => 
            array (
                'id' => 43,
                'name' => 'gallery-create',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:54:37',
                'updated_at' => '2022-01-20 18:54:37',
            ),
            41 => 
            array (
                'id' => 44,
                'name' => 'gallery-update',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:54:45',
                'updated_at' => '2022-01-20 18:54:45',
            ),
            42 => 
            array (
                'id' => 45,
                'name' => 'gallery-delete',
                'guard_name' => 'web',
                'created_at' => '2022-01-20 18:54:53',
                'updated_at' => '2022-01-20 18:54:53',
            ),
        ));
        
        
    }
}