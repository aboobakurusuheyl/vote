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
                'id' => 1,
                'created_at' => '2021-11-15 09:43:28',
                'updated_at' => '2021-11-16 09:26:09',
                'name' => 'MQA',
                'slug' => 'about-page',
                'locale' => 'en',
                'template' => 'about-page',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_image' => NULL,
                'locale_parent_id' => NULL,
            'data' => '{"title": "Maldives Qualification Authority", "mission": "To facilitate quality assured higher education and training available to the citizens of the Maldives, Locally and Internationally", "vission": "\\"Quality Assured Education\\"", "about_mqa": "<div>Maldives Accreditation Board (MAB) was created by a Presidential Decree in 14th August 2000 and renamed as Maldives Qualifications Authority (MQA) on 17th May 2010.&nbsp;<br><br>MQA\'s mandate is to assure the quality of post-secondary qualifications awarded in testimony of educational attainments. Thus a framework was developed in 2001. It is called Maldives National Qualifications Framework (MNQF).</div>", "contact_us": "<div>Maldives Qualifications Authority&nbsp;<br>4th Floor, Ma. Fen Building&nbsp;<br>Ameenee Magu, Male’&nbsp;<br>Phone: +(960) 3026665, +(960) 3026667&nbsp;<br>Email: info@mqa.gov.mv</div>"}',
                'parent_id' => NULL,
                'preview_token' => NULL,
                'published' => 1,
                'draft_parent_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2021-11-15 14:15:47',
                'updated_at' => '2021-11-16 14:15:41',
                'name' => 'MNQF',
                'slug' => 'mnqf',
                'locale' => 'en',
                'template' => 'page-with-faq',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_image' => NULL,
                'locale_parent_id' => NULL,
            'data' => '{"faq": {"Question": "Asnwer", "MNQF Implementation Notes": "I don\'t know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.", "MNQF Implementation Notes 2": "MNQF Implementation Notes sdf"}, "title": "Maldives National Qualification Framework", "legend": "mnqf", "content": "<div>Today, the Maldivian post-secondary education sector is growing rapidly, with an increasing number of private providers entering the sector to meet the demand. Emerging from this growing importance of post-secondary education is the concomitant requirement to assure the quality of qualifications awarded in testimony of educational attainments. Thus, the Maldives National Qualifications Framework (MNQF) is designed to:</div><ul><li>Facilitate the development of a quality assurance mechanism for the post-secondary education sector.</li><li>Provide a framework for recognition of qualifications offered in the Maldives and abroad.</li></ul><div>MNQF provides a comprehensive and coherent national framework that facilitates quality improvement, quality assurance, and private sector participation in post- secondary education. MNQF also ensures that students, employers, education providers and the community at large easily understand the learning outcomes involved in various qualifications.</div>", "faq_heading": "Objective"}',
                'parent_id' => NULL,
                'preview_token' => NULL,
                'published' => 1,
                'draft_parent_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2021-11-16 08:20:23',
                'updated_at' => '2021-11-16 09:35:08',
                'name' => 'Approved Institution',
                'slug' => 'approved-institutions',
                'locale' => 'en',
                'template' => 'post-list',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_image' => NULL,
                'locale_parent_id' => NULL,
                'data' => NULL,
                'parent_id' => NULL,
                'preview_token' => NULL,
                'published' => 1,
                'draft_parent_id' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2021-11-16 08:20:56',
                'updated_at' => '2021-11-16 12:53:30',
                'name' => 'Event',
                'slug' => 'event',
                'locale' => 'en',
                'template' => 'post-list',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_image' => NULL,
                'locale_parent_id' => NULL,
                'data' => '{"title": "Event list", "description": "MQA Events"}',
                'parent_id' => NULL,
                'preview_token' => NULL,
                'published' => 1,
                'draft_parent_id' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2021-11-16 09:42:46',
                'updated_at' => '2021-11-16 09:48:52',
                'name' => 'News',
                'slug' => 'news',
                'locale' => 'en',
                'template' => 'post-list',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_image' => NULL,
                'locale_parent_id' => NULL,
                'data' => '{"title": "News"}',
                'parent_id' => NULL,
                'preview_token' => NULL,
                'published' => 1,
                'draft_parent_id' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'created_at' => '2021-11-24 03:09:07',
                'updated_at' => '2021-11-24 03:48:06',
                'name' => 'Download',
                'slug' => 'download',
                'locale' => 'en',
                'template' => 'file-list',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_image' => NULL,
                'locale_parent_id' => NULL,
                'data' => '{"title": "Download", "description": "list of downloads"}',
                'parent_id' => NULL,
                'preview_token' => NULL,
                'published' => 1,
                'draft_parent_id' => NULL,
            ),
        ));
        
        
    }
}