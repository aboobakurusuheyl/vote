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
                'id' => 1,
                'name' => 'Dr. Abdul Hannan Waheed',
                'designation' => 'Chief Executive Officer',
                'email' => 'hannan@mqa.gov.mv',
                'people_type_id' => 1,
                'expired_at' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-11-26 14:55:20',
                'updated_at' => '2021-11-26 14:56:34',
                'image' => '',
                'mobile' => '',
                'work' => '',
                'organization' => '',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Ms. Nazima Mohamed',
                'designation' => 'Director of Framework Service and Advocacy',
                'email' => 'nazimadd@mqa.gov.mv',
                'people_type_id' => 1,
                'expired_at' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-11-26 14:58:25',
                'updated_at' => '2021-11-26 14:58:25',
                'image' => '',
                'mobile' => '',
                'work' => '',
                'organization' => '',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Ms. Mariyam Sudha',
                'designation' => 'Director of Quality Assurance Services',
                'email' => 'mary@mqa.gov.mv',
                'people_type_id' => 1,
                'expired_at' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-11-26 14:59:04',
                'updated_at' => '2021-11-26 14:59:04',
                'image' => '',
                'mobile' => '',
                'work' => '',
                'organization' => '',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Mr. Ahmed Ahsan',
                'designation' => 'Director of Corporate Service and Finance',
                'email' => 'ahsan@mqa.gov.mv',
                'people_type_id' => 1,
                'expired_at' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-11-26 14:59:51',
                'updated_at' => '2021-11-26 14:59:51',
                'image' => '',
                'mobile' => '',
                'work' => '',
                'organization' => '',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Dr Abdul Hannan Waheed',
                'designation' => 'Chief Executive Officer, Maldives Qualifications Authority',
                'email' => NULL,
                'people_type_id' => 2,
                'expired_at' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-11-26 15:03:19',
                'updated_at' => '2021-11-26 15:03:19',
                'image' => '',
                'mobile' => '',
                'work' => '',
                'organization' => '',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Khadheeja Adam',
                'designation' => 'Minister of State for Higher Education, Ministry of Higher Education',
                'email' => NULL,
                'people_type_id' => 2,
                'expired_at' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-11-26 15:04:57',
                'updated_at' => '2021-11-26 15:04:57',
                'image' => '',
                'mobile' => '',
                'work' => '',
                'organization' => '',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Dr Ahmed Ali Manik',
                'designation' => 'Higher Education Sector Consultant',
                'email' => NULL,
                'people_type_id' => 2,
                'expired_at' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-11-26 19:08:55',
                'updated_at' => '2021-11-26 19:08:55',
                'image' => '',
                'mobile' => '',
                'work' => '',
                'organization' => '',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Dr Aishath Reesha',
                'designation' => 'Higher Education Sector Consultant',
                'email' => NULL,
                'people_type_id' => 2,
                'expired_at' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-11-26 19:09:30',
                'updated_at' => '2021-11-26 19:09:30',
                'image' => '',
                'mobile' => '',
                'work' => '',
                'organization' => '',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Dr Mohamed Shareef',
                'designation' => 'Vice Chancellor, Maldives National University',
                'email' => NULL,
                'people_type_id' => 2,
                'expired_at' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-11-26 19:10:01',
                'updated_at' => '2021-11-26 19:10:01',
                'image' => '',
                'mobile' => '',
                'work' => '',
                'organization' => '',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Adam Haleem',
                'designation' => 'Technical and Vocational Sector',
                'email' => NULL,
                'people_type_id' => 2,
                'expired_at' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-11-26 19:10:26',
                'updated_at' => '2021-11-26 19:10:26',
                'image' => '',
                'mobile' => '',
                'work' => '',
                'organization' => '',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Moosa Mohamed Manik',
                'designation' => 'Private Higher Education College Representative',
                'email' => NULL,
                'people_type_id' => 2,
                'expired_at' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-11-26 19:11:03',
                'updated_at' => '2021-11-26 19:11:03',
                'image' => '',
                'mobile' => '',
                'work' => '',
                'organization' => '',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Ms. Shaziyya Mohamed',
                'designation' => 'Information Officer / Senior Administative Officer',
                'email' => 'shaziyya@mqa.gov.mv',
                'people_type_id' => 3,
                'expired_at' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-11-26 19:13:06',
                'updated_at' => '2021-11-26 19:13:06',
                'image' => '',
                'mobile' => '',
                'work' => '',
                'organization' => '',
            ),
        ));
        
        
    }
}