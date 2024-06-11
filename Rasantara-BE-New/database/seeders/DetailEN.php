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
            ],
        ]);
    }
}
?>