<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('details')->insert([
            [
                'makanan_id' => '1',
                'tutorial' => 'nIE7Hg2YK4Y',
                'latarBelakang' => 'Tekwan berasal dari akulturasi budaya Palembang dan Tionghoa, di mana orang Tionghoa yang menetap di Palembang memperkenalkan makanan berbahan dasar ikan. Tekwan diadopsi oleh masyarakat Palembang dengan menambahkan kuah kaldu mirip sup dan bumbu khas daerah. Disebut berasal dari "Berkotek Samo Kawan" atau bahasa Hokkien "tâi-oân" yang mirip dengan Taiwan. Di negara lain, tekwan serupa dengan fishcake, tapi lebih kenyal dan gurih. Banyak penggemar kuliner lebih memilih tekwan ketimbang fishcake.',
               'bahanBahan' => json_encode([
                    '500 gram putih telur',
                    '300 gram terigu',
                    '330 gram tapioka',
                    'gula pasir, kaldu bubuk dan garam secukupnya',
                    '1500 ml air',
                    '5 siung bawang putih',
                    '1 sendok teh ebi, halus',
                    '3 siung bawang merah',
                    '1/2 sendok teh lada bubuk',
                    '1 sendok makan udang segar',
                    'bengkuang secukupnya',
                    'jamur kuping dan bunga sedap malam, rendam di air hangat',
                    'gula pasir dan garam secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Masukkan semua bahan kecuali tepung tapioka atau sagu, ke dalam food processor atau chopper, giling hingga halus.',
                    'Pindahkan ke wadah.',
                    'Tambahkan tepung tapioka, aduk hingga rata.',
                    'Didihkan air panci, kecilkan api.',
                    'Cubit adonan dengan ukuran sesuai selera.',
                    'Rebus dengan api kecil hingga matang.',
                    'Angkat dan tiriskan.',
                ]),
            ],
            [
                'makanan_id' => '2',
                'tutorial' => 'vyUqCDTN4oFUtsCn',
                'latarBelakang' => 'Sate Padang adalah sate dengan saus kental yang terbuat dari campuran berbagai rempah dan tepung beras. Makanan ini berasal dari Padang, Sumatera Barat, dan dikenal dengan cita rasa pedas dan gurih.',
                'bahanBahan' => json_encode([
                    '500 gram daging sapi',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '2 sendok makan ketumbar',
                    '2 sendok makan tepung beras',
                    '1 sendok teh garam',
                    '200 ml santan',
                    '4 batang serai, memarkan',
                    'daun jeruk purut secukupnya',
                ]),
                'langkahLangkah' => json_encode([
                    'Haluskan bumbu: bawang merah, bawang putih, ketumbar.',
                    'Tumis bumbu halus hingga harum.',
                    'Masukkan daging sapi, aduk hingga berubah warna.',
                    'Tambahkan santan, serai, dan daun jeruk. Masak hingga daging empuk.',
                    'Larutkan tepung beras dengan sedikit air, masukkan ke dalam masakan. Aduk hingga mengental.',
                    'Tusukkan daging ke tusuk sate, bakar hingga matang.',
                    'Sajikan dengan saus yang telah dimasak.',
                ]),
            ],
            [
                'makanan_id' => '3',
                'tutorial' => '7TnH3OVqHWq6X5uJ',
                'latarBelakang' => 'Rendang adalah hidangan daging yang dimasak dengan rempah-rempah dan santan hingga kuahnya mengering. Rendang berasal dari Padang, Sumatera Barat, dan merupakan salah satu makanan terlezat di dunia.',
                'bahanBahan' => json_encode([
                    '1 kg daging sapi',
                    '500 ml santan kental',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '3 lembar daun jeruk',
                    '2 batang serai, memarkan',
                    '5 cm lengkuas, memarkan',
                    '2 sendok makan cabai giling',
                    '1 sendok teh garam',
                    '3 cm jahe, memarkan'
                ]),
                'langkahLangkah' => json_encode([
                    'Potong daging sapi sesuai selera.',
                    'Haluskan bumbu: bawang merah, bawang putih, cabai giling, jahe.',
                    'Tumis bumbu halus hingga harum.',
                    'Masukkan daging sapi, aduk hingga berubah warna.',
                    'Tambahkan santan, daun jeruk, serai, dan lengkuas.',
                    'Masak dengan api kecil hingga santan mengering dan daging empuk.',
                    'Aduk sesekali agar tidak gosong.'
                ]),
            ],
            [
                'makanan_id' => '4',
                'tutorial' => 'https://youtu.be/example3',
                'latarBelakang' => 'Pempek adalah makanan khas Palembang yang terbuat dari ikan dan sagu, biasanya disajikan dengan saus cuka. Pempek dikenal dengan teksturnya yang kenyal dan rasanya yang gurih.',
                'bahanBahan' => json_encode([
                    '500 gram ikan tenggiri, giling halus',
                    '200 gram tepung sagu',
                    '1 butir telur',
                    '1 sendok teh garam',
                    '500 ml air',
                    '5 siung bawang putih, haluskan',
                    '100 ml air untuk adonan',
                    'cuka, gula, cabai, dan bawang putih untuk saus cuka'
                ]),
                'langkahLangkah' => json_encode([
                    'Campur ikan giling dengan bawang putih, garam, dan air.',
                    'Tambahkan tepung sagu sedikit demi sedikit hingga adonan kalis.',
                    'Bentuk adonan sesuai selera.',
                    'Didihkan air, rebus pempek hingga mengapung.',
                    'Angkat dan tiriskan.',
                    'Goreng pempek hingga kecoklatan.',
                    'Sajikan dengan saus cuka.'
                ]),
            ],
            [
                'makanan_id' => '5',
                'tutorial' => 'https://youtu.be/example4',
                'latarBelakang' => 'Ikan Arsik adalah masakan ikan khas Batak yang dimasak dengan bumbu kuning khas yang kaya rempah. Hidangan ini berasal dari Tapanuli, Sumatera Utara.',
                'bahanBahan' => json_encode([
                    '1 ekor ikan mas',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '3 buah kemiri',
                    '5 cm kunyit',
                    '3 cm jahe',
                    '2 batang serai, memarkan',
                    '2 lembar daun jeruk',
                    'garam dan gula secukupnya',
                    'asam gelugur atau asam kandis secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Bersihkan ikan, sayat-sayat badannya.',
                    'Haluskan bumbu: bawang merah, bawang putih, kemiri, kunyit, jahe.',
                    'Tumis bumbu halus hingga harum.',
                    'Tambahkan serai, daun jeruk, dan asam gelugur.',
                    'Masukkan ikan, aduk perlahan hingga bumbu meresap.',
                    'Masak hingga ikan matang dan bumbu mengental.',
                    'Sajikan dengan nasi hangat.'
                ]),
            ],
            [
                'makanan_id' => '6',
                'tutorial' => 'https://youtu.be/example5',
                'latarBelakang' => 'Gulai Ikan Patin adalah masakan ikan dengan kuah gulai yang kaya rempah dan santan. Hidangan ini berasal dari Jambi, Sumatera.',
                'bahanBahan' => json_encode([
                    '1 ekor ikan patin',
                    '500 ml santan',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '3 cm kunyit',
                    '2 cm jahe',
                    '3 batang serai, memarkan',
                    '2 lembar daun salam',
                    'garam dan gula secukupnya',
                    'asam kandis atau asam jawa secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Bersihkan ikan patin, potong-potong.',
                    'Haluskan bumbu: bawang merah, bawang putih, kunyit, jahe.',
                    'Tumis bumbu halus hingga harum.',
                    'Masukkan serai, daun salam, dan asam kandis.',
                    'Tambahkan santan, masak hingga mendidih.',
                    'Masukkan ikan patin, masak hingga matang dan bumbu meresap.',
                    'Sajikan dengan nasi.'
                ]),
            ],
            [
                'makanan_id' => '7',
                'tutorial' => 'https://youtu.be/example6',
                'latarBelakang' => 'Mie Aceh adalah hidangan mie pedas dengan campuran daging atau seafood. Makanan ini berasal dari Aceh, Sumatera, dan dikenal dengan rasa pedas yang khas.',
                'bahanBahan' => json_encode([
                    '500 gram mie kuning',
                    '200 gram daging sapi atau udang',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '3 buah cabai merah besar',
                    '2 buah cabai rawit',
                    '2 cm kunyit',
                    '2 cm jahe',
                    '2 batang serai, memarkan',
                    '200 ml kaldu sapi',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Haluskan bumbu: bawang merah, bawang putih, cabai merah, cabai rawit, kunyit, jahe.',
                    'Tumis bumbu halus hingga harum.',
                    'Masukkan daging atau udang, aduk hingga matang.',
                    'Tambahkan kaldu sapi, biarkan mendidih.',
                    'Masukkan mie kuning, aduk hingga tercampur rata.',
                    'Masak hingga mie matang dan bumbu meresap.',
                    'Sajikan dengan acar dan emping.'
                ]),
            ],
            [
                'makanan_id' => '8',
                'tutorial' => 'https://youtu.be/example7',
                'latarBelakang' => 'Bika Ambon adalah kue khas Medan yang memiliki tekstur berongga dan aroma harum pandan. Makanan ini berasal dari Medan, Sumatera Utara.',
                'bahanBahan' => json_encode([
                    '200 gram tepung terigu',
                    '200 gram gula pasir',
                    '50 gram tepung tapioka',
                    '200 ml santan kental',
                    '5 butir telur',
                    '100 ml air pandan',
                    '1 sendok makan ragi instan',
                    'garam secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Campur tepung terigu, tepung tapioka, dan gula pasir.',
                    'Tambahkan santan, aduk rata.',
                    'Masukkan telur satu per satu sambil terus diaduk.',
                    'Tambahkan air pandan dan ragi instan, aduk hingga tercampur rata.',
                    'Diamkan adonan selama 1 jam hingga mengembang.',
                    'Panaskan cetakan bika, tuang adonan hingga setengah penuh.',
                    'Masak hingga matang dan berongga.',
                    'Sajikan dengan teh hangat.'
                ]),
            ],
            [
                'makanan_id' => '9',
                'tutorial' => 'https://youtu.be/example8',
                'latarBelakang' => 'Sate Matang adalah sate khas Aceh yang disajikan dengan kuah kaldu dan sambal kecap. Makanan ini berasal dari Aceh, Sumatera.',
                'bahanBahan' => json_encode([
                    '500 gram daging kambing atau sapi',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '2 sendok makan ketumbar',
                    '1 sendok teh jinten',
                    '3 cm jahe',
                    'garam dan gula secukupnya',
                    '200 ml kaldu sapi',
                    'kecap manis secukupnya',
                    'cabai rawit, iris'
                ]),
                'langkahLangkah' => json_encode([
                    'Potong daging sesuai selera, tusuk dengan tusukan sate.',
                    'Haluskan bumbu: bawang merah, bawang putih, ketumbar, jinten, jahe.',
                    'Tumis bumbu halus hingga harum.',
                    'Rebus daging dalam kaldu sapi hingga empuk.',
                    'Bakar sate hingga matang, olesi dengan bumbu tumis.',
                    'Sajikan dengan kuah kaldu dan sambal kecap.'
                ]),
            ],
            [
                'makanan_id' => '10',
                'tutorial' => 'https://youtu.be/example10',
                'latarBelakang' => 'Soto Betawi adalah soto khas Jakarta yang menggunakan santan atau susu dengan daging sapi. Makanan ini berasal dari Betawi, dan dikenal dengan kuahnya yang kaya dan gurih.',
                'bahanBahan' => json_encode([
                    '500 gram daging sapi',
                    '200 ml santan',
                    '200 ml susu',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '3 cm jahe, memarkan',
                    '2 batang serai, memarkan',
                    '2 lembar daun salam',
                    'garam dan merica secukupnya',
                    'kentang goreng, tomat, daun bawang untuk pelengkap'
                ]),
                'langkahLangkah' => json_encode([
                    'Potong daging sapi, rebus hingga empuk.',
                    'Tumis bumbu halus: bawang merah, bawang putih, jahe, serai, dan daun salam hingga harum.',
                    'Masukkan tumisan bumbu ke dalam rebusan daging.',
                    'Tambahkan santan dan susu, aduk rata.',
                    'Masak hingga kuah mendidih dan bumbu meresap.',
                    'Sajikan dengan pelengkap kentang goreng, tomat, dan daun bawang.'
                ]),
            ],
            [
                'makanan_id' => '11',
                'tutorial' => 'https://youtu.be/example11',
                'latarBelakang' => 'Gudeg adalah masakan khas Yogyakarta yang terbuat dari nangka muda yang dimasak dengan santan. Hidangan ini memiliki rasa manis dan gurih, serta sering disajikan dengan telur dan ayam.',
                'bahanBahan' => json_encode([
                    '1 kg nangka muda',
                    '500 ml santan kental',
                    '10 butir telur rebus',
                    '500 gram daging ayam',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '3 cm lengkuas, memarkan',
                    '3 lembar daun salam',
                    'gula merah, garam, dan air kelapa secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Potong nangka muda, rebus hingga empuk.',
                    'Tumis bumbu halus: bawang merah, bawang putih, lengkuas, dan daun salam hingga harum.',
                    'Masukkan tumisan bumbu ke dalam panci nangka, tambahkan santan, gula merah, garam, dan air kelapa.',
                    'Tambahkan telur rebus dan daging ayam.',
                    'Masak dengan api kecil hingga bumbu meresap dan kuah mengental.',
                    'Sajikan dengan nasi putih dan pelengkap lainnya.'
                ]),
            ],
            [
                'makanan_id' => '12',
                'tutorial' => 'https://youtu.be/example12',
                'latarBelakang' => 'Rawon adalah sup daging berwarna hitam khas Jawa Timur yang dimasak dengan kluwek. Hidangan ini terkenal dengan rasa gurih dan kuahnya yang kaya rempah.',
                'bahanBahan' => json_encode([
                    '500 gram daging sapi',
                    '5 buah kluwek, ambil isinya',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '3 lembar daun jeruk',
                    '2 batang serai, memarkan',
                    '3 cm lengkuas, memarkan',
                    'garam, gula, dan air secukupnya',
                    'tauge pendek dan telur asin untuk pelengkap'
                ]),
                'langkahLangkah' => json_encode([
                    'Potong daging sapi, rebus hingga empuk.',
                    'Haluskan bumbu: bawang merah, bawang putih, kluwek.',
                    'Tumis bumbu halus hingga harum.',
                    'Masukkan tumisan bumbu ke dalam rebusan daging.',
                    'Tambahkan serai, daun jeruk, dan lengkuas.',
                    'Masak hingga kuah menghitam dan bumbu meresap.',
                    'Sajikan dengan tauge pendek dan telur asin.'
                ]),
            ],
            [
                'makanan_id' => '13',
                'tutorial' => 'https://youtu.be/example13',
                'latarBelakang' => 'Kerak Telor adalah makanan khas Betawi yang terbuat dari telur, beras ketan, dan ebi, dimasak dengan arang. Hidangan ini memiliki cita rasa gurih dan tekstur yang renyah.',
                'bahanBahan' => json_encode([
                    '100 gram beras ketan putih, rendam',
                    '50 gram ebi, rendam dan haluskan',
                    '4 butir telur bebek',
                    '10 siung bawang merah, iris tipis',
                    'garam dan merica secukupnya',
                    'kelapa parut, sangrai',
                    'bawang goreng untuk taburan'
                ]),
                'langkahLangkah' => json_encode([
                    'Panaskan wajan di atas arang.',
                    'Masukkan beras ketan, ebi, dan bawang merah.',
                    'Tambahkan telur bebek yang sudah dikocok, aduk rata.',
                    'Masak hingga setengah matang, kemudian balik dan masak hingga matang.',
                    'Taburi dengan kelapa parut sangrai dan bawang goreng.',
                    'Sajikan selagi hangat.'
                ]),
            ],
            [
                'makanan_id' => '14',
                'tutorial' => 'https://youtu.be/example14',
                'latarBelakang' => 'Nasi Liwet adalah hidangan nasi khas Solo yang dimasak dengan santan dan disajikan dengan ayam, telur, dan sayuran. Hidangan ini terkenal dengan rasa gurih dan aroma yang harum.',
                'bahanBahan' => json_encode([
                    '500 gram beras',
                    '500 ml santan',
                    '500 ml air',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    'garam secukupnya',
                    'ayam suwir, telur rebus, dan sayuran untuk pelengkap'
                ]),
                'langkahLangkah' => json_encode([
                    'Cuci beras hingga bersih.',
                    'Masukkan beras ke dalam panci, tambahkan santan, air, serai, daun salam, dan garam.',
                    'Masak dengan api sedang hingga air menyusut.',
                    'Kecilkan api, tutup panci, dan masak hingga nasi matang.',
                    'Sajikan nasi liwet dengan ayam suwir, telur rebus, dan sayuran.'
                ]),
            ],
            [
                'makanan_id' => '15',
                'tutorial' => 'https://youtu.be/example15',
                'latarBelakang' => 'Bakso adalah bola daging yang disajikan dalam kuah kaldu sapi, biasanya dengan mi, tahu, dan sayuran. Hidangan ini populer di seluruh Indonesia dan dikenal dengan rasa kuahnya yang gurih.',
                'bahanBahan' => json_encode([
                    '500 gram daging sapi giling',
                    '100 gram tepung tapioka',
                    '1 butir telur',
                    '5 siung bawang putih, haluskan',
                    '2 sendok teh garam',
                    '1 sendok teh merica bubuk',
                    '1 liter kaldu sapi',
                    'mi, tahu, dan sayuran untuk pelengkap'
                ]),
                'langkahLangkah' => json_encode([
                    'Campur daging sapi giling dengan bawang putih, garam, merica, tepung tapioka, dan telur.',
                    'Aduk hingga adonan rata dan bisa dipulung.',
                    'Bentuk adonan menjadi bola-bola bakso.',
                    'Rebus bakso dalam air mendidih hingga mengapung.',
                    'Masak kaldu sapi hingga mendidih.',
                    'Sajikan bakso dengan kaldu sapi, mi, tahu, dan sayuran.'
                ]),
            ],
            [
                'makanan_id' => '16',
                'tutorial' => 'https://youtu.be/example16',
                'latarBelakang' => 'Sate Maranggi adalah sate khas Purwakarta yang terbuat dari daging sapi atau kambing yang dimarinasi dengan bumbu khas. Hidangan ini dikenal dengan rasa manis dan gurih dari bumbu marinasi.',
                'bahanBahan' => json_encode([
                    '500 gram daging sapi atau kambing',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '3 sendok makan kecap manis',
                    '2 sendok makan gula merah, serut',
                    '2 sendok teh garam',
                    '1 sendok teh merica',
                    '2 sendok makan air asam jawa'
                ]),
                'langkahLangkah' => json_encode([
                    'Potong daging sesuai selera.',
                    'Haluskan bawang putih, bawang merah, garam, dan merica.',
                    'Campur bumbu halus dengan kecap manis, gula merah, dan air asam jawa.',
                    'Marinasi daging dengan bumbu selama 2 jam.',
                    'Tusukkan daging pada tusuk sate.',
                    'Bakar sate hingga matang dan kecoklatan.',
                    'Sajikan dengan nasi atau lontong.'
                ]),
            ],
            [
                'makanan_id' => '17',
                'tutorial' => 'https://youtu.be/example17',
                'latarBelakang' => 'Opor Ayam adalah masakan ayam yang dimasak dengan kuah santan dan rempah-rempah khas. Hidangan ini sering disajikan saat Lebaran dan memiliki cita rasa gurih dan kaya rempah.',
                'bahanBahan' => json_encode([
                    '1 ekor ayam, potong-potong',
                    '500 ml santan kental',
                    '500 ml santan encer',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '3 cm lengkuas, memarkan',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Tumis bumbu halus: bawang merah, bawang putih, lengkuas, serai, dan daun salam hingga harum.',
                    'Masukkan potongan ayam, aduk hingga ayam berubah warna.',
                    'Tambahkan santan encer, masak hingga ayam empuk.',
                    'Tuang santan kental, masak dengan api kecil hingga kuah mengental dan bumbu meresap.',
                    'Sajikan dengan ketupat atau nasi putih.'
                ]),
            ],
            [
                'makanan_id' => '18',
                'tutorial' => 'https://youtu.be/example18',
                'latarBelakang' => 'Tahu Gejrot adalah tahu goreng yang disajikan dengan kuah pedas manis khas Cirebon. Hidangan ini terkenal dengan rasa segar dan pedas dari kuahnya.',
                'bahanBahan' => json_encode([
                    '10 buah tahu pong',
                    '5 siung bawang merah',
                    '3 siung bawang putih',
                    '5 buah cabai rawit',
                    '2 sendok makan gula merah, serut',
                    '3 sendok makan kecap manis',
                    '3 sendok makan air asam jawa',
                    'garam secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Potong tahu pong, goreng hingga kering.',
                    'Haluskan bawang merah, bawang putih, dan cabai rawit.',
                    'Campur bumbu halus dengan gula merah, kecap manis, air asam jawa, dan garam.',
                    'Tuang kuah bumbu di atas tahu goreng.',
                    'Sajikan selagi hangat.'
                ]),
            ],
            [
                'makanan_id' => '19',
                'tutorial' => 'https://youtu.be/example19',
                'latarBelakang' => 'Gado-Gado adalah salad sayuran yang disiram dengan saus kacang khas Indonesia. Hidangan ini terkenal dengan rasa saus kacangnya yang gurih dan kaya.',
                'bahanBahan' => json_encode([
                    '200 gram kacang tanah, goreng',
                    '5 siung bawang putih',
                    '5 buah cabai merah',
                    '2 sendok makan gula merah',
                    '3 sendok makan air asam jawa',
                    'garam secukupnya',
                    'sayuran rebus (tauge, kangkung, kacang panjang, kol)',
                    'tempe goreng, tahu goreng, lontong untuk pelengkap'
                ]),
                'langkahLangkah' => json_encode([
                    'Haluskan kacang tanah, bawang putih, cabai merah, gula merah, dan garam.',
                    'Tambahkan air asam jawa, aduk rata hingga menjadi saus kacang.',
                    'Tata sayuran rebus, tempe goreng, tahu goreng, dan lontong di piring.',
                    'Siram dengan saus kacang.',
                    'Sajikan dengan kerupuk dan telur rebus.'
                ]),
            ],
            [
                'makanan_id' => '20',
                'tutorial' => 'https://youtu.be/example20',
                'latarBelakang' => 'Pecel Lele adalah lele goreng yang disajikan dengan sambal terasi dan lalapan. Hidangan ini populer sebagai makanan jalanan di Indonesia, terutama di Jawa Timur.',
                'bahanBahan' => json_encode([
                    '4 ekor lele, bersihkan',
                    '2 sendok teh garam',
                    '1 sendok teh kunyit bubuk',
                    'minyak untuk menggoreng',
                    'sambal terasi',
                    'lalapan (timun, kemangi, kol)'
                ]),
                'langkahLangkah' => json_encode([
                    'Lumuri lele dengan garam dan kunyit bubuk.',
                    'Panaskan minyak, goreng lele hingga kering dan matang.',
                    'Sajikan lele goreng dengan sambal terasi dan lalapan.'
                ]),
            ],
            [
                'makanan_id' => '21',
                'tutorial' => 'https://youtu.be/example21',
                'latarBelakang' => 'Soto Kudus adalah soto ayam atau daging dengan kuah bening khas Kudus. Hidangan ini terkenal dengan kuahnya yang segar dan bumbu yang meresap.',
                'bahanBahan' => json_encode([
                    '500 gram daging ayam',
                    '2 liter air',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    'garam dan gula secukupnya',
                    'tauge, seledri, dan bawang goreng untuk pelengkap'
                ]),
                'langkahLangkah' => json_encode([
                    'Rebus daging ayam hingga matang, angkat dan suwir-suwir dagingnya.',
                    'Haluskan bumbu: bawang merah, bawang putih, serai, dan daun salam.',
                    'Tumis bumbu halus hingga harum, masukkan ke dalam kuah kaldu ayam.',
                    'Tambahkan garam dan gula, masak hingga bumbu meresap.',
                    'Sajikan soto dengan suwiran ayam, tauge, seledri, dan bawang goreng.'
                ]),
            ],
            [
                'makanan_id' => '22',
                'tutorial' => 'https://youtu.be/example22',
                'latarBelakang' => 'Soto Banjar adalah soto ayam khas Banjar yang disajikan dengan ketupat dan telur rebus.',
                'bahanBahan' => json_encode([
                    '500 gram daging ayam',
                    '2 liter air',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    'garam dan gula secukupnya',
                    'ketupat, telur rebus, dan bawang goreng untuk pelengkap'
                ]),
                'langkahLangkah' => json_encode([
                    'Rebus daging ayam hingga matang, angkat dan suwir-suwir dagingnya.',
                    'Haluskan bumbu: bawang merah, bawang putih, serai, dan daun salam.',
                    'Tumis bumbu halus hingga harum, masukkan ke dalam kuah kaldu ayam.',
                    'Tambahkan garam dan gula, masak hingga bumbu meresap.',
                    'Sajikan soto dengan suwiran ayam, ketupat, telur rebus, dan bawang goreng.'
                ]),
            ],
            [
                'makanan_id' => '23',
                'tutorial' => 'https://youtu.be/example23',
                'latarBelakang' => 'Ketupat Kandangan adalah ketupat yang disajikan dengan ikan haruan (gabus) dan kuah santan.',
                'bahanBahan' => json_encode([
                    '5 buah ketupat',
                    '1 kg ikan haruan (gabus)',
                    '1 liter santan',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '5 buah cabai merah',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Bersihkan ikan haruan dan potong-potong sesuai selera.',
                    'Haluskan bumbu: bawang merah, bawang putih, cabai merah, serai, dan daun salam.',
                    'Tumis bumbu halus hingga harum, masukkan ikan haruan.',
                    'Tambahkan santan, garam, dan gula, masak hingga ikan matang dan kuah meresap.',
                    'Sajikan ketupat dengan ikan haruan dan kuah santan.'
                ]),
            ],
            [
                'makanan_id' => '24',
                'tutorial' => 'https://youtu.be/example24',
                'latarBelakang' => 'Ayam Cincane adalah ayam panggang yang dimasak dengan bumbu merah khas Samarinda.',
                'bahanBahan' => json_encode([
                    '1 ekor ayam, potong 4 bagian',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '10 buah cabai merah',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Haluskan bumbu: bawang merah, bawang putih, cabai merah, serai, dan daun salam.',
                    'Tumis bumbu halus hingga harum, masukkan ayam dan aduk rata.',
                    'Tambahkan garam dan gula, masak hingga ayam matang dan bumbu meresap.',
                    'Panggang ayam hingga kecoklatan dan matang sempurna.',
                    'Sajikan ayam cincane dengan nasi hangat.'
                ]),
            ],
            [
                'makanan_id' => '25',
                'tutorial' => 'https://youtu.be/example25',
                'latarBelakang' => 'Nasi Kuning Banjar adalah nasi kuning yang disajikan dengan berbagai lauk seperti ayam, telur, dan serundeng.',
                'bahanBahan' => json_encode([
                    '500 gram beras',
                    '1 liter santan',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    '1 sendok teh kunyit bubuk',
                    'garam secukupnya',
                    'ayam, telur rebus, dan serundeng untuk pelengkap'
                ]),
                'langkahLangkah' => json_encode([
                    'Cuci beras hingga bersih, masukkan ke dalam panci.',
                    'Tambahkan santan, serai, daun salam, kunyit bubuk, dan garam.',
                    'Masak nasi hingga matang dan berwarna kuning.',
                    'Sajikan nasi kuning dengan ayam, telur rebus, dan serundeng.'
                ]),
            ],
            [
                'makanan_id' => '26',
                'tutorial' => 'https://youtu.be/example26',
                'latarBelakang' => 'Pengkang adalah makanan yang terbuat dari ketan yang diisi dengan ebi, dibungkus daun pisang, dan dipanggang.',
                'bahanBahan' => json_encode([
                    '500 gram beras ketan',
                    '200 gram ebi, rendam dan haluskan',
                    '5 siung bawang merah',
                    '3 siung bawang putih',
                    'daun pisang untuk membungkus',
                    'garam secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Cuci beras ketan hingga bersih, kukus hingga setengah matang.',
                    'Haluskan bumbu: bawang merah, bawang putih.',
                    'Tumis bumbu halus hingga harum, masukkan ebi dan aduk rata.',
                    'Ambil selembar daun pisang, isi dengan ketan dan ebi, bungkus rapat.',
                    'Panggang pengkang hingga daun pisang kecoklatan dan matang.'
                ]),
            ],
            [
                'makanan_id' => '27',
                'tutorial' => 'https://youtu.be/example27',
                'latarBelakang' => 'Juhu Singkah adalah masakan khas Dayak yang terbuat dari rotan muda yang dimasak dengan ikan dan rempah-rempah.',
                'bahanBahan' => json_encode([
                    '500 gram rotan muda, potong-potong',
                    '300 gram ikan, potong sesuai selera',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '5 buah cabai merah',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Cuci rotan muda hingga bersih.',
                    'Haluskan bumbu: bawang merah, bawang putih, cabai merah, serai, dan daun salam.',
                    'Tumis bumbu halus hingga harum, masukkan ikan dan rotan muda.',
                    'Tambahkan garam dan gula, masak hingga ikan dan rotan matang dan bumbu meresap.',
                    'Sajikan juhu singkah dengan nasi hangat.'
                ]),
            ],
            [
                'makanan_id' => '28',
                'tutorial' => 'https://youtu.be/example28',
                'latarBelakang' => 'Sambal Raja adalah sambal khas Kutai yang terdiri dari berbagai sayuran dan disiram dengan sambal khas.',
                'bahanBahan' => json_encode([
                    '200 gram kacang panjang, potong-potong',
                    '200 gram terong, potong-potong',
                    '200 gram kangkung, siangi',
                    '5 buah cabai merah',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Rebus kacang panjang, terong, dan kangkung hingga matang.',
                    'Haluskan bumbu: cabai merah, bawang merah, dan bawang putih.',
                    'Tumis bumbu halus hingga harum, tambahkan garam dan gula.',
                    'Tata sayuran di piring saji, siram dengan sambal yang sudah dimasak.',
                    'Sajikan sambal raja dengan nasi hangat.'
                ]),
            ],
            [
                'makanan_id' => '29',
                'tutorial' => 'https://youtu.be/example29',
                'latarBelakang' => 'Pais Patin adalah ikan patin yang dibungkus dengan daun pisang dan dimasak dengan bumbu kuning.',
                'bahanBahan' => json_encode([
                    '1 kg ikan patin, potong sesuai selera',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '5 buah cabai merah',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    '1 sendok teh kunyit bubuk',
                    'garam dan gula secukupnya',
                    'daun pisang untuk membungkus'
                ]),
                'langkahLangkah' => json_encode([
                    'Bersihkan ikan patin dan potong-potong sesuai selera.',
                    'Haluskan bumbu: bawang merah, bawang putih, cabai merah, serai, daun salam, dan kunyit bubuk.',
                    'Tumis bumbu halus hingga harum, tambahkan garam dan gula.',
                    'Ambil selembar daun pisang, isi dengan ikan patin dan bumbu, bungkus rapat.',
                    'Kukus pais patin hingga matang dan bumbu meresap.',
                    'Sajikan pais patin dengan nasi hangat.'
                ]),
            ],
            [
                'makanan_id' => '30',
                'tutorial' => 'https://youtu.be/example30',
                'latarBelakang' => 'Bubur Pedas adalah bubur khas Pontianak yang terbuat dari campuran beras, sayuran, dan bumbu rempah.',
                'bahanBahan' => json_encode([
                    '200 gram beras, sangrai dan haluskan',
                    '200 gram bayam, siangi',
                    '200 gram kangkung, siangi',
                    '100 gram daun melinjo, siangi',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '5 buah cabai merah',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Rebus beras halus dengan air hingga menjadi bubur.',
                    'Haluskan bumbu: bawang merah, bawang putih, cabai merah, serai, dan daun salam.',
                    'Tumis bumbu halus hingga harum, masukkan ke dalam bubur.',
                    'Tambahkan garam dan gula, masak hingga bubur matang dan bumbu meresap.',
                    'Masukkan sayuran, masak sebentar hingga layu.',
                    'Sajikan bubur pedas dengan taburan bawang goreng.'
                ]),
            ],
            [
                'makanan_id' => '31',
                'tutorial' => 'https://youtu.be/example31',
                'latarBelakang' => 'Ikan Asam Pedas adalah masakan ikan yang dimasak dengan bumbu asam pedas khas Sambas.',
                'bahanBahan' => json_encode([
                    '1 kg ikan, potong sesuai selera',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '5 buah cabai merah',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    '1 sendok teh asam jawa',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Bersihkan ikan dan potong sesuai selera.',
                    'Haluskan bumbu: bawang merah, bawang putih, cabai merah, serai, daun salam, dan asam jawa.',
                    'Tumis bumbu halus hingga harum, tambahkan garam dan gula.',
                    'Masukkan ikan, aduk rata, masak hingga matang dan bumbu meresap.',
                    'Sajikan ikan asam pedas dengan nasi hangat.'
                ]),
            ],
            [
                'makanan_id' => '32',
                'tutorial' => 'https://youtu.be/example32',
                'latarBelakang' => 'Coto Makassar adalah sup daging khas Makassar yang dimasak dengan rempah-rempah dan kacang tanah.',
                'bahanBahan' => json_encode([
                    '1 kg daging sapi, potong dadu',
                    '2 liter air',
                    '200 gram kacang tanah, sangrai dan haluskan',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '5 buah cabai merah',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Rebus daging sapi hingga empuk, angkat dan sisihkan.',
                    'Haluskan bumbu: bawang merah, bawang putih, cabai merah, serai, dan daun salam.',
                    'Tumis bumbu halus hingga harum, masukkan ke dalam kuah kaldu daging.',
                    'Tambahkan kacang tanah halus, garam, dan gula, masak hingga bumbu meresap.',
                    'Sajikan coto dengan potongan daging sapi, ketupat, dan bawang goreng.'
                ]),
            ],
            [
                'makanan_id' => '33',
                'tutorial' => 'https://youtu.be/example33',
                'latarBelakang' => 'Pallubasa adalah hidangan sup daging dengan kuah kental yang terbuat dari kelapa parut sangrai.',
                'bahanBahan' => json_encode([
                    '1 kg daging sapi, potong dadu',
                    '2 liter air',
                    '200 gram kelapa parut, sangrai dan haluskan',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '5 buah cabai merah',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Rebus daging sapi hingga empuk, angkat dan sisihkan.',
                    'Haluskan bumbu: bawang merah, bawang putih, cabai merah, serai, dan daun salam.',
                    'Tumis bumbu halus hingga harum, masukkan ke dalam kuah kaldu daging.',
                    'Tambahkan kelapa parut halus, garam, dan gula, masak hingga bumbu meresap.',
                    'Sajikan pallubasa dengan potongan daging sapi dan bawang goreng.'
                ]),
            ],
            [
                'makanan_id' => '34',
                'tutorial' => 'https://youtu.be/example34',
                'latarBelakang' => 'Sup Konro adalah sup iga sapi yang dimasak dengan bumbu rempah khas Makassar.',
                'bahanBahan' => json_encode([
                    '1 kg iga sapi, potong sesuai selera',
                    '2 liter air',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '5 buah cabai merah',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Rebus iga sapi hingga empuk, angkat dan sisihkan.',
                    'Haluskan bumbu: bawang merah, bawang putih, cabai merah, serai, dan daun salam.',
                    'Tumis bumbu halus hingga harum, masukkan ke dalam kuah kaldu iga.',
                    'Tambahkan garam dan gula, masak hingga bumbu meresap.',
                    'Sajikan sup konro dengan potongan iga sapi dan bawang goreng.'
                ]),
            ],
            [
                'makanan_id' => '35',
                'tutorial' => 'https://youtu.be/example35',
                'latarBelakang' => 'Tinutuan atau Bubur Manado adalah bubur yang terbuat dari berbagai sayuran dan rempah khas Manado.',
                'bahanBahan' => json_encode([
                    '200 gram beras',
                    '1 liter air',
                    '200 gram bayam, siangi',
                    '200 gram kangkung, siangi',
                    '100 gram labu kuning, potong dadu',
                    '100 gram jagung manis, serut',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Rebus beras dengan air hingga menjadi bubur.',
                    'Tambahkan labu kuning dan jagung manis, masak hingga empuk.',
                    'Haluskan bumbu: bawang merah dan bawang putih.',
                    'Tumis bumbu halus hingga harum, masukkan ke dalam bubur.',
                    'Tambahkan sayuran, garam, dan gula, masak hingga sayuran matang dan bubur meresap.',
                    'Sajikan tinutuan dengan taburan bawang goreng.'
                ]),
            ],
            [
                'makanan_id' => '36',
                'tutorial' => 'https://youtu.be/example36',
                'latarBelakang' => 'Paniki adalah masakan khas Manado yang terbuat dari daging kelelawar yang dimasak dengan santan dan rempah.',
                'bahanBahan' => json_encode([
                    '1 kg daging kelelawar, potong sesuai selera',
                    '1 liter santan',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '5 buah cabai merah',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Bersihkan daging kelelawar dan potong sesuai selera.',
                    'Haluskan bumbu: bawang merah, bawang putih, cabai merah, serai, dan daun salam.',
                    'Tumis bumbu halus hingga harum, masukkan daging kelelawar dan aduk rata.',
                    'Tambahkan santan, garam, dan gula, masak hingga daging matang dan bumbu meresap.',
                    'Sajikan paniki dengan nasi hangat.'
                ]),
            ],
            [
                'makanan_id' => '37',
                'tutorial' => 'https://youtu.be/example37',
                'latarBelakang' => 'Brenebon adalah sup kacang merah yang dimasak dengan daging babi atau sapi dan bumbu khas Manado.',
                'bahanBahan' => json_encode([
                    '500 gram kacang merah, rendam semalam',
                    '500 gram daging babi atau sapi, potong dadu',
                    '2 liter air',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '5 buah cabai merah',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Rebus kacang merah hingga empuk, angkat dan sisihkan.',
                    'Rebus daging hingga empuk, angkat dan sisihkan.',
                    'Haluskan bumbu: bawang merah, bawang putih, cabai merah, serai, dan daun salam.',
                    'Tumis bumbu halus hingga harum, masukkan ke dalam kuah kaldu daging.',
                    'Tambahkan kacang merah, garam, dan gula, masak hingga bumbu meresap.',
                    'Sajikan brenebon dengan potongan daging dan bawang goreng.'
                ]),
            ],
            [
                'makanan_id' => '38',
                'tutorial' => 'https://youtu.be/example38',
                'latarBelakang' => 'Ikan Woku Belanga adalah masakan ikan dengan bumbu woku khas Manado yang dimasak dalam belanga (periuk).',
                'bahanBahan' => json_encode([
                    '1 kg ikan, potong sesuai selera',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '5 buah cabai merah',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    '2 lembar daun jeruk',
                    'garam dan gula secukupnya',
                    '200 ml air'
                ]),
                'langkahLangkah' => json_encode([
                    'Bersihkan ikan dan potong sesuai selera.',
                    'Haluskan bumbu: bawang merah, bawang putih, cabai merah, serai, daun salam, dan daun jeruk.',
                    'Tumis bumbu halus hingga harum, masukkan ikan dan air.',
                    'Tambahkan garam dan gula, masak hingga ikan matang dan bumbu meresap.',
                    'Sajikan ikan woku belanga dengan nasi hangat.'
                ]),
            ],
            [
                'makanan_id' => '39',
                'tutorial' => 'https://youtu.be/example39',
                'latarBelakang' => 'Kapurung adalah makanan khas Luwu yang terbuat dari sagu yang dimasak dengan ikan atau ayam dan sayuran.',
                'bahanBahan' => json_encode([
                    '200 gram sagu',
                    '500 gram ikan atau ayam, potong sesuai selera',
                    '200 gram bayam, siangi',
                    '200 gram kangkung, siangi',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '5 buah cabai merah',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Larutkan sagu dengan air, masak hingga mengental.',
                    'Bersihkan ikan atau ayam dan potong sesuai selera.',
                    'Haluskan bumbu: bawang merah, bawang putih, cabai merah, serai, dan daun salam.',
                    'Tumis bumbu halus hingga harum, masukkan ikan atau ayam dan aduk rata.',
                    'Tambahkan sayuran, garam, dan gula, masak hingga sayuran layu.',
                    'Sajikan kapurung dengan ikan atau ayam dan sayuran.'
                ]),
            ],
            [
                'makanan_id' => '40',
                'tutorial' => 'https://youtu.be/example40',
                'latarBelakang' => 'Kaledo adalah sup tulang kaki sapi khas Palu yang disajikan dengan kuah asam pedas.',
                'bahanBahan' => json_encode([
                    '1 kg tulang kaki sapi, potong sesuai selera',
                    '2 liter air',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '5 buah cabai merah',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    '1 sendok teh asam jawa',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Rebus tulang kaki sapi hingga empuk, angkat dan sisihkan.',
                    'Haluskan bumbu: bawang merah, bawang putih, cabai merah, serai, daun salam, dan asam jawa.',
                    'Tumis bumbu halus hingga harum, masukkan ke dalam kuah kaldu tulang.',
                    'Tambahkan garam dan gula, masak hingga bumbu meresap.',
                    'Sajikan kaledo dengan tulang kaki sapi dan bawang goreng.'
                ]),
            ],
            [
                'makanan_id' => '41',
                'tutorial' => 'https://youtu.be/example41',
                'latarBelakang' => 'Lalampa adalah lemper khas Gorontalo yang dibungkus daun pisang dan dipanggang.',
                'bahanBahan' => json_encode([
                    '500 gram beras ketan',
                    '200 gram ebi, rendam dan haluskan',
                    '5 siung bawang merah',
                    '3 siung bawang putih',
                    'daun pisang untuk membungkus',
                    'garam secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Cuci beras ketan hingga bersih, kukus hingga setengah matang.',
                    'Haluskan bumbu: bawang merah, bawang putih.',
                    'Tumis bumbu halus hingga harum, masukkan ebi dan aduk rata.',
                    'Ambil selembar daun pisang, isi dengan ketan dan ebi, bungkus rapat.',
                    'Panggang lalampa hingga daun pisang kecoklatan dan matang.'
                ]),
            ],
            [
                'makanan_id' => '42',
                'tutorial' => 'https://youtu.be/example42',
                'latarBelakang' => 'Babi Guling adalah hidangan babi panggang khas Bali yang dibumbui dengan rempah khas Bali.',
                'bahanBahan' => json_encode([
                    '1 ekor babi guling',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '10 buah cabai merah',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Haluskan bumbu: bawang merah, bawang putih, cabai merah, serai, dan daun salam.',
                    'Tumis bumbu halus hingga harum, masukkan ke dalam perut babi.',
                    'Jahit perut babi hingga rapat, panggang hingga matang dan kulitnya garing.',
                    'Sajikan babi guling dengan nasi dan sambal.'
                ]),
            ],
            [
                'makanan_id' => '43',
                'tutorial' => 'https://youtu.be/example43',
                'latarBelakang' => 'Ayam Betutu adalah ayam yang dimasak dengan bumbu khas Bali dan dibungkus daun pisang, kemudian dipanggang.',
                'bahanBahan' => json_encode([
                    '1 ekor ayam, potong 4 bagian',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '10 buah cabai merah',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    'garam dan gula secukupnya',
                    'daun pisang untuk membungkus'
                ]),
                'langkahLangkah' => json_encode([
                    'Haluskan bumbu: bawang merah, bawang putih, cabai merah, serai, dan daun salam.',
                    'Tumis bumbu halus hingga harum, masukkan ayam dan aduk rata.',
                    'Ambil selembar daun pisang, bungkus ayam dengan bumbu, ikat rapat.',
                    'Panggang ayam hingga matang dan bumbu meresap.',
                    'Sajikan ayam betutu dengan nasi dan sambal.'
                ]),
            ],
            [
                'makanan_id' => '44',
                'tutorial' => 'https://youtu.be/example44',
                'latarBelakang' => 'Lawar adalah campuran sayuran, daging cincang, dan kelapa parut yang dibumbui dengan rempah khas Bali.',
                'bahanBahan' => json_encode([
                    '200 gram daging cincang',
                    '200 gram kelapa parut',
                    '200 gram kacang panjang, potong-potong',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '5 buah cabai merah',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Haluskan bumbu: bawang merah, bawang putih, cabai merah, serai, dan daun salam.',
                    'Tumis bumbu halus hingga harum, masukkan daging cincang dan aduk rata.',
                    'Tambahkan kelapa parut dan kacang panjang, aduk hingga rata.',
                    'Tambahkan garam dan gula, masak hingga matang dan bumbu meresap.',
                    'Sajikan lawar dengan nasi hangat.'
                ]),
            ],
            [
                'makanan_id' => '45',
                'tutorial' => 'https://youtu.be/example45',
                'latarBelakang' => 'Sate Lilit adalah sate khas Bali yang terbuat dari daging cincang yang dililitkan pada batang serai atau bambu.',
                'bahanBahan' => json_encode([
                    '500 gram daging cincang',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '5 buah cabai merah',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    'garam dan gula secukupnya',
                    'batang serai atau bambu untuk melilit'
                ]),
                'langkahLangkah' => json_encode([
                    'Haluskan bumbu: bawang merah, bawang putih, cabai merah, serai, dan daun salam.',
                    'Tumis bumbu halus hingga harum, masukkan daging cincang dan aduk rata.',
                    'Tambahkan garam dan gula, masak hingga matang dan bumbu meresap.',
                    'Ambil sedikit adonan daging, lilitkan pada batang serai atau bambu.',
                    'Panggang sate lilit hingga matang dan kecoklatan.',
                    'Sajikan sate lilit dengan sambal.'
                ]),
            ],
            [
                'makanan_id' => '46',
                'tutorial' => 'https://youtu.be/example46',
                'latarBelakang' => 'Nasi Campur Bali adalah nasi putih yang disajikan dengan berbagai lauk pauk khas Bali seperti ayam suwir, sate lilit, dan lawar.',
                'bahanBahan' => json_encode([
                    '500 gram beras',
                    '1 liter air',
                    '200 gram ayam suwir',
                    '200 gram lawar',
                    '200 gram sate lilit',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '5 buah cabai merah',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Cuci beras hingga bersih, masak hingga matang.',
                    'Suwir-suwir daging ayam dan masak dengan bumbu halus.',
                    'Tumis bumbu halus hingga harum, masukkan lawar dan sate lilit, aduk rata.',
                    'Tambahkan garam dan gula, masak hingga matang dan bumbu meresap.',
                    'Sajikan nasi campur dengan ayam suwir, lawar, dan sate lilit.'
                ]),
            ],
            [
                'makanan_id' => '47',
                'tutorial' => 'https://youtu.be/example47',
                'latarBelakang' => 'Serombotan adalah hidangan sayuran rebus yang disajikan dengan bumbu kacang khas Bali.',
                'bahanBahan' => json_encode([
                    '200 gram bayam, siangi',
                    '200 gram kangkung, siangi',
                    '200 gram kacang panjang, potong-potong',
                    '100 gram tauge',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '5 buah cabai merah',
                    '200 gram kacang tanah, sangrai dan haluskan',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Rebus bayam, kangkung, kacang panjang, dan tauge hingga matang.',
                    'Haluskan bumbu: bawang merah, bawang putih, cabai merah, dan kacang tanah.',
                    'Tumis bumbu halus hingga harum, tambahkan garam dan gula.',
                    'Tata sayuran di piring saji, siram dengan bumbu kacang yang sudah dimasak.',
                    'Sajikan serombotan dengan nasi hangat.'
                ]),
            ],
            [
                'makanan_id' => '48',
                'tutorial' => 'https://youtu.be/example48',
                'latarBelakang' => 'Jukut Urab adalah campuran sayuran yang dibumbui dengan kelapa parut dan rempah khas Bali.',
                'bahanBahan' => json_encode([
                    '200 gram bayam, siangi',
                    '200 gram kangkung, siangi',
                    '200 gram kacang panjang, potong-potong',
                    '200 gram kelapa parut',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '5 buah cabai merah',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Rebus bayam, kangkung, dan kacang panjang hingga matang.',
                    'Haluskan bumbu: bawang merah, bawang putih, cabai merah, serai, dan daun salam.',
                    'Tumis bumbu halus hingga harum, tambahkan kelapa parut dan aduk rata.',
                    'Tambahkan garam dan gula, masak hingga matang dan bumbu meresap.',
                    'Campurkan sayuran dengan kelapa bumbu, aduk rata.',
                    'Sajikan jukut urab dengan nasi hangat.'
                ]),
            ],
            [
                'makanan_id' => '49',
                'tutorial' => 'https://youtu.be/example49',
                'latarBelakang' => 'Tipat Blayag adalah ketupat khas Bali yang disajikan dengan ayam, sayuran, dan sambal kelapa.',
                'bahanBahan' => json_encode([
                    '5 buah ketupat',
                    '500 gram ayam, potong sesuai selera',
                    '200 gram bayam, siangi',
                    '200 gram kangkung, siangi',
                    '200 gram kacang panjang, potong-potong',
                    '200 gram kelapa parut',
                    '10 siung bawang merah',
                    '5 siung bawang putih',
                    '5 buah cabai merah',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Rebus ayam hingga matang, angkat dan suwir-suwir dagingnya.',
                    'Rebus bayam, kangkung, dan kacang panjang hingga matang.',
                    'Haluskan bumbu: bawang merah, bawang putih, cabai merah, serai, dan daun salam.',
                    'Tumis bumbu halus hingga harum, tambahkan kelapa parut dan aduk rata.',
                    'Tambahkan garam dan gula, masak hingga matang dan bumbu meresap.',
                    'Sajikan ketupat dengan suwiran ayam, sayuran, dan sambal kelapa.'
                ]),
            ],
            [
                'makanan_id' => '50',
                'tutorial' => 'https://youtu.be/example50',
                'latarBelakang' => 'Sei Sapi adalah daging sapi asap khas Kupang yang dimasak dengan bumbu khas.',
                'bahanBahan' => json_encode([
                    '500 gram daging sapi',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '2 cm jahe',
                    '2 cm kunyit',
                    '3 sendok makan kecap manis',
                    'garam dan merica secukupnya',
                    'daun pisang untuk membungkus'
                ]),
                'langkahLangkah' => json_encode([
                    'Bersihkan daging sapi dan iris tipis.',
                    'Haluskan bawang putih, bawang merah, jahe, dan kunyit.',
                    'Lumuri daging sapi dengan bumbu halus, kecap manis, garam, dan merica.',
                    'Bungkus daging yang sudah dibumbui dengan daun pisang.',
                    'Asap daging dengan api kecil hingga matang.',
                    'Sajikan dengan nasi dan sambal.'
                ]),
            ],
            [
                'makanan_id' => '51',
                'tutorial' => 'https://youtu.be/example51',
                'latarBelakang' => 'Jagung Bose adalah masakan jagung khas NTT yang dimasak dengan kacang merah dan santan.',
                'bahanBahan' => json_encode([
                    '500 gram jagung bose',
                    '200 gram kacang merah',
                    '500 ml santan',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Rebus jagung bose dan kacang merah hingga empuk.',
                    'Haluskan bawang putih dan bawang merah, lalu tumis hingga harum.',
                    'Masukkan jagung dan kacang merah yang sudah direbus ke dalam tumisan bumbu.',
                    'Tambahkan santan, garam, dan gula, lalu masak hingga bumbu meresap.',
                    'Sajikan hangat.'
                ]),
            ],
            [
                'makanan_id' => '52',
                'tutorial' => 'https://youtu.be/example52',
                'latarBelakang' => 'Kolo adalah nasi bakar khas NTT yang dimasak dalam bambu.',
                'bahanBahan' => json_encode([
                    '500 gram beras',
                    '500 ml santan',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '2 batang serai, memarkan',
                    '3 lembar daun salam',
                    'garam secukupnya',
                    'bambu untuk membungkus'
                ]),
                'langkahLangkah' => json_encode([
                    'Cuci beras hingga bersih.',
                    'Haluskan bawang putih dan bawang merah, lalu tumis hingga harum.',
                    'Masukkan tumisan bumbu ke dalam beras, tambahkan santan, serai, daun salam, dan garam.',
                    'Masak hingga setengah matang.',
                    'Masukkan nasi setengah matang ke dalam bambu.',
                    'Bakar bambu di atas api hingga nasi matang sempurna.',
                    'Sajikan hangat.'
                ]),
            ],
            [
                'makanan_id' => '53',
                'tutorial' => 'https://youtu.be/example53',
                'latarBelakang' => 'Catemak Jagung adalah sup jagung khas NTT yang dimasak dengan labu lilin, kacang-kacangan, dan daun pepaya.',
                'bahanBahan' => json_encode([
                    '200 gram jagung pipil',
                    '200 gram labu lilin, potong dadu',
                    '100 gram kacang panjang, potong-potong',
                    '100 gram daun pepaya muda, iris tipis',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Rebus jagung pipil hingga setengah matang.',
                    'Haluskan bawang putih dan bawang merah, lalu tumis hingga harum.',
                    'Masukkan tumisan bumbu ke dalam rebusan jagung.',
                    'Tambahkan labu lilin, kacang panjang, dan daun pepaya.',
                    'Masak hingga semua bahan matang dan bumbu meresap.',
                    'Sajikan hangat.'
                ]),
            ],
            [
                'makanan_id' => '54',
                'tutorial' => 'https://youtu.be/example54',
                'latarBelakang' => 'Rumpu Rampe adalah masakan sayur khas NTT yang terbuat dari daun pepaya muda, bunga pepaya, dan jantung pisang.',
                'bahanBahan' => json_encode([
                    '200 gram daun pepaya muda, iris tipis',
                    '100 gram bunga pepaya',
                    '100 gram jantung pisang, iris tipis',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '2 buah cabai merah, iris serong',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Rebus daun pepaya muda, bunga pepaya, dan jantung pisang hingga layu, tiriskan.',
                    'Haluskan bawang putih dan bawang merah, lalu tumis hingga harum.',
                    'Masukkan daun pepaya, bunga pepaya, dan jantung pisang ke dalam tumisan bumbu.',
                    'Tambahkan cabai merah, garam, dan gula, lalu aduk rata.',
                    'Masak hingga semua bahan matang dan bumbu meresap.',
                    'Sajikan hangat.'
                ]),
            ],
            [
                'makanan_id' => '55',
                'tutorial' => 'https://youtu.be/example55',
                'latarBelakang' => 'Kue Lontar adalah kue pie susu khas NTT yang terbuat dari susu, telur, dan gula.',
                'bahanBahan' => json_encode([
                    '200 gram tepung terigu',
                    '100 gram margarin',
                    '50 gram gula pasir',
                    '3 butir telur',
                    '200 ml susu kental manis',
                    '1 sendok teh vanili'
                ]),
                'langkahLangkah' => json_encode([
                    'Campur tepung terigu, margarin, dan gula pasir hingga menjadi adonan kulit pie.',
                    'Cetak adonan kulit pie ke dalam loyang pie, panggang hingga setengah matang.',
                    'Kocok telur, susu kental manis, dan vanili hingga rata.',
                    'Tuang adonan isi ke dalam kulit pie yang sudah setengah matang.',
                    'Panggang kembali hingga matang.',
                    'Sajikan hangat atau dingin.'
                ]),
            ],
            [
                'makanan_id' => '56',
                'tutorial' => 'https://youtu.be/example56',
                'latarBelakang' => 'Jawada adalah kue khas NTT yang terbuat dari tepung beras dan gula merah yang digoreng.',
                'bahanBahan' => json_encode([
                    '200 gram tepung beras',
                    '100 gram gula merah, serut',
                    '100 ml air',
                    'minyak untuk menggoreng'
                ]),
                'langkahLangkah' => json_encode([
                    'Larutkan gula merah dalam air hingga mendidih dan mengental.',
                    'Campur tepung beras dengan larutan gula merah, aduk rata.',
                    'Bentuk adonan menjadi bola-bola kecil.',
                    'Goreng bola-bola adonan hingga matang dan berwarna kecoklatan.',
                    'Tiriskan dan sajikan.'
                ]),
            ],
            [
                'makanan_id' => '57',
                'tutorial' => 'https://youtu.be/example57',
                'latarBelakang' => 'Ayam Taliwang adalah ayam bakar khas Lombok yang dibumbui dengan bumbu pedas.',
                'bahanBahan' => json_encode([
                    '1 ekor ayam, potong sesuai selera',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '5 buah cabai merah',
                    '2 cm jahe',
                    '2 cm kunyit',
                    '3 sendok makan kecap manis',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Haluskan bawang putih, bawang merah, cabai merah, jahe, dan kunyit.',
                    'Lumuri ayam dengan bumbu halus, kecap manis, garam, dan gula.',
                    'Diamkan ayam selama 30 menit agar bumbu meresap.',
                    'Bakar ayam di atas bara api hingga matang dan kecoklatan.',
                    'Sajikan dengan nasi.'
                ]),
            ],
            [
                'makanan_id' => '58',
                'tutorial' => 'https://youtu.be/example58',
                'latarBelakang' => 'Plecing Kangkung adalah hidangan kangkung yang disajikan dengan sambal tomat pedas.',
                'bahanBahan' => json_encode([
                    '500 gram kangkung, petik daunnya',
                    '5 buah cabai merah',
                    '3 buah cabai rawit',
                    '3 buah tomat, potong-potong',
                    '5 siung bawang merah',
                    '3 siung bawang putih',
                    '2 sendok makan terasi, bakar',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Rebus kangkung hingga layu, tiriskan.',
                    'Haluskan cabai merah, cabai rawit, tomat, bawang merah, bawang putih, dan terasi.',
                    'Tumis bumbu halus hingga harum.',
                    'Tambahkan garam dan gula, aduk rata.',
                    'Sirami kangkung rebus dengan sambal tomat pedas.',
                    'Sajikan hangat.'
                ]),
            ],
            [
                'makanan_id' => '59',
                'tutorial' => 'https://youtu.be/example59',
                'latarBelakang' => 'Sate Rembiga adalah sate daging sapi khas Rembiga yang dibumbui dengan bumbu manis dan pedas.',
                'bahanBahan' => json_encode([
                    '500 gram daging sapi, potong dadu',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '5 buah cabai merah',
                    '2 sendok makan gula merah, serut',
                    '3 sendok makan kecap manis',
                    '2 sendok makan air asam jawa',
                    'garam dan merica secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Haluskan bawang putih, bawang merah, dan cabai merah.',
                    'Campur bumbu halus dengan gula merah, kecap manis, air asam jawa, garam, dan merica.',
                    'Marinasi daging sapi dengan bumbu selama 1 jam.',
                    'Tusuk daging dengan tusuk sate.',
                    'Bakar sate hingga matang dan kecoklatan.',
                    'Sajikan dengan nasi atau lontong.'
                ]),
            ],
            [
                'makanan_id' => '60',
                'tutorial' => 'https://youtu.be/example60',
                'latarBelakang' => 'Sate Tanjung adalah sate ikan tongkol khas Lombok yang dibakar dengan bumbu khas.',
                'bahanBahan' => json_encode([
                    '500 gram ikan tongkol, potong dadu',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '3 buah cabai merah',
                    '2 cm kunyit',
                    '2 cm jahe',
                    '2 sendok makan air jeruk nipis',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Haluskan bawang putih, bawang merah, cabai merah, kunyit, dan jahe.',
                    'Campur bumbu halus dengan air jeruk nipis, garam, dan gula.',
                    'Marinasi ikan tongkol dengan bumbu selama 30 menit.',
                    'Tusuk ikan dengan tusuk sate.',
                    'Bakar sate ikan hingga matang dan kecoklatan.',
                    'Sajikan dengan nasi.'
                ]),
            ],
            [
                'makanan_id' => '61',
                'tutorial' => 'https://youtu.be/example61',
                'latarBelakang' => 'Bebalung adalah sup tulang iga sapi yang dimasak dengan bumbu khas Lombok.',
                'bahanBahan' => json_encode([
                    '500 gram tulang iga sapi',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '2 cm jahe, memarkan',
                    '2 cm lengkuas, memarkan',
                    '3 lembar daun salam',
                    '2 batang serai, memarkan',
                    'garam dan merica secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Rebus tulang iga sapi hingga empuk.',
                    'Haluskan bawang putih dan bawang merah, lalu tumis hingga harum.',
                    'Masukkan tumisan bumbu ke dalam rebusan tulang iga.',
                    'Tambahkan jahe, lengkuas, daun salam, serai, garam, dan merica.',
                    'Masak hingga bumbu meresap.',
                    'Sajikan hangat.'
                ]),
            ],
            [
                'makanan_id' => '62',
                'tutorial' => 'https://youtu.be/example62',
                'latarBelakang' => 'Ares adalah sayur batang pisang yang dimasak dengan santan dan rempah khas Lombok.',
                'bahanBahan' => json_encode([
                    '1 batang pisang muda, iris tipis',
                    '500 ml santan',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '2 cm kunyit',
                    '2 cm lengkuas, memarkan',
                    '2 batang serai, memarkan',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Rebus batang pisang muda hingga layu, tiriskan.',
                    'Haluskan bawang putih, bawang merah, dan kunyit.',
                    'Tumis bumbu halus hingga harum.',
                    'Masukkan batang pisang, lengkuas, dan serai.',
                    'Tambahkan santan, garam, dan gula.',
                    'Masak hingga bumbu meresap dan santan mengental.',
                    'Sajikan hangat.'
                ]),
            ],
            [
                'makanan_id' => '63',
                'tutorial' => 'https://youtu.be/example63',
                'latarBelakang' => 'Nasi Balap Puyung adalah nasi putih yang disajikan dengan ayam suwir pedas khas Lombok.',
                'bahanBahan' => json_encode([
                    '500 gram ayam, rebus dan suwir',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '5 buah cabai merah',
                    '3 buah cabai rawit',
                    '2 cm kunyit',
                    '2 cm jahe',
                    '3 sendok makan kecap manis',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Haluskan bawang putih, bawang merah, cabai merah, cabai rawit, kunyit, dan jahe.',
                    'Tumis bumbu halus hingga harum.',
                    'Masukkan ayam suwir, aduk hingga bumbu meresap.',
                    'Tambahkan kecap manis, garam, dan gula, aduk rata.',
                    'Masak hingga ayam matang dan bumbu meresap.',
                    'Sajikan dengan nasi putih.'
                ]),
            ],
            [
                'makanan_id' => '64',
                'tutorial' => 'https://youtu.be/example64',
                'latarBelakang' => 'Poteng Jaje Tujak adalah hidangan ketan yang dimasak dengan tape singkong dan parutan kelapa.',
                'bahanBahan' => json_encode([
                    '500 gram ketan putih, rendam semalam',
                    '200 gram tape singkong',
                    '100 gram kelapa parut',
                    '3 sendok makan gula pasir',
                    '1 sendok teh garam'
                ]),
                'langkahLangkah' => json_encode([
                    'Kukus ketan putih hingga matang.',
                    'Campur tape singkong dengan gula pasir dan garam.',
                    'Aduk rata tape singkong dengan ketan putih yang sudah matang.',
                    'Tambahkan kelapa parut, aduk rata.',
                    'Sajikan hangat atau dingin.'
                ]),
            ],
            [
                'makanan_id' => '65',
                'tutorial' => 'https://youtu.be/example65',
                'latarBelakang' => 'Kelaq Batih adalah sayur kacang panjang yang dimasak dengan santan dan rempah khas Lombok.',
                'bahanBahan' => json_encode([
                    '200 gram kacang panjang, potong-potong',
                    '500 ml santan',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '2 cm kunyit',
                    '2 cm jahe',
                    '2 cm lengkuas, memarkan',
                    '2 batang serai, memarkan',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Haluskan bawang putih, bawang merah, kunyit, dan jahe.',
                    'Tumis bumbu halus hingga harum.',
                    'Masukkan kacang panjang, lengkuas, dan serai.',
                    'Tambahkan santan, garam, dan gula.',
                    'Masak hingga kacang panjang matang dan bumbu meresap.',
                    'Sajikan hangat.'
                ]),
            ],
            [
                'makanan_id' => '66',
                'tutorial' => 'https://youtu.be/example66',
                'latarBelakang' => 'Papeda adalah bubur sagu yang disajikan dengan ikan kuah kuning khas Papua.',
                'bahanBahan' => json_encode([
                    '200 gram sagu',
                    '1 liter air',
                    '500 gram ikan tongkol',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '2 cm kunyit',
                    '2 cm jahe',
                    '3 lembar daun salam',
                    '2 batang serai, memarkan',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Larutkan sagu dengan air hingga mengental.',
                    'Rebus ikan tongkol dengan bawang putih, bawang merah, kunyit, jahe, daun salam, dan serai.',
                    'Tambahkan garam dan gula, masak hingga ikan matang dan bumbu meresap.',
                    'Sajikan papeda dengan ikan kuah kuning.'
                ]),
            ],
            [
                'makanan_id' => '67',
                'tutorial' => 'https://youtu.be/example67',
                'latarBelakang' => 'Ikan Kuah Kuning adalah hidangan ikan yang dimasak dengan bumbu kunyit dan rempah khas Papua.',
                'bahanBahan' => json_encode([
                    '500 gram ikan tongkol, potong-potong',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '2 cm kunyit',
                    '2 cm jahe',
                    '3 lembar daun salam',
                    '2 batang serai, memarkan',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Haluskan bawang putih, bawang merah, kunyit, dan jahe.',
                    'Tumis bumbu halus hingga harum.',
                    'Masukkan ikan tongkol, daun salam, dan serai.',
                    'Tambahkan garam dan gula.',
                    'Masak hingga ikan matang dan bumbu meresap.',
                    'Sajikan hangat.'
                ]),
            ],
            [
                'makanan_id' => '68',
                'tutorial' => 'https://youtu.be/example68',
                'latarBelakang' => 'Sate Ulat Sagu adalah sate yang terbuat dari ulat sagu yang dimasak dengan bumbu khas Papua.',
                'bahanBahan' => json_encode([
                    '200 gram ulat sagu',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '2 buah cabai merah',
                    '2 cm kunyit',
                    '2 cm jahe',
                    '2 sendok makan air jeruk nipis',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Haluskan bawang putih, bawang merah, cabai merah, kunyit, dan jahe.',
                    'Campur bumbu halus dengan air jeruk nipis, garam, dan gula.',
                    'Marinasi ulat sagu dengan bumbu selama 30 menit.',
                    'Tusuk ulat sagu dengan tusuk sate.',
                    'Bakar sate ulat sagu hingga matang dan kecoklatan.',
                    'Sajikan dengan sambal.'
                ]),
            ],
            [
                'makanan_id' => '69',
                'tutorial' => 'https://youtu.be/example69',
                'latarBelakang' => 'Udang Selingkuh adalah udang air tawar khas Wamena yang dimasak dengan bumbu rempah.',
                'bahanBahan' => json_encode([
                    '500 gram udang air tawar',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '2 cm kunyit',
                    '2 cm jahe',
                    '3 lembar daun salam',
                    '2 batang serai, memarkan',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Bersihkan udang air tawar.',
                    'Haluskan bawang putih, bawang merah, kunyit, dan jahe.',
                    'Tumis bumbu halus hingga harum.',
                    'Masukkan udang, daun salam, dan serai.',
                    'Tambahkan garam dan gula.',
                    'Masak hingga udang matang dan bumbu meresap.',
                    'Sajikan hangat.'
                ]),
            ],
            [
                'makanan_id' => '70',
                'tutorial' => 'https://youtu.be/example70',
                'latarBelakang' => 'Aunu Senebre adalah hidangan ikan teri yang dimasak dengan daun talas dan kelapa parut.',
                'bahanBahan' => json_encode([
                    '200 gram ikan teri',
                    '100 gram daun talas, iris tipis',
                    '100 gram kelapa parut',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '2 cm kunyit',
                    '2 cm jahe',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Bersihkan ikan teri.',
                    'Haluskan bawang putih, bawang merah, kunyit, dan jahe.',
                    'Tumis bumbu halus hingga harum.',
                    'Masukkan daun talas, kelapa parut, dan ikan teri.',
                    'Tambahkan garam dan gula.',
                    'Masak hingga semua bahan matang dan bumbu meresap.',
                    'Sajikan hangat.'
                ]),
            ],
            [
                'makanan_id' => '71',
                'tutorial' => 'https://youtu.be/example71',
                'latarBelakang' => 'Martabak Sagu adalah martabak yang terbuat dari bahan dasar sagu dan diisi dengan kelapa parut dan gula merah.',
                'bahanBahan' => json_encode([
                    '200 gram sagu',
                    '100 gram kelapa parut',
                    '50 gram gula merah, serut',
                    '100 ml air',
                    'minyak untuk menggoreng'
                ]),
                'langkahLangkah' => json_encode([
                    'Campur sagu dengan air hingga menjadi adonan kental.',
                    'Tambahkan kelapa parut dan gula merah serut, aduk rata.',
                    'Panaskan minyak, tuang adonan martabak ke dalam wajan.',
                    'Goreng hingga matang dan berwarna kecoklatan.',
                    'Tiriskan dan sajikan.'
                ]),
            ],
            [
                'makanan_id' => '72',
                'tutorial' => 'https://youtu.be/example72',
                'latarBelakang' => 'Sagu Lempeng adalah roti sagu yang dimasak dengan cara dipanggang, biasanya disajikan dengan ikan atau kelapa parut.',
                'bahanBahan' => json_encode([
                    '200 gram sagu',
                    '100 gram kelapa parut',
                    '100 ml air',
                    'garam secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Campur sagu, kelapa parut, air, dan garam hingga adonan bisa dipulung.',
                    'Bentuk adonan menjadi lempengan pipih.',
                    'Panggang adonan sagu di atas bara api hingga matang.',
                    'Sajikan dengan ikan atau kelapa parut.'
                ]),
            ],
            [
                'makanan_id' => '73',
                'tutorial' => 'https://youtu.be/example73',
                'latarBelakang' => 'Ikan Bakar Manokwari adalah ikan bakar khas Manokwari yang disajikan dengan sambal khas.',
                'bahanBahan' => json_encode([
                    '500 gram ikan, bersihkan',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '2 buah cabai merah',
                    '2 cm kunyit',
                    '2 cm jahe',
                    '2 sendok makan air jeruk nipis',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Haluskan bawang putih, bawang merah, cabai merah, kunyit, dan jahe.',
                    'Campur bumbu halus dengan air jeruk nipis, garam, dan gula.',
                    'Lumuri ikan dengan bumbu halus.',
                    'Bakar ikan di atas bara api hingga matang dan kecoklatan.',
                    'Sajikan dengan sambal khas Manokwari.'
                ]),
            ],
            [
                'makanan_id' => '74',
                'tutorial' => 'https://youtu.be/example74',
                'latarBelakang' => 'Plecing Kangkung Lombok adalah sayur kangkung yang disajikan dengan sambal tomat pedas.',
                'bahanBahan' => json_encode([
                    '500 gram kangkung, petik daunnya',
                    '5 buah cabai merah',
                    '3 buah cabai rawit',
                    '3 buah tomat, potong-potong',
                    '5 siung bawang merah',
                    '3 siung bawang putih',
                    '2 sendok makan terasi, bakar',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Rebus kangkung hingga layu, tiriskan.',
                    'Haluskan cabai merah, cabai rawit, tomat, bawang merah, bawang putih, dan terasi.',
                    'Tumis bumbu halus hingga harum.',
                    'Tambahkan garam dan gula, aduk rata.',
                    'Sirami kangkung rebus dengan sambal tomat pedas.',
                    'Sajikan hangat.'
                ]),
            ],
            [
                'makanan_id' => '75',
                'tutorial' => 'https://youtu.be/example75',
                'latarBelakang' => 'Sate Bulayak Sumbawa adalah sate daging yang disajikan dengan bumbu kacang khas Sumbawa.',
                'bahanBahan' => json_encode([
                    '500 gram daging sapi, potong dadu',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '5 buah cabai merah',
                    '3 sendok makan kacang tanah, sangrai dan haluskan',
                    '2 sendok makan gula merah, serut',
                    '3 sendok makan kecap manis',
                    '2 sendok makan air asam jawa',
                    'garam dan merica secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Haluskan bawang putih, bawang merah, dan cabai merah.',
                    'Campur bumbu halus dengan kacang tanah, gula merah, kecap manis, air asam jawa, garam, dan merica.',
                    'Marinasi daging sapi dengan bumbu selama 1 jam.',
                    'Tusuk daging dengan tusuk sate.',
                    'Bakar sate hingga matang dan kecoklatan.',
                    'Sajikan dengan nasi atau lontong.'
                ]),
            ],
            [
                'makanan_id' => '76',
                'tutorial' => 'https://youtu.be/example76',
                'latarBelakang' => 'Kolo adalah hidangan mi dengan saus kacang khas Flores yang disajikan dengan irisan daging atau ikan.',
                'bahanBahan' => json_encode([
                    '500 gram mi kuning, rebus hingga matang',
                    '200 gram daging sapi atau ikan, iris tipis',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '3 buah cabai merah',
                    '2 sendok makan kacang tanah, sangrai dan haluskan',
                    '2 sendok makan air jeruk nipis',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Haluskan bawang putih, bawang merah, dan cabai merah.',
                    'Campur bumbu halus dengan kacang tanah, air jeruk nipis, garam, dan gula.',
                    'Tumis bumbu halus hingga harum.',
                    'Masukkan daging sapi atau ikan, aduk hingga matang.',
                    'Sajikan mi kuning dengan saus kacang dan irisan daging atau ikan.'
                ]),
            ],
            [
                'makanan_id' => '77',
                'tutorial' => 'https://youtu.be/example77',
                'latarBelakang' => 'Ikan Woku Maumere adalah hidangan ikan dengan bumbu khas Woku yang pedas dan gurih.',
                'bahanBahan' => json_encode([
                    '500 gram ikan, bersihkan dan potong-potong',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '5 buah cabai merah',
                    '3 buah cabai rawit',
                    '2 cm kunyit',
                    '2 cm jahe',
                    '3 lembar daun jeruk',
                    '2 batang serai, memarkan',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Haluskan bawang putih, bawang merah, cabai merah, cabai rawit, kunyit, dan jahe.',
                    'Tumis bumbu halus hingga harum.',
                    'Masukkan ikan, daun jeruk, dan serai.',
                    'Tambahkan garam dan gula.',
                    'Masak hingga ikan matang dan bumbu meresap.',
                    'Sajikan hangat.'
                ]),
            ],
            [
                'makanan_id' => '78',
                'tutorial' => 'https://youtu.be/example78',
                'latarBelakang' => 'Ayam Betutu adalah ayam yang dimasak dengan bumbu rempah khas dan dibungkus dengan daun pisang untuk disangrai.',
                'bahanBahan' => json_encode([
                    '1 ekor ayam, bersihkan dan potong sesuai selera',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '5 buah cabai merah',
                    '3 buah cabai rawit',
                    '2 cm kunyit',
                    '2 cm jahe',
                    '3 batang serai, memarkan',
                    'garam dan gula secukupnya',
                    'daun pisang untuk membungkus'
                ]),
                'langkahLangkah' => json_encode([
                    'Haluskan bawang putih, bawang merah, cabai merah, cabai rawit, kunyit, dan jahe.',
                    'Tumis bumbu halus hingga harum.',
                    'Masukkan ayam, serai, garam, dan gula.',
                    'Masak hingga ayam berubah warna dan bumbu meresap.',
                    'Bungkus ayam dengan daun pisang.',
                    'Panggang ayam dalam oven atau di atas bara api hingga matang.',
                    'Sajikan hangat.'
                ]),
            ],
            [
                'makanan_id' => '79',
                'tutorial' => 'https://youtu.be/example79',
                'latarBelakang' => 'Pelecing Sasak adalah hidangan sayur kangkung yang disajikan dengan sambal tomat pedas dan irisan tomat.',
                'bahanBahan' => json_encode([
                    '500 gram kangkung, petik daunnya',
                    '5 buah cabai merah',
                    '3 buah cabai rawit',
                    '3 buah tomat, potong-potong',
                    '5 siung bawang merah',
                    '3 siung bawang putih',
                    '2 sendok makan terasi, bakar',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Rebus kangkung hingga layu, tiriskan.',
                    'Haluskan cabai merah, cabai rawit, tomat, bawang merah, bawang putih, dan terasi.',
                    'Tumis bumbu halus hingga harum.',
                    'Tambahkan garam dan gula, aduk rata.',
                    'Sirami kangkung rebus dengan sambal tomat pedas.',
                    'Sajikan hangat.'
                ]),
            ],
            [
                'makanan_id' => '80',
                'tutorial' => 'https://youtu.be/example80',
                'latarBelakang' => 'Bebek Betutu adalah bebek yang dimasak dengan bumbu rempah khas dan dibungkus dengan daun pisang untuk disangrai.',
                'bahanBahan' => json_encode([
                    '1 ekor bebek, bersihkan dan potong sesuai selera',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '5 buah cabai merah',
                    '3 buah cabai rawit',
                    '2 cm kunyit',
                    '2 cm jahe',
                    '3 batang serai, memarkan',
                    'garam dan gula secukupnya',
                    'daun pisang untuk membungkus'
                ]),
                'langkahLangkah' => json_encode([
                    'Haluskan bawang putih, bawang merah, cabai merah, cabai rawit, kunyit, dan jahe.',
                    'Tumis bumbu halus hingga harum.',
                    'Masukkan bebek, serai, garam, dan gula.',
                    'Masak hingga bebek berubah warna dan bumbu meresap.',
                    'Bungkus bebek dengan daun pisang.',
                    'Panggang bebek dalam oven atau di atas bara api hingga matang.',
                    'Sajikan hangat.'
                ]),
            ],
            [
                'makanan_id' => '81',
                'tutorial' => 'https://youtu.be/example81',
                'latarBelakang' => 'Ikan Belanga Bajawa adalah hidangan ikan yang dimasak dengan bumbu khas dan dibakar dalam belanga (periuk tanah).',
                'bahanBahan' => json_encode([
                    '500 gram ikan, bersihkan dan potong-potong',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '5 buah cabai merah',
                    '3 buah cabai rawit',
                    '2 cm kunyit',
                    '2 cm jahe',
                    '3 lembar daun jeruk',
                    '2 batang serai, memarkan',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Haluskan bawang putih, bawang merah, cabai merah, cabai rawit, kunyit, dan jahe.',
                    'Tumis bumbu halus hingga harum.',
                    'Masukkan ikan, daun jeruk, dan serai.',
                    'Tambahkan garam dan gula.',
                    'Masak hingga ikan matang dan bumbu meresap.',
                    'Pindahkan ikan dan bumbu ke dalam belanga (periuk tanah).',
                    'Bakar belanga di atas bara api hingga ikan matang sempurna.',
                    'Sajikan hangat.'
                ]),
            ],
            [
                'makanan_id' => '82',
                'tutorial' => 'https://youtu.be/example82',
                'latarBelakang' => 'Sup Kacang Merah Maumere adalah sup kacang merah yang dimasak dengan bumbu khas dan disajikan dengan nasi.',
                'bahanBahan' => json_encode([
                    '200 gram kacang merah, rendam semalam',
                    '5 siung bawang putih',
                    '5 siung bawang merah',
                    '2 buah tomat, potong-potong',
                    '2 cm jahe, memarkan',
                    '2 cm lengkuas, memarkan',
                    '3 lembar daun salam',
                    '2 batang serai, memarkan',
                    'garam dan gula secukupnya'
                ]),
                'langkahLangkah' => json_encode([
                    'Rebus kacang merah hingga empuk.',
                    'Haluskan bawang putih dan bawang merah, lalu tumis hingga harum.',
                    'Masukkan tomat, jahe, lengkuas, daun salam, dan serai ke dalam tumisan bumbu.',
                    'Tambahkan kacang merah yang sudah direbus, garam, dan gula.',
                    'Masak hingga bumbu meresap.',
                    'Sajikan hangat dengan nasi.'
                ]),
            ],
            
            
        ]);
    }
}
