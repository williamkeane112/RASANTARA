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
                'img' => 'https://example.com/images/tekwan.jpg',
                'deskripsi' => 'Tekwan adalah makanan khas orang Tionghua yang di modifikasi oleh masyarakat palembang agar sesuai dengan cita rasa lidah masyarakat setempat.',
            ],
            [
                'makanan' => 'Sate Padang',
                'daerah' => 'Padang, Sumatera Barat',
                'img' => 'https://example.com/images/satepadang.jpg',
                'deskripsi' => 'Sate Padang adalah sate dengan saus kental yang terbuat dari campuran berbagai rempah dan tepung beras.',
            ],
            [
                'makanan' => 'Rendang',
                'daerah' => 'Padang, Sumatera Barat',
                'img' => 'https://example.com/images/rendang.jpg',
                'deskripsi' => 'Rendang adalah hidangan daging yang dimasak dengan rempah-rempah dan santan hingga kuahnya mengering.',
            ],
            [
                'makanan' => 'Pempek',
                'daerah' => 'Palembang, Sumatera Selatan',
                'img' => 'https://example.com/images/pempek.jpg',
                'deskripsi' => 'Pempek adalah makanan khas Palembang yang terbuat dari ikan dan sagu, biasanya disajikan dengan saus cuka.',
            ],
            [
                'makanan' => 'Ikan Arsik',
                'daerah' => 'Tapanuli, Sumatera Utara',
                'img' => 'https://example.com/images/ikanarsik.jpg',
                'deskripsi' => 'Ikan Arsik adalah masakan ikan khas Batak yang dimasak dengan bumbu kuning khas yang kaya rempah.',
            ],
            [
                'makanan' => 'Gulai Ikan Patin',
                'daerah' => 'Jambi, Sumatera',
                'img' => 'https://example.com/images/gulaiikanpatin.jpg',
                'deskripsi' => 'Gulai Ikan Patin adalah masakan ikan dengan kuah gulai yang kaya rempah dan santan.',
            ],
            [
                'makanan' => 'Mie Aceh',
                'daerah' => 'Aceh, Sumatera',
                'img' => 'https://example.com/images/mieaceh.jpg',
                'deskripsi' => 'Mie Aceh adalah hidangan mie pedas dengan campuran daging atau seafood.',
            ],
            [
                'makanan' => 'Bika Ambon',
                'daerah' => 'Medan, Sumatera Utara',
                'img' => 'https://example.com/images/bikaambon.jpg',
                'deskripsi' => 'Bika Ambon adalah kue khas Medan yang memiliki tekstur berongga dan aroma harum pandan.',
            ],
            [
                'makanan' => 'Sate Matang',
                'daerah' => 'Aceh, Sumatera',
                'img' => 'https://example.com/images/satematang.jpg',
                'deskripsi' => 'Sate Matang adalah sate khas Aceh yang disajikan dengan kuah kaldu dan sambal kecap.',
            ],
            [
                'makanan' => 'Soto Betawi',
                'daerah' => 'Jakarta, Jawa',
                'img' => 'https://example.com/images/sotobetawi.jpg',
                'deskripsi' => 'Soto Betawi adalah soto khas Jakarta yang menggunakan santan atau susu dengan daging sapi.',
            ],
            [
                'makanan' => 'Gudeg',
                'daerah' => 'Yogyakarta, Jawa',
                'img' => 'https://example.com/images/gudeg.jpg',
                'deskripsi' => 'Gudeg adalah masakan khas Yogyakarta yang terbuat dari nangka muda yang dimasak dengan santan.',
            ],
            [
                'makanan' => 'Rawon',
                'daerah' => 'Surabaya, Jawa Timur',
                'img' => 'https://example.com/images/rawon.jpg',
                'deskripsi' => 'Rawon adalah sup daging berwarna hitam khas Jawa Timur yang dimasak dengan kluwek.',
            ],
            [
                'makanan' => 'Kerak Telor',
                'daerah' => 'Jakarta, Jawa',
                'img' => 'https://example.com/images/keraktelor.jpg',
                'deskripsi' => 'Kerak Telor adalah makanan khas Betawi yang terbuat dari telur, beras ketan, dan ebi, dimasak dengan arang.',
            ],
            [
                'makanan' => 'Nasi Liwet',
                'daerah' => 'Solo, Jawa Tengah',
                'img' => 'https://example.com/images/nasiliwet.jpg',
                'deskripsi' => 'Nasi Liwet adalah hidangan nasi khas Solo yang dimasak dengan santan dan disajikan dengan ayam, telur, dan sayuran.',
            ],
            [
                'makanan' => 'Bakso',
                'daerah' => 'Malang, Jawa Timur',
                'img' => 'https://example.com/images/bakso.jpg',
                'deskripsi' => 'Bakso adalah bola daging yang disajikan dalam kuah kaldu sapi, biasanya dengan mi, tahu, dan sayuran.',
            ],
            [
                'makanan' => 'Sate Maranggi',
                'daerah' => 'Purwakarta, Jawa Barat',
                'img' => 'https://example.com/images/satemaranggi.jpg',
                'deskripsi' => 'Sate Maranggi adalah sate khas Purwakarta yang terbuat dari daging sapi atau kambing yang dimarinasi dengan bumbu khas.',
            ],
            [
                'makanan' => 'Opor Ayam',
                'daerah' => 'Yogyakarta, Jawa',
                'img' => 'https://example.com/images/oporayam.jpg',
                'deskripsi' => 'Opor Ayam adalah masakan ayam yang dimasak dengan kuah santan dan rempah-rempah khas.',
            ],
            [
                'makanan' => 'Tahu Gejrot',
                'daerah' => 'Cirebon, Jawa Barat',
                'img' => 'https://example.com/images/tahugejrot.jpg',
                'deskripsi' => 'Tahu Gejrot adalah tahu goreng yang disajikan dengan kuah pedas manis khas Cirebon.',
            ],
            [
                'makanan' => 'Gado-Gado',
                'daerah' => 'Jakarta, Jawa',
                'img' => 'https://example.com/images/gadogado.jpg',
                'deskripsi' => 'Gado-Gado adalah salad sayuran yang disiram dengan saus kacang khas Indonesia.',
            ],
            [
                'makanan' => 'Pecel Lele',
                'daerah' => 'Lamongan, Jawa Timur',
                'img' => 'https://example.com/images/pecellele.jpg',
                'deskripsi' => 'Pecel Lele adalah lele goreng yang disajikan dengan sambal terasi dan lalapan.',
            ],
            [
                'makanan' => 'Soto Kudus',
                'daerah' => 'Kudus, Jawa Tengah',
                'img' => 'https://example.com/images/sotokudus.jpg',
                'deskripsi' => 'Soto Kudus adalah soto ayam atau daging dengan kuah bening khas Kudus.',
            ],
            [
                'makanan' => 'Soto Banjar',
                'daerah' => 'Banjarmasin, Kalimantan Selatan',
                'img' => 'https://example.com/images/sotobanjar.jpg',
                'deskripsi' => 'Soto Banjar adalah soto ayam khas Banjar yang disajikan dengan ketupat dan telur rebus.',
            ],
            [
                'makanan' => 'Ketupat Kandangan',
                'daerah' => 'Kandangan, Kalimantan Selatan',
                'img' => 'https://example.com/images/ketupatkandangan.jpg',
                'deskripsi' => 'Ketupat Kandangan adalah ketupat yang disajikan dengan ikan haruan (gabus) dan kuah santan.',
            ],
            [
                'makanan' => 'Ayam Cincane',
                'daerah' => 'Samarinda, Kalimantan Timur',
                'img' => 'https://example.com/images/ayamcincane.jpg',
                'deskripsi' => 'Ayam Cincane adalah ayam panggang yang dimasak dengan bumbu merah khas Samarinda.',
            ],
            [
                'makanan' => 'Nasi Kuning Banjar',
                'daerah' => 'Banjarmasin, Kalimantan Selatan',
                'img' => 'https://example.com/images/nasikuningbanjar.jpg',
                'deskripsi' => 'Nasi Kuning Banjar adalah nasi kuning yang disajikan dengan berbagai lauk seperti ayam, telur, dan serundeng.',
            ],
            [
                'makanan' => 'Pengkang',
                'daerah' => 'Pontianak, Kalimantan Barat',
                'img' => 'https://example.com/images/pengkang.jpg',
                'deskripsi' => 'Pengkang adalah makanan yang terbuat dari ketan yang diisi dengan ebi, dibungkus daun pisang, dan dipanggang.',
            ],
            [
                'makanan' => 'Juhu Singkah',
                'daerah' => 'Kalimantan Tengah',
                'img' => 'https://example.com/images/juhusingkah.jpg',
                'deskripsi' => 'Juhu Singkah adalah masakan khas Dayak yang terbuat dari rotan muda yang dimasak dengan ikan dan rempah-rempah.',
            ],
            [
                'makanan' => 'Sambal Raja',
                'daerah' => 'Kalimantan Timur',
                'img' => 'https://example.com/images/sambalraja.jpg',
                'deskripsi' => 'Sambal Raja adalah sambal khas Kutai yang terdiri dari berbagai sayuran dan disiram dengan sambal khas.',
            ],
            [
                'makanan' => 'Pais Patin',
                'daerah' => 'Kalimantan Selatan',
                'img' => 'https://example.com/images/paispatin.jpg',
                'deskripsi' => 'Pais Patin adalah ikan patin yang dibungkus dengan daun pisang dan dimasak dengan bumbu kuning.',
            ],
            [
                'makanan' => 'Bubur Pedas',
                'daerah' => 'Pontianak, Kalimantan Barat',
                'img' => 'https://example.com/images/buburpedas.jpg',
                'deskripsi' => 'Bubur Pedas adalah bubur khas Pontianak yang terbuat dari campuran beras, sayuran, dan bumbu rempah.',
            ],
            [
                'makanan' => 'Ikan Asam Pedas',
                'daerah' => 'Sambas, Kalimantan Barat',
                'img' => 'https://example.com/images/ikanasampedas.jpg',
                'deskripsi' => 'Ikan Asam Pedas adalah masakan ikan yang dimasak dengan bumbu asam pedas khas Sambas.',
            ],
            [
                'makanan' => 'Coto Makassar',
                'daerah' => 'Makassar, Sulawesi Selatan',
                'img' => 'https://example.com/images/cotomakassar.jpg',
                'deskripsi' => 'Coto Makassar adalah sup daging khas Makassar yang dimasak dengan rempah-rempah dan kacang tanah.',
            ],
            [
                'makanan' => 'Pallubasa',
                'daerah' => 'Makassar, Sulawesi Selatan',
                'img' => 'https://example.com/images/pallubasa.jpg',
                'deskripsi' => 'Pallubasa adalah hidangan sup daging dengan kuah kental yang terbuat dari kelapa parut sangrai.',
            ],
            [
                'makanan' => 'Sup Konro',
                'daerah' => 'Makassar, Sulawesi Selatan',
                'img' => 'https://example.com/images/supkonro.jpg',
                'deskripsi' => 'Sup Konro adalah sup iga sapi yang dimasak dengan bumbu rempah khas Makassar.',
            ],
            [
                'makanan' => 'Tinutuan',
                'daerah' => 'Manado, Sulawesi Utara',
                'img' => 'https://example.com/images/tinutuan.jpg',
                'deskripsi' => 'Tinutuan atau Bubur Manado adalah bubur yang terbuat dari berbagai sayuran dan rempah khas Manado.',
            ],
            [
                'makanan' => 'Paniki',
                'daerah' => 'Manado, Sulawesi Utara',
                'img' => 'https://example.com/images/paniki.jpg',
                'deskripsi' => 'Paniki adalah masakan khas Manado yang terbuat dari daging kelelawar yang dimasak dengan santan dan rempah.',
            ],
            [
                'makanan' => 'Brenebon',
                'daerah' => 'Manado, Sulawesi Utara',
                'img' => 'https://example.com/images/brenebon.jpg',
                'deskripsi' => 'Brenebon adalah sup kacang merah yang dimasak dengan daging babi atau sapi dan bumbu khas Manado.',
            ],
            [
                'makanan' => 'Ikan Woku Belanga',
                'daerah' => 'Manado, Sulawesi Utara',
                'img' => 'https://example.com/images/ikanwokubelanga.jpg',
                'deskripsi' => 'Ikan Woku Belanga adalah masakan ikan dengan bumbu woku khas Manado yang dimasak dalam belanga (periuk).',
            ],
            [
                'makanan' => 'Kapurung',
                'daerah' => 'Luwu, Sulawesi Selatan',
                'img' => 'https://example.com/images/kapurung.jpg',
                'deskripsi' => 'Kapurung adalah makanan khas Luwu yang terbuat dari sagu yang dimasak dengan ikan atau ayam dan sayuran.',
            ],
            [
                'makanan' => 'Kaledo',
                'daerah' => 'Palu, Sulawesi Tengah',
                'img' => 'https://example.com/images/kaledo.jpg',
                'deskripsi' => 'Kaledo adalah sup tulang kaki sapi khas Palu yang disajikan dengan kuah asam pedas.',
            ],
            [
                'makanan' => 'Lalampa',
                'daerah' => 'Gorontalo, Sulawesi',
                'img' => 'https://example.com/images/lalampa.jpg',
                'deskripsi' => 'Lalampa adalah lemper khas Gorontalo yang dibungkus daun pisang dan dipanggang.',
            ],
            [
                'makanan' => 'Babi Guling',
                'daerah' => 'Bali',
                'img' => 'https://example.com/images/babiguling.jpg',
                'deskripsi' => 'Babi Guling adalah hidangan babi panggang khas Bali yang dibumbui dengan rempah khas Bali.',
            ],
            [
                'makanan' => 'Ayam Betutu',
                'daerah' => 'Bali',
                'img' => 'https://example.com/images/ayambetutu.jpg',
                'deskripsi' => 'Ayam Betutu adalah ayam yang dimasak dengan bumbu khas Bali dan dibungkus daun pisang, kemudian dipanggang.',
            ],
            [
                'makanan' => 'Lawar',
                'daerah' => 'Bali',
                'img' => 'https://example.com/images/lawar.jpg',
                'deskripsi' => 'Lawar adalah campuran sayuran, daging cincang, dan kelapa parut yang dibumbui dengan rempah khas Bali.',
            ],
            [
                'makanan' => 'Sate Lilit',
                'daerah' => 'Bali',
                'img' => 'https://example.com/images/satelilit.jpg',
                'deskripsi' => 'Sate Lilit adalah sate khas Bali yang terbuat dari daging cincang yang dililitkan pada batang serai atau bambu.',
            ],
            [
                'makanan' => 'Nasi Campur Bali',
                'daerah' => 'Bali',
                'img' => 'https://example.com/images/nasicampurbali.jpg',
                'deskripsi' => 'Nasi Campur Bali adalah nasi putih yang disajikan dengan berbagai lauk pauk khas Bali seperti ayam suwir, sate lilit, dan lawar.',
            ],
            [
                'makanan' => 'Serombotan',
                'daerah' => 'Bali',
                'img' => 'https://example.com/images/serombotan.jpg',
                'deskripsi' => 'Serombotan adalah hidangan sayuran rebus yang disajikan dengan bumbu kacang khas Bali.',
            ],
            [
                'makanan' => 'Jukut Urab',
                'daerah' => 'Bali',
                'img' => 'https://example.com/images/jukuturab.jpg',
                'deskripsi' => 'Jukut Urab adalah campuran sayuran yang dibumbui dengan kelapa parut dan rempah khas Bali.',
            ],
            [
                'makanan' => 'Tipat Blayag',
                'daerah' => 'Bali',
                'img' => 'https://example.com/images/tipatblayag.jpg',
                'deskripsi' => 'Tipat Blayag adalah ketupat khas Bali yang disajikan dengan ayam, sayuran, dan sambal kelapa.',
            ],
            [
                'makanan' => 'Se’i Sapi',
                'daerah' => 'Kupang, NTT',
                'img' => 'https://example.com/images/seisapi.jpg',
                'deskripsi' => 'Se’i Sapi adalah daging sapi asap khas Kupang yang dimasak dengan bumbu khas.',
            ],
            [
                'makanan' => 'Jagung Bose',
                'daerah' => 'NTT',
                'img' => 'https://example.com/images/jagungbose.jpg',
                'deskripsi' => 'Jagung Bose adalah hidangan jagung yang dimasak dengan kacang merah dan santan.',
            ],
            [
                'makanan' => 'Kolo',
                'daerah' => 'Manggarai, NTT',
                'img' => 'https://example.com/images/kolo.jpg',
                'deskripsi' => 'Kolo adalah nasi bambu khas Manggarai yang dimasak dalam bambu dan dibakar.',
            ],
            [
                'makanan' => 'Catemak Jagung',
                'daerah' => 'NTT',
                'img' => 'https://example.com/images/catemakjagung.jpg',
                'deskripsi' => 'Catemak Jagung adalah sup yang terbuat dari jagung, kacang hijau, dan labu.',
            ],
            [
                'makanan' => 'Bose Bambu',
                'daerah' => 'NTT',
                'img' => 'https://example.com/images/bosebambu.jpg',
                'deskripsi' => 'Bose Bambu adalah nasi ketan yang dimasak dalam bambu dengan santan dan kelapa parut.',
            ],
            [
                'makanan' => 'Rumpu Rampe',
                'daerah' => 'NTT',
                'img' => 'https://example.com/images/rumpurampe.jpg',
                'deskripsi' => 'Rumpu Rampe adalah tumis bunga pepaya, daun singkong, dan jantung pisang dengan bumbu khas.',
            ],
            [
                'makanan' => 'Lawar Ikan',
                'daerah' => 'Alor, NTT',
                'img' => 'https://example.com/images/lawarikan.jpg',
                'deskripsi' => 'Lawar Ikan adalah hidangan ikan yang dicampur dengan kelapa parut dan rempah khas.',
            ],
            [
                'makanan' => 'Tapa Kolo',
                'daerah' => 'NTT',
                'img' => 'https://example.com/images/tapakolo.jpg',
                'deskripsi' => 'Tapa Kolo adalah nasi ketan yang dimasak dalam bambu dan disajikan dengan ikan atau daging.',
            ],
            [
                'makanan' => 'Jagung Katemak',
                'daerah' => 'NTT',
                'img' => 'https://example.com/images/jagungkatemak.jpg',
                'deskripsi' => 'Jagung Katemak adalah hidangan jagung yang dimasak dengan daun pepaya dan bumbu khas.',
            ],
            [
                'makanan' => 'Kapu Pantun',
                'daerah' => 'NTT',
                'img' => 'https://example.com/images/kapupantun.jpg',
                'deskripsi' => 'Kapu Pantun adalah makanan yang terbuat dari ubi kayu yang diolah dengan kelapa parut dan gula.',
            ],
            [
                'makanan' => 'Ayam Taliwang',
                'daerah' => 'Lombok, NTB',
                'img' => 'https://example.com/images/ayamtaliwang.jpg',
                'deskripsi' => 'Ayam Taliwang adalah ayam bakar khas Lombok yang dibumbui dengan bumbu pedas.',
            ],
            [
                'makanan' => 'Plecing Kangkung',
                'daerah' => 'Lombok, NTB',
                'img' => 'https://example.com/images/plecingkangkung.jpg',
                'deskripsi' => 'Plecing Kangkung adalah hidangan kangkung yang disajikan dengan sambal tomat pedas.',
            ],
            [
                'makanan' => 'Sate Rembiga',
                'daerah' => 'Lombok, NTB',
                'img' => 'https://example.com/images/saterembiga.jpg',
                'deskripsi' => 'Sate Rembiga adalah sate daging sapi khas Rembiga yang dibumbui dengan bumbu manis dan pedas.',
            ],
            [
                'makanan' => 'Sate Tanjung',
                'daerah' => 'Lombok, NTB',
                'img' => 'https://example.com/images/satetanjung.jpg',
                'deskripsi' => 'Sate Tanjung adalah sate ikan tongkol khas Lombok yang dibakar dengan bumbu khas.',
            ],
            [
                'makanan' => 'Bebalung',
                'daerah' => 'Lombok, NTB',
                'img' => 'https://example.com/images/bebalung.jpg',
                'deskripsi' => 'Bebalung adalah sup tulang iga sapi yang dimasak dengan bumbu khas Lombok.',
            ],
            [
                'makanan' => 'Ares',
                'daerah' => 'Lombok, NTB',
                'img' => 'https://example.com/images/ares.jpg',
                'deskripsi' => 'Ares adalah sayur batang pisang yang dimasak dengan santan dan rempah khas Lombok.',
            ],
            [
                'makanan' => 'Nasi Balap Puyung',
                'daerah' => 'Lombok, NTB',
                'img' => 'https://example.com/images/nasibalap.jpg',
                'deskripsi' => 'Nasi Balap Puyung adalah nasi putih yang disajikan dengan ayam suwir pedas khas Lombok.',
            ],
            [
                'makanan' => 'Poteng Jaje Tujak',
                'daerah' => 'Lombok, NTB',
                'img' => 'https://example.com/images/potengjajetujak.jpg',
                'deskripsi' => 'Poteng Jaje Tujak adalah hidangan ketan yang dimasak dengan tape singkong dan parutan kelapa.',
            ],
            [
                'makanan' => 'Kelaq Batih',
                'daerah' => 'Lombok, NTB',
                'img' => 'https://example.com/images/kelaqbatih.jpg',
                'deskripsi' => 'Kelaq Batih adalah sayur kacang panjang yang dimasak dengan santan dan rempah khas Lombok.',
            ],
            [
                'makanan' => 'Serundeng Lombok',
                'daerah' => 'Lombok, NTB',
                'img' => 'https://example.com/images/serundenglombok.jpg',
                'deskripsi' => 'Serundeng Lombok adalah parutan kelapa yang digoreng dengan bumbu pedas khas Lombok.',
            ],
            [
                'makanan' => 'Papeda',
                'daerah' => 'Papua',
                'img' => 'https://example.com/images/papeda.jpg',
                'deskripsi' => 'Papeda adalah bubur sagu yang disajikan dengan ikan kuah kuning khas Papua.',
            ],
            [
                'makanan' => 'Ikan Kuah Kuning',
                'daerah' => 'Papua',
                'img' => 'https://example.com/images/ikankuahkuning.jpg',
                'deskripsi' => 'Ikan Kuah Kuning adalah hidangan ikan yang dimasak dengan bumbu kunyit dan rempah khas Papua.',
            ],
            [
                'makanan' => 'Sate Ulat Sagu',
                'daerah' => 'Papua',
                'img' => 'https://example.com/images/sateulatsagu.jpg',
                'deskripsi' => 'Sate Ulat Sagu adalah sate yang terbuat dari ulat sagu yang dimasak dengan bumbu khas Papua.',
            ],
            [
                'makanan' => 'Udang Selingkuh',
                'daerah' => 'Wamena, Papua',
                'img' => 'https://example.com/images/udangselingkuh.jpg',
                'deskripsi' => 'Udang Selingkuh adalah udang air tawar khas Wamena yang dimasak dengan bumbu rempah.',
            ],
            [
                'makanan' => 'Kue Lontar',
                'daerah' => 'Papua',
                'img' => 'https://example.com/images/kuelontar.jpg',
                'deskripsi' => 'Kue Lontar adalah kue pai susu khas Papua yang mirip dengan egg tart.',
            ],
            [
                'makanan' => 'Aunu Senebre',
                'daerah' => 'Papua',
                'img' => 'https://example.com/images/aunusenebre.jpg',
                'deskripsi' => 'Aunu Senebre adalah hidangan ikan teri yang dimasak dengan daun talas dan kelapa parut.',
            ],
            [
                'makanan' => 'Martabak Sagu',
                'daerah' => 'Papua',
                'img' => 'https://example.com/images/martabaksagu.jpg',
                'deskripsi' => 'Martabak Sagu adalah martabak yang terbuat dari bahan dasar sagu dan diisi dengan kelapa parut dan gula merah.',
            ],
            [
                'makanan' => 'Sagu Lempeng',
                'daerah' => 'Papua',
                'img' => 'https://example.com/images/sagulempeng.jpg',
                'deskripsi' => 'Sagu Lempeng adalah roti sagu yang dimasak dengan cara dipanggang, biasanya disajikan dengan ikan atau kelapa parut.',
            ],
            [
                'makanan' => 'Ikan Bakar Manokwari',
                'daerah' => 'Manokwari, Papua Barat',
                'img' => 'https://example.com/images/ikanbakarmanokwari.jpg',
                'deskripsi' => 'Ikan Bakar Manokwari adalah ikan bakar khas Manokwari yang disajikan dengan sambal khas.',
            ],
            [
                'makanan' => 'Manisan Pala Fakfak',
                'daerah' => 'Fakfak, Papua Barat',
                'img' => 'https://example.com/images/manisanpala.jpg',
                'deskripsi' => 'Manisan Pala Fakfak adalah manisan yang terbuat dari buah pala yang dimasak dengan gula.',
            ]
        ]);
        
    }
}
