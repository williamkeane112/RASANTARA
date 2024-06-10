<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Makanan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('makanans')->insert([
            [
                'makanan' => 'Tekwan',
                'daerah' => 'Palembang, Sumatera Selatan',
                'img' => 'Makanan/Tekwan.jpg',
                'deskripsi' => 'Tekwan adalah makanan khas orang Tionghua yang di modifikasi oleh masyarakat palembang agar sesuai dengan cita rasa lidah masyarakat setempat.',
            ],
            [
                'makanan' => 'Sate Padang',
                'daerah' => 'Padang, Sumatera Barat',
                'img' => 'Makanan/SatePadang.jpg',
                'deskripsi' => 'Sate Padang adalah sate dengan saus kental yang terbuat dari campuran berbagai rempah dan tepung beras.',
            ],
            [
                'makanan' => 'Rendang',
                'daerah' => 'Padang, Sumatera Barat',
                'img' => 'Makanan/Rendang.jpg',
                'deskripsi' => 'Rendang adalah hidangan daging yang dimasak dengan rempah-rempah dan santan hingga kuahnya mengering.',
            ],
            [
                'makanan' => 'Pempek',
                'daerah' => 'Palembang, Sumatera Selatan',
                'img' => 'Makanan/Pempek.jpg',
                'deskripsi' => 'Pempek adalah makanan khas Palembang yang terbuat dari ikan dan sagu, biasanya disajikan dengan saus cuka.',
            ],
            [
                'makanan' => 'Ikan Arsik',
                'daerah' => 'Tapanuli, Sumatera Utara',
                'img' => 'Makanan/IkanArsik.jpg',
                'deskripsi' => 'Ikan Arsik adalah masakan ikan khas Batak yang dimasak dengan bumbu kuning khas yang kaya rempah.',
            ],
            [
                'makanan' => 'Gulai Ikan Patin',
                'daerah' => 'Jambi, Sumatera',
                'img' => 'Makanan/GulaiIkanPatih.jpeg',
                'deskripsi' => 'Gulai Ikan Patin adalah masakan ikan dengan kuah gulai yang kaya rempah dan santan.',
            ],
            [
                'makanan' => 'Mie Aceh',
                'daerah' => 'Aceh, Sumatera',
                'img' => 'Makanan/MieAceh.jpg',
                'deskripsi' => 'Mie Aceh adalah hidangan mie pedas dengan campuran daging atau seafood.',
            ],
            [
                'makanan' => 'Bika Ambon',
                'daerah' => 'Medan, Sumatera Utara',
                'img' => 'Makanan/BikaAmbon.jpg',
                'deskripsi' => 'Bika Ambon adalah kue khas Medan yang memiliki tekstur berongga dan aroma harum pandan.',
            ],
            [
                'makanan' => 'Sate Matang',
                'daerah' => 'Aceh, Sumatera',
                'img' => 'Makanan/SateMatang.jpg',
                'deskripsi' => 'Sate Matang adalah sate khas Aceh yang disajikan dengan kuah kaldu dan sambal kecap.',
            ],
            [
                'makanan' => 'Soto Betawi',
                'daerah' => 'Jakarta, Jawa',
                'img' => 'Makanan/SotoBetawi.jpg',
                'deskripsi' => 'Soto Betawi adalah soto khas Jakarta yang menggunakan santan atau susu dengan daging sapi.',
            ],
            [
                'makanan' => 'Gudeg',
                'daerah' => 'Yogyakarta, Jawa',
                'img' => 'Makanan/Gudeg.jpg',
                'deskripsi' => 'Gudeg adalah masakan khas Yogyakarta yang terbuat dari nangka muda yang dimasak dengan santan.',
            ],
            [
                'makanan' => 'Rawon',
                'daerah' => 'Surabaya, Jawa Timur',
                'img' => 'Makanan/Rawon.jpg',
                'deskripsi' => 'Rawon adalah sup daging berwarna hitam khas Jawa Timur yang dimasak dengan kluwek.',
            ],
            [
                'makanan' => 'Kerak Telor',
                'daerah' => 'Jakarta, Jawa',
                'img' => 'Makanan/KerakTelor.jpg',
                'deskripsi' => 'Kerak Telor adalah makanan khas Betawi yang terbuat dari telur, beras ketan, dan ebi, dimasak dengan arang.',
            ],
            [
                'makanan' => 'Nasi Liwet',
                'daerah' => 'Solo, Jawa Tengah',
                'img' => 'Makanan/NasiLiwet.jpg',
                'deskripsi' => 'Nasi Liwet adalah hidangan nasi khas Solo yang dimasak dengan santan dan disajikan dengan ayam, telur, dan sayuran.',
            ],
            [
                'makanan' => 'Bakso',
                'daerah' => 'Malang, Jawa Timur',
                'img' => 'Makanan/Bakso.jpg',
                'deskripsi' => 'Bakso adalah bola daging yang disajikan dalam kuah kaldu sapi, biasanya dengan mi, tahu, dan sayuran.',
            ],
            [
                'makanan' => 'Sate Maranggi',
                'daerah' => 'Purwakarta, Jawa Barat',
                'img' => 'Makanan/SateMarangi.jpg',
                'deskripsi' => 'Sate Maranggi adalah sate khas Purwakarta yang terbuat dari daging sapi atau kambing yang dimarinasi dengan bumbu khas.',
            ],
            [
                'makanan' => 'Opor Ayam',
                'daerah' => 'Yogyakarta, Jawa',
                'img' => 'Makanan/OporAyam.jpg',
                'deskripsi' => 'Opor Ayam adalah masakan ayam yang dimasak dengan kuah santan dan rempah-rempah khas.',
            ],
            [
                'makanan' => 'Tahu Gejrot',
                'daerah' => 'Cirebon, Jawa Barat',
                'img' => 'Makanan/TahuGejrot.jpg',
                'deskripsi' => 'Tahu Gejrot adalah tahu goreng yang disajikan dengan kuah pedas manis khas Cirebon.',
            ],
            [
                'makanan' => 'Gado-Gado',
                'daerah' => 'Jakarta, Jawa',
                'img' => 'Makanan/GadoGado.jpg',
                'deskripsi' => 'Gado-Gado adalah salad sayuran yang disiram dengan saus kacang khas Indonesia.',
            ],
            [
                'makanan' => 'Pecel Lele',
                'daerah' => 'Lamongan, Jawa Timur',
                'img' => 'Makanan/PecelLele.jpg',
                'deskripsi' => 'Pecel Lele adalah lele goreng yang disajikan dengan sambal terasi dan lalapan.',
            ],
            [
                'makanan' => 'Soto Kudus',
                'daerah' => 'Kudus, Jawa Tengah',
                'img' => 'Makanan/SotoKudus.jpg',
                'deskripsi' => 'Soto Kudus adalah soto ayam atau daging dengan kuah bening khas Kudus.',
            ],
            [
                'makanan' => 'Soto Banjar',
                'daerah' => 'Banjarmasin, Kalimantan Selatan',
                'img' => 'Makanan/SotoBanjar.jpg',
                'deskripsi' => 'Soto Banjar adalah soto ayam khas Banjar yang disajikan dengan ketupat dan telur rebus.',
            ],
            [
                'makanan' => 'Ketupat Kandangan',
                'daerah' => 'Kandangan, Kalimantan Selatan',
                'img' => 'Makanan/KetupatKandang.jpg',
                'deskripsi' => 'Ketupat Kandangan adalah ketupat yang disajikan dengan ikan haruan (gabus) dan kuah santan.',
            ],
            [
                'makanan' => 'Ayam Cincane',
                'daerah' => 'Samarinda, Kalimantan Timur',
                'img' => 'Makanan/AyamCincane.jpg',
                'deskripsi' => 'Ayam Cincane adalah ayam panggang yang dimasak dengan bumbu merah khas Samarinda.',
            ],
            [
                'makanan' => 'Nasi Kuning Banjar',
                'daerah' => 'Banjarmasin, Kalimantan Selatan',
                'img' => 'Makanan/NasiKuningBanjar.jpg',
                'deskripsi' => 'Nasi Kuning Banjar adalah nasi kuning yang disajikan dengan berbagai lauk seperti ayam, telur, dan serundeng.',
            ],
            [
                'makanan' => 'Pengkang',
                'daerah' => 'Pontianak, Kalimantan Barat',
                'img' => 'Makanan/Pengkang.jpg',
                'deskripsi' => 'Pengkang adalah makanan yang terbuat dari ketan yang diisi dengan ebi, dibungkus daun pisang, dan dipanggang.',
            ],
            [
                'makanan' => 'Juhu Singkah',
                'daerah' => 'Kalimantan Tengah',
                'img' => 'Makanan/JuhuSingkah.jpg',
                'deskripsi' => 'Juhu Singkah adalah masakan khas Dayak yang terbuat dari rotan muda yang dimasak dengan ikan dan rempah-rempah.',
            ],
            [
                'makanan' => 'Sambal Raja',
                'daerah' => 'Kalimantan Timur',
                'img' => 'Makanan/SambalRaja.jpg',
                'deskripsi' => 'Sambal Raja adalah sambal khas Kutai yang terdiri dari berbagai sayuran dan disiram dengan sambal khas.',
            ],
            [
                'makanan' => 'Pais Patin',
                'daerah' => 'Kalimantan Selatan',
                'img' => 'Makanan/PaisPatin.jpg',
                'deskripsi' => 'Pais Patin adalah ikan patin yang dibungkus dengan daun pisang dan dimasak dengan bumbu kuning.',
            ],
            [
                'makanan' => 'Bubur Pedas',
                'daerah' => 'Pontianak, Kalimantan Barat',
                'img' => 'Makanan/BuburPedas.jpg',
                'deskripsi' => 'Bubur Pedas adalah bubur khas Pontianak yang terbuat dari campuran beras, sayuran, dan bumbu rempah.',
            ],
            [
                'makanan' => 'Ikan Asam Pedas',
                'daerah' => 'Sambas, Kalimantan Barat',
                'img' => 'Makanan/IkanAsamPedas.jpg',
                'deskripsi' => 'Ikan Asam Pedas adalah masakan ikan yang dimasak dengan bumbu asam pedas khas Sambas.',
            ],
            [
                'makanan' => 'Coto Makassar',
                'daerah' => 'Makassar, Sulawesi Selatan',
                'img' => 'Makanan/CotoMakassar.jpg',
                'deskripsi' => 'Coto Makassar adalah sup daging khas Makassar yang dimasak dengan rempah-rempah dan kacang tanah.',
            ],
            [
                'makanan' => 'Pallubasa',
                'daerah' => 'Makassar, Sulawesi Selatan',
                'img' => 'Makanan/Pallubasa.jpg',
                'deskripsi' => 'Pallubasa adalah hidangan sup daging dengan kuah kental yang terbuat dari kelapa parut sangrai.',
            ],
            [
                'makanan' => 'Sup Konro',
                'daerah' => 'Makassar, Sulawesi Selatan',
                'img' => 'Makanan/SupKonro.jpg',
                'deskripsi' => 'Sup Konro adalah sup iga sapi yang dimasak dengan bumbu rempah khas Makassar.',
            ],
            [
                'makanan' => 'Tinutuan',
                'daerah' => 'Manado, Sulawesi Utara',
                'img' => 'Makanan/Tinutuan.jpg',
                'deskripsi' => 'Tinutuan atau Bubur Manado adalah bubur yang terbuat dari berbagai sayuran dan rempah khas Manado.',
            ],
            [
                'makanan' => 'Paniki',
                'daerah' => 'Manado, Sulawesi Utara',
                'img' => 'Makanan/Paniki.jpg',
                'deskripsi' => 'Paniki adalah masakan khas Manado yang terbuat dari daging kelelawar yang dimasak dengan santan dan rempah.',
            ],
            [
                'makanan' => 'Brenebon',
                'daerah' => 'Manado, Sulawesi Utara',
                'img' => 'Makanan/Brenebon.jpg',
                'deskripsi' => 'Brenebon adalah sup kacang merah yang dimasak dengan daging babi atau sapi dan bumbu khas Manado.',
            ],
            [
                'makanan' => 'Ikan Woku Belanga',
                'daerah' => 'Manado, Sulawesi Utara',
                'img' => 'Makanan/IkanWokuBelanga.jpg',
                'deskripsi' => 'Ikan Woku Belanga adalah masakan ikan dengan bumbu woku khas Manado yang dimasak dalam belanga (periuk).',
            ],
            [
                'makanan' => 'Kapurung',
                'daerah' => 'Luwu, Sulawesi Selatan',
                'img' => 'Makanan/Kapurung.jpg',
                'deskripsi' => 'Kapurung adalah makanan khas Luwu yang terbuat dari sagu yang dimasak dengan ikan atau ayam dan sayuran.',
            ],
            [
                'makanan' => 'Kaledo',
                'daerah' => 'Palu, Sulawesi Tengah',
                'img' => 'Makanan/Kaledo.jpg',
                'deskripsi' => 'Kaledo adalah sup tulang kaki sapi khas Palu yang disajikan dengan kuah asam pedas.',
            ],
            [
                'makanan' => 'Lalampa',
                'daerah' => 'Gorontalo, Sulawesi',
                'img' => 'Makanan/Lalampa.jpg',
                'deskripsi' => 'Lalampa adalah lemper khas Gorontalo yang dibungkus daun pisang dan dipanggang.',
            ],
            [
                'makanan' => 'Babi Guling',
                'daerah' => 'Bali',
                'img' => 'Makanan/BabiGuling.jpg',
                'deskripsi' => 'Babi Guling adalah hidangan babi panggang khas Bali yang dibumbui dengan rempah khas Bali.',
            ],
            [
                'makanan' => 'Ayam Betutu',
                'daerah' => 'Bali',
                'img' => 'Makanan/AyamBetutu.jpg',
                'deskripsi' => 'Ayam Betutu adalah ayam yang dimasak dengan bumbu khas Bali dan dibungkus daun pisang, kemudian dipanggang.',
            ],
            [
                'makanan' => 'Lawar',
                'daerah' => 'Bali',
                'img' => 'Makanan/Lawar.jpg',
                'deskripsi' => 'Lawar adalah campuran sayuran, daging cincang, dan kelapa parut yang dibumbui dengan rempah khas Bali.',
            ],
            [
                'makanan' => 'Sate Lilit',
                'daerah' => 'Bali',
                'img' => 'Makanan/SateLilit.jpg',
                'deskripsi' => 'Sate Lilit adalah sate khas Bali yang terbuat dari daging cincang yang dililitkan pada batang serai atau bambu.',
            ],
            [
                'makanan' => 'Nasi Campur Bali',
                'daerah' => 'Bali',
                'img' => 'Makanan/NasiCampurBali.jpg',
                'deskripsi' => 'Nasi Campur Bali adalah nasi putih yang disajikan dengan berbagai lauk pauk khas Bali seperti ayam suwir, sate lilit, dan lawar.',
            ],
            [
                'makanan' => 'Serombotan',
                'daerah' => 'Bali',
                'img' => 'Makanan/Serombotan.jpg',
                'deskripsi' => 'Serombotan adalah hidangan sayuran rebus yang disajikan dengan bumbu kacang khas Bali.',
            ],
            [
                'makanan' => 'Jukut Urab',
                'daerah' => 'Bali',
                'img' => 'Makanan/JukutUrab.jpg',
                'deskripsi' => 'Jukut Urab adalah campuran sayuran yang dibumbui dengan kelapa parut dan rempah khas Bali.',
            ],
            [
                'makanan' => 'Tipat Blayag',
                'daerah' => 'Bali',
                'img' => 'Makanan/TipatBlayag.jpg',
                'deskripsi' => 'Tipat Blayag adalah ketupat khas Bali yang disajikan dengan ayam, sayuran, dan sambal kelapa.',
            ],
                [
                    'makanan' => 'Sei Sapi',
                    'daerah' => 'Kupang, NusaTenggaraTimur',
                    'img' => 'Makanan/SeiSapi.jpg',
                    'deskripsi' => 'Sei Sapi adalah daging sapi asap khas Kupang yang dimasak dengan bumbu khas.',
                ],
                [
                    'makanan' => 'Jagung Bose',
                    'daerah' => 'NusaTenggaraTimur',
                    'img' => 'Makanan/JagungBose.jpg',
                    'deskripsi' => 'Jagung Bose adalah masakan jagung khas NTT yang dimasak dengan kacang merah dan santan.',
                ],
                [
                    'makanan' => 'Tapa Kolo',
                    'daerah' => 'NusaTenggaraTimur',
                    'img' => 'Makanan/Kolo.jpg',
                    'deskripsi' => 'Kolo adalah nasi bakar khas NTT yang dimasak dalam bambu.',
                ],
                [
                    'makanan' => 'Catemak Jagung',
                    'daerah' => 'NusaTenggaraTimur',
                    'img' => 'Makanan/CatemakJagung.jpg',
                    'deskripsi' => 'Catemak Jagung adalah sup jagung khas NTT yang dimasak dengan labu lilin, kacang-kacangan, dan daun pepaya.',
                ],
                [
                    'makanan' => 'Rumpu Rampe',
                    'daerah' => 'NusaTenggaraTimur',
                    'img' => 'Makanan/RumpuRampe.jpg',
                    'deskripsi' => 'Rumpu Rampe adalah masakan sayur khas NTT yang terbuat dari daun pepaya muda, bunga pepaya, dan jantung pisang.',
                ],
                [
                    'makanan' => 'Kue Lontar',
                    'daerah' => 'NusaTenggaraTimur',
                    'img' => 'Makanan/KueLontar.jpg',
                    'deskripsi' => 'Kue Lontar adalah kue pie susu khas NTT yang terbuat dari susu, telur, dan gula.',
                ],
                [
                    'makanan' => 'Jawada',
                    'daerah' => 'NusaTenggaraTimur',
                    'img' => 'Makanan/Jawada.jpg',
                    'deskripsi' => 'Jawada adalah kue khas NTT yang terbuat dari tepung beras dan gula merah yang digoreng.',
                ],
                [
                    'makanan' => 'Ayam Taliwang',
                    'daerah' => 'Lombok, NusaTenggaraBarat',
                    'img' => 'Makanan/AyamTaliwang.jpg',
                    'deskripsi' => 'Ayam Taliwang adalah ayam bakar khas Lombok yang dibumbui dengan bumbu pedas.',
                ],
                [
                    'makanan' => 'Plecing Kangkung',
                    'daerah' => 'Lombok, NusaTenggaraBarat',
                    'img' => 'Makanan/PlecingKangkung.jpg',
                    'deskripsi' => 'Plecing Kangkung adalah hidangan kangkung yang disajikan dengan sambal tomat pedas.',
                ],
                [
                    'makanan' => 'Sate Rembiga',
                    'daerah' => 'Lombok, NusaTenggaraBarat',
                    'img' => 'Makanan/SateRembiga.jpg',
                    'deskripsi' => 'Sate Rembiga adalah sate daging sapi khas Rembiga yang dibumbui dengan bumbu manis dan pedas.',
                ],
                [
                    'makanan' => 'Sate Tanjung',
                    'daerah' => 'Lombok, NusaTenggaraBarat',
                    'img' => 'Makanan/SateTanjung.jpg',
                    'deskripsi' => 'Sate Tanjung adalah sate ikan tongkol khas Lombok yang dibakar dengan bumbu khas.',
                ],
                [
                    'makanan' => 'Bebalung',
                    'daerah' => 'Lombok, NusaTenggaraBarat',
                    'img' => 'Makanan/Bebalung.jpg',
                    'deskripsi' => 'Bebalung adalah sup tulang iga sapi yang dimasak dengan bumbu khas Lombok.',
                ],
                [
                    'makanan' => 'Ares',
                    'daerah' => 'Lombok, NusaTenggaraBarat',
                    'img' => 'Makanan/Ares.jpg',
                    'deskripsi' => 'Ares adalah sayur batang pisang yang dimasak dengan santan dan rempah khas Lombok.',
                ],
                [
                    'makanan' => 'Nasi Balap Puyung',
                    'daerah' => 'Lombok, NusaTenggaraBarat',
                    'img' => 'Makanan/NasiBalapPuyung.jpg',
                    'deskripsi' => 'Nasi Balap Puyung adalah nasi putih yang disajikan dengan ayam suwir pedas khas Lombok.',
                ],
                [
                    'makanan' => 'Poteng Jaje Tujak',
                    'daerah' => 'Lombok, NusaTenggaraBarat',
                    'img' => 'Makanan/PotengJajeTujak.jpg',
                    'deskripsi' => 'Poteng Jaje Tujak adalah hidangan ketan yang dimasak dengan tape singkong dan parutan kelapa.',
                ],
                [
                    'makanan' => 'Kelaq Batih',
                    'daerah' => 'Lombok, NusaTenggaraBarat',
                    'img' => 'Makanan/KelaqBatih.jpg',
                    'deskripsi' => 'Kelaq Batih adalah sayur kacang panjang yang dimasak dengan santan dan rempah khas Lombok.',
                ],
                [
                    'makanan' => 'Papeda',
                    'daerah' => 'Papua',
                    'img' => 'Makanan/Papeda.jpg',
                    'deskripsi' => 'Papeda adalah bubur sagu yang disajikan dengan ikan kuah kuning khas Papua.',
                ],
                [
                    'makanan' => 'Ikan Kuah Kuning',
                    'daerah' => 'Papua',
                    'img' => 'Makanan/IkanKuahKuning.jpg',
                    'deskripsi' => 'Ikan Kuah Kuning adalah hidangan ikan yang dimasak dengan bumbu kunyit dan rempah khas Papua.',
                ],
                [
                    'makanan' => 'Sate Ulat Sagu',
                    'daerah' => 'Papua',
                    'img' => 'Makanan/SateUlatSagu.jpg',
                    'deskripsi' => 'Sate Ulat Sagu adalah sate yang terbuat dari ulat sagu yang dimasak dengan bumbu khas Papua.',
                ],
                [
                    'makanan' => 'Udang Selingkuh',
                    'daerah' => 'Wamena, Papua',
                    'img' => 'Makanan/UdangSelingkuh.jpg',
                    'deskripsi' => 'Udang Selingkuh adalah udang air tawar khas Wamena yang dimasak dengan bumbu rempah.',
                ],
                [
                    'makanan' => 'Aunu Senebre',
                    'daerah' => 'Papua',
                    'img' => 'Makanan/AunuSenebre.jpg',
                    'deskripsi' => 'Aunu Senebre adalah hidangan ikan teri yang dimasak dengan daun talas dan kelapa parut.',
                ],
                [
                    'makanan' => 'Martabak Sagu',
                    'daerah' => 'Papua',
                    'img' => 'Makanan/MartabakSagu.jpg',
                    'deskripsi' => 'Martabak Sagu adalah martabak yang terbuat dari bahan dasar sagu dan diisi dengan kelapa parut dan gula merah.',
                ],
                [
                    'makanan' => 'Sagu Lempeng',
                    'daerah' => 'Papua',
                    'img' => 'Makanan/SaguLempeng.jpg',
                    'deskripsi' => 'Sagu Lempeng adalah roti sagu yang dimasak dengan cara dipanggang, biasanya disajikan dengan ikan atau kelapa parut.',
                ],
                [
                    'makanan' => 'Ikan Bakar Manokwari',
                    'daerah' => 'Manokwari, Papua Barat',
                    'img' => 'Makanan/IkanBakarManokwari.jpg',
                    'deskripsi' => 'Ikan Bakar Manokwari adalah ikan bakar khas Manokwari yang disajikan dengan sambal khas.',
                ],
                [
                    'makanan' => 'Plecing Kangkung',
                    'daerah' => 'Lombok, Nusa Tenggara Barat (NTB)',
                    'img' => 'Makanan/PlecingKangkungLombok.jpg',
                    'deskripsi' => 'Plecing Kangkung Lombok adalah sayur kangkung yang disajikan dengan sambal tomat pedas.',
                ],
                
                [
                    'makanan' => 'Sate Bulayak',
                    'daerah' => 'Sumbawa, Nusa Tenggara Barat (NTB)',
                    'img' => 'Makanan/SateBulayakSumbawa.jpg',
                    'deskripsi' => 'Sate Bulayak Sumbawa adalah sate daging yang disajikan dengan bumbu kacang khas Sumbawa.',
                ],
                [
                    'makanan' => 'Kolo',
                    'daerah' => 'Flores, Nusa Tenggara Timur (NTT)',
                    'img' => 'Makanan/KoloFlores.jpg',
                    'deskripsi' => 'Kolo adalah hidangan mi dengan saus kacang khas Flores yang disajikan dengan irisan daging atau ikan.',
                ],
                [
                    'makanan' => 'Ikan Woku',
                    'daerah' => 'Maumere, Nusa Tenggara Timur (NTT)',
                    'img' => 'Makanan/IkanWokuMaumere.jpg',
                    'deskripsi' => 'Ikan Woku Maumere adalah hidangan ikan dengan bumbu khas Woku yang pedas dan gurih.',
                ],
                [
                    'makanan' => 'Ayam Betutu',
                    'daerah' => 'Bali dan Lombok, Nusa Tenggara Barat (NTB)',
                    'img' => 'Makanan/AyamBetutuLombok.jpg',
                    'deskripsi' => 'Ayam Betutu adalah ayam yang dimasak dengan bumbu rempah khas dan dibungkus dengan daun pisang untuk disangrai.',
                ],
                
                [
                    'makanan' => 'Pelecing Sasak',
                    'daerah' => 'Lombok, Nusa Tenggara Barat (NTB)',
                    'img' => 'Makanan/PelecingSasakLombok.jpg',
                    'deskripsi' => 'Pelecing Sasak adalah hidangan sayur kangkung yang disajikan dengan sambal tomat pedas dan irisan tomat.',
                ],
                
                [
                    'makanan' => 'Bebek Betutu',
                    'daerah' => 'Bali dan Lombok, Nusa Tenggara Barat (NTB)',
                    'img' => 'Makanan/BebekBetutuLombok.jpg',
                    'deskripsi' => 'Bebek Betutu adalah bebek yang dimasak dengan bumbu rempah khas dan dibungkus dengan daun pisang untuk disangrai.',
                ],
                [
                    'makanan' => 'Ikan Belanga',
                    'daerah' => 'Bajawa, Nusa Tenggara Timur (NTT)',
                    'img' => 'Makanan/IkanBelangaBajawa.jpg',
                    'deskripsi' => 'Ikan Belanga Bajawa adalah hidangan ikan yang dimasak dengan bumbu khas dan dibakar dalam belanga (periuk tanah).',
                ],
                
                [
                    'makanan' => 'Sup Kacang Merah Maumere',
                    'daerah' => 'Maumere, Nusa Tenggara Timur (NTT)',
                    'img' => 'Makanan/SupKacangMerahMaumere.jpg',
                    'deskripsi' => 'Sup Kacang Merah Maumere adalah sup kacang merah yang dimasak dengan bumbu khas dan disajikan dengan nasi.',
                ],
                
                

        ]);
        
    }
}
