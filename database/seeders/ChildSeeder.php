<?php

namespace Database\Seeders;

use App\Models\Child;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class ChildSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        // 初期データ------------------------------------------
        // もりのなかま保育園　札幌ひよこ
        Child::create([
            'id' => $i,
            'name' => '西川　大葵',
            'number' => 'LK02E0001',
            'password' => Crypt::encryptString('V456'),
            'office_id' => 1,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'west.river794@gmail.com',
            'admission_date' => '2020-08-01',
            'birthday' => '2020-03-17',
            'gender' => 1, //1:男 2:女
         ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '上村　彩華',
            'number' => 'LK02E0002',
            'password' => Crypt::encryptString('35V9'),
            'office_id' => 1,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ykuemr1216@gmail.com',
            'admission_date' => '2020-09-28',
            'birthday' => '2019-07-29',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '富田　芽依',
            'number' => 'LK02E0003',
            'password' => Crypt::encryptString('K657'),
            'office_id' => 1,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'onakamura929@gmail.com',
            'admission_date' => '2020-09-29',
            'birthday' => '2019-05-04',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '立花　優奈',
            'number' => 'LK02E0004',
            'password' => Crypt::encryptString('9V54'),
            'office_id' => 1,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'miminosuke1230@gmail.jp',
            'admission_date' => '2021-04-19',
            'birthday' => '2019-07-19',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '横川　紗季',
            'number' => 'LK02E0005',
            'password' => Crypt::encryptString('D276'),
            'office_id' => 1,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'aynbun93@gmail.com',
            'admission_date' => '2021-05-01',
            'birthday' => '2020-06-22',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '鈴木　蒼士',
            'number' => 'LK02E0006',
            'password' => Crypt::encryptString('946N'),
            'office_id' => 1,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'kumakuma.puuuuu.1129@icloud.com',
            'admission_date' => '2021-07-20',
            'birthday' => '2021-01-14',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '佐藤　俐來',
            'number' => 'LK02E0007',
            'password' => Crypt::encryptString('5E78'),
            'office_id' => 1,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'fuyumi.otani@gmail.com',
            'admission_date' => '2021-10-01',
            'birthday' => '2020-04-16',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '須藤　悠乃',
            'number' => 'LK02E0008',
            'password' => Crypt::encryptString('25P9'),
            'office_id' => 1,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'sd_hit127@yahoo.co.jp',
            'admission_date' => '2022-02-21',
            'birthday' => '2021-04-22',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '須藤　久乃',
            'number' => 'LK02E0009',
            'password' => Crypt::encryptString('B836'),
            'office_id' => 1,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'sd_hit127@yahoo.co.jp',
            'admission_date' => '2022-02-21',
            'birthday' => '2021-04-22',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;


        // もりのなかま保育園　札幌白石本郷通園
        Child::create([
            'id' => $i,
            'name' => '高石　晏凪',
            'number' => 'LK03E0001',
            'password' => Crypt::encryptString('32B7'),
            'office_id' => 2,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'sora_anna-20172020@yahoo.co.jp',
            'admission_date' => '2020-04-17',
            'birthday' => '2020-01-16',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '春日　雫',
            'number' => 'LK03E0002',
            'password' => Crypt::encryptString('3L79'),
            'office_id' => 2,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'chai.ka.07@softbank.ne.jp',
            'admission_date' => '2020-09-01',
            'birthday' => '2019-07-08',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '山口　凌生',
            'number' => 'LK03E0003',
            'password' => Crypt::encryptString('923K'),
            'office_id' => 2,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'apple.t.s.19790530@icloud.com',
            'admission_date' => '2021-10-01',
            'birthday' => '2019-10-10',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '瀧口　陽菜乃',
            'number' => 'LK03E0004',
            'password' => Crypt::encryptString('964U'),
            'office_id' => 2,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 's.-a-0403@docomo.ne.jp',
            'admission_date' => '2021-08-02',
            'birthday' => '2020-08-14',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '藪　凛太',
            'number' => 'LK03E0005',
            'password' => Crypt::encryptString('E986'),
            'office_id' => 2,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'maria0115@yahoo.co.jp',
            'admission_date' => '2021-09-01',
            'birthday' => '2020-06-07',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '佐藤　日向子',
            'number' => 'LK03E0006',
            'password' => Crypt::encryptString('9M73'),
            'office_id' => 2,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'hana.4.genie.416@gmail.com',
            'admission_date' => '2021-11-01',
            'birthday' => '2020-04-10',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '伊藤　睦翔',
            'number' => 'LK03E0007',
            'password' => Crypt::encryptString('8G39'),
            'office_id' => 2,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'norishio6886@gmail.com',
            'admission_date' => '2021-12-01',
            'birthday' => '2020-12-07',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '前出　椛向',
            'number' => 'LK03E0008',
            'password' => Crypt::encryptString('78U3'),
            'office_id' => 2,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'love_brpa@au.com',
            'admission_date' => '2021-09-01',
            'birthday' => '2021-06-13',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;


        // もりのなかま保育園　長町園
        Child::create([
            'id' => $i,
            'name' => '佐竹　碧羽',
            'number' => 'LK66E0001',
            'password' => Crypt::encryptString('U567'),
            'office_id' => 3,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'sata_tomo@i.softbank.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-05-19',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '納所　怜杏',
            'number' => 'LK66E0002',
            'password' => Crypt::encryptString('5J94'),
            'office_id' => 3,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'kazupom.luv2_h@ezweb.ne.jp',
            'admission_date' => '2021-06-01',
            'birthday' => '2021-02-09',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '石森　咲奈',
            'number' => 'LK66E0003',
            'password' => Crypt::encryptString('67S2'),
            'office_id' => 3,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'na-p.3.q-no@ezweb.ne.jp',
            'admission_date' => '2020-06-01',
            'birthday' => '2019-07-02',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '奥山　結衣',
            'number' => 'LK66E0004',
            'password' => Crypt::encryptString('578V'),
            'office_id' => 3,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'okuyui.hoikuen@gmail.com',
            'admission_date' => '2020-06-01',
            'birthday' => '2019-07-10',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '西村　依茉',
            'number' => 'LK66E0005',
            'password' => Crypt::encryptString('987D'),
            'office_id' => 3,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yakikingyo_13@docomo.ne.jp',
            'admission_date' => '2021-04-15',
            'birthday' => '2021-01-14',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '慶伊　悠人',
            'number' => 'LK66E0006',
            'password' => Crypt::encryptString('968D'),
            'office_id' => 3,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'luv.dash_krm21@icloud.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-12-26',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '慶伊　凪人',
            'number' => 'LK66E0007',
            'password' => Crypt::encryptString('N687'),
            'office_id' => 3,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'luv.dash_krm21@icloud.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-12-31',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '齋藤　一桜',
            'number' => 'LK66E0008',
            'password' => Crypt::encryptString('U796'),
            'office_id' => 3,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ikiiih@icloud.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-05-10',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '齋藤　一登',
            'number' => 'LK66E0009',
            'password' => Crypt::encryptString('72B3'),
            'office_id' => 3,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ikiiih@icloud.com',
            'admission_date' => '2021-02-01',
            'birthday' => '2020-07-27',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '齋藤　陽月',
            'number' => 'LK66E0010',
            'password' => Crypt::encryptString('937M'),
            'office_id' => 3,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ikiiih@icloud.com',
            'admission_date' => '2022-01-24',
            'birthday' => '2021-10-23',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '竹村　遙真',
            'number' => 'LK66E0011',
            'password' => Crypt::encryptString('82A3'),
            'office_id' => 3,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'utakoachon@yahoo.co.jp',
            'admission_date' => '2020-04-20',
            'birthday' => '2020-01-19',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;


        // もりのなかま保育園　泉中央園サイエンス+
        Child::create([
            'id' => $i,
            'name' => '佐々木　亜蓮',
            'number' => 'LK07E0001',
            'password' => Crypt::encryptString('387D'),
            'office_id' => 4,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'xoxo-xxx.a@softbank.one.jp',
            'admission_date' => '2020-06-15',
            'birthday' => '2019-10-09',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '小林　稜希',
            'number' => 'LK07E0002',
            'password' => Crypt::encryptString('3H72'),
            'office_id' => 4,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'donn.0131gm@gmail.com',
            'admission_date' => '2020-09-01',
            'birthday' => '2019-10-21',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '菊池　秋奈',
            'number' => 'LK07E0003',
            'password' => Crypt::encryptString('68T2'),
            'office_id' => 4,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'imeechul23@gmail.com',
            'admission_date' => '2020-09-01',
            'birthday' => '2019-10-29',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '千葉　穂花',
            'number' => 'LK07E0004',
            'password' => Crypt::encryptString('938T'),
            'office_id' => 4,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'koyacchi1113@ezweb.ne.jp',
            'admission_date' => '2020/08/17',
            'birthday' => '2020/02/18',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '堀田　一花',
            'number' => 'LK07E0005',
            'password' => Crypt::encryptString('M396'),
            'office_id' => 4,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'haru.15-llpp@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-03-19',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '榊原　蒼規',
            'number' => 'LK07E0006',
            'password' => Crypt::encryptString('7B82'),
            'office_id' => 4,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'sendillia50@gmail.com',
            'admission_date' => '2021-08-01',
            'birthday' => '2020-05-21',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '長谷川　つむぎ',
            'number' => 'LK07E0007',
            'password' => Crypt::encryptString('863G'),
            'office_id' => 4,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'my02esterday@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-07-16',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '阿部　祐輝',
            'number' => 'LK07E0008',
            'password' => Crypt::encryptString('4H58'),
            'office_id' => 4,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ssxx0022@icloud.com',
            'admission_date' => '2021-06-01',
            'birthday' => '2020-09-01',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '小松　士恩',
            'number' => 'LK07E0009',
            'password' => Crypt::encryptString('9R47'),
            'office_id' => 4,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'shino19940919@gmail.com',
            'admission_date' => '2021-08-16',
            'birthday' => '2020-09-08',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '近藤　彩羽',
            'number' => 'LK07E0010',
            'password' => Crypt::encryptString('K986'),
            'office_id' => 4,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'clear.1019.d-tech.1211@docomo.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-12-03',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '熊倉　菫',
            'number' => 'LK07E0011',
            'password' => Crypt::encryptString('7F23'),
            'office_id' => 4,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ayaka_kato923@yahoo.co.jp',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-01-15',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '日下部　律月',
            'number' => 'LK07E0012',
            'password' => Crypt::encryptString('729D'),
            'office_id' => 4,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'rib0n.rg.n_s25@icloud.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-07-01',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;


        // もりのなかま保育園　銀杏町園
        Child::create([
            'id' => $i,
            'name' => '奥﨑　葵',
            'number' => 'LK09E0001',
            'password' => Crypt::encryptString('653K'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'y725k_0321@yahoo.co.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2016-04-06',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '飯村　拓真',
            'number' => 'LK09E0002',
            'password' => Crypt::encryptString('349S'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'my1314.0425@docomo.ne.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2016-04-14',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '相澤　環夏',
            'number' => 'LK09E0003',
            'password' => Crypt::encryptString('543C'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ai.no@icloud.com',
            'admission_date' => '2019-04-01',
            'birthday' => '2016-08-12',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '横山　夕真',
            'number' => 'LK09E0004',
            'password' => Crypt::encryptString('642S'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'miwa08021225@gmail.com',
            'admission_date' => '2020-07-17',
            'birthday' => '2016-11-30',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '山内　泰斗',
            'number' => 'LK09E0005',
            'password' => Crypt::encryptString('87G6'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2021-04-01',
            'birthday' => '2016-12-19',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '元山　永苑',
            'number' => 'LK09E0006',
            'password' => Crypt::encryptString('J678'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2021-10-01',
            'birthday' => '2016-08-30',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '戸田沢　駿平',
            'number' => 'LK09E0007',
            'password' => Crypt::encryptString('27N3'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 's.s.seppy@ymobile.ne.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2017-01-23',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '桃井　悠真',
            'number' => 'LK09E0008',
            'password' => Crypt::encryptString('268C'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'seikou0414@yahoo.co.jp',
            'admission_date' => '2019-10-01',
            'birthday' => '2017-03-13',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '高橋　明歌',
            'number' => 'LK09E0009',
            'password' => Crypt::encryptString('327D'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'aco.moco28@gmail.com',
            'admission_date' => '2019-04-01',
            'birthday' => '2017-04-04',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '坂下　昇平',
            'number' => 'LK09E0010',
            'password' => Crypt::encryptString('52H6'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'sekikawamiku@icloud.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2017-05-24',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '黒田　侑平',
            'number' => 'LK09E0011',
            'password' => Crypt::encryptString('594A'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ikuyimadoruk@gmail.com',
            'admission_date' => '2021-04-03',
            'birthday' => '2017-06-08',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '松舘　蒼',
            'number' => 'LK09E0012',
            'password' => Crypt::encryptString('876F'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'k.s.nio3@ezweb.ne.jp',
            'admission_date' => '2019-04-01',
            'birthday' => '2017-06-25',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '菊田　莉里',
            'number' => 'LK09E0013',
            'password' => Crypt::encryptString('638Q'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'gomame0117@gmail.com',
            'admission_date' => '2020-09-23',
            'birthday' => '2017-09-26',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '山内　煌斗',
            'number' => 'LK09E0014',
            'password' => Crypt::encryptString('85G3'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2021-04-01',
            'birthday' => '2017-10-18',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '井上　結',
            'number' => 'LK09E0015',
            'password' => Crypt::encryptString('8T56'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'harunoharu@icloud.com',
            'admission_date' => '2019-09-17',
            'birthday' => '2017-12-01',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '今出川　紗愛',
            'number' => 'LK09E0016',
            'password' => Crypt::encryptString('35P2'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'kaa.n.yaa.u.saa.j@ezweb.ne.jp',
            'admission_date' => '2020-01-04',
            'birthday' => '2017-12-24',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '三上　陽琉',
            'number' => 'LK09E0017',
            'password' => Crypt::encryptString('96X3'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'j6-r.i.p.m24_hiro@ezweb.ne.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2018-04-04',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '六鎗　美那',
            'number' => 'LK09E0018',
            'password' => Crypt::encryptString('3L86'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ym0328mm@gmail.com',
            'admission_date' => '2020-01-20',
            'birthday' => '2018-04-08',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '菊地　智弥',
            'number' => 'LK09E0019',
            'password' => Crypt::encryptString('93Q6'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'm.kikuchi1204jp@gmail.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2018-05-17',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '菊谷　うの',
            'number' => 'LK09E0020',
            'password' => Crypt::encryptString('V974'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'luv.xxx.02@icloud.com',
            'admission_date' => '2020-02-03',
            'birthday' => '2018-06-20',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '横山　小真',
            'number' => 'LK09E0021',
            'password' => Crypt::encryptString('234X'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'miwa08021225@gmail.com',
            'admission_date' => '2020-07-17',
            'birthday' => '2018-07-21',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '大久保　蓮',
            'number' => 'LK09E0022',
            'password' => Crypt::encryptString('M459'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 't.momochan.101@gmail.com',
            'admission_date' => '2019-04-01',
            'birthday' => '2018-08-24',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '佐々木　奏',
            'number' => 'LK09E0023',
            'password' => Crypt::encryptString('K893'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'axt8.tipsnow@gmail.com',
            'admission_date' => '2021-04-03',
            'birthday' => '2018-10-19',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '戸田沢　椋平',
            'number' => 'LK09E0024',
            'password' => Crypt::encryptString('8W62'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 's.s.seppy@ymobile.ne.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2018-11-07',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '上原　珀仁',
            'number' => 'LK09E0025',
            'password' => Crypt::encryptString('G642'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'maripiyo33-kana28@i.softbank.jp',
            'admission_date' => '2019-04-01',
            'birthday' => '2018-11-20',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '井上　芽依',
            'number' => 'LK09E0026',
            'password' => Crypt::encryptString('Q346'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'harunoharu@icloud.com',
            'admission_date' => '2019-09-17',
            'birthday' => '2019-01-28',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '三上　陽望',
            'number' => 'LK09E0027',
            'password' => Crypt::encryptString('3B98'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'j6-r.i.p.m24_hiro@ezweb.ne.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-04-12',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '坂下　航平',
            'number' => 'LK09E0028',
            'password' => Crypt::encryptString('86F5'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'sekikawamiku@icloud.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-04-24',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '奥﨑　澪',
            'number' => 'LK09E0029',
            'password' => Crypt::encryptString('35N7'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'y725k_0321@yahoo.co.jp',
            'admission_date' => '2019-09-17',
            'birthday' => '2019-05-09',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '阿部　まかな',
            'number' => 'LK09E0030',
            'password' => Crypt::encryptString('963W'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'rika192012@gmail.com',
            'admission_date' => '2020-03-01',
            'birthday' => '2019-06-14',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '小野寺　瑠那',
            'number' => 'LK09E0031',
            'password' => Crypt::encryptString('46L8'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'sunflower_01.23@icloud.com',
            'admission_date' => '2020-03-16',
            'birthday' => '2019-07-09',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '成松　実胡',
            'number' => 'LK09E0032',
            'password' => Crypt::encryptString('B963'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'one.wan.one.wanwann...111@docomo.ne.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-07-15',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '森　朝緋',
            'number' => 'LK09E0033',
            'password' => Crypt::encryptString('3U28'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'kaedemkdn@gmail.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-08-06',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '川端　紬喜',
            'number' => 'LK09E0034',
            'password' => Crypt::encryptString('472Q'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ao.chan0821@icloud.com',
            'admission_date' => '2020-11-16',
            'birthday' => '2019-12-08',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '小山田　柊真',
            'number' => 'LK09E0035',
            'password' => Crypt::encryptString('8J97'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'sena-op@i.softbank.jp',
            'admission_date' => '2021-04-03',
            'birthday' => '2020-02-20',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '七草木　凛',
            'number' => 'LK09E0036',
            'password' => Crypt::encryptString('P654'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ju0118ggc@yahoo.ne.jp',
            'admission_date' => '2021-04-03',
            'birthday' => '2020-03-23',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '島田　帆菜',
            'number' => 'LK09E0037',
            'password' => Crypt::encryptString('R387'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'aui8.uui7.april-11@ezweb.ne.jp',
            'admission_date' => '2021-04-03',
            'birthday' => '2020-06-03',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '鈴木　瑠梨',
            'number' => 'LK09E0038',
            'password' => Crypt::encryptString('L597'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'nemu_15@yahoo.ne.jp',
            'admission_date' => '2021-06-01',
            'birthday' => '2020-08-28',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '高橋　浩太朗',
            'number' => 'LK09E0039',
            'password' => Crypt::encryptString('B738'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2020-09-02',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '鈴木　吟',
            'number' => 'LK09E0040',
            'password' => Crypt::encryptString('39J4'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'nozstyle8954@gmail.com',
            'admission_date' => '2021-04-03',
            'birthday' => '2020-09-15',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '遠藤　創',
            'number' => 'LK09E0041',
            'password' => Crypt::encryptString('38A4'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2020-10-20',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '大久保　羽雲',
            'number' => 'LK09E0042',
            'password' => Crypt::encryptString('3M52'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 't.momochan.101@gmail.com',
            'admission_date' => '2021-04-03',
            'birthday' => '2020-10-29',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '戸田沢　純花',
            'number' => 'LK09E0043',
            'password' => Crypt::encryptString('Z879'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 's.s.seppy@ymobile.ne.jp',
            'admission_date' => '2021-05-06',
            'birthday' => '2021-02-02',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '佐藤　璃歩',
            'number' => 'LK09E0044',
            'password' => Crypt::encryptString('T596'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2021-03-23',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '高橋　蓮央',
            'number' => 'LK09E0045',
            'password' => Crypt::encryptString('4Y96'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2021-04-29',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '上原　千玲',
            'number' => 'LK09E0046',
            'password' => Crypt::encryptString('953N'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'maripiyo33-kana28@i.softbank.jp',
            'admission_date' => '2021-08-01',
            'birthday' => '2021-05-02',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '有我　知紘',
            'number' => 'LK09E0047',
            'password' => Crypt::encryptString('7A58'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2021-07-20',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '松舘　絃',
            'number' => 'LK09E0048',
            'password' => Crypt::encryptString('792K'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'k.s.nio3@ezweb.ne.jp',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-09-27',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '今出川　紗空也',
            'number' => 'LK09E0049',
            'password' => Crypt::encryptString('T935'),
            'office_id' => 5,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'kaa.n.yaa.u.saa.j@ezweb.ne.jp',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-12-14',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;


        // もりのなかま保育園　大野田園
        Child::create([
            'id' => $i,
            'name' => '帷子　慈乃',
            'number' => 'LK10E0001',
            'password' => Crypt::encryptString('8C43'),
            'office_id' => 6,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2021-08-11',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '横山　愛恭',
            'number' => 'LK10E0002',
            'password' => Crypt::encryptString('25C4'),
            'office_id' => 6,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2021-12-03',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '伊東　千花',
            'number' => 'LK10E0003',
            'password' => Crypt::encryptString('89E3'),
            'office_id' => 6,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'coji_roo_1221@i.softbank.jp',
            'admission_date' => '2019-03-01',
            'birthday' => '2020-04-19',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '八木　渚月',
            'number' => 'LK10E0004',
            'password' => Crypt::encryptString('234W'),
            'office_id' => 6,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ydora0621@gmail.com',
            'admission_date' => '2021-10-01',
            'birthday' => '2020-07-02',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '橋本　穂乃果',
            'number' => 'LK10E0005',
            'password' => Crypt::encryptString('83M9'),
            'office_id' => 6,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'hamakkohappy@gmail.com',
            'admission_date' => '2021-11-15',
            'birthday' => '2020-12-08',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '黒川　和睦',
            'number' => 'LK10E0006',
            'password' => Crypt::encryptString('E497'),
            'office_id' => 6,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2020-09-08',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '井上　立葵',
            'number' => 'LK10E0007',
            'password' => Crypt::encryptString('9Q82'),
            'office_id' => 6,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2020-07-16',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '荒井　星那',
            'number' => 'LK10E0008',
            'password' => Crypt::encryptString('2K53'),
            'office_id' => 6,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2020-10-08',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '小田長　笑凛',
            'number' => 'LK10E0009',
            'password' => Crypt::encryptString('7Z89'),
            'office_id' => 6,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'chiemi.ne.jp@gmail.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-05-03',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '日下　莉愛',
            'number' => 'LK10E0010',
            'password' => Crypt::encryptString('49N3'),
            'office_id' => 6,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'cda_xj.03@softbank.ne.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-10-29',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '大石　航太',
            'number' => 'LK10E0011',
            'password' => Crypt::encryptString('9U74'),
            'office_id' => 6,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'kozue73@icloud.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-03-20',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '菅野　蓮梛',
            'number' => 'LK10E0012',
            'password' => Crypt::encryptString('26X7'),
            'office_id' => 6,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ncrs_0210@icloud.com',
            'admission_date' => '2021-05-01',
            'birthday' => '2020-03-15',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '長澤　侑正',
            'number' => 'LK10E0013',
            'password' => Crypt::encryptString('659Q'),
            'office_id' => 6,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2019-11-02',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '内藤　柚季',
            'number' => 'LK10E0014',
            'password' => Crypt::encryptString('96Z8'),
            'office_id' => 6,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2019-11-28',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;


        // もりのなかま保育園　富沢駅前園
        Child::create([
            'id' => $i,
            'name' => '長田　茜',
            'number' => 'LK50E0001',
            'password' => Crypt::encryptString('9S67'),
            'office_id' => 7,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'hn26.6@icloud.com',
            'admission_date' => '2021-08-16',
            'birthday' => '2021-05-06',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '安田　煌椛',
            'number' => 'LK50E0002',
            'password' => Crypt::encryptString('9S27'),
            'office_id' => 7,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2021-07-27',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '工藤　燈士',
            'number' => 'LK50E0003',
            'password' => Crypt::encryptString('5Y74'),
            'office_id' => 7,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2021-08-27',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '岩本　桔子',
            'number' => 'LK50E0004',
            'password' => Crypt::encryptString('936Q'),
            'office_id' => 7,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yrmiura042@gmail.com',
            'admission_date' => '2021-06-01',
            'birthday' => '2020-11-03',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '岩渕　璃空',
            'number' => 'LK50E0005',
            'password' => Crypt::encryptString('D869'),
            'office_id' => 7,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'usarinko019@softbank.ne.jp',
            'admission_date' => '2021-10-16',
            'birthday' => '2020-11-17',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '砂子田　隼',
            'number' => 'LK50E0006',
            'password' => Crypt::encryptString('3G72'),
            'office_id' => 7,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'john.lackofmp@gmail.com',
            'admission_date' => '2021-10-01',
            'birthday' => '2020-12-22',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '大村　珀登',
            'number' => 'LK50E0007',
            'password' => Crypt::encryptString('8V69'),
            'office_id' => 7,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'momono.suke.04.02@yahoo.ne.jp',
            'admission_date' => '2021-06-16',
            'birthday' => '2021-01-11',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '佐藤　悠登',
            'number' => 'LK50E0008',
            'password' => Crypt::encryptString('78S9'),
            'office_id' => 7,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2020-07-10',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '北山　陽',
            'number' => 'LK50E0009',
            'password' => Crypt::encryptString('W682'),
            'office_id' => 7,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2020-09-09',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '角間　湊斗',
            'number' => 'LK50E0010',
            'password' => Crypt::encryptString('N378'),
            'office_id' => 7,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2021-03-16',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '髙橋　佑衣',
            'number' => 'LK50E0011',
            'password' => Crypt::encryptString('7A46'),
            'office_id' => 7,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'look2tf-with-hope15@docomo.ne.jp',
            'admission_date' => '2021-05-16',
            'birthday' => '2019-4-11',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '小柴　凛禾',
            'number' => 'LK50E0012',
            'password' => Crypt::encryptString('69Z5'),
            'office_id' => 7,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'mayu-take0618@i.softbank.jp',
            'admission_date' => '2021-05-01',
            'birthday' => '2019-08-20',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '八柳　ひなた',
            'number' => 'LK50E0013',
            'password' => Crypt::encryptString('V357'),
            'office_id' => 7,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'itoyu0816@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-11-26',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '神尾　聖麗',
            'number' => 'LK50E0014',
            'password' => Crypt::encryptString('6P53'),
            'office_id' => 7,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => '05nyanyunyo@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-12-24',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '伊藤　彩奈',
            'number' => 'LK50E0015',
            'password' => Crypt::encryptString('5F28'),
            'office_id' => 7,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'mztmzt.1063@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-12-25',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '東　和寿',
            'number' => 'LK50E0016',
            'password' => Crypt::encryptString('52V4'),
            'office_id' => 7,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'j.m.hrk3535@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-01-12',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '佐藤　汰珂',
            'number' => 'LK50E0017',
            'password' => Crypt::encryptString('6U32'),
            'office_id' => 7,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'fumomania.n@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-02-12',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '石澤　侑果',
            'number' => 'LK50E0018',
            'password' => Crypt::encryptString('84L3'),
            'office_id' => 7,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'mm1115kentarou@gmail.com',
            'admission_date' => '2021-06-01',
            'birthday' => '2020-02-25',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '桂　蒼太朗',
            'number' => 'LK50E0019',
            'password' => Crypt::encryptString('3N84'),
            'office_id' => 7,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2019-11-14',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;


        // もりのなかま保育園　中野栄園
        Child::create([
            'id' => $i,
            'name' => '黒澤　彩花',
            'number' => 'LK12E0001',
            'password' => Crypt::encryptString('3G62'),
            'office_id' => 8,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'eri.k-35@icloud.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-08-13',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '伊藤　梨桜',
            'number' => 'LK12E0002',
            'password' => Crypt::encryptString('84A5'),
            'office_id' => 8,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'smile.2525.axk@gmail.com',
            'admission_date' => '2021-06-01',
            'birthday' => '2021-01-13',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '神田　晨桜',
            'number' => 'LK12E0003',
            'password' => Crypt::encryptString('5C79'),
            'office_id' => 8,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2021-06-08',
            'birthday' => '2021-03-08',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '池田　七瀬',
            'number' => 'LK12E0004',
            'password' => Crypt::encryptString('2Z49'),
            'office_id' => 8,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'bocs.umh-100@ezweb.ne.jp',
            'admission_date' => '2021-10-18',
            'birthday' => '2020-11-05',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '梅津　いろ晴',
            'number' => 'LK12E0005',
            'password' => Crypt::encryptString('482G'),
            'office_id' => 8,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'm.nakachi-csv212@docomo.ne.jp',
            'admission_date' => '2022-01-04',
            'birthday' => '2021-03-09',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '相馬　空翔',
            'number' => 'LK12E0006',
            'password' => Crypt::encryptString('87N6'),
            'office_id' => 8,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'cherry-blossom.nekasumi0927@ezweb.ne.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-06-12',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '手石　侑菜',
            'number' => 'LK12E0007',
            'password' => Crypt::encryptString('23Z5'),
            'office_id' => 8,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2020-04-01',
            'birthday' => '2019-09-02',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '吉田　蒼志',
            'number' => 'LK12E0008',
            'password' => Crypt::encryptString('693X'),
            'office_id' => 8,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'sbbc-9h3r@docomo.ne.jp',
            'admission_date' => '2020-08-01',
            'birthday' => '2019-09-07',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '末平　爽真',
            'number' => 'LK12E0009',
            'password' => Crypt::encryptString('3L69'),
            'office_id' => 8,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2021-04-01',
            'birthday' => '2019-08-05',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '黒崎　苺香',
            'number' => 'LK12E0010',
            'password' => Crypt::encryptString('46E5'),
            'office_id' => 8,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2021-04-01',
            'birthday' => '2019-10-10',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '伊藤　礼翔',
            'number' => 'LK12E0011',
            'password' => Crypt::encryptString('M274'),
            'office_id' => 8,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2021-04-01',
            'birthday' => '2019-11-23',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '河原　夕浬斗',
            'number' => 'LK12E0012',
            'password' => Crypt::encryptString('6L35'),
            'office_id' => 8,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'pprc0531rn@i.softbank.jp',
            'admission_date' => '2021-04-26',
            'birthday' => '2020-01-20',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;


        // もりのなかま保育園　小田原園サイエンス+
        Child::create([
            'id' => $i,
            'name' => '伊東　陽向',
            'number' => 'LK15E0001',
            'password' => Crypt::encryptString('28B9'),
            'office_id' => 9,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ito.mnha@gmail.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-07-29',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '髙橋　暖叶',
            'number' => 'LK15E0002',
            'password' => Crypt::encryptString('3E86'),
            'office_id' => 9,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'tinparu_u8610@au.com',
            'admission_date' => '2020-06-08',
            'birthday' => '2019-11-30',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '小野　新',
            'number' => 'LK15E0003',
            'password' => Crypt::encryptString('6P47'),
            'office_id' => 9,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'o-fam.2113@softbank.ne.jp',
            'admission_date' => '2020-10-20',
            'birthday' => '2019-12-01',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '米澤　さくら',
            'number' => 'LK15E0004',
            'password' => Crypt::encryptString('W827'),
            'office_id' => 9,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'sayapiko0310@yahoo.co.jp',
            'admission_date' => '2021-08-17',
            'birthday' => '2019-08-22',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '大内　心結',
            'number' => 'LK15E0005',
            'password' => Crypt::encryptString('358Z'),
            'office_id' => 9,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'all2together3now@gmail.com',
            'admission_date' => '2021-04-03',
            'birthday' => '2019-07-16',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '伊東　旺佑',
            'number' => 'LK15E0006',
            'password' => Crypt::encryptString('D437'),
            'office_id' => 9,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'sachiko.i.0705@gmail.com',
            'admission_date' => '2020-10-26',
            'birthday' => '2019-04-21',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '曽我　咲茉',
            'number' => 'LK15E0007',
            'password' => Crypt::encryptString('639F'),
            'office_id' => 9,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => '89shine.inbb@ezweb.ne.jp',
            'admission_date' => '2021-05-01',
            'birthday' => '2020-05-19',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '三浦　嘉人',
            'number' => 'LK15E0008',
            'password' => Crypt::encryptString('758R'),
            'office_id' => 9,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'elfen-lied120@outlook.jp',
            'admission_date' => '2021-06-29',
            'birthday' => '2020-04-22',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '平塚　景',
            'number' => 'LK15E0009',
            'password' => Crypt::encryptString('A489'),
            'office_id' => 9,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'qiyuan117@gmail.com',
            'admission_date' => '2021-08-24',
            'birthday' => '2020-09-13',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '元山　依央凛',
            'number' => 'LK15E0010',
            'password' => Crypt::encryptString('V529'),
            'office_id' => 9,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2021-10-01',
            'birthday' => '2020-08-17',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '伊東　歩睦',
            'number' => 'LK15E0011',
            'password' => Crypt::encryptString('K934'),
            'office_id' => 9,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ito.mnha@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-05-28',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '佐藤　陽斗',
            'number' => 'LK15E0012',
            'password' => Crypt::encryptString('H659'),
            'office_id' => 9,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2020-10-17',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '千葉　叶真',
            'number' => 'LK15E0013',
            'password' => Crypt::encryptString('658M'),
            'office_id' => 9,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2021-01-23',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '浦山　鷹燎',
            'number' => 'LK15E0014',
            'password' => Crypt::encryptString('2F65'),
            'office_id' => 9,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2020-12-08',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '山谷　梛葵',
            'number' => 'LK15E0015',
            'password' => Crypt::encryptString('24E8'),
            'office_id' => 9,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2021-08-03',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;


        // 通町ハピネス保育園
        Child::create([
            'id' => $i,
            'name' => '比企　絵菜',
            'number' => 'TM11E0001',
            'password' => Crypt::encryptString('925B'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yui631215@yahoo.co.jp',
            'admission_date' => '2019-07-01',
            'birthday' => '2016-06-10',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '石原　空蓮',
            'number' => 'TM11E0002',
            'password' => Crypt::encryptString('7S34'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'itti-211@ezweb.ne.jp',
            'admission_date' => '2020-07-01',
            'birthday' => '2016-07-21',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '村上　詩織',
            'number' => 'TM11E0003',
            'password' => Crypt::encryptString('86N5'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'masami.o.19830228@ezweb.ne.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2016-09-09',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '関野　陽奈',
            'number' => 'TM11E0004',
            'password' => Crypt::encryptString('6G59'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'sek1n0mana.0920@au.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2016-09-17',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '関野　華奈',
            'number' => 'TM11E0005',
            'password' => Crypt::encryptString('5N93'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'sek1n0mana.0920@au.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2016-09-17',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '鈴木　朱',
            'number' => 'TM11E0006',
            'password' => Crypt::encryptString('59E6'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'mys_9710@ezweb.ne,jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2016-10-12',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '猪狩　陽音',
            'number' => 'TM11E0007',
            'password' => Crypt::encryptString('927P'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2021-05-01',
            'birthday' => '2017-01-20',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '古澤　幸',
            'number' => 'TM11E0008',
            'password' => Crypt::encryptString('C463'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'shiori.sss0206@gmail.com',
            'admission_date' => '2018-04-01',
            'birthday' => '2017-02-06',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '吉田　椿',
            'number' => 'TM11E0009',
            'password' => Crypt::encryptString('L673'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'tomomi5201@yahoo.co.jp',
            'admission_date' => '2021-09-01',
            'birthday' => '2017-02-19',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '川島　結月',
            'number' => 'TM11E0010',
            'password' => Crypt::encryptString('F269'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'pan.pan-y.k-06.15@docomo.ne.jp',
            'admission_date' => '2018-04-01',
            'birthday' => '2017-02-20',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '米田　充希',
            'number' => 'TM11E0011',
            'password' => Crypt::encryptString('748T'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'jkt-.-1219@yahoo.ne.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2017-03-03',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => 'ﾍﾞﾘﾆｭｲ　ｻﾙﾏ　ｳﾏﾙ',
            'number' => 'TM11E0012',
            'password' => Crypt::encryptString('93A7'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'a.banlanjo@gmail.com',
            'admission_date' => '2019-04-01',
            'birthday' => '2017-03-16',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => 'ﾗﾁｺﾜ　ｱﾊﾞﾝﾂ　ｻﾐｭｴﾙ',
            'number' => 'TM11E0013',
            'password' => Crypt::encryptString('H347'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'haticva1988@gmail.com',
            'admission_date' => '2018-04-01',
            'birthday' => '2017-05-30',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '大坊　結奈',
            'number' => 'TM11E0014',
            'password' => Crypt::encryptString('8Y26'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yunami.sakusya@gmail.com',
            'admission_date' => '2018-04-01',
            'birthday' => '2017-07-15',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '阿部　忠臣',
            'number' => 'TM11E0015',
            'password' => Crypt::encryptString('V569'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'aby1103@icloud.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2017-08-04',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '菊地　犀俐',
            'number' => 'TM11E0016',
            'password' => Crypt::encryptString('54A8'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ykimura6645@outlook.jp',
            'admission_date' => '2021-02-16',
            'birthday' => '2017-09-08',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '坂東　大志',
            'number' => 'TM11E0017',
            'password' => Crypt::encryptString('89X6'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yuu.bando@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2017-09-08',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '小川　修伽',
            'number' => 'TM11E0018',
            'password' => Crypt::encryptString('K925'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ogawa.hk@outlook.jp',
            'admission_date' => '2018-04-01',
            'birthday' => '2017-09-12',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '三浦　結',
            'number' => 'TM11E0019',
            'password' => Crypt::encryptString('3F45'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'miurat0925@gmail.com',
            'admission_date' => '2018-04-01',
            'birthday' => '2017-09-25',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '横田　明弥佳',
            'number' => 'TM11E0020',
            'password' => Crypt::encryptString('5Z29'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yokotate24@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2017-10-04',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '伊藤　奏太',
            'number' => 'TM11E0021',
            'password' => Crypt::encryptString('32V4'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'beautygeekkkmau@yahoo.co.jp',
            'admission_date' => '2021-04-16',
            'birthday' => '2017-10-06',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '佐々　雅',
            'number' => 'TM11E0022',
            'password' => Crypt::encryptString('U429'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'pino.hb101@ezweb.ne.jp',
            'admission_date' => '2019-08-16',
            'birthday' => '2017-10-17',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '山田　彩愛',
            'number' => 'TM11E0023',
            'password' => Crypt::encryptString('5M73'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'eighttracksendai@gmail.com',
            'admission_date' => '2019-04-16',
            'birthday' => '2017-11-22',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '菊地　円佳',
            'number' => 'TM11E0024',
            'password' => Crypt::encryptString('589Y'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'h.ksy6256.ye-ye-antena@ezweb.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2018-01-21',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '梶賀　咲那',
            'number' => 'TM11E0025',
            'password' => Crypt::encryptString('853G'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'tokokjk@gmail.com',
            'admission_date' => '2019-04-01',
            'birthday' => '2018-01-27',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '高橋　亮',
            'number' => 'TM11E0026',
            'password' => Crypt::encryptString('G396'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'cham2i-iko.331-49more.123@ezweb.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2018-02-03',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '只野　寿成',
            'number' => 'TM11E0027',
            'password' => Crypt::encryptString('437Q'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'tournesol2006.09.05@gmail.com',
            'admission_date' => '2019-04-01',
            'birthday' => '2018-02-10',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '佐藤　優誠',
            'number' => 'TM11E0028',
            'password' => Crypt::encryptString('75P2'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2018-02-16',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '佐藤　倖多',
            'number' => 'TM11E0029',
            'password' => Crypt::encryptString('2Q34'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yuki-0913xxx9555@softbank.ne.jp',
            'admission_date' => '2019-04-01',
            'birthday' => '2018-03-17',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '加藤　優',
            'number' => 'TM11E0030',
            'password' => Crypt::encryptString('9E87'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2018-04-02',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '貝田　碧葉',
            'number' => 'TM11E0031',
            'password' => Crypt::encryptString('75U3'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'non_non-0213-@softbank.ne.jp',
            'admission_date' => '2021-11-16',
            'birthday' => '2018-04-06',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '田部　薪結',
            'number' => 'TM11E0032',
            'password' => Crypt::encryptString('942A'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2018-06-05',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '高橋　玲也',
            'number' => 'TM11E0033',
            'password' => Crypt::encryptString('K628'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'gaoqiaoyouqi4@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2018-06-15',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '武田　叶向',
            'number' => 'TM11E0034',
            'password' => Crypt::encryptString('C972'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'makamae727@gmail.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2018-07-27',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '比企　咲菜',
            'number' => 'TM11E0035',
            'password' => Crypt::encryptString('438W'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yui631215@yahoo.co.jp',
            'admission_date' => '2019-07-01',
            'birthday' => '2018-09-06',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '前田　莉沙',
            'number' => 'TM11E0036',
            'password' => Crypt::encryptString('V635'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'cftfy270@yahoo.co.jp',
            'admission_date' => '2019-08-01',
            'birthday' => '2018-09-13',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '須藤　健',
            'number' => 'TM11E0037',
            'password' => Crypt::encryptString('46L2'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2018-09-29',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '及川　幹斗',
            'number' => 'TM11E0038',
            'password' => Crypt::encryptString('89N6'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'merryandrew625@icloud.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2018-10-19',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '佐藤　成',
            'number' => 'TM11E0039',
            'password' => Crypt::encryptString('72E6'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2020-04-01',
            'birthday' => '2018-10-21',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '遊佐　侑世',
            'number' => 'TM11E0040',
            'password' => Crypt::encryptString('6T92'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yussakj@icloud.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2018-11-12',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '菅原　雄斗',
            'number' => 'TM11E0041',
            'password' => Crypt::encryptString('986E'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2018-11-12',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '花井　開星',
            'number' => 'TM11E0042',
            'password' => Crypt::encryptString('649E'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'happy1_inc@yahoo.co.jp',
            'admission_date' => '2019-08-01',
            'birthday' => '2018-12-09',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '赤間　智仁',
            'number' => 'TM11E0043',
            'password' => Crypt::encryptString('4G53'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'how-do-you-like-wednesday.8129@docomo.ne.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-02-21',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '小西　卓人',
            'number' => 'TM11E0044',
            'password' => Crypt::encryptString('829U'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2019-03-20',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '栗山　結叶',
            'number' => 'TM11E0045',
            'password' => Crypt::encryptString('39N2'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'chmmsak39@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-03-28',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '鈴木　風賀',
            'number' => 'TM11E0046',
            'password' => Crypt::encryptString('8C59'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'peminin@gmail.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-05-14',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '宮坂　茉南葉',
            'number' => 'TM11E0047',
            'password' => Crypt::encryptString('89J3'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'emiunisyo@gmail.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-05-28',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '大石　湊太',
            'number' => 'TM11E0048',
            'password' => Crypt::encryptString('896L'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2020-04-01',
            'birthday' => '2019-07-12',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '高橋　蒼市',
            'number' => 'TM11E0049',
            'password' => Crypt::encryptString('7T35'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ksbcs122@yahoo.co.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-08-05',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '高橋　梁禾',
            'number' => 'TM11E0050',
            'password' => Crypt::encryptString('E593'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ksbcs122@yahoo.co.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-08-05',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '斉藤　澪',
            'number' => 'TM11E0051',
            'password' => Crypt::encryptString('28C3'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'no10tea@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-10-31',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '佐藤　永都',
            'number' => 'TM11E0052',
            'password' => Crypt::encryptString('734T'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'saya19860608@gmail.com',
            'admission_date' => '2021-04-16',
            'birthday' => '2019-12-03',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '高橋　一心',
            'number' => 'TM11E0053',
            'password' => Crypt::encryptString('Y246'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'pi-pi-piyoko.9.3@ymobile.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-01-15',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '高橋　千洋',
            'number' => 'TM11E0054',
            'password' => Crypt::encryptString('X359'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'a1y0a1k_ai_comesichiama@yahoo.co.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-02-03',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '大坊　柊和',
            'number' => 'TM11E0055',
            'password' => Crypt::encryptString('26X9'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yunami.sakusya@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-02-04',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '佐藤　美桜',
            'number' => 'TM11E0056',
            'password' => Crypt::encryptString('5U74'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2020-03-18',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '佐藤　杏音',
            'number' => 'TM11E0057',
            'password' => Crypt::encryptString('6A93'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 's.s-50.raa@docomo.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-04-24',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '山田　海瑛',
            'number' => 'TM11E0058',
            'password' => Crypt::encryptString('97C6'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'chibipooh1101@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-05-01',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '安本　桜紅',
            'number' => 'TM11E0059',
            'password' => Crypt::encryptString('96C8'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ym-01@docomo.ne.jp',
            'admission_date' => '2021-04-16',
            'birthday' => '2020-05-07',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '伊藤　あおい',
            'number' => 'TM11E0060',
            'password' => Crypt::encryptString('94N2'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'beautygeekkkmau@yahoo.co.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-05-14',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '澤山　紗苗',
            'number' => 'TM11E0061',
            'password' => Crypt::encryptString('S648'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'kyon0612@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-06-15',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '佐藤　利尽',
            'number' => 'TM11E0062',
            'password' => Crypt::encryptString('34F7'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'satoyukie1029@yahoo.co.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-06-30',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '岩出　優里',
            'number' => 'TM11E0063',
            'password' => Crypt::encryptString('V923'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ns1221@i.softbank.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-07-10',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '佐藤　愛真',
            'number' => 'TM11E0064',
            'password' => Crypt::encryptString('98C3'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'mammy-pocopoco@ezweb.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-10-12',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '池田　杜葉',
            'number' => 'TM11E0065',
            'password' => Crypt::encryptString('N975'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2021-04-13',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '高橋　咲羽',
            'number' => 'TM11E0066',
            'password' => Crypt::encryptString('K739'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2021-06-25',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '前田　倖希',
            'number' => 'TM11E0067',
            'password' => Crypt::encryptString('87R6'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2021-07-20',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '山田　彩心',
            'number' => 'TM11E0068',
            'password' => Crypt::encryptString('X486'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'eighttracksendai@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-09-11',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '佐藤　伝',
            'number' => 'TM11E0069',
            'password' => Crypt::encryptString('9T26'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2021-11-02',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '長野　紗瑛',
            'number' => 'TM11E0070',
            'password' => Crypt::encryptString('549C'),
            'office_id' => 10,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2021-04-15',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;


        // もりのなかま保育園　名取増田園
        Child::create([
            'id' => $i,
            'name' => '工藤　結凪',
            'number' => 'LK19E0001',
            'password' => Crypt::encryptString('735S'),
            'office_id' => 11,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'irreplaceable.s-k@i.softbank.jp',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-06-07',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '加藤　京佑',
            'number' => 'LK19E0002',
            'password' => Crypt::encryptString('S793'),
            'office_id' => 11,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'rhy49924@softbank.ne.jp',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-07-19',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '斎藤　碧月',
            'number' => 'LK19E0003',
            'password' => Crypt::encryptString('76Y4'),
            'office_id' => 11,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'si2.ms_1206@icloud.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2021-07-24',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '我妻　叡治',
            'number' => 'LK19E0004',
            'password' => Crypt::encryptString('3Y89'),
            'office_id' => 11,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'fm26k84@yahoo.ne.jp',
            'admission_date' => '2021-10-01',
            'birthday' => '2020-04-07',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '石井　真緒',
            'number' => 'LK19E0005',
            'password' => Crypt::encryptString('74J6'),
            'office_id' => 11,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'uw.t-myc1214e@ezweb.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-05-08',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '独鈷　彩乃',
            'number' => 'LK19E0006',
            'password' => Crypt::encryptString('F648'),
            'office_id' => 11,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'mai1205n@yahoo.co.jp',
            'admission_date' => '2021-06-21',
            'birthday' => '2020-06-03',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '独鈷　桃花',
            'number' => 'LK19E0007',
            'password' => Crypt::encryptString('P938'),
            'office_id' => 11,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'mai1205n@yahoo.co.jp',
            'admission_date' => '2021-06-21',
            'birthday' => '2020-06-03',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '曽我　碧',
            'number' => 'LK19E0008',
            'password' => Crypt::encryptString('673Z'),
            'office_id' => 11,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'saaa1210@icloud.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-08-27',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '布田　柚葉',
            'number' => 'LK19E0009',
            'password' => Crypt::encryptString('4Q98'),
            'office_id' => 11,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'butianchunye@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2020-11-24',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '藤岡　嵐',
            'number' => 'LK19E0010',
            'password' => Crypt::encryptString('698Y'),
            'office_id' => 11,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'rei1744@yahoo.co.jp',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-01-27',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '大欠　芽衣子',
            'number' => 'LK19E0011',
            'password' => Crypt::encryptString('6B94'),
            'office_id' => 11,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'crockheart1229@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-03-29',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '千葉　心結',
            'number' => 'LK19E0012',
            'password' => Crypt::encryptString('2C35'),
            'office_id' => 11,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'y3yp-nao-q@docomo.ne.jp',
            'admission_date' => '2019-10-15',
            'birthday' => '2019-05-17',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '田村　凌久',
            'number' => 'LK19E0013',
            'password' => Crypt::encryptString('89F2'),
            'office_id' => 11,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => '2580clover@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-06-01',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '渡邊　奏太',
            'number' => 'LK19E0014',
            'password' => Crypt::encryptString('X936'),
            'office_id' => 11,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ayupe321@gmail.com',
            'admission_date' => '2021-05-01',
            'birthday' => '2019-06-09',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '大内　琥太',
            'number' => 'LK19E0015',
            'password' => Crypt::encryptString('X368'),
            'office_id' => 11,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'airchoney.July-5m24@docomo.ne.jp',
            'admission_date' => '2020-10-01',
            'birthday' => '2019-10-14',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '箕輪　透真',
            'number' => 'LK19E0016',
            'password' => Crypt::encryptString('Z589'),
            'office_id' => 11,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'quuuu110301.amy@gmail.com',
            'admission_date' => '2021-07-01',
            'birthday' => '2019-11-02',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '杉山　蒼斗',
            'number' => 'LK19E0017',
            'password' => Crypt::encryptString('586N'),
            'office_id' => 11,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'syskn2.810.810@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-02-06',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '鈴木　陽葵',
            'number' => 'LK19E0018',
            'password' => Crypt::encryptString('T592'),
            'office_id' => 11,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yd68xc8h8h@i.softbank.jp',
            'admission_date' => '2021-09-01',
            'birthday' => '2020-03-15',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;


        // もりのなかま保育園　郡山安積園
        Child::create([
            'id' => $i,
            'name' => '三瓶　優斗',
            'number' => 'LK45E0001',
            'password' => Crypt::encryptString('95P6'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ncv9crhc6068fbbzyzqd@docomo.ne.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2016-07-18',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '吉田　依央',
            'number' => 'LK45E0002',
            'password' => Crypt::encryptString('847J'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'chirotochicotosakura33627@gmail.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2016-09-12',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '橋本　幸永',
            'number' => 'LK45E0003',
            'password' => Crypt::encryptString('8W39'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'rushuan@docomo.ne.jp',
            'admission_date' => '2020-05-01',
            'birthday' => '2016-11-01',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '橋本　幸知',
            'number' => 'LK45E0004',
            'password' => Crypt::encryptString('843A'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'rushuan@docomo.ne.jp',
            'admission_date' => '2020-05-01',
            'birthday' => '2016-11-01',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '中島　誠仁',
            'number' => 'LK45E0005',
            'password' => Crypt::encryptString('395G'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'mumu-chu-1v.b1p9p4@docomo.ne.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2017-07-16',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '柏原　大駕',
            'number' => 'LK45E0006',
            'password' => Crypt::encryptString('P825'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'hokulea-tk24@i.softbank.jp',
            'admission_date' => '2020-05-01',
            'birthday' => '2017-07-26',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '柏原　光駕',
            'number' => 'LK45E0007',
            'password' => Crypt::encryptString('87G3'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'hokulea-tk24@i.softbank.jp',
            'admission_date' => '2020-05-01',
            'birthday' => '2017-07-26',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '星　凜花',
            'number' => 'LK45E0008',
            'password' => Crypt::encryptString('J768'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'team-bamco.begin-1219@ezweb.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2017-09-26',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '橋本　昊空',
            'number' => 'LK45E0009',
            'password' => Crypt::encryptString('A653'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'm.19761108@softbank.ne.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2017-11-10',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '関根  弘翔',
            'number' => 'LK45E0010',
            'password' => Crypt::encryptString('35S7'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'naonao-125@docomo.ne.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2018-01-14',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '國分　桜',
            'number' => 'LK45E0011',
            'password' => Crypt::encryptString('275S'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'betsey.maki@gmail.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2018-03-15',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '松田　結莉華',
            'number' => 'LK45E0012',
            'password' => Crypt::encryptString('584B'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'lcy-s24._.myu-7i7._.mkn-s2q@docomo.ne.jp',
            'admission_date' => '2021-09-01',
            'birthday' => '2016-07-27',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '髙橋　叶翔',
            'number' => 'LK45E0013',
            'password' => Crypt::encryptString('43N7'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'wralamr_x3@i.softbank.jp',
            'admission_date' => '2022-01-01',
            'birthday' => '2017-07-13',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '佐藤　理桜',
            'number' => 'LK45E0014',
            'password' => Crypt::encryptString('683Q'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'enough-for-catch@docomo.ne.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2018-05-14',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '小林　輝星',
            'number' => 'LK45E0015',
            'password' => Crypt::encryptString('78H2'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 's_s_k_1009_j_h@au.com',
            'admission_date' => '2020-05-01',
            'birthday' => '2018-08-18',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '宇山　英',
            'number' => 'LK45E0016',
            'password' => Crypt::encryptString('2N89'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ku-130-924@i.softbank.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2018-09-03',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '梅木　心実',
            'number' => 'LK45E0017',
            'password' => Crypt::encryptString('79U8'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ntk_c_0621@yahoo.co.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2018-09-29',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '吉野　裕翔',
            'number' => 'LK45E0018',
            'password' => Crypt::encryptString('967F'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'kh_dive_kayo@yahoo.co.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2018-10-16',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '橋本　幸乃',
            'number' => 'LK45E0019',
            'password' => Crypt::encryptString('748H'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'rushuan@docomo.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2018-10-23',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '吾妻　凛輝',
            'number' => 'LK45E0020',
            'password' => Crypt::encryptString('V462'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'y.a.i.s.k-azuma0210@yahoo.ne.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2018-12-11',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '松本　のどか',
            'number' => 'LK45E0021',
            'password' => Crypt::encryptString('56F3'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => '3oms-p.v_v.bluesky@ezweb.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-01-01',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '山口　穂乃果',
            'number' => 'LK45E0022',
            'password' => Crypt::encryptString('9V47'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'maiyua3220@gmail.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-03-06',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '巽　進二朗',
            'number' => 'LK45E0023',
            'password' => Crypt::encryptString('62X4'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'makiko_miyata@yahoo.ne.jp',
            'admission_date' => '2020-10-01',
            'birthday' => '2019-03-11',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '渡辺　壱成',
            'number' => 'LK45E0024',
            'password' => Crypt::encryptString('9D63'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'mikanon0920@docomo.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-03-28',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '関根　快斗',
            'number' => 'LK45E0025',
            'password' => Crypt::encryptString('48S2'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'y.s-works180sx@ezweb.ne.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-03-30',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '圓井　瑠璃子',
            'number' => 'LK45E0026',
            'password' => Crypt::encryptString('263C'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'sirotan_hanakapa19@yahoo.co.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-05-01',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '山田　橙蒼',
            'number' => 'LK45E0027',
            'password' => Crypt::encryptString('39K8'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'w.qmqm@docomo.ne.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-05-09',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '鈴木　星那',
            'number' => 'LK45E0028',
            'password' => Crypt::encryptString('38Z2'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ha.chan0713@gmail.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-06-29',
            'gender' => 1, //1:男 2:女


        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '太楽　友菜',
            'number' => 'LK45E0029',
            'password' => Crypt::encryptString('84B2'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'you.6.4@ezweb.ne.jp',
            'admission_date' => '2020-07-01',
            'birthday' => '2019-07-22',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '小林　凛汰',
            'number' => 'LK45E0030',
            'password' => Crypt::encryptString('6G74'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'kkkkk.kkkkkkkkkkkkkk@docomo.ne.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-08-18',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '國分　光',
            'number' => 'LK45E0031',
            'password' => Crypt::encryptString('7W63'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'betsey.maki@gmail.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-09-04',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '渡部　遥陽',
            'number' => 'LK45E0032',
            'password' => Crypt::encryptString('4J28'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => '99ririka16@au.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-11-17',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '千葉　凪堵',
            'number' => 'LK45E0033',
            'password' => Crypt::encryptString('P473'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'saya385050@gmail.com',
            'admission_date' => '2020-05-01',
            'birthday' => '2019-11-29',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '瀬戸　広大',
            'number' => 'LK45E0034',
            'password' => Crypt::encryptString('25G4'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ponco_exile@yahoo.co.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-01-11',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '森　菜姫',
            'number' => 'LK45E0035',
            'password' => Crypt::encryptString('654D'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yukikamekamegu-0715@docomo.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-01-13',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '吉野　羽乃佳',
            'number' => 'LK45E0036',
            'password' => Crypt::encryptString('N943'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'kh_dive_kayo@yahoo.co.jp',
            'admission_date' => '2020-05-01',
            'birthday' => '2020-01-19',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '金子　陽茉莉',
            'number' => 'LK45E0037',
            'password' => Crypt::encryptString('Y789'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'k.ry0501.hmr@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-01-22',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '小室　莉愛',
            'number' => 'LK45E0038',
            'password' => Crypt::encryptString('729J'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'cocojyan0409@i.softbank.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-03-08',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '中山　愛惟',
            'number' => 'LK45E0039',
            'password' => Crypt::encryptString('986Z'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'b-reak-kana4121@softbank.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-03-18',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '中山　蒼惟',
            'number' => 'LK45E0040',
            'password' => Crypt::encryptString('7B42'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'b-reak-kana4121@softbank.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-03-18',
            'gender' => 1, //1:男 2:女


        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '古川　琥羽',
            'number' => 'LK45E0041',
            'password' => Crypt::encryptString('R392'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 't11s17y31h05@ymobile.ne.jp',
            'admission_date' => '2020-09-01',
            'birthday' => '2020-04-30',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '及川　杏衣',
            'number' => 'LK45E0042',
            'password' => Crypt::encryptString('Q753'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'r-7.x10m0-s2@ezweb.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-04-27',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '佐藤　有',
            'number' => 'LK45E0043',
            'password' => Crypt::encryptString('36S8'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'mmki.mari.0200@i.softbank.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-05-21',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '過足　陽彩',
            'number' => 'LK45E0044',
            'password' => Crypt::encryptString('458E'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'mmki.mari.0200@i.softbank.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-05-28',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '兼子　梨菜',
            'number' => 'LK45E0045',
            'password' => Crypt::encryptString('63Y4'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'maboroshi-no-haramakioyaji@docomo.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-07-22',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '齋藤　璃子',
            'number' => 'LK45E0046',
            'password' => Crypt::encryptString('3A54'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'l5-q8.ll@ezwed.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-12-01',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '梅木　実怜',
            'number' => 'LK45E0047',
            'password' => Crypt::encryptString('3L84'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ntk_c_0621@yahoo.co.jp',
            'admission_date' => '2021-10-01',
            'birthday' => '2020-08-03',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '根本　琴葉',
            'number' => 'LK45E0048',
            'password' => Crypt::encryptString('8Q54'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'so-ra.029@docomo.ne.jp',
            'admission_date' => '2022-04-01',
            'birthday' => '2020-12-19',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '佐藤　充希',
            'number' => 'LK45E0049',
            'password' => Crypt::encryptString('38U7'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'marunaka4646@yahoo.co.jp',
            'admission_date' => '2022-04-01',
            'birthday' => '2018-10-28',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '鄭　響希',
            'number' => 'LK45E0050',
            'password' => Crypt::encryptString('3H45'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'maimaix1216@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-09-30',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '鈴木　咲',
            'number' => 'LK45E0051',
            'password' => Crypt::encryptString('4F72'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'komaru_17@yahoo.co.jp',
            'admission_date' => '2022-04-01',
            'birthday' => '2020-06-15',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '八木田　智颯',
            'number' => 'LK45E0052',
            'password' => Crypt::encryptString('4N37'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ku.1simudon@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-07-22',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '高久　陽樹',
            'number' => 'LK45E0053',
            'password' => Crypt::encryptString('96E3'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'afaitjin@i.softbank.jp',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-04-07',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '関根　蒼翔',
            'number' => 'LK45E0054',
            'password' => Crypt::encryptString('36L4'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'naonao-125@docomo.ne.jp',
            'admission_date' => '2022-04-01',
            'birthday' => '2020-05-18',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '木村　直晴',
            'number' => 'LK45E0055',
            'password' => Crypt::encryptString('6F45'),
            'office_id' => 12,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yoko482361@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-02-24',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;


        // もりのなかま保育園　松ノ木園
        Child::create([
            'id' => $i,
            'name' => '大澤　鈴羽',
            'number' => 'LK48E0001',
            'password' => Crypt::encryptString('985G'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ryuki20010508@gmail.com',
            'admission_date' => '2021-10-01',
            'birthday' => '2021-06-17',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '小林　庵',
            'number' => 'LK48E0002',
            'password' => Crypt::encryptString('B624'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'kagemusha.hayate@gmail.com',
            'admission_date' => '2021-08-01',
            'birthday' => '2021-03-08',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '込山　燈和',
            'number' => 'LK48E0003',
            'password' => Crypt::encryptString('2E49'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'm.tsukagata@gmail.com',
            'admission_date' => '2021-08-01',
            'birthday' => '2020-08-19',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '下坂　昌央',
            'number' => 'LK48E0004',
            'password' => Crypt::encryptString('8B24'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'aripon.popopo@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-07-28',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '雨宮　百香',
            'number' => 'LK48E0005',
            'password' => Crypt::encryptString('Y945'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'chillpipe@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-02-29',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '井上　凱登',
            'number' => 'LK48E0006',
            'password' => Crypt::encryptString('6K57'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'kyanagon.25@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-07-09',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '大宮　百華',
            'number' => 'LK48E0007',
            'password' => Crypt::encryptString('954R'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'kuroneko4696@me.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-09-04',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '高屋　咲翔',
            'number' => 'LK48E0008',
            'password' => Crypt::encryptString('5H38'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'rs_1010.17@docomo.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-07-21',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '長住　帆華',
            'number' => 'LK48E0009',
            'password' => Crypt::encryptString('2M74'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'mtzk.m2525@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-08-27',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '服部　由雨',
            'number' => 'LK48E0010',
            'password' => Crypt::encryptString('X987'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'eriri.a@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-02-10',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '日髙　凜',
            'number' => 'LK48E0011',
            'password' => Crypt::encryptString('4Z52'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'aya5757@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-04-23',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '廣瀬　心奏',
            'number' => 'LK48E0012',
            'password' => Crypt::encryptString('824A'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'm7dec.deary0@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-01-01',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '福地　慶大',
            'number' => 'LK48E0013',
            'password' => Crypt::encryptString('C438'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'koya.skyblue.16@docomo.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-12-27',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '松川　奏',
            'number' => 'LK48E0014',
            'password' => Crypt::encryptString('6C25'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'm.knkn64@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-08-07',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '秋穂　成海',
            'number' => 'LK48E0015',
            'password' => Crypt::encryptString('526A'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'tujedom@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2018-10-27',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '小林　祭人',
            'number' => 'LK48E0016',
            'password' => Crypt::encryptString('37B8'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'kagemusha.hayate@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2018-11-21',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '中嶋　咲太',
            'number' => 'LK48E0017',
            'password' => Crypt::encryptString('378W'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'o9049805805@docomo.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2018-06-15',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '奈良橋　杏奈',
            'number' => 'LK48E0018',
            'password' => Crypt::encryptString('9L46'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'psa5522.k.t@gmail.com',
            'admission_date' => '2021-07-01',
            'birthday' => '2018-08-01',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '根本　侑希乃',
            'number' => 'LK48E0019',
            'password' => Crypt::encryptString('V532'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'sana.mar16@gmail.com',
            'admission_date' => '2021-10-01',
            'birthday' => '2019-03-14',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '廣瀬　加七太',
            'number' => 'LK48E0020',
            'password' => Crypt::encryptString('B876'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'm7dec.deary0@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2018-04-03',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '藤元　新太',
            'number' => 'LK48E0021',
            'password' => Crypt::encryptString('274L'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'fujimomo405@gmail.com',
            'admission_date' => '2021-12-01',
            'birthday' => '2019-03-15',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '脇田　湊太',
            'number' => 'LK48E0022',
            'password' => Crypt::encryptString('96T2'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'chihiro-mths@softbank.ne.jp',
            'admission_date' => '2021-10-01',
            'birthday' => '2019-03-18',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '脇田　陽向',
            'number' => 'LK48E0023',
            'password' => Crypt::encryptString('D723'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'wa0329n@softbank.ne.jp',
            'admission_date' => '2021-10-01',
            'birthday' => '2019-03-18',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '石黒　杏季',
            'number' => 'LK48E0024',
            'password' => Crypt::encryptString('P634'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ri_jon0416@i.softbank.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2017-08-31',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '大橋　ななみ',
            'number' => 'LK48E0025',
            'password' => Crypt::encryptString('E348'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ayuppebadoppehl@ezweb.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2017-09-21',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '兒玉　紗々',
            'number' => 'LK48E0026',
            'password' => Crypt::encryptString('Q495'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'akachunyan@gmai.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2017-12-18',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '坂上　香優',
            'number' => 'LK48E0027',
            'password' => Crypt::encryptString('92Y6'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'saoriokano400116@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2018-01-07',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '坂野　倫菜',
            'number' => 'LK48E0028',
            'password' => Crypt::encryptString('S683'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'haku2702m@yahoo.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2017-10-05',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '鈴木　創太',
            'number' => 'LK48E0029',
            'password' => Crypt::encryptString('7K68'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'nao.knk@docomo.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2018-03-26',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '髙𣘺　明日真',
            'number' => 'LK48E0030',
            'password' => Crypt::encryptString('269J'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'i-milk@t.vodafone.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2017-09-15',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '宮田　英',
            'number' => 'LK48E0031',
            'password' => Crypt::encryptString('934Y'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'miyakin1827@gmail.com',
            'admission_date' => '2021-10-01',
            'birthday' => '2017-10-05',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '北　詠太',
            'number' => 'LK48E0032',
            'password' => Crypt::encryptString('45E8'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'w.saya712@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2016-07-04',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '鈴木　奏太',
            'number' => 'LK48E0033',
            'password' => Crypt::encryptString('Q824'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'nao.knk@docomo.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2016-04-16',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '櫻井　咲里',
            'number' => 'LK48E0034',
            'password' => Crypt::encryptString('67E3'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'tomokomot315@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-04-03',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '髙橋　楓生',
            'number' => 'LK48E0035',
            'password' => Crypt::encryptString('68Y9'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'happy.may.smile@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-04-15',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '中村　浬',
            'number' => 'LK48E0036',
            'password' => Crypt::encryptString('498F'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2020-08-05',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '小原　悠義',
            'number' => 'LK48E0037',
            'password' => Crypt::encryptString('4T59'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yurina.kohara@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2020-08-14',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '三國　滉士郎',
            'number' => 'LK48E0038',
            'password' => Crypt::encryptString('3F29'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ksmn0512@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2020-11-05',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '吉山　いち栞',
            'number' => 'LK48E0039',
            'password' => Crypt::encryptString('6U28'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'emitaron.8989@ezweb.ne.jp',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-01-04',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '音泉　蓮',
            'number' => 'LK48E0040',
            'password' => Crypt::encryptString('863W'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2021-01-07',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '井本　伊吹',
            'number' => 'LK48E0041',
            'password' => Crypt::encryptString('8Q52'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'oimo0615@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-01-16',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '川瀬　禅',
            'number' => 'LK48E0042',
            'password' => Crypt::encryptString('498Z'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'azusa344@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-02-24',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '河野　世藍',
            'number' => 'LK48E0043',
            'password' => Crypt::encryptString('58M7'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'fukuyan092@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-03-05',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '川瀬　梛',
            'number' => 'LK48E0044',
            'password' => Crypt::encryptString('4G25'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'azusa344@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2018-07-19',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '中村　湊',
            'number' => 'LK48E0045',
            'password' => Crypt::encryptString('7X53'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2018-12-23',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '逸見海周キアヌ',
            'number' => 'LK48E0046',
            'password' => Crypt::encryptString('3V57'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'hemmihemmi@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2016-08-21',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '青木　稜望',
            'number' => 'LK48E0047',
            'password' => Crypt::encryptString('P597'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'm.1484.m@icloud.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-04-22',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '大里　蒼維',
            'number' => 'LK48E0048',
            'password' => Crypt::encryptString('86S2'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'miku.akimoto@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2019-10-10',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '中村　涼真',
            'number' => 'LK48E0049',
            'password' => Crypt::encryptString('2N39'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2019-11-18',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '角田　佳斗',
            'number' => 'LK48E0050',
            'password' => Crypt::encryptString('287M'),
            'office_id' => 13,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2017-04-17',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

// もりのなかま保育園　東砂ひよこ園
        Child::create([
            'id' => $i,
            'name' => '山田　蒼士',
            'number' => 'LK23E0001',
            'password' => Crypt::encryptString('349V'),
            'office_id' => 14,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'delici0us.chiy0c0late@gmail.com',
            'admission_date' => '2021-07-01',
            'birthday' => '2020-06-11',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '秋元　すず',
            'number' => 'LK23E0002',
            'password' => Crypt::encryptString('B524'),
            'office_id' => 14,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'cw0407s@gmail.com',
            'admission_date' => '2021-11-01',
            'birthday' => '2020-08-07',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '川野　広輔',
            'number' => 'LK23E0003',
            'password' => Crypt::encryptString('692L'),
            'office_id' => 14,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'kawanoy88@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-07-12',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '鈴木　絢斗',
            'number' => 'LK23E0004',
            'password' => Crypt::encryptString('56W8'),
            'office_id' => 14,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'suzuki.saki1203@gmail.com',
            'admission_date' => '2021-08-16',
            'birthday' => '2020-01-27',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;


        // もりのなかま保育園　日本橋ひよこ園
        Child::create([
            'id' => $i,
            'name' => '山本　航平',
            'number' => 'LK26E0001',
            'password' => Crypt::encryptString('W564'),
            'office_id' => 15,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'shanbenmeihezi195@gmail.com',
            'admission_date' => '2020-09-10',
            'birthday' => '2019-10-06',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '見島  彩楓',
            'number' => 'LK26E0002',
            'password' => Crypt::encryptString('6Q94'),
            'office_id' => 15,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2020-04-10',
            'birthday' => '2019-11-17',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '田中　星那',
            'number' => 'LK26E0003',
            'password' => Crypt::encryptString('9C52'),
            'office_id' => 15,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2020-08-01',
            'birthday' => '2019-12-02',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '祝前　蒼介',
            'number' => 'LK26E0004',
            'password' => Crypt::encryptString('H627'),
            'office_id' => 15,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'suzandes0511@gmail.com',
            'admission_date' => '2021-05-17',
            'birthday' => '2019-09-03',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '中野　ひなみ',
            'number' => 'LK26E0005',
            'password' => Crypt::encryptString('94H2'),
            'office_id' => 15,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'memorialaddress0228@gmail.com',
            'admission_date' => '2021-06-14',
            'birthday' => '2019-06-25',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '下田　紗良',
            'number' => 'LK26E0006',
            'password' => Crypt::encryptString('M528'),
            'office_id' => 15,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'mizuha328@hotmail.com',
            'admission_date' => '2021-12-20',
            'birthday' => '2019-04-09',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => 'グェン　リン　ダン',
            'number' => 'LK26E0007',
            'password' => Crypt::encryptString('V627'),
            'office_id' => 15,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'nguyenvinh.kkv@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-04-02',
            'gender' => 2, //1:男 2:女


        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '今井　貫達',
            'number' => 'LK26E0008',
            'password' => Crypt::encryptString('372C'),
            'office_id' => 15,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'hasebe08@gmail.com',
            'admission_date' => '2020-11-01',
            'birthday' => '2020-04-24',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '白鳥　煌',
            'number' => 'LK26E0009',
            'password' => Crypt::encryptString('84P9'),
            'office_id' => 15,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => '462828ak@gmail.com',
            'admission_date' => '2021-05-10',
            'birthday' => '2021-02-08',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => 'ホアン　クアン　ハイ',
            'number' => 'LK26E0010',
            'password' => Crypt::encryptString('E495'),
            'office_id' => 15,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'braverybkap@gmail.com',
            'admission_date' => '2021-06-22',
            'birthday' => '2020-07-11',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '太田　奏',
            'number' => 'LK26E0011',
            'password' => Crypt::encryptString('4T38'),
            'office_id' => 15,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'gu2codiet@gmail.com',
            'admission_date' => '2021-07-01',
            'birthday' => '2021-03-08',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '田中　律樹',
            'number' => 'LK26E0012',
            'password' => Crypt::encryptString('68U4'),
            'office_id' => 15,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'full-moon.014@docomo.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-10-04',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;


        // もりのなかま保育園　天王寺ひよこ園
        Child::create([
            'id' => $i,
            'name' => '山本　梨沙',
            'number' => 'LK27E0001',
            'password' => Crypt::encryptString('K263'),
            'office_id' => 16,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yasu25011921@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-10-13',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '油利　朝',
            'number' => 'LK27E0002',
            'password' => Crypt::encryptString('2Y35'),
            'office_id' => 16,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'amaminakagawa@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-12-21',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '喜納　千尋',
            'number' => 'LK27E0003',
            'password' => Crypt::encryptString('Q654'),
            'office_id' => 16,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'aaaassss@icloud.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-11-30',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '皐月　花笑',
            'number' => 'LK27E0004',
            'password' => Crypt::encryptString('3Y86'),
            'office_id' => 16,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'non.smile_m@docomo.ne.jp',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-06-12',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '西坂　美音',
            'number' => 'LK27E0005',
            'password' => Crypt::encryptString('92R6'),
            'office_id' => 16,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => '1-love.not-forget.k@ezweb.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-09-04',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '波江野　朔大',
            'number' => 'LK27E0006',
            'password' => Crypt::encryptString('89X6'),
            'office_id' => 16,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'hirotic518@gmail.com',
            'admission_date' => '2021-12-01',
            'birthday' => '2020-10-29',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '岡　明香里',
            'number' => 'LK27E0007',
            'password' => Crypt::encryptString('354C'),
            'office_id' => 16,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'masasi8692@icloud.com',
            'admission_date' => '2022-01-11',
            'birthday' => '2021-02-03',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '小滝　真士',
            'number' => 'LK27E0008',
            'password' => Crypt::encryptString('Y463'),
            'office_id' => 16,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yuka0109yuka_0504@yahoo.co.jp',
            'admission_date' => '2022-04-01',
            'birthday' => '2020-11-08',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '富田　結心',
            'number' => 'LK27E0009',
            'password' => Crypt::encryptString('N742'),
            'office_id' => 16,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'nao-1228-love.t@i.softbank.jp',
            'admission_date' => '2019-10-01',
            'birthday' => '2019-05-04',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '山本　智樹',
            'number' => 'LK27E0010',
            'password' => Crypt::encryptString('H759'),
            'office_id' => 16,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yasu25011921@gmail.com',
            'admission_date' => '2020-09-01',
            'birthday' => '2020-03-12',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '油利　築',
            'number' => 'LK27E0011',
            'password' => Crypt::encryptString('478H'),
            'office_id' => 16,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'amaminakagawa@gmail.com',
            'admission_date' => '2022-01-11',
            'birthday' => '2020-01-15',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '田中　菫莉',
            'number' => 'LK27E0012',
            'password' => Crypt::encryptString('68Q7'),
            'office_id' => 16,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'michiyocolate-1.1.2.2@ymobile.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-05-12',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;


        // もりのなかま保育園　二島ひよこ園
        Child::create([
            'id' => $i,
            'name' => '安部　玲雅',
            'number' => 'LK29E0001',
            'password' => Crypt::encryptString('683W'),
            'office_id' => 17,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'y.r.r1030.1130@gmail.com',
            'admission_date' => '2020-06-01',
            'birthday' => '2019-11-30',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '髙島　大和',
            'number' => 'LK29E0002',
            'password' => Crypt::encryptString('29J6'),
            'office_id' => 17,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => '0rz35-2.726570b@ezweb.ne.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-08-17',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '鳥集　港太',
            'number' => 'LK29E0003',
            'password' => Crypt::encryptString('8H93'),
            'office_id' => 17,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'x0.72.5okanak@gmail.com',
            'admission_date' => '2021-07-01',
            'birthday' => '2020-02-02',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '岡田　丞生',
            'number' => 'LK29E0004',
            'password' => Crypt::encryptString('K598'),
            'office_id' => 17,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'i.7727_hka.y@icloud.com',
            'admission_date' => '2021-05-01',
            'birthday' => '2020-05-12',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '鳥集　美咲都',
            'number' => 'LK29E0005',
            'password' => Crypt::encryptString('K769'),
            'office_id' => 17,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'x0.72.5okanak@gmail.com',
            'admission_date' => '2021-07-01',
            'birthday' => '2021-03-17',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '原口　結桜月',
            'number' => 'LK29E0006',
            'password' => Crypt::encryptString('42B5'),
            'office_id' => 17,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'gongdeyamixiang@gmail.com',
            'admission_date' => '2021-12-16',
            'birthday' => '2021-04-12',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '福田　朝水',
            'number' => 'LK29E0007',
            'password' => Crypt::encryptString('938T'),
            'office_id' => 17,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ayumuuu712@gmail.com',
            'admission_date' => '2022-01-01',
            'birthday' => '2021-09-15',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;


        // もりのなかま保育園　佐真下園
        Child::create([
            'id' => $i,
            'name' => '椛島　滉太',
            'number' => 'LK31E0001',
            'password' => Crypt::encryptString('C856'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'zollozo07.ms@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2018-03-06',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '上原　暖大',
            'number' => 'LK31E0002',
            'password' => Crypt::encryptString('63Z4'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'u.kaori.0730@ezweb.ne.jp',
            'admission_date' => '2021-05-01',
            'birthday' => '2017-10-26',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '伊集　暖真',
            'number' => 'LK31E0003',
            'password' => Crypt::encryptString('395P'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'dog-to_dog@docomo.ne.jp',
            'admission_date' => '2021-06-01',
            'birthday' => '2019-05-11',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '長嶺　義真',
            'number' => 'LK31E0004',
            'password' => Crypt::encryptString('T692'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'mame.1118.goma@gmail.com',
            'admission_date' => '2019-05-27',
            'birthday' => '2019-01-23',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '川平　湊士',
            'number' => 'LK31E0005',
            'password' => Crypt::encryptString('84J6'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'kyokawa3728@gmail.com',
            'admission_date' => '2019-07-01',
            'birthday' => '2019-03-21',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '内間　翔太郎',
            'number' => 'LK31E0006',
            'password' => Crypt::encryptString('2T38'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'mm0@docomo.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2017-11-28',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '呉屋　日那珠',
            'number' => 'LK31E0007',
            'password' => Crypt::encryptString('94W2'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'kamizatosayaka827@icloud.com',
            'admission_date' => '2021-05-01',
            'birthday' => '2020-09-20',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '伊良波　千嘉',
            'number' => 'LK31E0008',
            'password' => Crypt::encryptString('C398'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ishadow.salsa.airi@gmail.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-04-13',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '池宮　尚志',
            'number' => 'LK31E0009',
            'password' => Crypt::encryptString('567N'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ngh.n.nel@gmail.com',
            'admission_date' => '2021-07-01',
            'birthday' => '2020-01-28',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '池宮　愛紗',
            'number' => 'LK31E0010',
            'password' => Crypt::encryptString('T385'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ngh.n.nel@gmail.com',
            'admission_date' => '2019-06-17',
            'birthday' => '2018-06-27',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '垣花　飛空',
            'number' => 'LK31E0011',
            'password' => Crypt::encryptString('65L8'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'rino01070107@gmail.com',
            'admission_date' => '2020-07-13',
            'birthday' => '2019-10-17',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '泉　龍希',
            'number' => 'LK31E0012',
            'password' => Crypt::encryptString('92A4'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'taekwonder@gmail.com',
            'admission_date' => '2021-08-01',
            'birthday' => '2020-08-28',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '嘉数　湊',
            'number' => 'LK31E0013',
            'password' => Crypt::encryptString('248H'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2021-06-01',
            'birthday' => '2020-10-19',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '呉屋　旭飛',
            'number' => 'LK31E0014',
            'password' => Crypt::encryptString('89K4'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'kamizatosayaka827@icloud.com',
            'admission_date' => '2021-05-01',
            'birthday' => '2017-08-09',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '比屋根　柚',
            'number' => 'LK31E0015',
            'password' => Crypt::encryptString('93V4'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-01-04',
            'birthday' => '2018-12-12',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '伊波　宗祐',
            'number' => 'LK31E0016',
            'password' => Crypt::encryptString('F897'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'aisoda0905@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-05-06',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '伊波　祐亮',
            'number' => 'LK31E0017',
            'password' => Crypt::encryptString('W628'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'aisoda0905@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2019-02-28',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '石原　雪',
            'number' => 'LK31E0018',
            'password' => Crypt::encryptString('2S48'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2020-12-17',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '比嘉　琉愛',
            'number' => 'LK31E0019',
            'password' => Crypt::encryptString('5M68'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'shiro-0510.d3@ezweb.ne.jp',
            'admission_date' => '2022-04-01',
            'birthday' => '2020-10-31',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '砂川　尚臣',
            'number' => 'LK31E0020',
            'password' => Crypt::encryptString('934Q'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2021-04-01',
            'birthday' => '2020-01-16',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '松井　理鷹',
            'number' => 'LK31E0021',
            'password' => Crypt::encryptString('U675'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-05',
            'birthday' => '2018-10-04',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '東江　季穂',
            'number' => 'LK31E0022',
            'password' => Crypt::encryptString('45G7'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2018-11-13',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '棚原　陽仁',
            'number' => 'LK31E0023',
            'password' => Crypt::encryptString('78R5'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2018-04-11',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '島袋　辰希',
            'number' => 'LK31E0024',
            'password' => Crypt::encryptString('28G4'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2018-12-17',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '當山　玄大',
            'number' => 'LK31E0025',
            'password' => Crypt::encryptString('8V42'),
            'office_id' => 18,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2021-09-03',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;


        // もりのなかま保育園　真志喜園
        Child::create([
            'id' => $i,
            'name' => '宮城　雄梧',
            'number' => 'LK32E0001',
            'password' => Crypt::encryptString('Y584'),
            'office_id' => 19,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'simpsons1113@gmail.com',
            'admission_date' => '2020-07-01',
            'birthday' => '2019-05-10',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '仲宗根　颯佑',
            'number' => 'LK32E0002',
            'password' => Crypt::encryptString('6A82'),
            'office_id' => 19,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'hghjr1222@gmail.com',
            'admission_date' => '2020-08-01',
            'birthday' => '2019-08-19',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '知花　燎',
            'number' => 'LK32E0003',
            'password' => Crypt::encryptString('2R46'),
            'office_id' => 19,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'm1h0o9o2@icloud.com',
            'admission_date' => '2020-09-01',
            'birthday' => '2019-10-01',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '仲里　心結',
            'number' => 'LK32E0004',
            'password' => Crypt::encryptString('26B8'),
            'office_id' => 19,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'belief.my112@icloud.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-11-18',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '高江洲　喜与香',
            'number' => 'LK32E0005',
            'password' => Crypt::encryptString('M692'),
            'office_id' => 19,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'm-29-a@yahoo.ne.jp',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-11-24',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '内木　凰介',
            'number' => 'LK32E0006',
            'password' => Crypt::encryptString('46Y8'),
            'office_id' => 19,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'shoko.ehara@icloud.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-11-29',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '渡慶次　栞太',
            'number' => 'LK32E0007',
            'password' => Crypt::encryptString('85H6'),
            'office_id' => 19,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yukayuka627@icloud.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2019-07-25',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '國吉　眞大朗',
            'number' => 'LK32E0008',
            'password' => Crypt::encryptString('5L48'),
            'office_id' => 19,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'maimai328210@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-04-08',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '福本　昴',
            'number' => 'LK32E0009',
            'password' => Crypt::encryptString('Z865'),
            'office_id' => 19,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'kamizato.001@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-04-23',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '山下　煌',
            'number' => 'LK32E0010',
            'password' => Crypt::encryptString('5J27'),
            'office_id' => 19,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'u.i.pupu.uxu@icloud.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-09-08',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '井手上　蒔宙',
            'number' => 'LK32E0011',
            'password' => Crypt::encryptString('35L8'),
            'office_id' => 19,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'id.mahiro@gmail.com',
            'admission_date' => '2021-04-05',
            'birthday' => '2021-01-03',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;


        // もりのなかま保育園　古謝園
        Child::create([
            'id' => $i,
            'name' => '安部　希音',
            'number' => 'LK35E0001',
            'password' => Crypt::encryptString('N573'),
            'office_id' => 20,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'dance0403@icloud.com',
            'admission_date' => '2020-08-02',
            'birthday' => '2020-01-21',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '田中　みくり',
            'number' => 'LK35E0002',
            'password' => Crypt::encryptString('87N5'),
            'office_id' => 20,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ymrs.k.079811@icloud.com',
            'admission_date' => '2020-08-11',
            'birthday' => '2020-01-14',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '玉那覇　季咲',
            'number' => 'LK35E0003',
            'password' => Crypt::encryptString('398N'),
            'office_id' => 20,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yuzupon_s2@icloud.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-02-13',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '新垣　結稀',
            'number' => 'LK35E0004',
            'password' => Crypt::encryptString('T572'),
            'office_id' => 20,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'one_530_love@icloud.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-11-10',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '久高　凛音',
            'number' => 'LK35E0005',
            'password' => Crypt::encryptString('E742'),
            'office_id' => 20,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'rina080805@icloud.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-11-26',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '又吉　真羽',
            'number' => 'LK35E0006',
            'password' => Crypt::encryptString('K786'),
            'office_id' => 20,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'hrk.3422@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-12-05',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '西平　常',
            'number' => 'LK35E0007',
            'password' => Crypt::encryptString('67Q4'),
            'office_id' => 20,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'kfathom@icloud.com',
            'admission_date' => '2021-06-01',
            'birthday' => '2020-05-18',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '奥間　政互',
            'number' => 'LK35E0008',
            'password' => Crypt::encryptString('536Z'),
            'office_id' => 20,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'naotakatomo7@icloud.com',
            'admission_date' => '2021-08-01',
            'birthday' => '2020-08-21',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '島袋　倫',
            'number' => 'LK35E0009',
            'password' => Crypt::encryptString('587F'),
            'office_id' => 20,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'never3ig-by@docomo.ne.jp',
            'admission_date' => '2021-09-01',
            'birthday' => '2020-12-18',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;


        // もりのなかま保育園　美里ひよこ園
        Child::create([
            'id' => $i,
            'name' => '比嘉　仁希',
            'number' => 'LK38E0001',
            'password' => Crypt::encryptString('98P3'),
            'office_id' => 21,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'lucky22.niki18@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-04-18',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '木場　統志朗',
            'number' => 'LK38E0002',
            'password' => Crypt::encryptString('29Y3'),
            'office_id' => 21,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'lee-27-saa@ezweb.ne.jp',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-12-13',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '上江洲　茉希',
            'number' => 'LK38E0003',
            'password' => Crypt::encryptString('4H59'),
            'office_id' => 21,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'nikm0812@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-07-03',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '上村　悠真',
            'number' => 'LK38E0004',
            'password' => Crypt::encryptString('825J'),
            'office_id' => 21,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2020-07-13',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '福元　寛人',
            'number' => 'LK38E0005',
            'password' => Crypt::encryptString('837C'),
            'office_id' => 21,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => '69suzuyo@gmail.com',
            'admission_date' => '2021-06-01',
            'birthday' => '2020-07-17',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '木場　心穂',
            'number' => 'LK38E0006',
            'password' => Crypt::encryptString('3U87'),
            'office_id' => 21,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'lee-27-saa@ezweb.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-09-26',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '長嶺　茉優',
            'number' => 'LK38E0007',
            'password' => Crypt::encryptString('973Q'),
            'office_id' => 21,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2020-11-13',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '碩　爽汰',
            'number' => 'LK38E0008',
            'password' => Crypt::encryptString('47C5'),
            'office_id' => 21,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-03-01',
            'birthday' => '2021-02-20',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '花城　良成',
            'number' => 'LK38E0009',
            'password' => Crypt::encryptString('342M'),
            'office_id' => 21,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'to-o-mo55@docomo.ne.jp',
            'admission_date' => '2021-11-01',
            'birthday' => '2019-04-29',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '比嘉　咲希',
            'number' => 'LK38E0010',
            'password' => Crypt::encryptString('6A94'),
            'office_id' => 21,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'lucky22.niki18@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-10-22',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;


        // もりのなかま保育園　宮里園
        Child::create([
            'id' => $i,
            'name' => '渡慶次　海朱',
            'number' => 'LK39E0001',
            'password' => Crypt::encryptString('843V'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ktrkg0119@gmail.com',
            'admission_date' => '2022-03-07',
            'birthday' => '2021-06-01',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '崎原　星玲奈',
            'number' => 'LK39E0002',
            'password' => Crypt::encryptString('D973'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => '88kh99@ezweb.ne.jp',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-05-20',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '安座間　夢',
            'number' => 'LK39E0003',
            'password' => Crypt::encryptString('679E'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yuna.1225.a@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-09-10',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '宮平　悠世',
            'number' => 'LK39E0004',
            'password' => Crypt::encryptString('K365'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'pippimdrm@ezweb.ne.jp',
            'admission_date' => '2020-10-06',
            'birthday' => '2020-06-06',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '髙江洌　笑愛',
            'number' => 'LK39E0005',
            'password' => Crypt::encryptString('743Z'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'a6322my@icloud.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-08-25',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '外間　叶珠',
            'number' => 'LK39E0006',
            'password' => Crypt::encryptString('62L7'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'k.toki.0628@gmail.com',
            'admission_date' => '2021-05-24',
            'birthday' => '2020-12-08',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '屋良　叶海',
            'number' => 'LK39E0007',
            'password' => Crypt::encryptString('H645'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'shiho120140@icloud.com',
            'admission_date' => '2021-05-24',
            'birthday' => '2020-11-12',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '田畑　慧大',
            'number' => 'LK39E0008',
            'password' => Crypt::encryptString('7H65'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'misya0112@gmail.com',
            'admission_date' => '2021-07-01',
            'birthday' => '2021-03-30',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '知念　莉花',
            'number' => 'LK39E0009',
            'password' => Crypt::encryptString('268Y'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2020-12-23',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '徳里　紅玲',
            'number' => 'LK39E0010',
            'password' => Crypt::encryptString('62L4'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2020-08-11',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '渡慶次　莉音',
            'number' => 'LK39E0011',
            'password' => Crypt::encryptString('Q286'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ktrkg0119@gmail.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-06-03',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '米須　大朗',
            'number' => 'LK39E0012',
            'password' => Crypt::encryptString('362T'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'chi8pacome@gmail.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-08-29',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '屋宜　莉心',
            'number' => 'LK39E0013',
            'password' => Crypt::encryptString('576H'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'k.gkyluv@ezweb.ne.jp',
            'admission_date' => '2020-07-01',
            'birthday' => '2019-10-16',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => 'ﾊﾞｰﾁﾌﾞﾗｯﾄﾞ永愛',
            'number' => 'LK39E0014',
            'password' => Crypt::encryptString('7K28'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yulina312@icloud.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-11-12',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '比嘉　天乃',
            'number' => 'LK39E0015',
            'password' => Crypt::encryptString('287N'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'h.m.0204@icloud.com',
            'admission_date' => '2020-06-01',
            'birthday' => '2020-02-11',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '比嘉　蒼介',
            'number' => 'LK39E0016',
            'password' => Crypt::encryptString('C892'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2019-07-23',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '上原　梨空',
            'number' => 'LK39E0017',
            'password' => Crypt::encryptString('25Y6'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'atuki.0208@icroud.com',
            'admission_date' => '2019-06-01',
            'birthday' => '2018-05-18',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '山城　空音',
            'number' => 'LK39E0018',
            'password' => Crypt::encryptString('8B23'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'bubibubi1797@icloud.com',
            'admission_date' => '2019-04-01',
            'birthday' => '2018-07-12',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '牧志　優玖',
            'number' => 'LK39E0019',
            'password' => Crypt::encryptString('J349'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'mi-pinpin@docomo.ne.jp',
            'admission_date' => '2019-05-07',
            'birthday' => '2018-08-21',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '高江洌　優愛',
            'number' => 'LK39E0020',
            'password' => Crypt::encryptString('596V'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'a6322my@icloud.com',
            'admission_date' => '2019-05-13',
            'birthday' => '2018-12-20',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '安座間　叶',
            'number' => 'LK39E0021',
            'password' => Crypt::encryptString('9D56'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yuna.1225.a@gmail.com',
            'admission_date' => '2019-09-02',
            'birthday' => '2018-12-25',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '宮里　稀人',
            'number' => 'LK39E0022',
            'password' => Crypt::encryptString('59E2'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'keikotakato0624@icloud.com',
            'admission_date' => '2021-09-29',
            'birthday' => '2018-08-16',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '田中　笑美琉',
            'number' => 'LK39E0023',
            'password' => Crypt::encryptString('685G'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'l-asm-l.5@ymobile.ne.jp',
            'admission_date' => '2020-05-21',
            'birthday' => '2018-07-31',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '徳里　瑠空紅',
            'number' => 'LK39E0024',
            'password' => Crypt::encryptString('563D'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2018-08-28',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '宇良　真叶',
            'number' => 'LK39E0025',
            'password' => Crypt::encryptString('32C4'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2019-03-25',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '外間　樹加',
            'number' => 'LK39E0026',
            'password' => Crypt::encryptString('4F68'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2018-12-05',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '髙江洲　誠',
            'number' => 'LK39E0027',
            'password' => Crypt::encryptString('952W'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2018-12-20',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '上地　結葵',
            'number' => 'LK39E0028',
            'password' => Crypt::encryptString('85J9'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2018-08-14',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '木場　慶志朗',
            'number' => 'LK39E0029',
            'password' => Crypt::encryptString('52K6'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => NULL,
            'admission_date' => '2022-04-01',
            'birthday' => '2018-12-23',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '山城　陸音',
            'number' => 'LK39E0030',
            'password' => Crypt::encryptString('C623'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'bubibubi1797@icloud.com',
            'admission_date' => '2019-06-12',
            'birthday' => '2017-04-11',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '福里　瑠姫',
            'number' => 'LK39E0031',
            'password' => Crypt::encryptString('426J'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'fukuzatoh427@gmail.com',
            'admission_date' => '2021-09-01',
            'birthday' => '2017-08-22',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '屋宜　望奈',
            'number' => 'LK39E0032',
            'password' => Crypt::encryptString('34C8'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'k.gkyluv@ezweb.ne.jp',
            'admission_date' => '2019-07-16',
            'birthday' => '2017-10-16',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '比嘉　茉里',
            'number' => 'LK39E0033',
            'password' => Crypt::encryptString('3G75'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'tmktru@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2017-12-07',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '外間　瑚々実',
            'number' => 'LK39E0034',
            'password' => Crypt::encryptString('53X8'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'k.toki.0628@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2018-03-02',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '崎原　盛我',
            'number' => 'LK39E0035',
            'password' => Crypt::encryptString('78T5'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => '88kh99@ezweb.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2018-03-02',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '比嘉　笑琉',
            'number' => 'LK39E0036',
            'password' => Crypt::encryptString('63L9'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'h.m.0204@icloud.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2017-06-19',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '座喜味　光眞',
            'number' => 'LK39E0037',
            'password' => Crypt::encryptString('6T94'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'kiyopy-hana@docomo.ne.jp',
            'admission_date' => '2019-08-01',
            'birthday' => '2017-11-09',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '屋宜　芹菜',
            'number' => 'LK39E0038',
            'password' => Crypt::encryptString('C425'),
            'office_id' => 22,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ma17chi0814@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2018-02-26',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;


        // もりのなかま保育園　喜舎場ひよこ園
        Child::create([
            'id' => $i,
            'name' => '森下　こはる',
            'number' => 'LK42E0001',
            'password' => Crypt::encryptString('234F'),
            'office_id' => 23,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'k.morishita0000@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-12-21',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '長義　力樹',
            'number' => 'LK42E0002',
            'password' => Crypt::encryptString('85Y9'),
            'office_id' => 23,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'airikodai@icloud.com',
            'admission_date' => '2021-07-05',
            'birthday' => '2020-12-10',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '長義　大夢',
            'number' => 'LK42E0003',
            'password' => Crypt::encryptString('87V5'),
            'office_id' => 23,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'airikodai@icloud.com',
            'admission_date' => '2021-07-05',
            'birthday' => '2020-12-10',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '知念　穂乃果',
            'number' => 'LK42E0004',
            'password' => Crypt::encryptString('8B39'),
            'office_id' => 23,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'mori052938@gmail.com',
            'admission_date' => '2021-07-19',
            'birthday' => '2020-08-10',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '比嘉　凛カ',
            'number' => 'LK42E0005',
            'password' => Crypt::encryptString('2Y89'),
            'office_id' => 23,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'opd.chi.0612@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-07-06',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '島袋　いろは',
            'number' => 'LK42E0006',
            'password' => Crypt::encryptString('287A'),
            'office_id' => 23,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'isama.s0525@docomo.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-03-02',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '友寄オーシェン侍丸',
            'number' => 'LK42E0007',
            'password' => Crypt::encryptString('978M'),
            'office_id' => 23,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'iluvokinawa098@gmail.com',
            'admission_date' => '2021-04-09',
            'birthday' => '2019-11-29',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '西脇　花奏',
            'number' => 'LK42E0008',
            'password' => Crypt::encryptString('349E'),
            'office_id' => 23,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'tamaki.koko@gmail.com',
            'admission_date' => '2021-06-01',
            'birthday' => '2020-03-08',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;


        // もりのなかま保育園　中城屋宜園
        Child::create([
            'id' => $i,
            'name' => '藤江　蒼士',
            'number' => 'LK43E0001',
            'password' => Crypt::encryptString('294G'),
            'office_id' => 24,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'takako413@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-07-17',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '喜屋武　汰樹',
            'number' => 'LK43E0002',
            'password' => Crypt::encryptString('69F8'),
            'office_id' => 24,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ocohs-ky@ezweb.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-09-16',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '知念　寿美伶',
            'number' => 'LK43E0003',
            'password' => Crypt::encryptString('M347'),
            'office_id' => 24,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'y.r.0916@au.com',
            'admission_date' => '2021-09-01',
            'birthday' => '2020-09-19',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '新垣　心陽',
            'number' => 'LK43E0004',
            'password' => Crypt::encryptString('284V'),
            'office_id' => 24,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'aya19880525@icloud.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-10-11',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '石川　絢三',
            'number' => 'LK43E0005',
            'password' => Crypt::encryptString('8W74'),
            'office_id' => 24,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'ishii-hr.36-610@yahoo.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-11-02',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '松川　蒼也',
            'number' => 'LK43E0006',
            'password' => Crypt::encryptString('97V3'),
            'office_id' => 24,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'yucari0312@icloud.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-12-19',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '木原　梨里',
            'number' => 'LK43E0007',
            'password' => Crypt::encryptString('V539'),
            'office_id' => 24,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'mei19831103@gmail.com',
            'admission_date' => '2019-09-01',
            'birthday' => '2019-04-12',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '垂　謙吾',
            'number' => 'LK43E0008',
            'password' => Crypt::encryptString('8U49'),
            'office_id' => 24,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'n1118y.frf4@gmail.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-04-15',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;


        // もりのなかま保育園　安慶名園
        Child::create([
            'id' => $i,
            'name' => '高橋　琉空',
            'number' => 'LK44E0001',
            'password' => Crypt::encryptString('534S'),
            'office_id' => 25,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'aya_tantan_827083@yahoo.co.jp',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-06-17',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '津波　咲良',
            'number' => 'LK44E0002',
            'password' => Crypt::encryptString('347Y'),
            'office_id' => 25,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'tsuharu1127@icloud.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-09-10',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '大嶺　乙珠',
            'number' => 'LK44E0003',
            'password' => Crypt::encryptString('243P'),
            'office_id' => 25,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'doublemoonchild3745@gmail.com',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-06-10',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '大嶺　凛',
            'number' => 'LK44E0004',
            'password' => Crypt::encryptString('736Y'),
            'office_id' => 25,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'xxl20hck@docomo.ne.jp',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-08-10',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '美里　皇成',
            'number' => 'LK44E0005',
            'password' => Crypt::encryptString('8N25'),
            'office_id' => 25,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'fu-.-mi.0222@ezweb.ne.jp',
            'admission_date' => '2022-04-01',
            'birthday' => '2021-06-23',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => 'クルンカティル瑛真',
            'number' => 'LK44E0006',
            'password' => Crypt::encryptString('482N'),
            'office_id' => 25,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'higamizuki49@gmail.com',
            'admission_date' => '2021-06-01',
            'birthday' => '2020-06-06',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '淵脇　美和',
            'number' => 'LK44E0007',
            'password' => Crypt::encryptString('5Y76'),
            'office_id' => 25,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => '1b.xxxxxx.s2@icloud.com',
            'admission_date' => '2020-12-01',
            'birthday' => '2020-07-07',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '川端　なな',
            'number' => 'LK44E0008',
            'password' => Crypt::encryptString('5T67'),
            'office_id' => 25,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'kawabata.19.yui@docomo.ne.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-12-07',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '津嘉山　史ノ助',
            'number' => 'LK44E0009',
            'password' => Crypt::encryptString('8S96'),
            'office_id' => 25,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'taka.1226.0213@icloud.com',
            'admission_date' => '2021-09-01',
            'birthday' => '2020-12-30',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '西野　昌希',
            'number' => 'LK44E0010',
            'password' => Crypt::encryptString('F645'),
            'office_id' => 25,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 's2yam.tiamo@gmail.com',
            'admission_date' => '2021-08-01',
            'birthday' => '2020-09-21',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '平良　羽玖翔',
            'number' => 'LK44E0011',
            'password' => Crypt::encryptString('85D9'),
            'office_id' => 25,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'k9s1t10r4h5.t@gmail.com',
            'admission_date' => '2019-09-01',
            'birthday' => '2019-05-21',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '津波　芽依',
            'number' => 'LK44E0012',
            'password' => Crypt::encryptString('54Y9'),
            'office_id' => 25,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'tsuharu1127@icloud.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-09-17',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '首里　雫月',
            'number' => 'LK44E0013',
            'password' => Crypt::encryptString('53K7'),
            'office_id' => 25,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'syurinorifumi@icloud.com',
            'admission_date' => '2021-04-01',
            'birthday' => '2020-01-05',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '高橋　琉海',
            'number' => 'LK44E0014',
            'password' => Crypt::encryptString('854V'),
            'office_id' => 25,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'aya_tantan_827083@yahoo.co.jp',
            'admission_date' => '2021-04-01',
            'birthday' => '2019-06-29',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '外間　守英',
            'number' => 'LK44E0015',
            'password' => Crypt::encryptString('S685'),
            'office_id' => 25,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'k.kayom@gmail.com',
            'admission_date' => '2021-05-01',
            'birthday' => '2019-07-19',
            'gender' => 1, //1:男 2:女

        ]);
        $i++;

        Child::create([
            'id' => $i,
            'name' => '石原　舞',
            'number' => 'LK44E0016',
            'password' => Crypt::encryptString('P234'),
            'office_id' => 25,
            'class_id' => NULL,
            'qr' => 'LK-CHILDREN-' . Hash::make($i),
            'email' => 'bloodtypeb227@gmail.com',
            'admission_date' => '2020-04-01',
            'birthday' => '2019-07-15',
            'gender' => 2, //1:男 2:女

        ]);
        $i++;


    }
}
