<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();

        $users=array(
            0 =>
            array(
              'name' => 'Aboobakuru Suhail',
              'email' => 'aboobakuru.suhail@pension.gov.mv',
              'number' => '7527111',
              'gender' => 'male',
              'password' => '2871',
            ),
            1 =>
            array(
              'name' => 'Ahmed Abdulla Mufeed',
              'email' => '',
              'number' => '9832211',
              'gender' => 'male',
              'password' => '5031',
            ),
            2 =>
            array(
              'name' => 'Ahmed Husham',
              'email' => '',
              'number' => '7970303',
              'gender' => 'male',
              'password' => '6501',
            ),
            3 =>
            array(
              'name' => 'Ahmed Shafeez',
              'email' => '',
              'number' => '7779324',
              'gender' => 'male',
              'password' => '7299',
            ),
            4 =>
            array(
              'name' => 'Aishath Ahna',
              'email' => '',
              'number' => '7467737',
              'gender' => 'female',
              'password' => '3152',
            ),
            5 =>
            array(
              'name' => 'Aishath Dhifla Majid',
              'email' => '',
              'number' => '7831167',
              'gender' => 'female',
              'password' => '2533',
            ),
            6 =>
            array(
              'name' => 'Aishath Fazna',
              'email' => '',
              'number' => '7910106',
              'gender' => 'female',
              'password' => '3908',
            ),
            7 =>
            array(
              'name' => 'Aishath Leesha',
              'email' => '',
              'number' => '7628518',
              'gender' => 'female',
              'password' => '2915',
            ),
            8 =>
            array(
              'name' => 'Aishath Najla',
              'email' => '',
              'number' => '7471311',
              'gender' => 'female',
              'password' => '4686',
            ),
            9 =>
            array(
              'name' => 'Aishath Saina Naseer',
              'email' => '',
              'number' => '7644164',
              'gender' => 'female',
              'password' => '8582',
            ),
            10 =>
            array(
              'name' => 'Aishath Sham\'a',
              'email' => '',
              'number' => '7991661',
              'gender' => 'female',
              'password' => '2534',
            ),
            11 =>
            array(
              'name' => 'Ali Haneef',
              'email' => '',
              'number' => '7782115',
              'gender' => 'male',
              'password' => '4070',
            ),
            12 =>
            array(
              'name' => 'Ali Nawaz',
              'email' => 'ali.nawaz@pension.gov.mv',
              'email' => '',
              'number' => '7933446',
              'gender' => 'male',
              'password' => '9323',
            ),
            13 =>
            array(
              'name' => 'Ali Zahir',
              'email' => '',
              'number' => '7772812',
              'gender' => 'male',
              'password' => '7281',
            ),
            14 =>
            array(
              'name' => 'Aminath Almasath Haneef',
              'email' => '',
              'number' => '7651519',
              'gender' => 'female',
              'password' => '9175',
            ),
            15 =>
            array(
              'name' => 'Aminath Enash Ahmed',
              'email' => '',
              'number' => '7982356',
              'gender' => 'female',
              'password' => '5893',
            ),
            16 =>
            array(
              'name' => 'Aminath Irthiyasha',
              'email' => '',
              'number' => '7733610',
              'gender' => 'female',
              'password' => '5173',
            ),
            17 =>
            array(
              'name' => 'Aminath Samha',
              'email' => '',
              'number' => '9944417',
              'gender' => 'female',
              'password' => '4512',
            ),
            18 =>
            array(
              'name' => 'Dheeba Nizar',
              'email' => '',
              'number' => '7670464',
              'gender' => 'female',
              'password' => '9584',
            ),
            19 =>
            array(
              'name' => 'Dhunya Abdul Hadhy',
              'email' => '',
              'number' => '7706983',
              'gender' => 'female',
              'password' => '2515',
            ),
            20 =>
            array(
              'name' => 'Fathimath Mohamed',
              'email' => '',
              'number' => '7930639',
              'gender' => 'female',
              'password' => '4491',
            ),
            21 =>
            array(
              'name' => 'Fathimath Sujatha Haleem',
              'email' => '',
              'number' => '7784997',
              'gender' => 'female',
              'password' => '4972',
            ),
            22 =>
            array(
              'name' => 'Fathmath Hanan Ahmed',
              'email' => '',
              'number' => '9887424',
              'gender' => 'female',
              'password' => '3744',
            ),
            23 =>
            array(
              'name' => 'Gaaidh Hussain',
              'email' => '',
              'number' => '9644055',
              'gender' => 'male',
              'password' => '8304',
            ),
            24 =>
            array(
              'name' => 'Hafeeza Falak',
              'email' => '',
              'number' => '9729199',
              'gender' => 'female',
              'password' => '3329',
            ),
            25 =>
            array(
              'name' => 'Hamza Afeef',
              'email' => '',
              'number' => '7986775',
              'gender' => 'male',
              'password' => '2141',
            ),
            26 =>
            array(
              'name' => 'Hanna Moosa',
              'email' => '',
              'number' => '7632144',
              'gender' => 'female',
              'password' => '4341',
            ),
            27 =>
            array(
              'name' => 'Hassan Naif Mohamed',
              'email' => '',
              'number' => '9190645',
              'gender' => 'male',
              'password' => '3012',
            ),
            28 =>
            array(
              'name' => 'Ibrahim Mufeed',
              'email' => '',
              'number' => '7745594',
              'gender' => 'male',
              'password' => '5608',
            ),
            29 =>
            array(
              'name' => 'Ifham Amjad',
              'email' => '',
              'number' => '7484717',
              'gender' => 'male',
              'password' => '4066',
            ),
            30 =>
            array(
              'name' => 'Ismail Ahmed',
              'email' => '',
              'number' => '7530735',
              'gender' => 'male',
              'password' => '1980',
            ),
            31 =>
            array(
              'name' => 'Ismail Wikram Nafees',
              'email' => '',
              'number' => '7830010',
              'gender' => 'male',
              'password' => '6529',
            ),
            32 =>
            array(
              'name' => 'Mahmood Waheed',
              'email' => '',
              'number' => '9101188',
              'gender' => 'male',
              'password' => '8198',
            ),
            33 =>
            array(
              'name' => 'Mariyam Hana',
              'email' => '',
              'number' => '9925945',
              'gender' => 'female',
              'password' => '5431',
            ),
            34 =>
            array(
              'name' => 'Mariyam Jumana',
              'email' => '',
              'number' => '7749991',
              'gender' => 'female',
              'password' => '7996',
            ),
            35 =>
            array(
              'name' => 'Mariyam Majidha Hassan',
              'email' => '',
              'number' => '7788600',
              'gender' => 'female',
              'password' => '6554',
            ),
            36 =>
            array(
              'name' => 'Mariyam Shadiya',
              'email' => '',
              'number' => '7731815',
              'gender' => 'female',
              'password' => '9502',
            ),
            37 =>
            array(
              'name' => 'Mariyam Shamha Ismail',
              'email' => '',
              'number' => '9116855',
              'gender' => 'female',
              'password' => '1255',
            ),
            38 =>
            array(
              'name' => 'Mohamed Ameen Ibrahim',
              'email' => 'ameen.ibrahim@pension.gov.mv',
              'email' => '',
              'number' => '7574370',
              'gender' => 'male',
              'password' => '8553',
            ),
            39 =>
            array(
              'name' => 'Mohamed Niyaaz',
              'email' => '',
              'number' => '9171722',
              'gender' => 'male',
              'password' => '1865',
            ),
            40 =>
            array(
              'name' => 'Mohamed Shafeeu',
              'email' => '',
              'number' => '7610369',
              'gender' => 'male',
              'password' => '7064',
            ),
            41 =>
            array(
              'name' => 'Mohamed Shahid',
              'email' => '',
              'number' => '7777993',
              'gender' => 'male',
              'password' => '7674',
            ),
            42 =>
            array(
              'name' => 'Mohamed Shifan',
              'email' => '',
              'number' => '7967776',
              'gender' => 'male',
              'password' => '1103',
            ),
            43 =>
            array(
              'name' => 'Nasra Mohamed Kaleygefaan',
              'email' => '',
              'number' => '7412203',
              'gender' => 'female',
              'password' => '5009',
            ),
            44 =>
            array(
              'name' => 'Niyaza Abdulla',
              'email' => '',
              'number' => '9925352',
              'gender' => 'female',
              'password' => '3695',
            ),
            45 =>
            array(
              'name' => 'Shamla Ali',
              'email' => '',
              'number' => '7567897',
              'gender' => 'female',
              'password' => '6714',
            ),
            46 =>
            array(
              'name' => 'Shiufa Hussain',
              'email' => '',
              'number' => '7781900',
              'gender' => 'female',
              'password' => '3137',
            ),
            47 =>
            array(
              'name' => 'Thalhath Moosa',
              'email' => '',
              'number' => '7906629',
              'gender' => 'male',
              'password' => '1212',
            ),
            48 =>
            array(
              'name' => 'Abdulla Fikuree',
              'email' => '',
              'number' => '7904846',
              'gender' => 'male',
              'password' => '3653',
            ),
            49 =>
            array(
              'name' => 'Zeeshan Abdul Ghanee',
              'email' => '',
              'number' => '7378887',
              'gender' => 'female',
              'password' => '7657',
            ),
            50 =>
            array(
              'name' => 'Fathimath Nisha Fahmy',
              'email' => '',
              'number' => '7906150',
              'gender' => 'female',
              'password' => '4647',
            ),
            51 =>
            array(
              'name' => 'Aishath Eiman Latheef',
              'email' => '',
              'number' => '7687658',
              'gender' => 'female',
              'password' => '8974',
            ),
            52 =>
            array(
              'name' => 'Jiva Amir',
              'email' => '',
              'number' => '9551101',
              'gender' => 'female',
              'password' => '3520',
            ),
            53 =>
            array(
              'name' => 'Abdulla Fathih',
              'email' => '',
              'number' => '9666745',
              'gender' => 'male',
              'password' => '9566',
            ),
            54 =>
            array(
              'name' => 'Shaula Ibrahim',
              'email' => '',
              'number' => '7962414',
              'gender' => 'female',
              'password' => '9633',
            ),
            55 =>
            array(
              'name' => 'Ibrahim Naail Najmee',
              'email' => '',
              'number' => '7925571',
              'gender' => 'male',
              'password' => '1369',
            ),
            56 =>
            array(
              'name' => 'Aishath Raya',
              'email' => '',
              'number' => '7591619',
              'gender' => 'female',
              'password' => '3466',
            ),
            57 =>
            array(
              'name' => 'Mohamed Anoof Ibrahim',
              'email' => '',
              'number' => '7901772',
              'gender' => 'male',
              'password' => '6844',
            ),
            58 =>
            array(
              'name' => 'Aminath Zakiya Adam',
              'email' => '',
              'number' => '9781500',
              'gender' => 'female',
              'password' => '2500',
            ),
            59 =>
            array(
              'name' => 'Haasina Abdul Azeez',
              'email' => '',
              'number' => '9476847',
              'gender' => 'female',
              'password' => '1312',
            ),
            60 =>
            array(
              'name' => 'Mohamed Zakin Zahid',
              'email' => '',
              'number' => '7994463',
              'gender' => 'male',
              'password' => '2774',
            ),
            61 =>
            array(
              'name' => 'Hassan Anim Ali',
              'email' => '',
              'number' => '7447880',
              'gender' => 'male',
              'password' => '6216',
            ),
            62 =>
            array(
              'name' => 'Aishath Alma Ahmed Shareef',
              'email' => '',
              'number' => '7512919',
              'gender' => 'female',
              'password' => '7225',
            ),
            63 =>
            array(
              'name' => 'Aishath Malsa Moosa Jameel',
              'email' => '',
              'number' => '7457416',
              'gender' => 'female',
              'password' => '8145',
            ),
            64 =>
            array(
              'name' => 'Maryam Abdul Nasir',
              'email' => '',
              'number' => '7987899',
              'gender' => 'female',
              'password' => '5633',
            ),
            65 =>
            array(
              'name' => 'Athifa Ali',
              'email' => '',
              'number' => '7785144',
              'gender' => 'female',
              'password' => '3349',
            ),
            66 =>
            array(
              'name' => 'Shifaza Wajeeh',
              'email' => '',
              'number' => '7787873',
              'gender' => 'female',
              'password' => '3710',
            ),
            67 =>
            array(
              'name' => 'Fathimath Abdulla Kamaaluddeen',
              'email' => '',
              'number' => '7794200',
              'gender' => 'female',
              'password' => '3717',
            ),
            68 =>
            array(
              'name' => 'Uza. Laila Manik',
              'email' => '',
              'number' => '7998005',
              'gender' => 'female',
              'password' => '6417',
            ),
            69 =>
            array(
              'name' => 'Abdul Haleem Abdul Latheef',
              'email' => '',
              'number' => '7771868',
              'gender' => 'male',
              'password' => '9478',
            ),
            70 =>
            array(
              'name' => 'Abdul Majeedh Ali',
              'email' => '',
              'number' => '7779608',
              'gender' => 'male',
              'password' => '9832',
            ),
            71 =>
            array(
              'name' => 'Mohamed Ghaly Murthala',
              'email' => '',
              'number' => '7949549',
              'gender' => 'male',
              'password' => '8781',
            ),
        );
        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'mobile' => $user['number'],
                'gender' => $user['gender'],
                'password' => Hash::make($user['password']),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        // \DB::table('users')->insert(array(

            // 0 =>
            // array(
            //     'id' => 1,
            //     'name' => 'Mohamed Niyaaz',
            //     'email' => 'xaayin@gmail.com',
            //     'email_verified_at' => null,
            //     'password' => '$2y$10$Hbwzp2TaEaci0DxHfeI6oeoZ31OLjP8QgV6aTSXb2/xKuK0xTzqCO',
            //     'remember_token' => null,
            //     'created_at' => '2021-11-15 08:46:20',
            //     'updated_at' => '2021-11-15 08:46:20',
            // ),
            // 1 =>
            // array(
            //     'id' => 2,
            //     'name' => 'Aboobakuru Suhail',
            //     'email' => 'aboobakurusuhail@gmail.com',
            //     'email_verified_at' => null,
            //     'password' => '$2y$10$U7iaq74dYoOAHm1InEPTuu.BhlGQQ4QH44zaMKvOQ9lCRnlv7aT4O',
            //     'remember_token' => null,
            //     'created_at' => '2021-11-15 08:46:20',
            //     'updated_at' => '2021-11-15 08:46:20',
            // ),
        // ));
    }
}
