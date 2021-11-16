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
        
        \DB::table('nova_page_manager_pages')->insert(array (
            0 => 
            array (
                'created_at' => '2021-11-15 09:43:28',
            'data' => '{"title": "Maldives Qualification Authority", "mission": "To facilitate quality assured higher education and training available to the citizens of the Maldives, Locally and Internationally", "vission": "\\"Quality Assured Education\\"", "about_mqa": "<div>Maldives Accreditation Board (MAB) was created by a Presidential Decree in 14th August 2000 and renamed as Maldives Qualifications Authority (MQA) on 17th May 2010.&nbsp;<br><br>MQA\'s mandate is to assure the quality of post-secondary qualifications awarded in testimony of educational attainments. Thus a framework was developed in 2001. It is called Maldives National Qualifications Framework (MNQF).</div>", "contact_us": "<div>Maldives Qualifications Authority&nbsp;<br>4th Floor, Ma. Fen Building&nbsp;<br>Ameenee Magu, Male’&nbsp;<br>Phone: +(960) 3026665, +(960) 3026667&nbsp;<br>Email: info@mqa.gov.mv</div>"}',
                'draft_parent_id' => NULL,
                'id' => 1,
                'locale' => 'en',
                'locale_parent_id' => NULL,
                'name' => 'MQA',
                'parent_id' => NULL,
                'preview_token' => NULL,
                'published' => 1,
                'seo_description' => NULL,
                'seo_image' => NULL,
                'seo_title' => NULL,
                'slug' => 'about-page',
                'template' => 'about-page',
                'updated_at' => '2021-11-16 09:26:09',
            ),
            1 => 
            array (
                'created_at' => '2021-11-15 14:15:47',
            'data' => '{"faq": {"MNQF Implementation Notes": "I don\'t know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.", "MNQF Implementation Notes 2": "MNQF Implementation Notes sdf"}, "title": "Maldives National Qualification Framework", "legend": "mnqf", "content": "<div>Today, the Maldivian post-secondary education sector is growing rapidly, with an increasing number of private providers entering the sector to meet the demand. Emerging from this growing importance of post-secondary education is the concomitant requirement to assure the quality of qualifications awarded in testimony of educational attainments. Thus, the Maldives National Qualifications Framework (MNQF) is designed to:</div><ul><li>Facilitate the development of a quality assurance mechanism for the post-secondary education sector.</li><li>Provide a framework for recognition of qualifications offered in the Maldives and abroad.</li></ul><div>MNQF provides a comprehensive and coherent national framework that facilitates quality improvement, quality assurance, and private sector participation in post- secondary education. MNQF also ensures that students, employers, education providers and the community at large easily understand the learning outcomes involved in various qualifications.</div>", "faq_heading": "Objective"}',
                'draft_parent_id' => NULL,
                'id' => 2,
                'locale' => 'en',
                'locale_parent_id' => NULL,
                'name' => 'MNQF',
                'parent_id' => NULL,
                'preview_token' => NULL,
                'published' => 1,
                'seo_description' => NULL,
                'seo_image' => NULL,
                'seo_title' => NULL,
                'slug' => 'mnqf',
                'template' => 'page-with-faq',
                'updated_at' => '2021-11-16 09:26:39',
            ),
            2 => 
            array (
                'created_at' => '2021-11-16 08:20:23',
                'data' => NULL,
                'draft_parent_id' => NULL,
                'id' => 3,
                'locale' => 'en',
                'locale_parent_id' => NULL,
                'name' => 'News',
                'parent_id' => NULL,
                'preview_token' => NULL,
                'published' => 1,
                'seo_description' => NULL,
                'seo_image' => NULL,
                'seo_title' => NULL,
                'slug' => 'news',
                'template' => 'post-list',
                'updated_at' => '2021-11-16 08:20:23',
            ),
            3 => 
            array (
                'created_at' => '2021-11-16 08:20:56',
                'data' => NULL,
                'draft_parent_id' => NULL,
                'id' => 4,
                'locale' => 'en',
                'locale_parent_id' => NULL,
                'name' => 'Event',
                'parent_id' => NULL,
                'preview_token' => NULL,
                'published' => 1,
                'seo_description' => NULL,
                'seo_image' => NULL,
                'seo_title' => NULL,
                'slug' => 'event',
                'template' => 'post-list',
                'updated_at' => '2021-11-16 08:20:56',
            ),
        ));
        
        
    }
}