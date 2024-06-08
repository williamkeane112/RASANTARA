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
        ]);
    }
}
