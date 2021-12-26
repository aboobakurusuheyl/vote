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
                'updated_at' => '2021-11-27 05:44:23',
                'name' => 'MQA',
                'slug' => 'about-us',
                'locale' => 'en',
                'template' => 'about-page',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_image' => NULL,
                'locale_parent_id' => NULL,
            'data' => '{"title": "Maldives Qualification Authority", "mission": "To facilitate quality assured higher education and training available to the citizens of the Maldives, Locally and Internationally", "vission": "\\"Quality Assured Education\\"", "about_mqa": "<div>Maldives Accreditation Board (MAB) was created by a Presidential Decree in 14th August 2000 and renamed as Maldives Qualifications Authority (MQA) on 17th May 2010.&nbsp;<br><br>MQA\'s mandate is to assure the quality of post-secondary qualifications awarded in testimony of educational attainments. Thus a framework was developed in 2001. It is called Maldives National Qualifications Framework (MNQF).</div>", "contact_us": "<div>Maldives Qualifications Authority&nbsp;<br>4th Floor, Ma. Fen Building&nbsp;<br>Ameenee Magu, Male’&nbsp;<br>Phone: +(960) 3026665, +(960) 3026667&nbsp;<br>Email: info@mqa.gov.mv</div>", "peopletypes": "[\\"2\\",\\"1\\",\\"3\\"]"}',
                'parent_id' => NULL,
                'preview_token' => NULL,
                'published' => 1,
                'draft_parent_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2021-11-15 14:15:47',
                'updated_at' => '2021-11-25 08:23:24',
                'name' => 'MNQF',
                'slug' => 'mnqf',
                'locale' => 'en',
                'template' => 'page-with-faq',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_image' => NULL,
                'locale_parent_id' => NULL,
            'data' => '{"faq": {"Question": "Search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).", "MNQF Implementation Notes": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took ", "MNQF Implementation Notes 2": " It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of "}, "title": "Maldives National Qualification Framework", "legend": "mnqf", "content": "<div>Today, the Maldivian post-secondary education sector is growing rapidly, with an increasing number of private providers entering the sector to meet the demand. Emerging from this growing importance of post-secondary education is the concomitant requirement to assure the quality of qualifications awarded in testimony of educational attainments. Thus, the Maldives National Qualifications Framework (MNQF) is designed to:</div><ul><li>Facilitate the development of a quality assurance mechanism for the post-secondary education sector.</li><li>Provide a framework for recognition of qualifications offered in the Maldives and abroad.</li></ul><div>MNQF provides a comprehensive and coherent national framework that facilitates quality improvement, quality assurance, and private sector participation in post- secondary education. MNQF also ensures that students, employers, education providers and the community at large easily understand the learning outcomes involved in various qualifications.</div>", "faq_heading": "Objective"}',
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
                'id' => 8,
                'created_at' => '2021-11-24 14:09:15',
                'updated_at' => '2021-11-24 14:09:25',
                'name' => 'Circular',
                'slug' => 'circular',
                'locale' => 'en',
                'template' => 'file-list',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_image' => NULL,
                'locale_parent_id' => NULL,
                'data' => '{"title": "Circular", "description": null}',
                'parent_id' => NULL,
                'preview_token' => NULL,
                'published' => 1,
                'draft_parent_id' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'created_at' => '2021-11-27 05:53:45',
                'updated_at' => '2021-11-27 05:58:08',
                'name' => 'Oversea',
                'slug' => 'oversea',
                'locale' => 'en',
                'template' => 'page-simple',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_image' => NULL,
                'locale_parent_id' => NULL,
            'data' => '{"title": "Overseas Institutes", "legend": "Approved Institutions", "content": "<div>MQA‘s recognition of overseas institutions/colleges/universities is based on the following criterion:<br><br></div><ul><li>- Recognition of the institution/college/university in that particular country</li></ul><div>MQA\'s recognition of an institution/college/university does not mean that all it’s qualifications are recognized. Qualifications are Recognized and accepted in the Maldives.<br><br></div><ul><li>- If they are issued by a Government recognized institution in the country of origin.</li><li>- If they meet standards and criteria set by the Maldives National Qualifications Framework (MNQF).</li></ul><div>For recognition of a program prior to joining the program, MQA provides the service of checking the recognition status of academic programs and institutes for individuals. Fill up the form , “Application form for institute and program recognition” and send it over with the required documents to MQA, 2nd floor, Velaanaage, by email to <a href=\\"mailto:info@mqa.gov.mv\\">info@mqa.gov.mv.</a> Note that this is a free service.<br><br></div>"}',
                'parent_id' => NULL,
                'preview_token' => NULL,
                'published' => 1,
                'draft_parent_id' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'created_at' => '2021-12-26 08:29:40',
                'updated_at' => '2021-12-26 10:05:27',
                'name' => 'Download',
                'slug' => 'download',
                'locale' => 'en',
                'template' => 'file-group',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_image' => NULL,
                'locale_parent_id' => NULL,
                'data' => '{"title": "Downloads", "filegroup": "[\\"8\\",\\"11\\",\\"12\\"]"}',
                'parent_id' => NULL,
                'preview_token' => NULL,
                'published' => 1,
                'draft_parent_id' => NULL,
            ),
            8 => 
            array (
                'id' => 11,
                'created_at' => '2021-12-26 10:04:13',
                'updated_at' => '2021-12-26 10:05:12',
                'name' => 'Reports',
                'slug' => 'reports',
                'locale' => 'en',
                'template' => 'file-list',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_image' => NULL,
                'locale_parent_id' => NULL,
                'data' => '{"title": "Reports", "description": "Reports"}',
                'parent_id' => NULL,
                'preview_token' => NULL,
                'published' => 1,
                'draft_parent_id' => NULL,
            ),
            9 => 
            array (
                'id' => 12,
                'created_at' => '2021-12-26 10:04:33',
                'updated_at' => '2021-12-26 10:04:44',
                'name' => 'Regulations',
                'slug' => 'regulations',
                'locale' => 'en',
                'template' => 'file-list',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_image' => NULL,
                'locale_parent_id' => NULL,
                'data' => '{"title": "Regulations", "description": "Regulations"}',
                'parent_id' => NULL,
                'preview_token' => NULL,
                'published' => 1,
                'draft_parent_id' => NULL,
            ),
        ));
        
        
    }
}