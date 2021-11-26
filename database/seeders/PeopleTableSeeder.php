<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('people')->delete();
        
        \DB::table('people')->insert(array (
            0 => 
            array (
                'created_at' => '2021-11-26 14:55:20',
                'deleted_at' => NULL,
                'designation' => 'Chief Executive Officer',
                'email' => 'hannan@mqa.gov.mv',
                'expired_at' => NULL,
                'id' => 1,
                'name' => 'Dr. Abdul Hannan Waheed',
                'people_type_id' => 1,
                'updated_at' => '2021-11-26 14:56:34',
            ),
            1 => 
            array (
                'created_at' => '2021-11-26 14:58:25',
                'deleted_at' => NULL,
                'designation' => 'Director of Framework Service and Advocacy',
                'email' => 'nazimadd@mqa.gov.mv',
                'expired_at' => NULL,
                'id' => 2,
                'name' => 'Ms. Nazima Mohamed',
                'people_type_id' => 1,
                'updated_at' => '2021-11-26 14:58:25',
            ),
            2 => 
            array (
                'created_at' => '2021-11-26 14:59:04',
                'deleted_at' => NULL,
                'designation' => 'Director of Quality Assurance Services',
                'email' => 'mary@mqa.gov.mv',
                'expired_at' => NULL,
                'id' => 3,
                'name' => 'Ms. Mariyam Sudha',
                'people_type_id' => 1,
                'updated_at' => '2021-11-26 14:59:04',
            ),
            3 => 
            array (
                'created_at' => '2021-11-26 14:59:51',
                'deleted_at' => NULL,
                'designation' => 'Director of Corporate Service and Finance',
                'email' => 'ahsan@mqa.gov.mv',
                'expired_at' => NULL,
                'id' => 4,
                'name' => 'Mr. Ahmed Ahsan',
                'people_type_id' => 1,
                'updated_at' => '2021-11-26 14:59:51',
            ),
            4 => 
            array (
                'created_at' => '2021-11-26 15:03:19',
                'deleted_at' => NULL,
                'designation' => 'Chief Executive Officer, Maldives Qualifications Authority',
                'email' => NULL,
                'expired_at' => NULL,
                'id' => 5,
                'name' => 'Dr Abdul Hannan Waheed',
                'people_type_id' => 2,
                'updated_at' => '2021-11-26 15:03:19',
            ),
            5 => 
            array (
                'created_at' => '2021-11-26 15:04:57',
                'deleted_at' => NULL,
                'designation' => 'Minister of State for Higher Education, Ministry of Higher Education',
                'email' => NULL,
                'expired_at' => NULL,
                'id' => 6,
                'name' => 'Khadheeja Adam',
                'people_type_id' => 2,
                'updated_at' => '2021-11-26 15:04:57',
            ),
            6 => 
            array (
                'created_at' => '2021-11-26 19:08:55',
                'deleted_at' => NULL,
                'designation' => 'Higher Education Sector Consultant',
                'email' => NULL,
                'expired_at' => NULL,
                'id' => 7,
                'name' => 'Dr Ahmed Ali Manik',
                'people_type_id' => 2,
                'updated_at' => '2021-11-26 19:08:55',
            ),
            7 => 
            array (
                'created_at' => '2021-11-26 19:09:30',
                'deleted_at' => NULL,
                'designation' => 'Higher Education Sector Consultant',
                'email' => NULL,
                'expired_at' => NULL,
                'id' => 8,
                'name' => 'Dr Aishath Reesha',
                'people_type_id' => 2,
                'updated_at' => '2021-11-26 19:09:30',
            ),
            8 => 
            array (
                'created_at' => '2021-11-26 19:10:01',
                'deleted_at' => NULL,
                'designation' => 'Vice Chancellor, Maldives National University',
                'email' => NULL,
                'expired_at' => NULL,
                'id' => 9,
                'name' => 'Dr Mohamed Shareef',
                'people_type_id' => 2,
                'updated_at' => '2021-11-26 19:10:01',
            ),
            9 => 
            array (
                'created_at' => '2021-11-26 19:10:26',
                'deleted_at' => NULL,
                'designation' => 'Technical and Vocational Sector',
                'email' => NULL,
                'expired_at' => NULL,
                'id' => 10,
                'name' => 'Adam Haleem',
                'people_type_id' => 2,
                'updated_at' => '2021-11-26 19:10:26',
            ),
            10 => 
            array (
                'created_at' => '2021-11-26 19:11:03',
                'deleted_at' => NULL,
                'designation' => 'Private Higher Education College Representative',
                'email' => NULL,
                'expired_at' => NULL,
                'id' => 11,
                'name' => 'Moosa Mohamed Manik',
                'people_type_id' => 2,
                'updated_at' => '2021-11-26 19:11:03',
            ),
            11 => 
            array (
                'created_at' => '2021-11-26 19:13:06',
                'deleted_at' => NULL,
                'designation' => 'Information Officer / Senior Administative Officer',
                'email' => 'shaziyya@mqa.gov.mv',
                'expired_at' => NULL,
                'id' => 12,
                'name' => 'Ms. Shaziyya Mohamed',
                'people_type_id' => 3,
                'updated_at' => '2021-11-26 19:13:06',
            ),
        ));
        
        
    }
}