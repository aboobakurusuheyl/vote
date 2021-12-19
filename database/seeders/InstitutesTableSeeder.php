<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InstitutesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('institutes')->delete();
        
        \DB::table('institutes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'MALDIVES NATIONAL UNIVERSITY - Centre for Maritime Studies',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/MNU-LOGO_2018-06-30T18-04-28.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'MALDIVES NATIONAL UNIVERSITY - Centre for Open Learning',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/MNU-LOGO_2018-06-30T18-04-28.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'MALDIVES NATIONAL UNIVERSITY - Faculty of Islamic Studies',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/MNU-LOGO_2018-06-30T18-04-28.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'MALDIVES NATIONAL UNIVERSITY - Faculty of Arts',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/MNU-LOGO_2018-06-30T18-04-28.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'MALDIVES NATIONAL UNIVERSITY - Faculty of Education',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/MNU-LOGO_2018-06-30T18-04-28.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
            'name' => 'MALDIVES NATIONAL UNIVERSITY - Faculty of Engineering Science and Technology (Faculty of Engineering Technology combined with Faculty of Science)',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/MNU-LOGO_2018-06-30T18-04-28.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'MALDIVES NATIONAL UNIVERSITY - Faculty of Health Sciences',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/MNU-LOGO_2018-06-30T18-04-28.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'MALDIVES NATIONAL UNIVERSITY - Faculty of Hospitality and Tourism Studies',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/MNU-LOGO_2018-06-30T18-04-28.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'MALDIVES NATIONAL UNIVERSITY - Business School',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/MNU-LOGO_2018-06-30T18-04-28.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'MALDIVES NATIONAL UNIVERSITY - Faculty of Shariah and Law',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/MNU-LOGO_2018-06-30T18-04-28.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'MALDIVES NATIONAL UNIVERSITY - Faculty of Science ',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/MNU-LOGO_2018-06-30T18-04-28.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'ISLAMIC UNIVERSITY OF MALDIVES',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'AVID COLLEGE',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'CLIQUE COLLEGE',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/logo_clique_2018-06-30T18-09-34.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'CYRYX COLLEGE',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/cyryx_2018-06-30T18-12-38.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'COLLEGE OF DEFENCE AND SECURITY STUDIES',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'MIANZ INTERNATIONAL COLLEGE',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/Logo_PNG_2018-06-30T18-12-54.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'MALDIVES BUSINESS SCHOOL',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/mbs_2018-06-30T18-12-24.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'MANDHU COLLEGE',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'MAPS COLLEGE',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/MAPS_College_Logo_-_plain_2018-06-30T18-10-42.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'VILLA COLLEGE',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'INSTITUTE FOR SECURITY AND LAW ENFORCEMENT STUDIES',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/ISLES_LOGO_FINAL_2018-06-30T18-07-37.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'NATIONAL INSTITUTE OF EDUCATION',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'NATIONAL CENTRE FOR THE HOLY QURAN',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'IMMIGIRATION TRAINING CENTRE',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'CENTRE FOR CUSTOMS AND EXERCISE STUDIES',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'PORT TRAINING CENTRE',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'TECHNICAL AND VOCATIONAL EDUCATION TRAINING AUTHORITY',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'MALDIVES NATIONAL INSTITUTE OF SPORTS',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/mnis_logo_2018-06-30T18-09-56.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'CIVIL SERVICE TRAINING INSTITUTE',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'NATIONAL INSTITUTE FOR RESEARCH AND ADDICTION STUDIES',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'INSTITUTE FOR CORRECTIONAL STUDIES ',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'CARE TRAINING CENTRE',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/CTC_Vector_2018-06-30T18-08-29.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
            'name' => 'CENTRE FOR INFORMATION TECHNOLOGY MANAGEMENT (This institute is Blacklisted and all approved higher education programmes are cancelled in accordance to the decision of the Advisory Board Meeting no: 9/2021, effecting from 1 November 2021)',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/CITM_Final_Logo_2018-06-30T18-09-07.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'CIVENG TRAINING CENTRE',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'COMPUTER CAREER SENTRE',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'COMTRONICS TRAINING CENTRE',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'CYZA SALOON',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'DATAHIVE TRAINING CENTRE',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
            'name' => 'DIABETES SOCIETY OF MALDIVES (DSM) TRAINING INSTITUTE',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
            'name' => 'EVERYONE\'S INSTITUTE OF HIGHER EDUCATION (previously known as Everyone\'s Learning Centre)',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/ELC_LOGO_mqa_2018-06-30T18-13-34.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'FAST TRACK LEARNING ACADEMY',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'FOCUS EDUCATION CENTRE',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'IBS COMPUTER CENTRE',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/ibs_2018-06-30T22-24-15.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
            'name' => 'ALTAN INSITUTE (previously known as INFO COM COMPUTER TRAINING)',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'INFORMIX COMPUTER TRAINING CENTRE',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
            'name' => 'KULUNU TRAINING SERVICES (SOCIETY FOR HEALTH EDUCATION)',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'MALDIVES POLYTECHNIC',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/LOGO_2018-06-30T18-10-12.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'MALE CENTRE OF TECHNOLOGY',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'MANFAA CENRE OF AGING',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'MENDHOO AGRICULTURE CENTRE',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'MOBILE CENTRE FOR DEVELOPMENT SCIENCES',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'PRIME TRAINING CENTRE',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'PROFESSIONAL STUDIES ACADEMY',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'SARANGU JAREE',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'SCHOOL OF HEALTH SCIENCES - ADK',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'TECHNO LEARNING CENTRE',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'WIN INFORMATION TECHNOLOGY TRAINING CENTRE',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'MARITIME ACADEMY OF MALDIVES',
                'overseas' => 0,
                'country' => '',
                'logo' => '/static/uploads/MAM_2018-06-30T18-11-28.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'SALAAM SCHOOL',
                'overseas' => 0,
                'country' => '',
                'logo' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'HOPE INFORMATION TECHNOLOGY CENTRE (Previously known as HUVADHOO INFORMATION TECHNOLOGY CENTRE',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                61 => 
                array (
                    'id' => 62,
                    'name' => 'MALDIVES ACADEMY FOR SPECIALISED TRAINING',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                62 => 
                array (
                    'id' => 63,
                    'name' => 'MALDIVES INSTITUTE FOR TRAINING AND RESEARCH',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                63 => 
                array (
                    'id' => 64,
                    'name' => 'INSTITUTE FOR PROFESSIONAL STUDIES',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                64 => 
                array (
                    'id' => 65,
                    'name' => 'ALS TRAINING CENTRE',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                65 => 
                array (
                    'id' => 66,
                    'name' => 'ACADEMY FOR TRAINING AND RESEARCH',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '/static/uploads/ATR_2018-06-30T22-23-53.png',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                66 => 
                array (
                    'id' => 67,
                    'name' => 'IXCEL CENTRE FOR PROFESSIONAL STUDIES',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '/static/uploads/LOGO_PNG_2018-06-30T18-08-48.png',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                67 => 
                array (
                    'id' => 68,
                    'name' => 'ADVANCE ART ACADEMY',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                68 => 
                array (
                    'id' => 69,
                    'name' => 'EXCEL LEARNING CENTRE',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                69 => 
                array (
                    'id' => 70,
                    'name' => 'MALDIVES INSTITUTE OF TECHNOLOGY',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '/static/uploads/MIT_-_Logo_color_2018-06-30T18-09-28.png',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                70 => 
                array (
                    'id' => 71,
                    'name' => 'MALDIVES MUSIC AND ART CENTRE',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                71 => 
                array (
                    'id' => 72,
                    'name' => 'INSTITUE OF GOVERNANCE AND DEVELOPMENT ',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                72 => 
                array (
                    'id' => 73,
                'name' => 'EUPHEUS COLLEGIATE (PREVIOUSLY KNOWN AS INSTITUTE OF HOLY QURAN)',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                73 => 
                array (
                    'id' => 74,
                    'name' => 'FANNU TRAINING CENTRE',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                74 => 
                array (
                    'id' => 75,
                    'name' => 'INSTITUE OF QURANIC STUDIES',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                75 => 
                array (
                    'id' => 76,
                    'name' => 'BADHAHI LEARNING CENTRE',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                76 => 
                array (
                    'id' => 77,
                    'name' => 'AZUM TRAINING CONSULTANCY',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                77 => 
                array (
                    'id' => 78,
                    'name' => 'INSTITUTE OF DESIGN',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                78 => 
                array (
                    'id' => 79,
                    'name' => 'INSTITUTE OF QURAN AND SUNNAH',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '/static/uploads/IQS_logo_2018-06-30T18-16-06.png',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                79 => 
                array (
                    'id' => 80,
                    'name' => 'MALDIVES INSTITUTE OF PSYCHOLOGICAL SERVICES',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                80 => 
                array (
                    'id' => 81,
                    'name' => 'HAFF TAILORS',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                81 => 
                array (
                    'id' => 82,
                    'name' => 'THE FOREIGN SERVICE INSTITUTE OF MALDIVES',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                82 => 
                array (
                    'id' => 83,
                    'name' => 'MALDIVES AUTISM ASSOCIATION TRAINING INSTITUTE',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                83 => 
                array (
                    'id' => 84,
                    'name' => 'ZIKURA INTERNATIONAL COLLEGE',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '/static/uploads/LOGO_2018-06-30T18-13-12.PNG',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                84 => 
                array (
                    'id' => 85,
                    'name' => 'MALDIVES TAX ACADEMY',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                85 => 
                array (
                    'id' => 86,
                    'name' => 'DHIVES INSTITUTE',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '/static/uploads/Dhives_logo_2018-06-30T18-13-05.png',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                86 => 
                array (
                    'id' => 87,
                    'name' => 'ACADEMY FOR BUSINESS AND MANAGEMENT',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                87 => 
                array (
                    'id' => 88,
                    'name' => 'INSTITUTE OF PROFESSIONAL EDUCATION',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                88 => 
                array (
                    'id' => 89,
                    'name' => 'GAGE TRAINING INSTITUTE',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                89 => 
                array (
                    'id' => 90,
                    'name' => 'ARIZE INSTITUTE',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                90 => 
                array (
                    'id' => 91,
                    'name' => 'MALDIVES MEDIA INSTITUTE',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                91 => 
                array (
                    'id' => 92,
                    'name' => 'SOUTH ASIAN INSTITUTE FOR ISLAMIC FINANCE',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                92 => 
                array (
                    'id' => 93,
                    'name' => 'POLICE ACADEMY',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                93 => 
                array (
                    'id' => 94,
                    'name' => 'INSTITUTE OF DHAARUL QURAN',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '/static/uploads/logo_DQ_2018-06-30T18-15-38.png',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                94 => 
                array (
                    'id' => 95,
                    'name' => 'EFES Institute of Cake Decoration',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                95 => 
                array (
                    'id' => 96,
                    'name' => 'EXCEED ACADEMY',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                96 => 
                array (
                    'id' => 97,
                    'name' => 'INSTITUTE OF LOGIC AND TECHNOLOGY',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                97 => 
                array (
                    'id' => 98,
                    'name' => 'MARKAZ NOON',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                98 => 
                array (
                    'id' => 99,
                    'name' => 'Uyoon Institute',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                99 => 
                array (
                    'id' => 100,
                    'name' => 'TECHNICAL AND VOCATIONAL EDUCATION CENTRE',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                100 => 
                array (
                    'id' => 101,
                    'name' => 'MALDIVES INSTITUTE OF PROFESSIONAL STUDIES',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                101 => 
                array (
                    'id' => 102,
                    'name' => 'NOVITS ACADEMY ',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                102 => 
                array (
                    'id' => 103,
                    'name' => 'AHTA INSTITUTE',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                103 => 
                array (
                    'id' => 104,
                    'name' => 'DHAARUL QURAN WASSUNNAH',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                104 => 
                array (
                    'id' => 105,
                    'name' => 'ZAAD ACADEMY',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '/static/uploads/New_Logo_Zaad_Academy_2021-03-29T06-54-45.jpg',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                105 => 
                array (
                    'id' => 106,
                    'name' => 'WISDOM INSTITUTE',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                106 => 
                array (
                    'id' => 107,
                    'name' => 'NOVEL INSTITUTE OF TECHNOLOGY',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                107 => 
                array (
                    'id' => 108,
                    'name' => 'ACADEMY OF TA\'ALLAM AL\'QURAN',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                108 => 
                array (
                    'id' => 109,
                    'name' => 'IQRA\' INSTITUTE',
                    'overseas' => 0,
                    'country' => '',
                    'logo' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            ));
        
        
    }
}