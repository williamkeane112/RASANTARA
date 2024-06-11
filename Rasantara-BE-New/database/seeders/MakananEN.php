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
        DB::table('makanansEn')->insert([
            [
                'makanan' => 'Tekwan',
                'daerah' => 'Palembang, South Sumatera',
                'img' => 'makanan/Tekwan.jpg',
                'deskripsi' => 'Tekwan is a traditional Chinese dish modified by the people of Palembang to suit the local taste.',
            ],
            [
                'makanan' => 'Sate Padang',
                'daerah' => 'Padang, West Sumatera',
                'img' => 'makanan/SatePadang.jpg',
                'deskripsi' => 'Sate Padang is a satay with a thick sauce made from a mixture of various spices and rice flour.',
            ],
            [
                'makanan' => 'Rendang',
                'daerah' => 'Padang, West Sumatera',
                'img' => 'makanan/Rendang.jpg',
                'deskripsi' => 'Rendang is a meat dish cooked with spices and coconut milk until the sauce dries up.',
            ],
            [
                'makanan' => 'Pempek',
                'daerah' => 'Palembang, South Sumatera',
                'img' => 'makanan/Pempek.jpg',
                'deskripsi' => 'Pempek is a traditional Palembang makanan made from fish and tapioca, usually served with vinegar sauce.'
            ],
            [
                'makanan' => 'Ikan Arsik',
                'daerah' => 'Tapanuli, North Sumatera',
                'img' => 'makanan/IkanArsik.jpg',
                'deskripsi' => 'Ikan Arsik is a traditional Batak fish dish cooked with a rich yellow spice mix.',
            ],
            [
                'makanan' => 'Gulai Ikan Patin',
                'daerah' => 'Jambi, Sumatera',
                'img' => 'makanan/GulaiIkanPatin.jpg',
                'deskripsi' => 'Gulai Ikan Patin is a fish dish with a rich curry sauce made from spices and coconut milk.',
            ],
            [
                'makanan' => 'Mie Aceh',
                'daerah' => 'Aceh, Sumatera',
                'img' => 'makanan/MieAceh.jpg',
                'deskripsi' => 'Mie Aceh is a spicy noodle dish with a mixture of meat or seafood.',
            ],
            [
                'makanan' => 'Bika Ambon',
                'daerah' => 'Medan, North Sumatera',
                'img' => 'makanan/BikaAmbon.jpg',
                'deskripsi' => 'Bika Ambon is a traditional cake from Medan with a spongy texture and a fragrant pandan aroma.',
            ],
            [
                'makanan' => 'Sate Matang',
                'daerah' => 'Aceh, Sumatera',
                'img' => 'makanan/SateMatang.jpg',
                'deskripsi' => 'Sate Matang is a traditional Aceh satay served with broth and sweet soy sauce sambal.',
            ],
            [
                'makanan' => 'Soto Betawi',
                'daerah' => 'Jakarta, Jawa',
                'img' => 'makanan/SotoBetawi.jpg',
                'deskripsi' => 'Soto Betawi is a traditional Jakarta soup made with coconut milk or milk and beef.',
            ],
            [
                'makanan' => 'Gudeg',
                'daerah' => 'Yogyakarta, Jawa',
                'img' => 'makanan/Gudeg.jpg',
                'deskripsi' => 'Gudeg is a traditional Yogyakarta dish made from young jackfruit cooked with coconut milk.',
            ],
            [
                'makanan' => 'Rawon',
                'daerah' => 'Surabaya, East Jawa',
                'img' => 'makanan/Rawon.jpg',
                'deskripsi' => 'Rawon is a black beef soup from East Jawa cooked with kluwek.',
            ],
            [
                'makanan' => 'Kerak Telor',
                'daerah' => 'Jakarta, Jawa',
                'img' => 'makanan/KerakTelor.jpg',
                'deskripsi' => 'Kerak Telor is a traditional Betawi dish made from eggs, sticky rice, and dried shrimp, cooked over charcoal.',
            ],
            [
                'makanan' => 'Nasi Liwet',
                'daerah' => 'Solo, Central Jawa',
                'img' => 'makanan/NasiLiwet.jpg',
                'deskripsi' => 'Nasi Liwet is a traditional Solo rice dish cooked with coconut milk and served with chicken, eggs, and vegetables.',
            ],
            [
                'makanan' => 'Bakso',
                'daerah' => 'Malang, East Jawa',
                'img' => 'makanan/Bakso.jpg',
                'deskripsi' => 'Bakso is a meatball served in a beef broth, usually with noodles, tofu, and vegetables.',
            ],
            [
                'makanan' => 'Sate Maranggi',
                'daerah' => 'Purwakarta, West Jawa',
                'img' => 'makanan/SateMaranggi.jpg',
                'deskripsi' => 'Sate Maranggi is a traditional Purwakarta satay made from beef or goat meat marinated with special spices.',
            ],
            [
                'makanan' => 'Opor Ayam',
                'daerah' => 'Yogyakarta, Jawa',
                'img' => 'makanan/OporAyam.jpg',
                'deskripsi' => 'Opor Ayam is a chicken dish cooked in coconut milk and special spices.',
            ],
            [
                'makanan' => 'Tahu Gejrot',
                'daerah' => 'Cirebon, West Jawa',
                'img' => 'makanan/TahuGejrot.jpg',
                'deskripsi' => 'Tahu Gejrot is fried tofu served with a sweet and spicy sauce from Cirebon.',
            ],
            [
                'makanan' => 'Gado-Gado',
                'daerah' => 'Jakarta, Jawa',
                'img' => 'makanan/GadoGado.jpg',
                'deskripsi' => 'Gado-Gado is an Indonesian vegetable salad served with a special peanut sauce.',
            ],
            [
                'makanan' => 'Pecel Lele',
                'daerah' => 'Lamongan, East Jawa',
                'img' => 'makanan/PecelLele.jpg',
                'deskripsi' => 'Pecel Lele is fried catfish served with spicy sambal and fresh vegetables.',
            ],
            [
                'makanan' => 'Soto Kudus',
                'daerah' => 'Kudus, Central Jawa',
                'img' => 'makanan/SotoKudus.jpg',
                'deskripsi' => 'Soto Kudus is a chicken or beef soup with clear broth from Kudus.',
            ],
            [
                'makanan' => 'Soto Banjar',
                'daerah' => 'Banjarmasin, South Kalimantan',
                'img' => 'makanan/SotoBanjar.jpg',
                'deskripsi' => 'Soto Banjar is a traditional Banjar chicken soup served with rice cakes and boiled eggs.',
            ],
            [
                'makanan' => 'Ketupat Kandangan',
                'daerah' => 'Kandangan, South Kalimantan',
                'img' => 'makanan/KetupatKandangan.jpg',
                'deskripsi' => 'Ketupat Kandangan is a traditional dish of rice cakes served with haruan (snakehead) fish and coconut milk sauce.',
            ],
            [
                'makanan' => 'Ayam Cincane',
                'daerah' => 'Samarinda, East Kalimantan',
                'img' => 'makanan/AyamCincane.jpg',
                'deskripsi' => 'Ayam Cincane is grilled chicken cooked with a special red spice mix from Samarinda.',
            ],
            [
                'makanan' => 'Nasi Kuning Banjar',
                'daerah' => 'Banjarmasin, South Kalimantan',
                'img' => 'makanan/NasiKuningBanjar.jpg',
                'deskripsi' => 'Nasi Kuning Banjar is yellow rice served with various side dishes such as chicken, eggs, and coconut serundeng.',
            ],
            [
                'makanan' => 'Pengkang',
                'daerah' => 'Pontianak, West Kalimantan',
                'img' => 'makanan/Pengkang.jpg',
                'deskripsi' => 'Pengkang is a dish made from sticky rice filled with dried shrimp, wrapped in banana leaves, and grilled.',
            ],
            [
                'makanan' => 'Juhu Singkah',
                'daerah' => 'Central Kalimantan',
                'img' => 'makanan/JuhuSingkah.jpg',
                'deskripsi' => 'Juhu Singkah is a traditional Dayak dish made from young rattan cooked with fish and spices.',
            ],
            [
                'makanan' => 'Sambal Raja',
                'daerah' => 'East Kalimantan',
                'img' => 'makanan/SambalRaja.jpg',
                'deskripsi' => 'Sambal Raja is a traditional Kutai sambal consisting of various vegetables and special sambal.',
            ],
            [
                'makanan' => 'Pais Patin',
                'daerah' => 'South Kalimantan',
                'img' => 'makanan/PaisPatin.jpg',
                'deskripsi' => 'Pais Patin is a dish of patin fish wrapped in banana leaves and cooked with yellow spices.',
            ],
            [
                'makanan' => 'Bubur Pedas',
                'daerah' => 'Pontianak, West Kalimantan',
                'img' => 'makanan/BuburPedas.jpg',
                'deskripsi' => 'Bubur Pedas is a traditional Pontianak porridge made from a mixture of rice, vegetables, and spices.',
            ],
            [
                'makanan' => 'Ikan Asam Pedas',
                'daerah' => 'Sambas, West Kalimantan',
                'img' => 'makanan/IkanAsamPedas.jpg',
                'deskripsi' => 'Ikan Asam Pedas is a fish dish cooked with a sour and spicy spice mix from Sambas.',
            ],
            [
                'makanan' => 'Coto Makassar',
                'daerah' => 'Makassar, South Sulawesi',
                'img' => 'makanan/CotoMakassar.jpg',
                'deskripsi' => 'Coto Makassar is a traditional Makassar beef soup cooked with spices and ground peanuts.',
            ],
            [
                'makanan' => 'Pallubasa',
                'daerah' => 'Makassar, South Sulawesi',
                'img' => 'makanan/Pallubasa.jpg',
                'deskripsi' => 'Pallubasa is a meat soup dish with a thick broth made from roasted grated coconut.',
            ],
            [
                'makanan' => 'Sup Konro',
                'daerah' => 'Makassar, South Sulawesi',
                'img' => 'makanan/SupKonro.jpg',
                'deskripsi' => 'Sup Konro is a traditional Makassar rib soup cooked with special spices.',
            ],
            [
                'makanan' => 'Tinutuan',
                'daerah' => 'Manado, North Sulawesi',
                'img' => 'makanan/Tinutuan.jpg',
                'deskripsi' => 'Tinutuan, or Manado Porridge, is a porridge made from various vegetables and traditional Manado spices.',
            ],
            [
                'makanan' => 'Paniki',
                'daerah' => 'Manado, North Sulawesi',
                'img' => 'makanan/Paniki.jpg',
                'deskripsi' => 'Paniki is a traditional Manado dish made from bat meat cooked with coconut milk and spices.',
            ],
            [
                'makanan' => 'Brenebon',
                'daerah' => 'Manado, North Sulawesi',
                'img' => 'makanan/Brenebon.jpg',
                'deskripsi' => 'Brenebon is a red bean soup cooked with pork or beef and traditional Manado spices.',
            ],
            [
                'makanan' => 'Ikan Woku Belanga',
                'daerah' => 'Manado, North Sulawesi',
                'img' => 'makanan/IkanWokuBelanga.jpg',
                'deskripsi' => 'Ikan Woku Belanga is a fish dish cooked with traditional Manado woku spices in a clay pot.',
            ],
            [
                'makanan' => 'Kapurung',
                'daerah' => 'Luwu, South Sulawesi',
                'img' => 'makanan/Kapurung.jpg',
                'deskripsi' => 'Kapurung is a traditional Luwu dish made from sago cooked with fish or chicken and vegetables.',
            ],
            [
                'makanan' => 'Kaledo',
                'daerah' => 'Palu, Central Sulawesi',
                'img' => 'makanan/Kaledo.jpg',
                'deskripsi' => 'Kaledo is a traditional Palu soup made from cow leg bones served with a sour and spicy broth.',
            ],
            [
                'makanan' => 'Lalampa',
                'daerah' => 'Gorontalo, Sulawesi',
                'img' => 'makanan/Lalampa.jpg',
                'deskripsi' => 'Lalampa is a traditional Gorontalo lemper wrapped in banana leaves and grilled.',
            ],
            [
                'makanan' => 'Babi Guling',
                'daerah' => 'Bali',
                'img' => 'makanan/BabiGuling.jpg',
                'deskripsi' => 'Babi Guling is a traditional Balinese roasted pork dish seasoned with special Balinese spices.',
            ],
            [
                'makanan' => 'Ayam Betutu',
                'daerah' => 'Bali',
                'img' => 'makanan/AyamBetutu.jpg',
                'deskripsi' => 'Ayam Betutu is a chicken dish cooked with special Balinese spices, wrapped in banana leaves, and roasted.',
            ],
            [
                'makanan' => 'Lawar',
                'daerah' => 'Bali',
                'img' => 'makanan/Lawar.jpg',
                'deskripsi' => 'Lawar is a mixture of vegetables, minced meat, and grated coconut seasoned with special Balinese spices.',
            ],
            [
                'makanan' => 'Sate Lilit',
                'daerah' => 'Bali',
                'img' => 'makanan/SateLilit.jpg',
                'deskripsi' => 'Sate Lilit is a traditional Balinese satay made from minced meat wrapped around lemongrass or bamboo sticks.',
            ],
            [
                'makanan' => 'Nasi Campur Bali',
                'daerah' => 'Bali',
                'img' => 'makanan/NasiCampurBali.jpg',
                'deskripsi' => 'Nasi Campur Bali is white rice served with various Balinese side dishes such as shredded chicken, sate lilit, and lawar.',
            ],
            [
                'makanan' => 'Serombotan',
                'daerah' => 'Bali',
                'img' => 'makanan/Serombotan.jpg',
                'deskripsi' => 'Serombotan is a dish of boiled vegetables served with a special Balinese peanut sauce.',
            ],
            [
                'makanan' => 'Jukut Urab',
                'daerah' => 'Bali',
                'img' => 'makanan/JukutUrab.jpg',
                'deskripsi' => 'Jukut Urab is a mixture of vegetables seasoned with grated coconut and special Balinese spices.',
            ],
            [
                'makanan' => 'Tipat Blayag',
                'daerah' => 'Bali',
                'img' => 'makanan/TipatBlayag.jpg',
                'deskripsi' => 'Tipat Blayag is a traditional Balinese rice cake served with chicken, vegetables, and coconut sambal.',
            ],
            [
                'makanan' => 'Sei Sapi',
                'daerah' => 'Kupang, East Nusa Tenggara',
                'img' => 'makanan/SeiSapi.jpg',
                'deskripsi' => 'Sei Sapi is a traditional Kupang smoked beef dish cooked with special spices.',
            ],
            [
                'makanan' => 'Jagung Bose',
                'daerah' => 'East Nusa Tenggara',
                'img' => 'makanan/JagungBose.jpg',
                'deskripsi' => 'Jagung Bose is a traditional East Nusa Tenggara corn dish cooked with red beans and coconut milk.',
            ],
            [
                'makanan' => 'Tapa Kolo',
                'daerah' => 'East Nusa Tenggara',
                'img' => 'makanan/Kolo.jpg',
                'deskripsi' => 'Kolo is a traditional East Nusa Tenggara rice dish cooked in bamboo.',
            ],
            [
                'makanan' => 'Catemak Jagung',
                'daerah' => 'East Nusa Tenggara',
                'img' => 'makanan/CatemakJagung.jpg',
                'deskripsi' => 'Catemak Jagung is a traditional East Nusa Tenggara corn soup cooked with wax gourd, beans, and papaya leaves.',
            ],
            [
                'makanan' => 'Rumpu Rampe',
                'daerah' => 'East Nusa Tenggara',
                'img' => 'makanan/RumpuRampe.jpg',
                'deskripsi' => 'Rumpu Rampe is a traditional East Nusa Tenggara vegetable dish made from young papaya leaves, papaya flowers, and banana blossoms.',
            ],
            [
                'makanan' => 'Kue Lontar',
                'daerah' => 'East Nusa Tenggara',
                'img' => 'makanan/KueLontar.jpg',
                'deskripsi' => 'Kue Lontar is a traditional East Nusa Tenggara pie made from milk, eggs, and sugar.',
            ],
            [
                'makanan' => 'Jawada',
                'daerah' => 'East Nusa Tenggara',
                'img' => 'makanan/Jawada.jpg',
                'deskripsi' => 'Jawada is a traditional East Nusa Tenggara cake made from rice flour and brown sugar, deep-fried.',
            ],
            [
                'makanan' => 'Ayam Taliwang',
                'daerah' => 'Lombok, West Nusa Tenggara',
                'img' => 'makanan/AyamTaliwang.jpg',
                'deskripsi' => 'Ayam Taliwang is a traditional Lombok grilled chicken dish seasoned with spicy spices.',
            ],
            [
                'makanan' => 'Plecing Kangkung',
                'daerah' => 'Lombok, West Nusa Tenggara',
                'img' => 'makanan/PlecingKangkung.jpg',
                'deskripsi' => 'Plecing Kangkung is a traditional Lombok water spinach dish served with spicy tomato sambal.',
            ],
            [
                'makanan' => 'Sate Rembiga',
                'daerah' => 'Lombok, West Nusa Tenggara',
                'img' => 'makanan/SateRembiga.jpg',
                'deskripsi' => 'Sate Rembiga is a traditional Rembiga beef satay seasoned with sweet and spicy spices.',
            ],
            [
                'makanan' => 'Sate Tanjung',
                'daerah' => 'Lombok, West Nusa Tenggara',
                'img' => 'makanan/SateTanjung.jpg',
                'deskripsi' => 'Sate Tanjung is a traditional Lombok tuna satay grilled with special spices.',
            ],
            [
                'makanan' => 'Bebalung',
                'daerah' => 'Lombok, West Nusa Tenggara',
                'img' => 'makanan/Bebalung.jpg',
                'deskripsi' => 'Bebalung is a traditional Lombok rib soup cooked with special spices.',
            ],
            [
                'makanan' => 'Ares',
                'daerah' => 'Lombok, West Nusa Tenggara',
                'img' => 'makanan/Ares.jpg',
                'deskripsi' => 'Ares is a traditional Lombok dish made from banana stems cooked with coconut milk and spices.',
            ],
            [
                'makanan' => 'Nasi Balap Puyung',
                'daerah' => 'Lombok, West Nusa Tenggara',
                'img' => 'makanan/NasiBalapPuyung.jpg',
                'deskripsi' => 'Nasi Balap Puyung is white rice served with spicy shredded chicken, a traditional Lombok dish.',
            ],
            [
                'makanan' => 'Poteng Jaje Tujak',
                'daerah' => 'Lombok, West Nusa Tenggara',
                'img' => 'makanan/PotengJajeTujak.jpg',
                'deskripsi' => 'Poteng Jaje Tujak is a traditional sticky rice dish cooked with fermented cassava and grated coconut.',
            ],
            [
                'makanan' => 'Kelaq Batih',
                'daerah' => 'Lombok, West Nusa Tenggara',
                'img' => 'makanan/KelaqBatih.jpg',
                'deskripsi' => 'Kelaq Batih is a traditional Lombok long bean dish cooked with coconut milk and spices.',
            ],
            [
                'makanan' => 'Papeda',
                'daerah' => 'Papua',
                'img' => 'makanan/Papeda.jpg',
                'deskripsi' => 'Papeda is a traditional Papua sago porridge served with yellow fish soup.',
            ],
            [
                'makanan' => 'Ikan Kuah Kuning',
                'daerah' => 'Papua',
                'img' => 'makanan/IkanKuahKuning.jpg',
                'deskripsi' => 'Ikan Kuah Kuning is a traditional Papua fish dish cooked with turmeric and spices.',
            ],
            [
                'makanan' => 'Sate Ulat Sagu',
                'daerah' => 'Papua',
                'img' => 'makanan/SateUlatSagu.jpg',
                'deskripsi' => 'Sate Ulat Sagu is a traditional Papua satay made from sago worms cooked with special spices.',
            ],
            [
                'makanan' => 'Udang Selingkuh',
                'daerah' => 'Wamena, Papua',
                'img' => 'makanan/UdangSelingkuh.jpg',
                'deskripsi' => 'Udang Selingkuh is a traditional Wamena freshwater shrimp dish cooked with spices.',
            ],
            [
                'makanan' => 'Aunu Senebre',
                'daerah' => 'Papua',
                'img' => 'makanan/AunuSenebre.jpg',
                'deskripsi' => 'Aunu Senebre is a traditional Papua dish made from anchovies cooked with taro leaves and grated coconut.',
            ],
            [
                'makanan' => 'Martabak Sagu',
                'daerah' => 'Papua',
                'img' => 'makanan/MartabakSagu.jpg',
                'deskripsi' => 'Martabak Sagu is a traditional Papua martabak made from sago filled with grated coconut and brown sugar.',
            ],
            [
                'makanan' => 'Sagu Lempeng',
                'daerah' => 'Papua',
                'img' => 'makanan/SaguLempeng.jpg',
                'deskripsi' => 'Sagu Lempeng is a traditional Papua sago bread cooked by grilling, usually served with fish or grated coconut.',
            ],
            [
                'makanan' => 'Ikan Bakar Manokwari',
                'daerah' => 'Manokwari, West Papua',
                'img' => 'makanan/IkanBakarManokwari.jpg',
                'deskripsi' => 'Ikan Bakar Manokwari is a traditional Manokwari grilled fish dish served with special sambal.',
            ],
            [
                'makanan' => 'Plecing Kangkung',
                'daerah' => 'Lombok, West Nusa Tenggara (NTB)',
                'img' => 'makanan/PlecingKangkungLombok.jpg',
                'deskripsi' => 'Plecing Kangkung Lombok is a traditional water spinach dish served with spicy tomato sambal.',
            ],
            [
                'makanan' => 'Sate Bulayak',
                'daerah' => 'Sumbawa, West Nusa Tenggara (NTB)',
                'img' => 'makanan/SateBulayakSumbawa.jpg',
                'deskripsi' => 'Sate Bulayak Sumbawa is a traditional Sumbawa satay served with special peanut sauce.',
            ],
            [
                'makanan' => 'Kolo',
                'daerah' => 'Flores, East Nusa Tenggara (NTT)',
                'img' => 'makanan/KoloFlores.jpg',
                'deskripsi' => 'Kolo is a traditional Flores noodle dish with peanut sauce served with slices of meat or fish.',
            ],
            [
                'makanan' => 'Ikan Woku',
                'daerah' => 'Maumere, East Nusa Tenggara (NTT)',
                'img' => 'makanan/IkanWokuMaumere.jpg',
                'deskripsi' => 'Ikan Woku Maumere is a traditional fish dish with spicy and savory woku seasoning.',
            ],
            [
                'makanan' => 'Ayam Betutu',
                'daerah' => 'Bali and Lombok, West Nusa Tenggara (NTB)',
                'img' => 'makanan/AyamBetutuLombok.jpg',
                'deskripsi' => 'Ayam Betutu is a chicken dish cooked with special spices and wrapped in banana leaves for roasting.',
            ],
            [
                'makanan' => 'Pelecing Sasak',
                'daerah' => 'Lombok, West Nusa Tenggara (NTB)',
                'img' => 'makanan/PelecingSasakLombok.jpg',
                'deskripsi' => 'Pelecing Sasak is a traditional water spinach dish served with spicy tomato sambal and tomato slices.',
            ],
            [
                'makanan' => 'Bebek Betutu',
                'daerah' => 'Bali and Lombok, West Nusa Tenggara (NTB)',
                'img' => 'makanan/BebekBetutuLombok.jpg',
                'deskripsi' => 'Bebek Betutu is a duck dish cooked with special spices and wrapped in banana leaves for roasting.',
            ],
            [
                'makanan' => 'Ikan Belanga',
                'daerah' => 'Bajawa, East Nusa Tenggara (NTT)',
                'img' => 'makanan/IkanBelangaBajawa.jpg',
                'deskripsi' => 'Ikan Belanga Bajawa is a traditional fish dish cooked with special spices and grilled in a clay pot.',
            ],
            [
                'makanan' => 'Sup Kacang Merah Maumere',
                'daerah' => 'Maumere, East Nusa Tenggara (NTT)',
                'img' => 'makanan/SupKacangMerahMaumere.jpg',
                'deskripsi' => 'Sup Kacang Merah Maumere is a traditional red bean soup cooked with special spices and served with rice.',
            ],
        ]);
    }
}
?>
