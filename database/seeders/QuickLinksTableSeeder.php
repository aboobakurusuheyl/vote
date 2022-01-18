<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuickLinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('quick_links')->delete();
        
        \DB::table('quick_links')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'MNSDA',
                'url' => 'https://www.mnsda.gov.mv/',
                'logo' => 'yl0bV4zxhSfgxItxypsl4Y3POX9Tw03Vjxi5a0Xc.png',
                'description' => 'Maldives National Skills Development Authority',
                'created_at' => '2022-01-17 22:36:08',
                'updated_at' => '2022-01-17 22:36:08',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'MOHE',
                'url' => 'https://mohe.gov.mv/',
                'logo' => 'nTARnop2zt5zoCidOmtpOXT6YnwFlH8K1MwxXCQ5.png',
                'description' => 'MINISTRY OF HIGHER EDUCATION',
                'created_at' => '2022-01-17 22:36:34',
                'updated_at' => '2022-01-17 22:36:34',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'MOE',
                'url' => 'https://moe.gov.mv/',
                'logo' => 'RQJuORYiCWSMTtawEWEJ1QQWuHu4ZdY4JQUVt8Ul.png',
                'description' => 'MINISTRY OF EDUCATION',
                'created_at' => '2022-01-17 22:37:24',
                'updated_at' => '2022-01-17 22:37:24',
            ),
        ));
        
        
    }
}