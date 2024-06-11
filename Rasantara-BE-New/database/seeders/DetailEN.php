<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailEN extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detailsEN')->insert([
            [
                'makanan_id' => '1',
                'tutorial' => 'nIE7Hg2YK4Y',
                'latarBelakang' => 'Tekwan comes from the acculturation of Palembang and Chinese culture, where Chinese people who settled in Palembang introduced fish-based food. Tekwan was adopted by the people of Palembang by adding soup-like broth and regional spices. It is said to come from "Berkotek Samo Kawan" or Hokkien "tâi-oân" which is similar to Taiwan. In other countries, tekwan is similar to fishcake, but chewier and tastier. Many culinary fans prefer tekwan to fishcake',
                'bahanBahan' => json_encode([
                    '500 grams of egg white',
                    '300 grams of flour',
                    '330 grams of tapioca',
                    'sugar, stock powder and salt to taste',
                    '1500 ml water',
                    '5 cloves of garlic',
                    '1 teaspoon ebi, fine',
                    '3 cloves of red onion',
                    '1/2 teaspoon ground pepper',
                    '1 tablespoon fresh shrimp',
                    'Jicama to taste',
                    'ear fungus and tuberose flowers, soak in warm water',
                    'sugar and salt to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Put all ingredients except tapioca flour or sago, into a food processor or chopper, grind until smooth.',
                    'Move to container.',
                    'Add tapioca flour, stir until smooth.',
                    'Bring the pot of water to a boil, reduce the heat.',
                    'Pinch the dough to the size you like.',
                    'Boil over low heat until cooked.',
                    'Lift and drain.',
                ]),
            ],
            [
                'makanan_id' => '2',
                'tutorial' => 'vyUqCDTN4oFUtsCn',
                'latarBelakang' => 'Sate Padang is satay with a thick sauce made from a mixture of various spices and rice flour. This food comes from Padang, West Sumatra, and is known for its spicy and savory taste.',
                'bahanBahan' => json_encode([
                    '500 grams of beef',
                    '10 cloves of red onion',
                    '5 cloves of garlic',
                    '2 tablespoons coriander',
                    '2 tablespoons rice flour',
                    '1 teaspoon salt',
                    '200 ml coconut milk',
                    '4 stalks of lemongrass, bruised',
                    'Kaffir lime leaves to taste',
                ]),
                'langkahLangkah' => json_encode([
                    'Cleanse the spices: shallots, garlic, coriander.',
                    'Saute the ground spices until fragrant.',
                    'Add the beef, stir until it changes color.',
                    'Add coconut milk, lemongrass and lime leaves. Cook until the meat is tender.',
                    'Dissolve the rice flour in a little water, add it to the dish. Stir until thickened.',
                    'Thread the meat onto skewers, grill until cooked.',
                    'Serve with cooked sauce.',
                ]),
            ],
            [
                'makanan_id' => '3',
                'tutorial' => '7TnH3OVqHWq6X5uJ',
                'latarBelakang' => 'Rendang is a meat dish cooked with spices and coconut milk until the sauce dries up. Rendang comes from Padang, West Sumatra, and is one of the most delicious foods in the world.',
                'bahanBahan' => json_encode([
                    '1 kg beef',
                    '500 ml thick coconut milk',
                    '10 cloves of red onion',
                    '5 cloves of garlic',
                    '3 lime leaves',
                    '2 stalks of lemongrass, bruised',
                    '5 cm galangal, bruised',
                    '2 tablespoons of ground chili',
                    '1 teaspoon salt',
                    '3 cm ginger, bruised'
                ]),
                'langkahLangkah' => json_encode([
                    'Cut the beef according to taste.',
                    'Cleanse the spices: shallots, garlic, ground chilies, ginger.',
                    'Saute the ground spices until fragrant.',
                    'Add the beef, stir until it changes color.',
                    'Add coconut milk, lime leaves, lemongrass and galangal.',
                    'Cook over low heat until the coconut milk dries up and the meat is tender.',
                    'Stir occasionally so it doesnt burn.'
                ]),
            ],
            [
                'makanan_id' => '4',
                'tutorial' => 'https://youtu.be/example3',
                'latarBelakang' => 'Pempek is a typical Palembang food made from fish and sago, usually served with vinegar sauce. Pempek is known for its chewy texture and delicious taste.',
                'bahanBahan' => json_encode([
                    '500 grams of mackerel fish, finely ground',
                    '200 grams of sago flour',
                    '1 egg',
                    '1 teaspoon salt',
                    '500 ml water',
                    '5 cloves of garlic, crushed',
                    '100 ml water for dough',
                    'vinegar, sugar, chili and garlic for vinegar sauce'
                ]),
                'langkahLangkah' => json_encode([
                    'Mix ground fish with garlic, salt and water.',
                    'Add sago flour little by little until the dough is smooth.',
                    'Shape the dough according to taste.',
                    'Boil water, boil the pempek until it floats.',
                    'Lift and drain.',
                    'Fry the pempek until brown.',
                    'Serve with vinegar sauce.'
                ]),
            ],
            [
                'makanan_id' => '5',
                'tutorial' => 'https://youtu.be/example4',
                'latarBelakang' => 'Ikan Arsik is a typical Batak fish dish cooked with rich yellow spices. This dish originates from Tapanuli, North Sumatra.',
                'bahanBahan' => json_encode([
                    '1 carp fish',
                    '10 cloves of red onion',
                    '5 cloves of garlic',
                    '3 candlenuts',
                    '5 cm turmeric',
                    '3 cm ginger',
                    '2 stalks of lemongrass, bruised',
                    '2 kaffir lime leaves',
                    'salt and sugar to taste',
                    'asam gelugur or asam kandis to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Clean the fish, make incisions on the body.',
                    'Grind the spices: shallots, garlic, candlenuts, turmeric, ginger.',
                    'Saute ground spices until fragrant.',
                    'Add lemongrass, kaffir lime leaves, and asam gelugur.',
                    'Add the fish, stir gently until the spices are absorbed.',
                    'Cook until the fish is cooked and the spices thicken.',
                    'Serve with warm rice.'
                ]),
            ],
            [
                'makanan_id' => '6',
                'tutorial' => 'https://youtu.be/example5',
                'latarBelakang' => 'Gulai Ikan Patin is a fish dish with rich and spicy gulai sauce. This dish comes from Jambi, Sumatra.',
                'bahanBahan' => json_encode([
                    '1 patin fish',
                    '500 ml coconut milk',
                    '10 cloves of red onion',
                    '5 cloves of garlic',
                    '3 cm turmeric',
                    '2 cm ginger',
                    '3 stalks of lemongrass, bruised',
                    '2 bay leaves',
                    'salt and sugar to taste',
                    'asam kandis or tamarind to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Clean the patin fish, cut into pieces.',
                    'Grind the spices: shallots, garlic, turmeric, ginger.',
                    'Saute ground spices until fragrant.',
                    'Add lemongrass, bay leaves, and asam kandis.',
                    'Add coconut milk, cook until it boils.',
                    'Add the patin fish, cook until done and the spices are absorbed.',
                    'Serve with rice.'
                ]),
            ],
            [
                'makanan_id' => '7',
                'tutorial' => 'https://youtu.be/example6',
                'latarBelakang' => 'Mie Aceh is a spicy noodle dish with a mixture of meat or seafood. This food comes from Aceh, Sumatra, and is known for its distinctive spicy taste.',
                'bahanBahan' => json_encode([
                    '500 grams of yellow noodles',
                    '200 grams of beef or shrimp',
                    '10 cloves of red onion',
                    '5 cloves of garlic',
                    '3 red chilies',
                    '2 bird’s eye chilies',
                    '2 cm turmeric',
                    '2 cm ginger',
                    '2 stalks of lemongrass, bruised',
                    '200 ml beef broth',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Grind the spices: shallots, garlic, red chilies, bird’s eye chilies, turmeric, ginger.',
                    'Saute ground spices until fragrant.',
                    'Add beef or shrimp, stir until cooked.',
                    'Add beef broth, bring to a boil.',
                    'Add yellow noodles, stir until well mixed.',
                    'Cook until the noodles are done and the spices are absorbed.',
                    'Serve with pickles and emping.'
                ]),
            ],
            [
                'makanan_id' => '8',
                'tutorial' => 'https://youtu.be/example7',
                'latarBelakang' => 'Bika Ambon is a typical Medan cake with a spongy texture and fragrant pandan aroma. This food comes from Medan, North Sumatra.',
                'bahanBahan' => json_encode([
                    '200 grams of wheat flour',
                    '200 grams of sugar',
                    '50 grams of tapioca flour',
                    '200 ml thick coconut milk',
                    '5 eggs',
                    '100 ml pandan water',
                    '1 tablespoon instant yeast',
                    'salt to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Mix wheat flour, tapioca flour, and sugar.',
                    'Add coconut milk, stir well.',
                    'Add eggs one by one while stirring continuously.',
                    'Add pandan water and instant yeast, mix until well combined.',
                    'Let the dough rise for 1 hour.',
                    'Heat the bika mold, pour the dough until half full.',
                    'Cook until done and spongy.',
                    'Serve with hot tea.'
                ]),
            ],
            [
                'makanan_id' => '9',
                'tutorial' => 'https://youtu.be/example8',
                'latarBelakang' => 'Sate Matang is a typical Aceh satay served with broth and soy sauce sambal. This food comes from Aceh, Sumatra.',
                'bahanBahan' => json_encode([
                    '500 grams of goat or beef',
                    '10 cloves of red onion',
                    '5 cloves of garlic',
                    '2 tablespoons coriander',
                    '1 teaspoon cumin',
                    '3 cm ginger',
                    'salt and sugar to taste',
                    '200 ml beef broth',
                    'sweet soy sauce to taste',
                    'bird’s eye chilies, sliced'
                ]),
                'langkahLangkah' => json_encode([
                    'Cut the meat as desired, skewer with satay skewers.',
                    'Grind the spices: shallots, garlic, coriander, cumin, ginger.',
                    'Saute ground spices until fragrant.',
                    'Boil the meat in beef broth until tender.',
                    'Grill the satay until cooked, brush with sauteed spices.',
                    'Serve with broth and soy sauce sambal.'
                ]),
            ],
            [
                'makanan_id' => '10',
                'tutorial' => 'https://youtu.be/example10',
                'latarBelakang' => 'Soto Betawi is a typical Jakarta soup made with coconut milk or milk with beef. This food comes from Betawi and is known for its rich and savory broth.',
                'bahanBahan' => json_encode([
                    '500 grams of beef',
                    '200 ml coconut milk',
                    '200 ml milk',
                    '10 cloves of red onion',
                    '5 cloves of garlic',
                    '3 cm ginger, bruised',
                    '2 stalks of lemongrass, bruised',
                    '2 bay leaves',
                    'salt and pepper to taste',
                    'fried potatoes, tomatoes, scallions for garnish'
                ]),
                'langkahLangkah' => json_encode([
                    'Cut the beef, boil until tender.',
                    'Grind the spices: shallots, garlic, ginger, lemongrass, and bay leaves.',
                    'Saute ground spices until fragrant, add to the beef broth.',
                    'Add coconut milk and milk, stir well.',
                    'Cook until the broth boils and the spices are absorbed.',
                    'Serve with fried potatoes, tomatoes, and scallions.'
                ]),
            ],
            [
                'makanan_id' => '11',
                'tutorial' => 'https://youtu.be/example11',
                'latarBelakang' => 'Gudeg is a typical Yogyakarta dish made from young jackfruit cooked with coconut milk. This dish has a sweet and savory taste and is often served with eggs and chicken.',
                'bahanBahan' => json_encode([
                    '1 kg young jackfruit',
                    '500 ml thick coconut milk',
                    '10 boiled eggs',
                    '500 grams of chicken',
                    '10 cloves of red onion',
                    '5 cloves of garlic',
                    '3 cm galangal, bruised',
                    '3 bay leaves',
                    'palm sugar, salt, and coconut water to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Cut young jackfruit, boil until tender.',
                    'Grind the spices: shallots, garlic, galangal, and bay leaves.',
                    'Saute ground spices until fragrant, add to the jackfruit pot, add coconut milk, palm sugar, salt, and coconut water.',
                    'Add boiled eggs and chicken.',
                    'Cook over low heat until the spices are absorbed and the broth thickens.',
                    'Serve with white rice and other side dishes.'
                ]),
            ],
            [
                'makanan_id' => '12',
                'tutorial' => 'https://youtu.be/example12',
                'latarBelakang' => 'Rawon is a typical East Java black beef soup cooked with kluwek. This dish is known for its savory taste and rich broth.',
                'bahanBahan' => json_encode([
                    '500 grams of beef',
                    '5 kluwek nuts, take the pulp',
                    '10 cloves of red onion',
                    '5 cloves of garlic',
                    '3 bay leaves',
                    '2 stalks of lemongrass, bruised',
                    '3 cm galangal, bruised',
                    'salt, sugar, and water to taste',
                    'bean sprouts and salted eggs for garnish'
                ]),
                'langkahLangkah' => json_encode([
                    'Cut the beef, boil until tender.',
                    'Grind the spices: shallots, garlic, kluwek.',
                    'Saute ground spices until fragrant.',
                    'Add sauteed spices to the beef broth.',
                    'Add lemongrass, bay leaves, and galangal.',
                    'Cook until the broth turns black and the spices are absorbed.',
                    'Serve with bean sprouts and salted eggs.'
                ]),
            ],
            [
                'makanan_id' => '13',
                'tutorial' => 'https://youtu.be/example13',
                'latarBelakang' => 'Kerak Telor is a typical Betawi food made from eggs, glutinous rice, and ebi, cooked over charcoal. This dish has a savory taste and crunchy texture.',
                'bahanBahan' => json_encode([
                    '100 grams of white glutinous rice, soaked',
                    '50 grams of ebi, soaked and ground',
                    '4 duck eggs',
                    '10 cloves of red onion, thinly sliced',
                    'salt and pepper to taste',
                    'grated coconut, toasted',
                    'fried shallots for garnish'
                ]),
                'langkahLangkah' => json_encode([
                    'Heat the pan over charcoal.',
                    'Add glutinous rice, ebi, and red onion.',
                    'Add beaten duck eggs, stir well.',
                    'Cook until half done, then flip and cook until done.',
                    'Sprinkle with toasted grated coconut and fried shallots.',
                    'Serve warm.'
                ]),
            ],
            [
                'makanan_id' => '14',
                'tutorial' => 'https://youtu.be/example14',
                'latarBelakang' => 'Nasi Liwet is a typical Solo rice dish cooked with coconut milk and served with chicken, eggs, and vegetables. This dish is known for its savory taste and fragrant aroma.',
                'bahanBahan' => json_encode([
                    '500 grams of rice',
                    '500 ml coconut milk',
                    '500 ml water',
                    '2 stalks of lemongrass, bruised',
                    '3 bay leaves',
                    'salt to taste',
                    'shredded chicken, boiled eggs, and vegetables for garnish'
                ]),
                'langkahLangkah' => json_encode([
                    'Wash the rice until clean.',
                    'Put the rice in a pot, add coconut milk, water, lemongrass, bay leaves, and salt.',
                    'Cook over medium heat until the water is reduced.',
                    'Reduce the heat, cover the pot, and cook until the rice is done.',
                    'Serve Nasi Liwet with shredded chicken, boiled eggs, and vegetables.'
                ]),
            ],
            [
                'makanan_id' => '15',
                'tutorial' => 'https://youtu.be/example15',
                'latarBelakang' => 'Bakso is meatballs served in beef broth, usually with noodles, tofu, and vegetables. This dish is popular throughout Indonesia and known for its savory broth.',
                'bahanBahan' => json_encode([
                    '500 grams of ground beef',
                    '100 grams of tapioca flour',
                    '1 egg',
                    '5 cloves of garlic, ground',
                    '2 teaspoons of salt',
                    '1 teaspoon of ground pepper',
                    '1 liter of beef broth',
                    'noodles, tofu, and vegetables for garnish'
                ]),
                'langkahLangkah' => json_encode([
                    'Mix ground beef with garlic, salt, pepper, tapioca flour, and egg.',
                    'Stir until the dough is smooth and can be shaped.',
                    'Form the dough into meatballs.',
                    'Boil the meatballs in boiling water until they float.',
                    'Cook the beef broth until it boils.',
                    'Serve meatballs with beef broth, noodles, tofu, and vegetables.'
                ]),
            ],
            [
                'makanan_id' => '16',
                'tutorial' => 'https://youtu.be/example16',
                'latarBelakang' => 'Sate Maranggi is a typical Purwakarta satay made from beef or goat marinated with special spices. This dish is known for its sweet and savory marinade.',
                'bahanBahan' => json_encode([
                    '500 grams of beef or goat',
                    '5 cloves of garlic',
                    '5 cloves of red onion',
                    '3 tablespoons of sweet soy sauce',
                    '2 tablespoons of grated palm sugar',
                    '2 teaspoons of salt',
                    '1 teaspoon of ground pepper',
                    '2 tablespoons of tamarind water'
                ]),
                'langkahLangkah' => json_encode([
                    'Cut the meat as desired.',
                    'Grind the garlic, red onion, salt, and pepper.',
                    'Mix the ground spices with sweet soy sauce, grated palm sugar, and tamarind water.',
                    'Marinate the meat with the spices for 2 hours.',
                    'Skewer the meat on satay skewers.',
                    'Grill the satay until cooked and browned.',
                    'Serve with rice or lontong.'
                ]),
            ],
            [
                'makanan_id' => '17',
                'tutorial' => 'https://youtu.be/example17',
                'latarBelakang' => 'Opor Ayam is a chicken dish cooked with coconut milk and special spices. This dish is often served during Eid and has a savory and rich taste.',
                'bahanBahan' => json_encode([
                    '1 chicken, cut into pieces',
                    '500 ml thick coconut milk',
                    '500 ml thin coconut milk',
                    '10 cloves of red onion',
                    '5 cloves of garlic',
                    '3 cm galangal, bruised',
                    '2 stalks of lemongrass, bruised',
                    '3 bay leaves',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Saute ground spices: shallots, garlic, galangal, lemongrass, and bay leaves until fragrant.',
                    'Add chicken pieces, stir until the chicken changes color.',
                    'Add thin coconut milk, cook until the chicken is tender.',
                    'Pour in thick coconut milk, cook over low heat until the broth thickens and the spices are absorbed.',
                    'Serve with ketupat or white rice.'
                ]),
            ],
            [
                'makanan_id' => '18',
                'tutorial' => 'https://youtu.be/example18',
                'latarBelakang' => 'Tahu Gejrot is fried tofu served with a spicy and sweet sauce from Cirebon. This dish is known for its refreshing and spicy sauce.',
                'bahanBahan' => json_encode([
                    '10 pieces of tofu pong',
                    '5 cloves of red onion',
                    '3 cloves of garlic',
                    '5 bird’s eye chilies',
                    '2 tablespoons of grated palm sugar',
                    '3 tablespoons of sweet soy sauce',
                    '3 tablespoons of tamarind water',
                    'salt to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Cut the tofu pong, fry until crispy.',
                    'Grind the spices: shallots, garlic, and bird’s eye chilies.',
                    'Mix ground spices with grated palm sugar, sweet soy sauce, tamarind water, and salt.',
                    'Pour the sauce over the fried tofu.',
                    'Serve warm.'
                ]),
            ],
            [
                'makanan_id' => '19',
                'tutorial' => 'https://youtu.be/example19',
                'latarBelakang' => 'Gado-Gado is a vegetable salad topped with a special Indonesian peanut sauce. This dish is known for its savory and rich peanut sauce.',
                'bahanBahan' => json_encode([
                    '200 grams of fried peanuts',
                    '5 cloves of garlic',
                    '5 red chilies',
                    '2 tablespoons of grated palm sugar',
                    '3 tablespoons of tamarind water',
                    'salt to taste',
                    'boiled vegetables (bean sprouts, kale, long beans, cabbage)',
                    'fried tempeh, fried tofu, lontong for garnish'
                ]),
                'langkahLangkah' => json_encode([
                    'Grind the peanuts, garlic, red chilies, grated palm sugar, and salt.',
                    'Add tamarind water, mix until it becomes peanut sauce.',
                    'Arrange boiled vegetables, fried tempeh, fried tofu, and lontong on a plate.',
                    'Pour the peanut sauce over it.',
                    'Serve with crackers and boiled eggs.'
                ]),
            ],
            [
                'makanan_id' => '20',
                'tutorial' => 'https://youtu.be/example20',
                'latarBelakang' => 'Pecel Lele is fried catfish served with sambal terasi and fresh vegetables. This dish is popular as street food in Indonesia, especially in East Java.',
                'bahanBahan' => json_encode([
                    '4 catfish, cleaned',
                    '2 teaspoons of salt',
                    '1 teaspoon of turmeric powder',
                    'oil for frying',
                    'sambal terasi',
                    'fresh vegetables (cucumber, basil, cabbage)'
                ]),
                'langkahLangkah' => json_encode([
                    'Rub the catfish with salt and turmeric powder.',
                    'Heat the oil, fry the catfish until crispy and cooked.',
                    'Serve fried catfish with sambal terasi and fresh vegetables.'
                ]),
            ],
            [
                'makanan_id' => '21',
                'tutorial' => 'https://youtu.be/example21',
                'latarBelakang' => 'Soto Kudus is a chicken or beef soup with clear broth from Kudus. This dish is known for its fresh broth and well-absorbed spices.',
                'bahanBahan' => json_encode([
                    '500 grams of chicken',
                    '2 liters of water',
                    '10 cloves of red onion',
                    '5 cloves of garlic',
                    '2 stalks of lemongrass, bruised',
                    '3 bay leaves',
                    'salt and sugar to taste',
                    'bean sprouts, celery, and fried shallots for garnish'
                ]),
                'langkahLangkah' => json_encode([
                    'Boil the chicken until cooked, remove and shred the meat.',
                    'Grind the spices: shallots, garlic, lemongrass, and bay leaves.',
                    'Saute ground spices until fragrant, add to the chicken broth.',
                    'Add salt and sugar, cook until the spices are absorbed.',
                    'Serve the soup with shredded chicken, bean sprouts, celery, and fried shallots.'
                ]),
            ],[
                'makanan_id' => '22',
                'tutorial' => 'https://youtu.be/example22',
                'latarBelakang' => 'Soto Banjar is a traditional Banjar chicken soup served with rice cake and boiled eggs.',
                'bahanBahan' => json_encode([
                    '500 grams chicken meat',
                    '2 liters water',
                    '10 shallots',
                    '5 garlic cloves',
                    '2 lemongrass stalks, bruised',
                    '3 bay leaves',
                    'salt and sugar to taste',
                    'rice cake, boiled eggs, and fried shallots for garnish'
                ]),
                'langkahLangkah' => json_encode([
                    'Boil the chicken meat until cooked, remove and shred the meat.',
                    'Blend the spices: shallots, garlic, lemongrass, and bay leaves.',
                    'Saute the blended spices until fragrant, then add to the chicken broth.',
                    'Add salt and sugar, cook until the spices are well absorbed.',
                    'Serve the soto with shredded chicken, rice cake, boiled eggs, and fried shallots.'
                ]),
            ],
            [
                'makanan_id' => '23',
                'tutorial' => 'https://youtu.be/example23',
                'latarBelakang' => 'Ketupat Kandangan is rice cake served with haruan (snakehead fish) and coconut milk broth.',
                'bahanBahan' => json_encode([
                    '5 rice cakes',
                    '1 kg haruan fish (snakehead)',
                    '1 liter coconut milk',
                    '10 shallots',
                    '5 garlic cloves',
                    '5 red chilies',
                    '2 lemongrass stalks, bruised',
                    '3 bay leaves',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Clean and cut the haruan fish as desired.',
                    'Blend the spices: shallots, garlic, red chilies, lemongrass, and bay leaves.',
                    'Saute the blended spices until fragrant, then add the haruan fish.',
                    'Add coconut milk, salt, and sugar, cook until the fish is cooked and the broth is well absorbed.',
                    'Serve the rice cake with haruan fish and coconut milk broth.'
                ]),
            ],
            [
                'makanan_id' => '24',
                'tutorial' => 'https://youtu.be/example24',
                'latarBelakang' => 'Ayam Cincane is grilled chicken cooked with red spices from Samarinda.',
                'bahanBahan' => json_encode([
                    '1 whole chicken, cut into 4 pieces',
                    '10 shallots',
                    '5 garlic cloves',
                    '10 red chilies',
                    '2 lemongrass stalks, bruised',
                    '3 bay leaves',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Blend the spices: shallots, garlic, red chilies, lemongrass, and bay leaves.',
                    'Saute the blended spices until fragrant, then add the chicken and stir well.',
                    'Add salt and sugar, cook until the chicken is cooked and the spices are well absorbed.',
                    'Grill the chicken until browned and perfectly cooked.',
                    'Serve Ayam Cincane with warm rice.'
                ]),
            ],
            [
                'makanan_id' => '25',
                'tutorial' => 'https://youtu.be/example25',
                'latarBelakang' => 'Nasi Kuning Banjar is yellow rice served with various side dishes such as chicken, eggs, and shredded coconut.',
                'bahanBahan' => json_encode([
                    '500 grams rice',
                    '1 liter coconut milk',
                    '2 lemongrass stalks, bruised',
                    '3 bay leaves',
                    '1 teaspoon turmeric powder',
                    'salt to taste',
                    'chicken, boiled eggs, and shredded coconut for garnish'
                ]),
                'langkahLangkah' => json_encode([
                    'Wash the rice until clean, put it in a pot.',
                    'Add coconut milk, lemongrass, bay leaves, turmeric powder, and salt.',
                    'Cook the rice until cooked and yellow in color.',
                    'Serve yellow rice with chicken, boiled eggs, and shredded coconut.'
                ]),
            ],
            [
                'makanan_id' => '26',
                'tutorial' => 'https://youtu.be/example26',
                'latarBelakang' => 'Pengkang is a dish made from glutinous rice filled with dried shrimp, wrapped in banana leaves, and grilled.',
                'bahanBahan' => json_encode([
                    '500 grams glutinous rice',
                    '200 grams dried shrimp, soaked and ground',
                    '5 shallots',
                    '3 garlic cloves',
                    'banana leaves for wrapping',
                    'salt to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Wash the glutinous rice until clean, steam until half-cooked.',
                    'Blend the spices: shallots, garlic.',
                    'Saute the blended spices until fragrant, then add the dried shrimp and stir well.',
                    'Take a piece of banana leaf, fill it with glutinous rice and dried shrimp, wrap it tightly.',
                    'Grill the Pengkang until the banana leaves are browned and cooked.'
                ]),
            ],
            [
                'makanan_id' => '27',
                'tutorial' => 'https://youtu.be/example27',
                'latarBelakang' => 'Juhu Singkah is a traditional Dayak dish made from young rattan cooked with fish and spices.',
                'bahanBahan' => json_encode([
                    '500 grams young rattan, cut into pieces',
                    '300 grams fish, cut as desired',
                    '10 shallots',
                    '5 garlic cloves',
                    '5 red chilies',
                    '2 lemongrass stalks, bruised',
                    '3 bay leaves',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Wash the young rattan until clean.',
                    'Blend the spices: shallots, garlic, red chilies, lemongrass, and bay leaves.',
                    'Saute the blended spices until fragrant, then add the fish and young rattan.',
                    'Add salt and sugar, cook until the fish and rattan are cooked and the spices are well absorbed.',
                    'Serve Juhu Singkah with warm rice.'
                ]),
            ],
            [
                'makanan_id' => '28',
                'tutorial' => 'https://youtu.be/example28',
                'latarBelakang' => 'Sambal Raja is a traditional Kutai sambal consisting of various vegetables topped with a special sambal.',
                'bahanBahan' => json_encode([
                    '200 grams long beans, cut into pieces',
                    '200 grams eggplant, cut into pieces',
                    '200 grams water spinach, plucked',
                    '5 red chilies',
                    '10 shallots',
                    '5 garlic cloves',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Boil the long beans, eggplant, and water spinach until cooked.',
                    'Blend the spices: red chilies, shallots, and garlic.',
                    'Saute the blended spices until fragrant, add salt and sugar.',
                    'Arrange the vegetables on a serving plate, pour the cooked sambal over them.',
                    'Serve Sambal Raja with warm rice.'
                ]),
            ],
            [
                'makanan_id' => '29',
                'tutorial' => 'https://youtu.be/example29',
                'latarBelakang' => 'Pais Patin is a dish where catfish is wrapped in banana leaves and cooked with yellow spices.',
                'bahanBahan' => json_encode([
                    '1 kg of catfish, cut as desired',
                    '10 cloves of shallots',
                    '5 cloves of garlic',
                    '5 red chilies',
                    '2 stalks of lemongrass, bruised',
                    '3 bay leaves',
                    '1 teaspoon of turmeric powder',
                    'salt and sugar to taste',
                    'banana leaves for wrapping'
                ]),
                'langkahLangkah' => json_encode([
                    'Clean the catfish and cut as desired.',
                    'Grind the spices: shallots, garlic, red chilies, lemongrass, bay leaves, and turmeric powder.',
                    'Saute the ground spices until fragrant, add salt and sugar.',
                    'Take a banana leaf, fill with catfish and spices, wrap tightly.',
                    'Steam the pais patin until cooked and the spices are absorbed.',
                    'Serve pais patin with warm rice.'
                ]),
            ],
            [
                'makanan_id' => '30',
                'tutorial' => 'https://youtu.be/example30',
                'latarBelakang' => 'Bubur Pedas is a traditional porridge from Pontianak made from a mixture of rice, vegetables, and spice paste.',
                'bahanBahan' => json_encode([
                    '200 grams of rice, roasted and ground',
                    '200 grams of spinach, cleaned',
                    '200 grams of water spinach, cleaned',
                    '100 grams of melinjo leaves, cleaned',
                    '10 cloves of shallots',
                    '5 cloves of garlic',
                    '5 red chilies',
                    '2 stalks of lemongrass, bruised',
                    '3 bay leaves',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Boil the fine rice with water until it turns into porridge.',
                    'Grind the spices: shallots, garlic, red chilies, lemongrass, and bay leaves.',
                    'Saute the ground spices until fragrant, add to the porridge.',
                    'Add salt and sugar, cook until the porridge is cooked and the spices are absorbed.',
                    'Add the vegetables, cook briefly until wilted.',
                    'Serve the spicy porridge topped with fried shallots.'
                ]),
            ],
            [
                'makanan_id' => '31',
                'tutorial' => 'https://youtu.be/example31',
                'latarBelakang' => 'Ikan Asam Pedas is a fish dish cooked with spicy and sour spices typical of Sambas.',
                'bahanBahan' => json_encode([
                    '1 kg fish, cut as desired',
                    '10 cloves of shallots',
                    '5 cloves of garlic',
                    '5 red chilies',
                    '2 stalks of lemongrass, bruised',
                    '3 bay leaves',
                    '1 teaspoon of tamarind paste',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Clean the fish and cut as desired.',
                    'Grind the spices: shallots, garlic, red chilies, lemongrass, bay leaves, and tamarind.',
                    'Saute the ground spices until fragrant, add salt and sugar.',
                    'Add fish, stir well, cook until cooked and the spices are absorbed.',
                    'Serve the spicy sour fish with warm rice.'
                ]),
            ],
            [
                'makanan_id' => '32',
                'tutorial' => 'https://youtu.be/example32',
                'latarBelakang' => 'Coto Makassar is a beef soup from Makassar cooked with spices and peanuts.',
                'bahanBahan' => json_encode([
                    '1 kg beef, cut into cubes',
                    '2 liters of water',
                    '200 grams of peanuts, roasted and ground',
                    '10 cloves of shallots',
                    '5 cloves of garlic',
                    '5 red chilies',
                    '2 stalks of lemongrass, bruised',
                    '3 bay leaves',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Boil the beef until tender, remove and set aside.',
                    'Grind the spices: shallots, garlic, red chilies, lemongrass, and bay leaves.',
                    'Saute the ground spices until fragrant, add to the beef broth.',
                    'Add ground peanuts, salt, and sugar, cook until the spices are absorbed.',
                    'Serve coto with beef pieces, ketupat, and fried shallots.'
                ]),
            ],
            [
                'makanan_id' => '33',
                'tutorial' => 'https://youtu.be/example33',
                'latarBelakang' => 'Pallubasa is a meat soup with a thick broth made from roasted grated coconut.',
                'bahanBahan' => json_encode([
                    '1 kg beef, cut into cubes',
                    '2 liters of water',
                    '200 grams of grated coconut, roasted and ground',
                    '10 cloves of shallots',
                    '5 cloves of garlic',
                    '5 red chilies',
                    '2 stalks of lemongrass, bruised',
                    '3 bay leaves',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Boil the beef until tender, remove and set aside.',
                    'Grind the spices: shallots, garlic, red chilies, lemongrass, and bay leaves.',
                    'Saute the ground spices until fragrant, add to the beef broth.',
                    'Add ground coconut, salt, and sugar, cook until the spices are absorbed.',
                    'Serve pallubasa with beef pieces and fried shallots.'
                ]),
            ],
            [
                'makanan_id' => '34',
                'tutorial' => 'https://youtu.be/example34',
                'latarBelakang' => 'Sup Konro is a rib soup from Makassar cooked with specific spices.',
                'bahanBahan' => json_encode([
                    '1 kg beef ribs, cut as desired',
                    '2 liters of water',
                    '10 cloves of shallots',
                    '5 cloves of garlic',
                    '5 red chilies',
                    '2 stalks of lemongrass, bruised',
                    '3 bay leaves',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Boil the ribs until tender, remove and set aside.',
                    'Grind the spices: shallots, garlic, red chilies, lemongrass, and bay leaves.',
                    'Saute the ground spices until fragrant, add to the rib broth.',
                    'Add salt and sugar, cook until the spices are absorbed.',
                    'Serve the konro soup with rib pieces and fried shallots.'
                ]),
            ],
            [
                'makanan_id' => '35',
                'tutorial' => 'https://youtu.be/example35',
                'latarBelakang' => 'Tinutuan or Manado Porridge is a porridge made from various vegetables and typical Manado spices.',
                'bahanBahan' => json_encode([
                    '200 grams of rice',
                    '1 liter of water',
                    '200 grams of spinach, cleaned',
                    '200 grams of water spinach, cleaned',
                    '100 grams of pumpkin, diced',
                    '100 grams of sweet corn, shredded',
                    '10 cloves of shallots',
                    '5 cloves of garlic',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Boil the rice with water until it becomes porridge.',
                    'Add pumpkin and sweet corn, cook until tender.',
                    'Grind the spices: shallots and garlic.',
                    'Saute the ground spices until fragrant, add to the porridge.',
                    'Add vegetables, salt, and sugar, cook until vegetables are cooked and the porridge absorbs the flavors.',
                    'Serve tinutuan topped with fried shallots.'
                ]),
            ],
            [
                'makanan_id' => '36',
                'tutorial' => 'https://youtu.be/example36',
                'latarBelakang' => 'Paniki is a traditional Manado dish made from bat meat cooked with coconut milk and spices.',
                'bahanBahan' => json_encode([
                    '1 kg bat meat, cut as desired',
                    '1 liter of coconut milk',
                    '10 cloves of shallots',
                    '5 cloves of garlic',
                    '5 red chilies',
                    '2 stalks of lemongrass, bruised',
                    '3 bay leaves',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Clean the bat meat and cut as desired.',
                    'Grind the spices: shallots, garlic, red chilies, lemongrass, and bay leaves.',
                    'Saute the ground spices until fragrant, add the bat meat and stir well.',
                    'Add coconut milk, salt, and sugar, cook until the meat is cooked and the spices are absorbed.',
                    'Serve paniki with warm rice.'
                ]),
            ],
            [
                'makanan_id' => '37',
                'tutorial' => 'https://youtu.be/example37',
                'latarBelakang' => 'Brenebon is a red bean soup cooked with pork or beef and typical Manado spices.',
                'bahanBahan' => json_encode([
                    '500 grams of red beans, soaked overnight',
                    '500 grams of pork or beef, cut into cubes',
                    '2 liters of water',
                    '10 cloves of shallots',
                    '5 cloves of garlic',
                    '5 red chilies',
                    '2 stalks of lemongrass, bruised',
                    '3 bay leaves',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Boil the red beans until tender, remove and set aside.',
                    'Boil the meat until tender, remove and set aside.',
                    'Grind the spices: shallots, garlic, red chilies, lemongrass, and bay leaves.',
                    'Saute the ground spices until fragrant, add to the meat broth.',
                    'Add red beans, salt, and sugar, cook until the spices are absorbed.',
                    'Serve brenebon with meat pieces and fried shallots.'
                ]),
            ],
            [
                'makanan_id' => '38',
                'tutorial' => 'https://youtu.be/example38',
                'latarBelakang' => 'Ikan Woku Belanga is a fish dish with Woku spices from Manado cooked in a belanga (clay pot).',
                'bahanBahan' => json_encode([
                    '1 kg fish, cut as desired',
                    '10 cloves of shallots',
                    '5 cloves of garlic',
                    '5 red chilies',
                    '2 stalks of lemongrass, bruised',
                    '3 bay leaves',
                    '2 kaffir lime leaves',
                    'salt and sugar to taste',
                    '200 ml water'
                ]),
                'langkahLangkah' => json_encode([
                    'Clean the fish and cut as desired.',
                    'Grind the spices: shallots, garlic, red chilies, lemongrass, bay leaves, and kaffir lime leaves.',
                    'Saute the ground spices until fragrant, add the fish and water.',
                    'Add salt and sugar, cook until the fish is cooked and the spices are absorbed.',
                    'Serve ikan woku belanga with warm rice.'
                ]),
            ],
            [
                'makanan_id' => '39',
                'tutorial' => 'https://youtu.be/example39',
                'latarBelakang' => 'Kapurung is a traditional Luwu dish made from sago cooked with fish or chicken and vegetables.',
                'bahanBahan' => json_encode([
                    '200 grams of sago',
                    '500 grams of fish or chicken, cut as desired',
                    '200 grams of spinach, cleaned',
                    '200 grams of water spinach, cleaned',
                    '10 cloves of shallots',
                    '5 cloves of garlic',
                    '5 red chilies',
                    '2 stalks of lemongrass, bruised',
                    '3 bay leaves',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Dissolve sago in water, cook until thick.',
                    'Clean the fish or chicken and cut as desired.',
                    'Grind the spices: shallots, garlic, red chilies, lemongrass, and bay leaves.',
                    'Saute the ground spices until fragrant, add fish or chicken and stir well.',
                    'Add vegetables, salt, and sugar, cook until vegetables wilt.',
                    'Serve kapurung with fish or chicken and vegetables.'
                ]),
            ],
            [
                'makanan_id' => '40',
                'tutorial' => 'https://youtu.be/example40',
                'latarBelakang' => 'Kaledo is a Palu-style beef foot bone soup served with spicy sour broth.',
                'bahanBahan' => json_encode([
                    '1 kg beef foot bones, cut as desired',
                    '2 liters of water',
                    '10 cloves of shallots',
                    '5 cloves of garlic',
                    '5 red chilies',
                    '2 stalks of lemongrass, bruised',
                    '3 bay leaves',
                    '1 teaspoon of tamarind paste',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Boil the beef foot bones until tender, remove and set aside.',
                    'Grind the spices: shallots, garlic, red chilies, lemongrass, bay leaves, and tamarind.',
                    'Saute the ground spices until fragrant, add to the bone broth.',
                    'Add salt and sugar, cook until the spices are absorbed.',
                    'Serve kaledo with beef foot bones and fried shallots.'
                ]),
            ],
            [
                'makanan_id' => '41',
                'tutorial' => 'https://youtu.be/example41',
                'latarBelakang' => 'Lalampa is a traditional Gorontalo snack similar to lemper, wrapped in banana leaves and grilled.',
                'bahanBahan' => json_encode([
                    '500 grams of glutinous rice',
                    '200 grams of dried shrimp, soaked and ground',
                    '5 cloves of shallots',
                    '3 cloves of garlic',
                    'banana leaves for wrapping',
                    'salt to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Wash the glutinous rice until clean, steam until half-cooked.',
                    'Grind the spices: shallots and garlic.',
                    'Saute the ground spices until fragrant, add dried shrimp and stir well.',
                    'Take a piece of banana leaf, fill with glutinous rice and shrimp, wrap tightly.',
                    'Grill the lalampa until the banana leaves are browned and cooked.'
                ]),
            ],
            [
                'makanan_id' => '42',
                'tutorial' => 'https://youtu.be/example42',
                'latarBelakang' => 'Babi Guling is a Balinese roast pork dish seasoned with Balinese spices.',
                'bahanBahan' => json_encode([
                    '1 whole pig for roasting',
                    '10 cloves of shallots',
                    '5 cloves of garlic',
                    '10 red chilies',
                    '2 stalks of lemongrass, bruised',
                    '3 bay leaves',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Grind the spices: shallots, garlic, red chilies, lemongrass, and bay leaves.',
                    'Saute the ground spices until fragrant, insert into the pigs belly.',
                    'Sew the belly tightly, roast until cooked and the skin is crispy.',
                    'Serve babi guling with rice and sambal.'
                ]),
            ],
            [
                'makanan_id' => '43',
                'tutorial' => 'https://youtu.be/example43',
                'latarBelakang' => 'Ayam Betutu is a Balinese chicken dish cooked with Balinese spices and wrapped in banana leaves, then grilled.',
                'bahanBahan' => json_encode([
                    '1 chicken, cut into 4 parts',
                    '10 cloves of shallots',
                    '5 cloves of garlic',
                    '10 red chilies',
                    '2 stalks of lemongrass, bruised',
                    '3 bay leaves',
                    'salt and sugar to taste',
                    'banana leaves for wrapping'
                ]),
                'langkahLangkah' => json_encode([
                    'Grind the spices: shallots, garlic, red chilies, lemongrass, and bay leaves.',
                    'Saute the ground spices until fragrant, add chicken and stir well.',
                    'Take a banana leaf, wrap the chicken with spices, tie tightly.',
                    'Grill the chicken until cooked and the spices are absorbed.',
                    'Serve ayam betutu with rice and sambal.'
                ]),
            ],
            [
                'makanan_id' => '44',
                'tutorial' => 'https://youtu.be/example44',
                'latarBelakang' => 'Lawar is a mixture of vegetables, minced meat, and grated coconut seasoned with Balinese spices.',
                'bahanBahan' => json_encode([
                    '200 grams of minced meat',
                    '200 grams of grated coconut',
                    '200 grams of long beans, cut into pieces',
                    '10 cloves of shallots',
                    '5 cloves of garlic',
                    '5 red chilies',
                    '2 stalks of lemongrass, bruised',
                    '3 bay leaves',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Grind the spices: shallots, garlic, red chilies, lemongrass, and bay leaves.',
                    'Saute the ground spices until fragrant, add minced meat and stir well.',
                    'Add grated coconut and long beans, stir until well mixed.',
                    'Add salt and sugar, cook until cooked and the spices are absorbed.',
                    'Serve lawar with warm rice.'
                ]),
            ],
            [
                'makanan_id' => '45',
                'tutorial' => 'https://youtu.be/example45',
                'latarBelakang' => 'Sate Lilit is a traditional Balinese satay made from minced meat wrapped around lemongrass or bamboo sticks.',
                'bahanBahan' => json_encode([
                    '500 grams of minced meat',
                    '10 cloves of shallots',
                    '5 cloves of garlic',
                    '5 red chilies',
                    '2 stalks of lemongrass, bruised',
                    '3 bay leaves',
                    'salt and sugar to taste',
                    'lemongrass or bamboo sticks for wrapping'
                ]),
                'langkahLangkah' => json_encode([
                    'Grind the spices: shallots, garlic, red chilies, lemongrass, and bay leaves.',
                    'Saute the ground spices until fragrant, add minced meat and stir well.',
                    'Add salt and sugar, cook until cooked and the spices are absorbed.',
                    'Take a small amount of meat mixture, wrap around lemongrass or bamboo sticks.',
                    'Grill sate lilit until cooked and browned.',
                    'Serve sate lilit with sambal.'
                ]),
            ],
            [
                'makanan_id' => '46',
                'tutorial' => 'https://youtu.be/example46',
                'latarBelakang' => 'Nasi Campur Bali is white rice served with various Balinese side dishes such as shredded chicken, sate lilit, and lawar.',
                'bahanBahan' => json_encode([
                    '500 grams of rice',
                    '1 liter of water',
                    '200 grams of shredded chicken',
                    '200 grams of lawar',
                    '200 grams of sate lilit',
                    '10 cloves of shallots',
                    '5 cloves of garlic',
                    '5 red chilies',
                    '2 stalks of lemongrass, bruised',
                    '3 bay leaves',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Wash the rice until clean, cook until cooked.',
                    'Shred the chicken meat and cook with ground spices.',
                    'Saute the ground spices until fragrant, add lawar and sate lilit, stir well.',
                    'Add salt and sugar, cook until cooked and the spices are absorbed.',
                    'Serve mixed rice with shredded chicken, lawar, and sate lilit.'
                ]),
            ],
            [
                'makanan_id' => '47',
                'tutorial' => 'https://youtu.be/example47',
                'latarBelakang' => 'Serombotan is a dish of boiled vegetables served with a typical Balinese peanut sauce.',
                'bahanBahan' => json_encode([
                    '200 grams of spinach, cleaned',
                    '200 grams of water spinach, cleaned',
                    '200 grams of long beans, cut into pieces',
                    '100 grams of bean sprouts',
                    '10 cloves of shallots',
                    '5 cloves of garlic',
                    '5 red chilies',
                    '200 grams of roasted and ground peanuts',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Boil spinach, water spinach, long beans, and bean sprouts until cooked.',
                    'Grind the spices: shallots, garlic, red chilies, and peanuts.',
                    'Saute the ground spices until fragrant, add salt and sugar.',
                    'Arrange the vegetables on a serving plate, pour over the cooked peanut sauce.',
                    'Serve serombotan with warm rice.'
                ]),
            ],
            [
                'makanan_id' => '48',
                'tutorial' => 'https://youtu.be/example48',
                'latarBelakang' => 'Jukut Urab is a mixture of vegetables seasoned with grated coconut and typical Balinese spices.',
                'bahanBahan' => json_encode([
                    '200 grams of spinach, cleaned',
                    '200 grams of water spinach, cleaned',
                    '200 grams of long beans, cut into pieces',
                    '200 grams of grated coconut',
                    '10 cloves of shallots',
                    '5 cloves of garlic',
                    '5 red chilies',
                    '2 stalks of lemongrass, bruised',
                    '3 bay leaves',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Boil spinach, water spinach, and long beans until cooked.',
                    'Grind the spices: shallots, garlic, red chilies, lemongrass, and bay leaves.',
                    'Saute the ground spices until fragrant, add grated coconut and mix well.',
                    'Add salt and sugar, cook until cooked and the spices are absorbed.',
                    'Mix the vegetables with the spiced coconut, stir well.',
                    'Serve jukut urab with warm rice.'
                ]),
            ],
            [
                'makanan_id' => '49',
                'tutorial' => 'https://youtu.be/example49',
                'latarBelang' => 'Tipat Blayag is a traditional Balinese ketupat served with chicken, vegetables, and coconut sambal.',
                'bahanBahan' => json_encode([
                    '5 ketupat',
                    '500 grams of chicken, cut as desired',
                    '200 grams of spinach, cleaned',
                    '200 grams of water spinach, cleaned',
                    '200 grams of long beans, cut into pieces',
                    '200 grams of grated coconut',
                    '10 cloves of shallots',
                    '5 cloves of garlic',
                    '5 red chilies',
                    '2 stalks of lemongrass, bruised',
                    '3 bay leaves',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Boil the chicken until cooked, remove and shred the meat.',
                    'Boil spinach, water spinach, and long beans until cooked.',
                    'Grind the spices: shallots, garlic, red chilies, lemongrass, and bay leaves.',
                    'Saute the ground spices until fragrant, add grated coconut and mix well.',
                    'Add salt and sugar, cook until cooked and the spices are absorbed.',
                    'Serve ketupat with shredded chicken, vegetables, and coconut sambal.'
                ]),
            ],
            [
                'makanan_id' => '50',
                'tutorial' => 'https://youtu.be/example50',
                'latarBelakang' => 'Sei Sapi is a smoked beef dish from Kupang cooked with typical spices.',
                'bahanBahan' => json_encode([
                    '500 grams of beef',
                    '5 cloves of garlic',
                    '5 cloves of shallots',
                    '2 cm ginger',
                    '2 cm turmeric',
                    '3 tablespoons of sweet soy sauce',
                    'salt and pepper to taste',
                    'banana leaves for wrapping'
                ]),
                'langkahLangkah' => json_encode([
                    'Clean the beef and slice thinly.',
                    'Grind garlic, shallots, ginger, and turmeric.',
                    'Marinate the beef with the ground spices, sweet soy sauce, salt, and pepper.',
                    'Wrap the seasoned beef with banana leaves.',
                    'Smoke the beef over low heat until cooked.',
                    'Serve with rice and sambal.'
                ]),
            ],
            [
                'makanan_id' => '51',
                'tutorial' => 'https://youtu.be/example51',
                'latarBelakang' => 'Jagung Bose is a traditional NTT dish made from corn cooked with red beans and coconut milk.',
                'bahanBahan' => json_encode([
                    '500 grams of jagung bose',
                    '200 grams of red beans',
                    '500 ml of coconut milk',
                    '5 cloves of garlic',
                    '5 cloves of shallots',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Boil the jagung bose and red beans until tender.',
                    'Grind the garlic and shallots, then saute until fragrant.',
                    'Add the boiled corn and red beans to the sauteed spices.',
                    'Add coconut milk, salt, and sugar, then cook until the spices are absorbed.',
                    'Serve warm.'
                ]),
            ],
            [
                'makanan_id' => '52',
                'tutorial' => 'https://youtu.be/example52',
                'latarBelang' => 'Kolo is a traditional NTT dish where rice is cooked in bamboo.',
                'bahanBahan' => json_encode([
                    '500 grams of rice',
                    '500 ml of coconut milk',
                    '5 cloves of garlic',
                    '5 cloves of shallots',
                    '2 stalks of lemongrass, bruised',
                    '3 bay leaves',
                    'salt to taste',
                    'bamboo for wrapping'
                ]),
                'langkahLangkah' => json_encode([
                    'Wash the rice until clean.',
                    'Grind the garlic and shallots, then saute until fragrant.',
                    'Add the sauteed spices to the rice, add coconut milk, lemongrass, bay leaves, and salt.',
                    'Cook until half-cooked.',
                    'Put the half-cooked rice into the bamboo.',
                    'Roast the bamboo over a fire until the rice is perfectly cooked.',
                    'Serve warm.'
                ]),
            ],
            [
                'makanan_id' => '53',
                'tutorial' => 'https://youtu.be/example53',
                'latarBelakang' => 'Catemak Corn is a traditional corn soup from NTT cooked with wax gourd, legumes, and papaya leaves.',
                'bahanBahan' => json_encode([
                    '200 grams of shelled corn',
                    '200 grams of wax gourd, diced',
                    '100 grams of long beans, chopped',
                    '100 grams of young papaya leaves, thinly sliced',
                    '5 cloves of garlic',
                    '5 shallots',
                    'sufficient amounts of salt and sugar'
                ]),
                'langkahLangkah' => json_encode([
                    'Boil the shelled corn until half-cooked.',
                    'Crush garlic and shallots, then sauté until fragrant.',
                    'Add the sautéed spices into the corn boil.',
                    'Add wax gourd, long beans, and papaya leaves.',
                    'Cook until all ingredients are cooked and the spices are absorbed.',
                    'Serve warm.'
                ]),
            ],
            [
                'makanan_id' => '54',
                'tutorial' => 'https://youtu.be/example54',
                'latarBelakang' => 'Rumpu Rampe is a traditional vegetable dish from NTT made from young papaya leaves, papaya flowers, and banana hearts.',
                'bahanBahan' => json_encode([
                    '200 grams of young papaya leaves, thinly sliced',
                    '100 grams of papaya flowers',
                    '100 grams of banana heart, thinly sliced',
                    '5 cloves of garlic',
                    '5 shallots',
                    '2 red chili peppers, sliced diagonally',
                    'sufficient amounts of salt and sugar'
                ]),
                'langkahLangkah' => json_encode([
                    'Boil young papaya leaves, papaya flowers, and banana heart until wilted, drain.',
                    'Crush garlic and shallots, then sauté until fragrant.',
                    'Add the papaya leaves, papaya flowers, and banana heart to the sautéed spices.',
                    'Add red chili, salt, and sugar, then stir well.',
                    'Cook until all ingredients are cooked and the spices are absorbed.',
                    'Serve warm.'
                ]),
            ],
            [
                'makanan_id' => '55',
                'tutorial' => 'https://youtu.be/example55',
                'latarBelakang' => 'Lontar Cake is a traditional milk pie from NTT made from milk, eggs, and sugar.',
                'bahanBahan' => json_encode([
                    '200 grams of flour',
                    '100 grams of margarine',
                    '50 grams of sugar',
                    '3 eggs',
                    '200 ml sweetened condensed milk',
                    '1 teaspoon of vanilla'
                ]),
                'langkahLangkah' => json_encode([
                    'Mix flour, margarine, and sugar until it becomes a pie crust dough.',
                    'Shape the pie crust dough into pie molds, bake until half-cooked.',
                    'Whisk eggs, sweetened condensed milk, and vanilla until even.',
                    'Pour the filling into the half-cooked pie crust.',
                    'Bake again until cooked.',
                    'Serve warm or cold.'
                ]),
            ],
            [
                'makanan_id' => '56',
                'tutorial' => 'https://youtu.be/example56',
                'latarBelakang' => 'Jawada is a traditional cake from NTT made from rice flour and brown sugar that is fried.',
                'bahanBahan' => json_encode([
                    '200 grams of rice flour',
                    '100 grams of grated brown sugar',
                    '100 ml water',
                    'oil for frying'
                ]),
                'langkahLangkah' => json_encode([
                    'Dissolve brown sugar in water until it boils and thickens.',
                    'Mix rice flour with brown sugar solution, stir well.',
                    'Form the dough into small balls.',
                    'Fry the dough balls until cooked and golden brown.',
                    'Drain and serve.'
                ]),
            ],
            [
                'makanan_id' => '57',
                'tutorial' => 'https://youtu.be/example57',
                'latarBelakang' => 'Ayam Taliwang is a traditional grilled chicken from Lombok seasoned with spicy spices.',
                'bahanBahan' => json_encode([
                    '1 chicken, cut as desired',
                    '5 cloves of garlic',
                    '5 shallots',
                    '5 red chili peppers',
                    '2 cm ginger',
                    '2 cm turmeric',
                    '3 tablespoons of sweet soy sauce',
                    'sufficient amounts of salt and sugar'
                ]),
                'langkahLangkah' => json_encode([
                    'Crush garlic, shallots, red chili, ginger, and turmeric.',
                    'Coat chicken with ground spices, sweet soy sauce, salt, and sugar.',
                    'Let the chicken sit for 30 minutes to allow the spices to absorb.',
                    'Grill the chicken over charcoal until cooked and browned.',
                    'Serve with rice.'
                ]),
            ],
            [
                'makanan_id' => '58',
                'tutorial' => 'https://youtu.be/example58',
                'latarBelakang' => 'Plecing Kangkung is a water spinach dish served with spicy tomato sambal.',
                'bahanBahan' => json_encode([
                    '500 grams of water spinach, pick the leaves',
                    '5 red chili peppers',
                    '3 birds eye chili peppers',
                    '3 tomatoes, chopped',
                    '5 shallots',
                    '3 cloves of garlic',
                    '2 tablespoons of grilled shrimp paste',
                    'sufficient amounts of salt and sugar'
                ]),
                'langkahLangkah' => json_encode([
                    'Boil water spinach until wilted, drain.',
                    'Grind red chili, birds eye chili, tomato, shallots, garlic, and shrimp paste.',
                    'Sauté the ground spices until fragrant.',
                    'Add salt and sugar, stir well.',
                    'Pour the spicy tomato sambal over the boiled water spinach.',
                    'Serve warm.'
                ]),
            ],
            [
                'makanan_id' => '59',
                'tutorial' => 'https://youtu.be/example59',
                'latarBelakang' => 'Sate Rembiga is a traditional beef satay from Rembiga seasoned with sweet and spicy sauce.',
                'bahanBahan' => json_encode([
                    '500 grams of beef, cut into cubes',
                    '5 cloves of garlic',
                    '5 shallots',
                    '5 red chili peppers',
                    '2 tablespoons of grated palm sugar',
                    '3 tablespoons of sweet soy sauce',
                    '2 tablespoons of tamarind water',
                    'sufficient amounts of salt and pepper'
                ]),
                'langkahLangkah' => json_encode([
                    'Crush garlic, shallots, and red chili.',
                    'Mix ground spices with palm sugar, sweet soy sauce, tamarind water, salt, and pepper.',
                    'Marinate beef with the spices for 1 hour.',
                    'Skewer the beef onto satay sticks.',
                    'Grill the satay until cooked and browned.',
                    'Serve with rice or lontong (rice cake).'
                ]),
            ],
            [
                'makanan_id' => '60',
                'tutorial' => 'https://youtu.be/example60',
                'latarBelakang' => 'Sate Tanjung is a traditional tuna satay from Lombok grilled with a special marinade.',
                'bahanBahan' => json_encode([
                    '500 grams of tuna, cut into cubes',
                    '5 cloves of garlic',
                    '5 shallots',
                    '3 red chili peppers',
                    '2 cm turmeric',
                    '2 cm ginger',
                    '2 tablespoons of lime juice',
                    'sufficient amounts of salt and sugar'
                ]),
                'langkahLangkah' => json_encode([
                    'Crush garlic, shallots, red chili, turmeric, and ginger.',
                    'Mix ground spices with lime juice, salt, and sugar.',
                    'Marinate tuna with the spices for 30 minutes.',
                    'Skewer the tuna onto satay sticks.',
                    'Grill the satay until cooked and browned.',
                    'Serve with rice.'
                ]),
            ],
            [
                'makanan_id' => '61',
                'tutorial' => 'https://youtu.be/example61',
                'latarBelakang' => 'Bebalung is a traditional beef rib soup cooked with special spices from Lombok.',
                'bahanBahan' => json_encode([
                    '500 grams of beef ribs',
                    '5 cloves of garlic',
                    '5 shallots',
                    '2 cm ginger, crushed',
                    '2 cm galangal, crushed',
                    '3 bay leaves',
                    '2 stalks of lemongrass, crushed',
                    'sufficient amounts of salt and pepper'
                ]),
                'langkahLangkah' => json_encode([
                    'Boil beef ribs until tender.',
                    'Crush garlic and shallots, then sauté until fragrant.',
                    'Add the sautéed spices to the boiled beef ribs.',
                    'Add ginger, galangal, bay leaves, lemongrass, salt, and pepper.',
                    'Cook until the spices are absorbed.',
                    'Serve warm.'
                ]),
            ],
            [
                'makanan_id' => '62',
                'tutorial' => 'https://youtu.be/example62',
                'latarBelakang' => 'Ares is a traditional dish of young banana stem cooked with coconut milk and special spices from Lombok.',
                'bahanBahan' => json_encode([
                    '1 young banana stem, thinly sliced',
                    '500 ml coconut milk',
                    '5 cloves of garlic',
                    '5 shallots',
                    '2 cm turmeric',
                    '2 cm galangal, crushed',
                    '2 stalks of lemongrass, crushed',
                    'sufficient amounts of salt and sugar'
                ]),
                'langkahLangkah' => json_encode([
                    'Boil young banana stem until wilted, drain.',
                    'Crush garlic, shallots, and turmeric.',
                    'Sauté the ground spices until fragrant.',
                    'Add banana stem, galangal, and lemongrass.',
                    'Add coconut milk, salt, and sugar.',
                    'Cook until the spices are absorbed and the coconut milk thickens.',
                    'Serve warm.'
                ]),
            ],
            [
                'makanan_id' => '63',
                'tutorial' => 'https://youtu.be/example63',
                'latarBelakang' => 'Nasi Balap Puyung is white rice served with spicy shredded chicken from Lombok.',
                'bahanBahan' => json_encode([
                    '500 grams of chicken, boiled and shredded',
                    '5 cloves of garlic',
                    '5 shallots',
                    '5 red chili peppers',
                    '3 birds eye chili peppers',
                    '2 cm turmeric',
                    '2 cm ginger',
                    '3 tablespoons of sweet soy sauce',
                    'sufficient amounts of salt and sugar'
                ]),
                'langkahLangkah' => json_encode([
                    'Crush garlic, shallots, red chili, birds eye chili, turmeric, and ginger.',
                    'Sauté the ground spices until fragrant.',
                    'Add shredded chicken, stir until the spices are absorbed.',
                    'Add sweet soy sauce, salt, and sugar, stir well.',
                    'Cook until the chicken is cooked and the spices are absorbed.',
                    'Serve with white rice.'
                ]),
            ],
            [
                'makanan_id' => '64',
                'tutorial' => 'https://youtu.be/example64',
                'latarBelakang' => 'Poteng Jaje Tujak is a dish of steamed sticky rice cooked with fermented cassava and grated coconut.',
                'bahanBahan' => json_encode([
                    '500 grams of white sticky rice, soaked overnight',
                    '200 grams of fermented cassava',
                    '100 grams of grated coconut',
                    '3 tablespoons of sugar',
                    '1 teaspoon of salt'
                ]),
                'langkahLangkah' => json_encode([
                    'Steam the sticky rice until cooked.',
                    'Mix fermented cassava with sugar and salt.',
                    'Evenly mix the fermented cassava with the cooked sticky rice.',
                    'Add grated coconut, stir well.',
                    'Serve warm or cold.'
                ]),
            ],
            [
                'makanan_id' => '65',
                'tutorial' => 'https://youtu.be/example65',
                'latarBelakang' => 'Kelaq Batih is a dish of long beans cooked with coconut milk and special spices from Lombok.',
                'bahanBahan' => json_encode([
                    '200 grams of long beans, chopped',
                    '500 ml coconut milk',
                    '5 cloves of garlic',
                    '5 shallots',
                    '2 cm turmeric',
                    '2 cm ginger',
                    '2 cm galangal, crushed',
                    '2 stalks of lemongrass, crushed',
                    'sufficient amounts of salt and sugar'
                ]),
                'langkahLangkah' => json_encode([
                    'Crush garlic, shallots, turmeric, and ginger.',
                    'Sauté the ground spices until fragrant.',
                    'Add long beans, galangal, and lemongrass.',
                    'Add coconut milk, salt, and sugar.',
                    'Cook until the long beans are cooked and the spices are absorbed.',
                    'Serve warm.'
                ]),
            ],
            [
                'makanan_id' => '66',
                'tutorial' => 'https://youtu.be/example66',
                'latarBelakang' => 'Papeda is a sago porridge served with yellow fish soup, a traditional dish from Papua.',
                'bahanBahan' => json_encode([
                    '200 grams of sago',
                    '1 liter of water',
                    '500 grams of tuna',
                    '5 cloves of garlic',
                    '5 shallots',
                    '2 cm turmeric',
                    '2 cm ginger',
                    '3 bay leaves',
                    '2 stalks of lemongrass, crushed',
                    'sufficient amounts of salt and sugar'
                ]),
                'langkahLangkah' => json_encode([
                    'Dissolve sago in water until thickened.',
                    'Boil tuna with garlic, shallots, turmeric, ginger, bay leaves, and lemongrass.',
                    'Add salt and sugar, cook until the fish is cooked and the spices are absorbed.',
                    'Serve papeda with yellow fish soup.'
                ]),
            ],
            [
                'makanan_id' => '67',
                'tutorial' => 'https://youtu.be/example67',
                'latarBelakang' => 'Yellow Fish Soup is a fish dish cooked with turmeric and traditional spices from Papua.',
                'bahanBahan' => json_encode([
                    '500 grams of tuna, cut into pieces',
                    '5 cloves of garlic',
                    '5 shallots',
                    '2 cm turmeric',
                    '2 cm ginger',
                    '3 bay leaves',
                    '2 stalks of lemongrass, crushed',
                    'sufficient amounts of salt and sugar'
                ]),
                'langkahLangkah' => json_encode([
                    'Crush garlic, shallots, turmeric, and ginger.',
                    'Sauté the ground spices until fragrant.',
                    'Add tuna, bay leaves, and lemongrass.',
                    'Add salt and sugar.',
                    'Cook until the fish is cooked and the spices are absorbed.',
                    'Serve warm.'
                ]),
            ],
            [
                'makanan_id' => '68',
                'tutorial' => 'https://youtu.be/example68',
                'latarBelakang' => 'Sate Ulat Sagu is a satay made from sago worms cooked with traditional spices from Papua.',
                'bahanBahan' => json_encode([
                    '200 grams of sago worms',
                    '5 cloves of garlic',
                    '5 shallots',
                    '2 red chili peppers',
                    '2 cm turmeric',
                    '2 cm ginger',
                    '2 tablespoons of lime juice',
                    'sufficient amounts of salt and sugar'
                ]),
                'langkahLangkah' => json_encode([
                    'Crush garlic, shallots, red chili, turmeric, and ginger.',
                    'Mix ground spices with lime juice, salt, and sugar.',
                    'Marinate sago worms with the spices for 30 minutes.',
                    'Skewer the sago worms onto satay sticks.',
                    'Grill the satay until cooked and browned.',
                    'Serve with sambal.'
                ]),
            ],
            [
                'makanan_id' => '69',
                'tutorial' => 'https://youtu.be/example69',
                'latarBelakang' => 'Cheating Prawn is a freshwater prawn dish from Wamena cooked with spice seasoning.',
                'bahanBahan' => json_encode([
                    '500 grams of freshwater prawns',
                    '5 cloves of garlic',
                    '5 shallots',
                    '2 cm turmeric',
                    '2 cm ginger',
                    '3 bay leaves',
                    '2 stalks of lemongrass, crushed',
                    'sufficient amounts of salt and sugar'
                ]),
                'langkahLangkah' => json_encode([
                    'Clean the freshwater prawns.',
                    'Crush garlic, shallots, turmeric, and ginger.',
                    'Sauté the ground spices until fragrant.',
                    'Add prawns, bay leaves, and lemongrass.',
                    'Add salt and sugar.',
                    'Cook until the prawns are cooked and the spices are absorbed.',
                    'Serve warm.'
                ]),
            ],
            [
                'makanan_id' => '70',
                'tutorial' => 'https://youtu.be/example70',
                'latarBelakang' => 'Aunu Senebre is a dish of anchovies cooked with taro leaves and grated coconut.',
                'bahanBahan' => json_encode([
                    '200 grams of anchovies',
                    '100 grams of taro leaves, thinly sliced',
                    '100 grams of grated coconut',
                    '5 cloves of garlic',
                    '5 shallots',
                    '2 cm turmeric',
                    '2 cm ginger',
                    'sufficient amounts of salt and sugar'
                ]),
                'langkahLangkah' => json_encode([
                    'Clean the anchovies.',
                    'Crush garlic, shallots, turmeric, and ginger.',
                    'Sauté the ground spices until fragrant.',
                    'Add taro leaves, grated coconut, and anchovies.',
                    'Add salt and sugar.',
                    'Cook until all ingredients are cooked and the spices are absorbed.',
                    'Serve warm.'
                ]),
            ],
            [
                'makanan_id' => '71',
                'tutorial' => 'https://youtu.be/example71',
                'latarBelakang' => 'Martabak Sagu is a martabak made from sago as the base and filled with grated coconut and brown sugar.',
                'bahanBahan' => json_encode([
                    '200 grams of sago',
                    '100 grams of grated coconut',
                    '50 grams of grated brown sugar',
                    '100 ml water',
                    'oil for frying'
                ]),
                'langkahLangkah' => json_encode([
                    'Mix sago with water until it forms a thick batter.',
                    'Add grated coconut and grated brown sugar, stir well.',
                    'Heat oil, pour martabak batter into the pan.',
                    'Fry until cooked and golden brown.',
                    'Drain and serve.'
                ]),
            ],
            [
                'makanan_id' => '72',
                'tutorial' => 'https://youtu.be/example72',
                'latarBelakang' => 'Sagu Lempeng is a sago bread baked traditionally, usually served with fish or grated coconut.',
                'bahanBahan' => json_encode([
                    '200 grams of sago',
                    '100 grams of grated coconut',
                    '100 ml water',
                    'sufficient amount of salt'
                ]),
                'langkahLangkah' => json_encode([
                    'Mix sago, grated coconut, water, and salt until the batter can be molded.',
                    'Form the batter into flat discs.',
                    'Grill the sago batter on charcoal until cooked.',
                    'Serve with fish or grated coconut.'
                ]),
            ],
            [
                'makanan_id' => '73',
                'tutorial' => 'https://youtu.be/example73',
                'latarBelakang' => 'Grilled Fish Manokwari is a traditional grilled fish from Manokwari served with special sambal.',
                'bahanBahan' => json_encode([
                    '500 grams of fish, cleaned',
                    '5 cloves of garlic',
                    '5 shallots',
                    '2 red chili peppers',
                    '2 cm turmeric',
                    '2 cm ginger',
                    '2 tablespoons of lime juice',
                    'sufficient amounts of salt and sugar'
                ]),
                'langkahLangkah' => json_encode([
                    'Crush garlic, shallots, red chili, turmeric, and ginger.',
                    'Mix ground spices with lime juice, salt, and sugar.',
                    'Coat fish with ground spices.',
                    'Grill the fish over charcoal until cooked and browned.',
                    'Serve with special Manokwari sambal.'
                ]),
            ],
            [
                'makanan_id' => '74',
                'tutorial' => 'https://youtu.be/example74',
                'latarBelakang' => 'Plecing Kangkung Lombok is a water spinach dish served with spicy tomato sambal.',
                'bahanBahan' => json_encode([
                    '500 grams of water spinach, pick the leaves',
                    '5 red chili peppers',
                    '3 birds eye chili peppers',
                    '3 tomatoes chopped',
                    '5 shallots',
                    '3 cloves of garlic',
                    '2 tablespoons of grilled shrimp paste',
                    'sufficient amounts of salt and sugar'
                ]),
                'langkahLangkah' => json_encode([
                    'Boil water spinach until wilted, drain.',
                    'Grind red chili, birds eye chili, tomato, shallots, garlic, and shrimp paste.',
                    'Sauté the ground spices until fragrant.',
                    'Add salt and sugar, stir well.',
                    'Pour the spicy tomato sambal over the boiled water spinach.',
                    'Serve warm.'
                ]),
            ],
            [
                'makanan_id' => '75',
                'tutorial' => 'https://youtu.be/example75',
                'latarBelakang' => 'Sate Bulayak Sumbawa is a traditional beef satay from Sumbawa served with a special peanut sauce.',
                'bahanBahan' => json_encode([
                    '500 grams of beef, cut into cubes',
                    '5 cloves of garlic',
                    '5 shallots',
                    '5 red chili peppers',
                    '3 tablespoons of roasted and ground peanuts',
                    '2 tablespoons of grated palm sugar',
                    '3 tablespoons of sweet soy sauce',
                    '2 tablespoons of tamarind water',
                    'sufficient amounts of salt and pepper'
                ]),
                'langkahLangkah' => json_encode([
                    'Crush garlic, shallots, and red chili.',
                    'Mix ground spices with peanuts, palm sugar, sweet soy sauce, tamarind water, salt, and pepper.',
                    'Marinate beef with the spices for 1 hour.',
                    'Skewer the beef onto satay sticks.',
                    'Grill the satay until cooked and browned.',
                    'Serve with rice or lontong (rice cake).'
                ]),
            ],
            [
                'makanan_id' => '76',
                'tutorial' => 'https://youtu.be/example76',
                'latarBelakang' => 'Kolo is a noodle dish with peanut sauce from Flores served with sliced meat or fish.',
                'bahanBahan' => json_encode([
                    '500 grams of yellow noodles, boiled until cooked',
                    '200 grams of beef or fish, thinly sliced',
                    '5 cloves of garlic',
                    '5 shallots',
                    '3 red chili peppers',
                    '2 tablespoons of roasted and ground peanuts',
                    '2 tablespoons of lime juice',
                    'sufficient amounts of salt and sugar'
                ]),
                'langkahLangkah' => json_encode([
                    'Crush garlic, shallots, and red chili.',
                    'Mix ground spices with peanuts, lime juice, salt, and sugar.',
                    'Sauté the ground spices until fragrant.',
                    'Add beef or fish, stir until cooked.',
                    'Serve the yellow noodles with peanut sauce and sliced meat or fish.'
                ]),
            ],
            [
                'makanan_id' => '77',
                'tutorial' => 'https://youtu.be/example77',
                'latarBelakang' => 'Ikan Woku Maumere is a fish dish with spicy and savory Woku seasoning.',
                'bahanBahan' => json_encode([
                    '500 grams of fish, cleaned and chopped',
                    '5 cloves of garlic',
                    '5 cloves of shallot',
                    '5 red chili peppers',
                    '3 birds eye chili peppers',
                    '2 cm of turmeric',
                    '2 cm of ginger',
                    '3 kaffir lime leaves',
                    '2 stalks of lemongrass, bruised',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Grind garlic, shallot, red chili, birds eye chili, turmeric, and ginger.',
                    'Saute the ground spices until fragrant.',
                    'Add fish, kaffir lime leaves, and lemongrass.',
                    'Add salt and sugar.',
                    'Cook until the fish is done and the spices are absorbed.',
                    'Serve warm.'
                ]),
            ],
            [
                'makanan_id' => '78',
                'tutorial' => 'https://youtu.be/example78',
                'latarBelakang' => 'Ayam Betutu is chicken cooked with a mix of spices and wrapped in banana leaves to be grilled.',
                'bahanBahan' => json_encode([
                    '1 chicken, cleaned and cut as desired',
                    '5 cloves of garlic',
                    '5 cloves of shallot',
                    '5 red chili peppers',
                    '3 birds eye chili peppers',
                    '2 cm of turmeric',
                    '2 cm of ginger',
                    '3 stalks of lemongrass, bruised',
                    'salt and sugar to taste',
                    'banana leaves for wrapping'
                ]),
                'langkahLangkah' => json_encode([
                    'Grind garlic, shallot, red chili, birds eye chili, turmeric, and ginger.',
                    'Saute the ground spices until fragrant.',
                    'Add chicken, lemongrass, salt, and sugar.',
                    'Cook until the chicken changes color and the spices are absorbed.',
                    'Wrap the chicken in banana leaves.',
                    'Grill the chicken in an oven or over a charcoal fire until done.',
                    'Serve warm.'
                ]),
            ],
            [
                'makanan_id' => '79',
                'tutorial' => 'https://youtu.be/example79',
                'latarBelakang' => 'Pelecing Sasak is a dish of water spinach served with spicy tomato sambal and sliced tomatoes.',
                'bahanBahan' => json_encode([
                    '500 grams of water spinach, pick the leaves',
                    '5 red chili peppers',
                    '3 birds eye chili peppers',
                    '3 tomatoes, chopped',
                    '5 cloves of shallot',
                    '3 cloves of garlic',
                    '2 tablespoons of roasted shrimp paste',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Boil the water spinach until wilted, drain.',
                    'Grind red chili, birds eye chili, tomatoes, shallot, garlic, and shrimp paste.',
                    'Saute the ground spices until fragrant.',
                    'Add salt and sugar, mix well.',
                    'Pour the spicy tomato sambal over the boiled water spinach.',
                    'Serve warm.'
                ]),
            ],
            [
                'makanan_id' => '80',
                'tutorial' => 'https://youtu.be/example80',
                'latarBelakang' => 'Bebek Betutu is duck cooked with a mix of spices and wrapped in banana leaves to be grilled.',
                'bahanBahan' => json_encode([
                    '1 duck, cleaned and cut as desired',
                    '5 cloves of garlic',
                    '5 cloves of shallot',
                    '5 red chili peppers',
                    '3 birds eye chili peppers',
                    '2 cm of turmeric',
                    '2 cm of ginger',
                    '3 stalks of lemongrass, bruised',
                    'salt and sugar to taste',
                    'banana leaves for wrapping'
                ]),
                'langkahLangkah' => json_encode([
                    'Grind garlic, shallot, red chili, birds eye chili, turmeric, and ginger.',
                    'Saute the ground spices until fragrant.',
                    'Add duck, lemongrass, salt, and sugar.',
                    'Cook until the duck changes color and the spices are absorbed.',
                    'Wrap the duck in banana leaves.',
                    'Grill the duck in an oven or over a charcoal fire until done.',
                    'Serve warm.'
                ]),
            ],
            [
                'makanan_id' => '81',
                'tutorial' => 'https://youtu.be/example81',
                'latarBelakang' => 'Ikan Belanga Bajawa is a fish dish cooked with a mix of spices and grilled in a Belanga (clay pot).',
                'bahanBahan' => json_encode([
                    '500 grams of fish, cleaned and chopped',
                    '5 cloves of garlic',
                    '5 cloves of shallot',
                    '5 red chili peppers',
                    '3 birds eye chili peppers',
                    '2 cm of turmeric',
                    '2 cm of ginger',
                    '3 kaffir lime leaves',
                    '2 stalks of lemongrass, bruised',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Grind garlic, shallot, red chili, birds eye chili, turmeric, and ginger.',
                    'Saute the ground spices until fragrant.',
                    'Add fish, kaffir lime leaves, and lemongrass.',
                    'Add salt and sugar.',
                    'Cook until the fish is done and the spices are absorbed.',
                    'Transfer the fish and spices into a Belanga (clay pot).',
                    'Grill the Belanga over a charcoal fire until the fish is perfectly cooked.',
                    'Serve warm.'
                ]),
            ],
            [
                'makanan_id' => '82',
                'tutorial' => 'https://youtu.be/example82',
                'latarBelakang' => 'Sup Kacang Merah Maumere is a red bean soup cooked with a mix of spices and served with rice.',
                'bahanBahan' => json_encode([
                    '200 grams of red beans, soaked overnight',
                    '5 cloves of garlic',
                    '5 cloves of shallot',
                    '2 tomatoes, chopped',
                    '2 cm of ginger, bruised',
                    '2 cm of galangal, bruised',
                    '3 bay leaves',
                    '2 stalks of lemongrass, bruised',
                    'salt and sugar to taste'
                ]),
                'langkahLangkah' => json_encode([
                    'Boil the red beans until soft.',
                    'Grind garlic and shallot, then saute until fragrant.',
                    'Add tomatoes, ginger, galangal, bay leaves, and lemongrass to the sauteed spices.',
                    'Add the boiled red beans, salt, and sugar.',
                    'Cook until the spices are absorbed.',
                    'Serve warm with rice.'
                ]),
            ],
        ]);
    }
}
?>