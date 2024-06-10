<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MakananEN extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('makanansEN')->insert([
            [
                'makanan' => 'Tekwan',
                'daerah' => 'Palembang, South Sumatra',
                'img' => 'Makanan/Tekwan.jpg',
                'deskripsi' => 'Tekwan is a traditional Chinese dish modified by the people of Palembang to suit the local taste.',
            ],
            [
                'makanan' => 'Sate Padang',
                'daerah' => 'Padang, West Sumatra',
                'img' => 'Makanan/SatePadang.jpg',
                'deskripsi' => 'Sate Padang is a type of satay with thick sauce made from a mixture of various spices and rice flour.',
            ],
            [
                'makanan' => 'Rendang',
                'daerah' => 'Padang, West Sumatra',
                'img' => 'Makanan/Rendang.jpg',
                'deskripsi' => 'Rendang is a meat dish cooked with spices and coconut milk until the sauce dries up.',
            ],
            [
                'makanan' => 'Pempek',
                'daerah' => 'Palembang, South Sumatra',
                'img' => 'Makanan/Pempek.jpg',
                'deskripsi' => 'Pempek is a traditional dish from Palembang made from fish and tapioca, usually served with vinegar sauce.',
            ],
            [
                'makanan' => 'Ikan Arsik',
                'daerah' => 'Tapanuli, North Sumatra',
                'img' => 'Makanan/IkanArsik.jpg',
                'deskripsi' => 'Ikan Arsik is a traditional Batak fish dish cooked with a rich yellow spice blend.',
            ],
            [
                'makanan' => 'Gulai Ikan Patin',
                'daerah' => 'Jambi, Sumatra',
                'img' => 'Makanan/GulaiIkanPatih.jpeg',
                'deskripsi' => 'Gulai Ikan Patin is a fish dish with a rich coconut milk-based curry sauce.',
            ],
            [
                'makanan' => 'Mie Aceh',
                'daerah' => 'Aceh, Sumatra',
                'img' => 'Makanan/MieAceh.jpg',
                'deskripsi' => 'Mie Aceh is a spicy noodle dish with meat or seafood.',
            ],
            [
                'makanan' => 'Bika Ambon',
                'daerah' => 'Medan, North Sumatra',
                'img' => 'Makanan/BikaAmbon.jpg',
                'deskripsi' => 'Bika Ambon is a traditional Medan cake with a porous texture and fragrant pandan aroma.',
            ],
            [
                'makanan' => 'Sate Matang',
                'daerah' => 'Aceh, Sumatra',
                'img' => 'Makanan/SateMatang.jpg',
                'deskripsi' => 'Sate Matang is a traditional Acehnese satay served with broth and sweet soy sauce sambal.',
            ],
            [
                'makanan' => 'Soto Betawi',
                'daerah' => 'Jakarta, Java',
                'img' => 'Makanan/SotoBetawi.jpg',
                'deskripsi' => 'Soto Betawi is a traditional Jakarta soup made with coconut milk or milk and beef.',
            ],
            [
                'makanan' => 'Gudeg',
                'daerah' => 'Yogyakarta, Java',
                'img' => 'Makanan/Gudeg.jpg',
                'deskripsi' => 'Gudeg is a traditional Yogyakarta dish made from young jackfruit cooked with coconut milk.',
            ],
            [
                'makanan' => 'Rawon',
                'daerah' => 'Surabaya, East Java',
                'img' => 'Makanan/Rawon.jpg',
                'deskripsi' => 'Rawon is a black beef soup from East Java cooked with keluak (black nut).',
            ],
            [
                'makanan' => 'Kerak Telor',
                'daerah' => 'Jakarta, Java',
                'img' => 'Makanan/KerakTelor.jpg',
                'deskripsi' => 'Kerak Telor is a Betawi dish made from eggs, sticky rice, and dried shrimp, cooked with charcoal.',
            ],
            [
                'makanan' => 'Nasi Liwet',
                'daerah' => 'Solo, Central Java',
                'img' => 'Makanan/NasiLiwet.jpg',
                'deskripsi' => 'Nasi Liwet is a traditional Solo dish made with rice cooked in coconut milk and served with chicken, eggs, and vegetables.',
            ],
            [
                'makanan' => 'Bakso',
                'daerah' => 'Malang, East Java',
                'img' => 'Makanan/Bakso.jpg',
                'deskripsi' => 'Bakso is a meatball served in beef broth, usually with noodles, tofu, and vegetables.',
            ],
            [
                'makanan' => 'Sate Maranggi',
                'daerah' => 'Purwakarta, West Java',
                'img' => 'Makanan/SateMarangi.jpg',
                'deskripsi' => 'Sate Maranggi is a traditional satay from Purwakarta made from beef or lamb marinated with a special blend of spices.',
            ],
            [
                'makanan' => 'Opor Ayam',
                'daerah' => 'Yogyakarta, Java',
                'img' => 'Makanan/OporAyam.jpg',
                'deskripsi' => 'Opor Ayam is a chicken dish cooked in coconut milk and spices.',
            ],
            [
                'makanan' => 'Tahu Gejrot',
                'daerah' => 'Cirebon, West Java',
                'img' => 'Makanan/TahuGejrot.jpg',
                'deskripsi' => 'Tahu Gejrot is fried tofu served with a sweet and spicy vinegar sauce from Cirebon.',
            ],
            [
                'makanan' => 'Gado-Gado',
                'daerah' => 'Jakarta, Java',
                'img' => 'Makanan/GadoGado.jpg',
                'deskripsi' => 'Gado-Gado is an Indonesian vegetable salad served with peanut sauce.',
            ],
            [
                'makanan' => 'Pecel Lele',
                'daerah' => 'Lamongan, East Java',
                'img' => 'Makanan/PecelLele.jpg',
                'deskripsi' => 'Pecel Lele is fried catfish served with sambal and fresh vegetables.',
            ],
            [
                'makanan' => 'Soto Kudus',
                'daerah' => 'Kudus, Central Java',
                'img' => 'Makanan/SotoKudus.jpg',
                'deskripsi' => 'Soto Kudus is a clear chicken or beef soup from Kudus.',
            ],
            [
                'makanan' => 'Soto Banjar',
                'daerah' => 'Banjarmasin, South Kalimantan',
                'img' => 'Makanan/SotoBanjar.jpg',
                'deskripsi' => 'Soto Banjar is a traditional Banjar chicken soup served with rice cakes and boiled eggs.',
            ],
            [
                'makanan' => 'Ketupat Kandangan',
                'daerah' => 'Kandangan, South Kalimantan',
                'img' => 'Makanan/KetupatKandang.jpg',
                'deskripsi' => 'Ketupat Kandangan is rice cakes served with haruan (snakehead) fish and coconut milk sauce.',
            ],
            [
                'makanan' => 'Ayam Cincane',
                'daerah' => 'Samarinda, East Kalimantan',
                'img' => 'Makanan/AyamCincane.jpg',
                'deskripsi' => 'Ayam Cincane is roasted chicken cooked with a special red spice blend from Samarinda.',
            ],
            [
                'makanan' => 'Nasi Kuning Banjar',
                'daerah' => 'Banjarmasin, South Kalimantan',
                'img' => 'Makanan/NasiKuningBanjar.jpg',
                'deskripsi' => 'Nasi Kuning Banjar is yellow rice served with various side dishes such as chicken, eggs, and shredded coconut.',
            ],
            [
                'makanan' => 'Pengkang',
                'daerah' => 'Pontianak, West Kalimantan',
                'img' => 'Makanan/Pengkang.jpg',
                'deskripsi' => 'Pengkang is sticky rice filled with dried shrimp, wrapped in banana leaves, and grilled.',
            ],
            [
                'makanan' => 'Juhu Singkah',
                'daerah' => 'Central Kalimantan',
                'img' => 'Makanan/JuhuSingkah.jpg',
                'deskripsi' => 'Juhu Singkah is a traditional Dayak dish made from young rattan cooked with fish and spices.',
            ],
            [
                'makanan' => 'Sambal Raja',
                'daerah' => 'East Kalimantan',
                'img' => 'Makanan/SambalRaja.jpg',
                'deskripsi' => 'Sambal Raja is a traditional East Kalimantan sambal made from chili, shrimp paste, and other spices, served with vegetables.',
            ],
            [
                'food' => 'Plecing Kangkung',
                'region' => 'Lombok, West Nusa Tenggara (NTB)',
                'img' => 'Food/PlecingKangkungLombok.jpg',
                'description' => 'Plecing Kangkung from Lombok is water spinach served with spicy tomato sambal.'
                ],
                [
                'food' => 'Sate Bulayak',
                'region' => 'Sumbawa, West Nusa Tenggara (NTB)',
                'img' => 'Food/SateBulayakSumbawa.jpg',
                'description' => 'Sate Bulayak from Sumbawa is skewered meat served with typical Sumbawa peanut sauce.'
                ],
                [
                'food' => 'Kolo',
                'region' => 'Flores, East Nusa Tenggara (NTT)',
                'img' => 'Food/KoloFlores.jpg',
                'description' => 'Kolo is noodle dish with typical Flores peanut sauce served with sliced meat or fish.'
                ],
                [
                'food' => 'Ikan Woku',
                'region' => 'Maumere, East Nusa Tenggara (NTT)',
                'img' => 'Food/IkanWokuMaumere.jpg',
                'description' => 'Ikan Woku Maumere is fish dish with spicy and savory Woku seasoning.'
                ],
                [
                'food' => 'Ayam Betutu',
                'region' => 'Bali and Lombok, West Nusa Tenggara (NTB)',
                'img' => 'Food/AyamBetutuLombok.jpg',
                'description' => 'Ayam Betutu is chicken cooked with typical spices and wrapped in banana leaves for grilling.'
                ],
                [
                'food' => 'Pelecing Sasak',
                'region' => 'Lombok, West Nusa Tenggara (NTB)',
                'img' => 'Food/PelecingSasakLombok.jpg',
                'description' => 'Pelecing Sasak is water spinach dish served with spicy tomato sambal and sliced tomatoes.'
                ],
                [
                'food' => 'Bebek Betutu',
                'region' => 'Bali and Lombok, West Nusa Tenggara (NTB)',
                'img' => 'Food/BebekBetutuLombok.jpg',
                'description' => 'Bebek Betutu is duck cooked with typical spices and wrapped in banana leaves for grilling.'
                ],
                [
                'food' => 'Ikan Belanga',
                'region' => 'Bajawa, East Nusa Tenggara (NTT)',
                'img' => 'Food/IkanBelangaBajawa.jpg',
                'description' => 'Ikan Belanga Bajawa is fish dish cooked with typical seasoning and grilled in a clay pot.'
                ],
        ]);
    }
}
?>
