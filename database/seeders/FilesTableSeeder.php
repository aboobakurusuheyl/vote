<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('files')->delete();
        
        \DB::table('files')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'New',
                'description' => 'files',
                'slug' => 'new',
                'page' => 8,
                'published_at' => '2021-12-26 07:00:00',
                'due_at' => '2021-12-26 07:00:00',
                'deleted_at' => NULL,
                'created_at' => '2021-12-26 10:06:23',
                'updated_at' => '2021-12-26 10:06:23',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Reports',
                'description' => 'e',
                'slug' => 'reports',
                'page' => 11,
                'published_at' => NULL,
                'due_at' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-12-26 10:06:46',
                'updated_at' => '2021-12-26 10:06:46',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Regulations',
                'description' => NULL,
                'slug' => 'regulations',
                'page' => 12,
                'published_at' => NULL,
                'due_at' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-12-26 10:07:14',
                'updated_at' => '2021-12-26 10:07:14',
            ),
        ));
        
        
    }
}