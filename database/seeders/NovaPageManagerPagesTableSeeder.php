<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NovaPageManagerPagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('nova_page_manager_pages')->delete();

        \DB::table('nova_page_manager_pages')->insert(array(
            0 =>
            array(
                'created_at' => '2021-11-15 09:43:28',
                'data' => '{"title": "Maldives Qualification Authority", "mission": "To facilitate quality assured higher education and training available to the citizens of the Maldives, Locally and Internationally", "vission": "\\"Quality Assured Education\\"", "about_mqa": "<div>Maldives Accreditation Board (MAB) was created by a Presidential Decree in 14th August 2000 and renamed as Maldives Qualifications Authority (MQA) on 17th May 2010.&nbsp;<br><br>MQA\'s mandate is to assure the quality of post-secondary qualifications awarded in testimony of educational attainments. Thus a framework was developed in 2001. It is called Maldives National Qualifications Framework (MNQF).</div>", "contact_us": "<div>Maldives Qualifications Authority&nbsp;<br>4th Floor, Ma. Fen Building&nbsp;<br>Ameenee Magu, Male’&nbsp;<br>Phone: +(960) 3026665, +(960) 3026667&nbsp;<br>Email: info@mqa.gov.mv</div>"}',
                'draft_parent_id' => NULL,
                'id' => 1,
                'locale' => 'en',
                'locale_parent_id' => NULL,
                'name' => 'about-page',
                'parent_id' => NULL,
                'preview_token' => NULL,
                'published' => 1,
                'seo_description' => NULL,
                'seo_image' => NULL,
                'seo_title' => NULL,
                'slug' => 'about-page',
                'template' => 'side-page',
                'updated_at' => '2021-11-15 10:21:24',
            ),
        ));
    }
}
