<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\Food;

class FoodSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $restaurants = [
      [
        'name' => 'Sakura',
        'foods' => [
          [
            'name' => 'Sushi misto',
            'price' => 12.00,
            'ingredients' => 'Una selezione di nigiri e maki',
            'description' => 'Un\'ottima scelta per gli amanti del sushi',
            'image' => 'sushi-misto.jpg',
          ],
          [
            'name' => 'Tempura di verdure miste',
            'price' => 8.50,
            'ingredients' => 'Verdure, pastella leggera',
            'description' => 'Un delizioso antipasto croccante',
            'image' => 'tempura-verdure.jpg',
          ],
          [
            'name' => 'Tonkatsu (maiale impanato)',
            'price' => 10.50,
            'ingredients' => 'Maiale, pangrattato, salsa tonkatsu, cavolo',
            'description' => 'Un gustoso piatto di maiale impanato servito con salsa tonkatsu e cavolo fresco',
            'image' => 'tonkatsu.jpg',
          ],
          [
            'name' => 'Udon con tempura di gamberi',
            'price' => 10.50,
            'ingredients' => 'Udon, gamberi, tempura, verdure',
            'description' => 'Una deliziosa zuppa di udon con croccante tempura di gamberi',
            'image' => 'udon-tempura-gamberi.jpg',
          ],
          [
            'name' => 'Sashimi di salmone fresco',
            'price' => 14.00,
            'ingredients' => 'Salmone fresco',
            'description' => 'Un piatto di sashimi con fette di salmone fresco di alta qualità',
            'image' => 'sashimi-salmone.jpg',
          ],
          [
            'name' => 'Yakitori',
            'price' => 8.50,
            'ingredients' => 'Pollo, salsa teriyaki',
            'description' => 'Deliziosi spiedini di pollo alla griglia con salsa teriyaki',
            'image' => '/images/sakura/yakitori.jpg',
          ],
          [
            'name' => 'Gyoza',
            'price' => 6.50,
            'ingredients' => 'Carne di maiale, verdure, salsa di soia',
            'description' => 'Deliziosi ravioli giapponesi al vapore o fritti, ripieni di carne di maiale e verdure',
            'image' => 'gyoza.jpg',
          ],
          [
            'name' => 'Miso ramen',
            'price' => 10.50,
            'ingredients' => 'Noodles, brodo di miso, uova, carne di maiale, alghe',
            'description' => 'Una gustosa zuppa di noodles al miso arricchita con uova, carne di maiale e alghe',
            'image' => 'miso-ramen.jpg',
          ],
        ],
      ],
      [
        'name' => 'Panda Express',
        'foods' => [
          [
            'name' => 'Pollo all\'arancia',
            'price' => 9.50,
            'ingredients' => 'Pollo, salsa all\'arancia, verdure',
            'description' => 'Un piatto classico di pollo con salsa all\'arancia',
            'image' => '/images/panda-express/pollo-arancia.jpg',
          ],
          [
            'name' => 'Manzo in salsa agrodolce',
            'price' => 10.50,
            'ingredients' => 'Manzo, salsa agrodolce, verdure',
            'description' => 'Una deliziosa combinazione di manzo tenero e salsa agrodolce',
            'image' => '/images/panda-express/manzo-salsa-agrodolce.jpg',
          ],
          [
            'name' => 'Gamberi Kung Pao',
            'price' => 11.00,
            'ingredients' => 'Gamberi, peperoncino, arachidi, verdure',
            'description' => 'Gamberi saltati con peperoncino e arachidi croccanti',
            'image' => '/images/panda-express/gamberi-kung-pao.jpg',
          ],
          [
            'name' => 'Chow Mein',
            'price' => 8.50,
            'ingredients' => 'Noodles, verdure, carne o pollo',
            'description' => 'Noodles saltati in padella con verdure e carne o pollo',
            'image' => '/images/panda-express/chow-mein.jpg',
          ],
          [
            'name' => 'Pollo al limone',
            'price' => 9.00,
            'ingredients' => 'Pollo, limone, salsa di soia, verdure',
            'description' => 'Gustoso pollo cotto al limone con verdure',
            'image' => '/images/panda-express/pollo-limone.jpg',
          ],
          [
            'name' => 'Maiale al peperoncino',
            'price' => 9.50,
            'ingredients' => 'Maiale, peperoncino, salsa agrodolce, verdure',
            'description' => 'Maiale cotto con peperoncino piccante e salsa agrodolce',
            'image' => '/images/panda-express/maiale-peperoncino.jpg',
          ],
          [
            'name' => 'Riso fritto Yangzhou',
            'price' => 7.50,
            'ingredients' => 'Riso, uova, gamberetti, piselli, carote',
            'description' => 'Un delizioso piatto di riso fritto con uova, gamberetti, piselli e carote',
            'image' => '/images/panda-express/riso-fritto-yangzhou.jpg',
          ],
          [
            'name' => 'Involtini primavera',
            'price' => 5.50,
            'ingredients' => 'Verdure miste, carne di maiale o gamberi, salsa agrodolce',
            'description' => 'Deliziosi involtini primavera croccanti ripieni di verdure e carne',
            'image' => '/images/panda-express/involtini-primavera.jpg',
          ]
        ],
      ],
      [
        'name' => 'East Meets West',
        'foods' => [
          [
            'name' => 'Salmone alla griglia con salsa teriyaki',
            'price' => 18.00,
            'ingredients' => 'Salmone fresco, salsa teriyaki, contorno di riso pilaf',
            'description' => 'Un succulento salmone alla griglia con una delicata salsa teriyaki. Servito con un contorno di riso pilaf.',
            'image' => '',
          ],
          [
            'name' => 'Insalata di avocado e edamame',
            'price' => 10.00,
            'ingredients' => 'Avocado, edamame, mix di verdure, dressing leggero',
            'description' => 'Un\'insalata fresca e colorata con avocado, edamame e un mix di verdure croccanti. Condita con un dressing leggero.',
            'image' => '/images/east-meets-west/insalata-di-avocado-edamame.jpg',
          ],
          [
            'name' => 'Pollo al curry verde',
            'price' => 16.00,
            'ingredients' => 'Pollo, curry verde, latte di cocco, peperoncini, verdure miste',
            'description' => 'Un gustoso piatto di pollo al curry verde con una base di latte di cocco e una leggera nota di peperoncino. Servito con verdure miste e riso basmati.',
            'image' => '/images/east-meets-west/pollo-al-curry-verde.jpg',
          ],
          [
            'name' => 'Sushi bowl con pesce fresco misto',
            'price' => 15.50,
            'ingredients' => 'Riso, pesce fresco assortito, verdure, condimenti',
            'description' => 'Un delizioso bowl di riso con una varietà di pesce fresco, verdure croccanti e condimenti gustosi.',
            'image' => '/images/east-meets-west/sushi-bowl-pesce-misto.jpg',
          ],
          [
            'name' => 'Bistecca di maiale alla griglia con salsa barbecue coreana',
            'price' => 13.00,
            'ingredients' => 'Bistecca di maiale, salsa barbecue coreana, contorno di verdure',
            'description' => 'Una succulenta bistecca di maiale alla griglia con una deliziosa salsa barbecue coreana. Servita con un contorno di verdure.',
            'image' => '/images/east-meets-west/bistecca-maiale-barbecue-coreana.jpg',
          ],
          [
            'name' => 'Gnocchi di patate con salsa ai quattro formaggi',
            'price' => 12.50,
            'ingredients' => 'Gnocchi di patate freschi, salsa ai quattro formaggi',
            'description' => 'Gnocchi di patate fatti in casa serviti con una cremosa salsa ai quattro formaggi.',
            'image' => '/images/east-meets-west/gnocchi-patate-salsa-quattro-formaggi.jpg',
          ],
          [
            'name' => 'Zuppa di miso con tofu e alghe',
            'price' => 8.50,
            'ingredients' => 'Brodo di miso, tofu, alghe, cipollotto',
            'description' => 'Una calda zuppa di miso con cubetti di tofu, alghe aromatiche e cipollotto fresco.',
            'image' => '/images/east-meets-west/zuppa-miso-tofu-alghe.jpg',
          ],
        ]
      ],
      [
        'name' => 'El Sombrero',
        'foods' => [
          [
            'name' => 'Enchiladas al formaggio',
            'price' => 10.00,
            'ingredients' => 'Tortilla di mais, formaggio, salsa di pomodoro, cipolla, peperoncino',
            'description' => 'Deliziose tortillas ripiene di formaggio e condite con salsa di pomodoro, cipolla e peperoncino.',
            'image' => '/images/enchiladas-al-formaggio.jpg',
          ],

          [
            'name' => 'Tacos al pastor con guacamole',
            'price' => 12.50,
            'ingredients' => 'Tortilla di mais, carne di maiale marinata, ananas, cipolla, coriandolo, guacamole',
            'description' => 'Gustosi tacos con carne di maiale marinata, ananas, cipolla, coriandolo e guacamole fresco.',
            'image' => '/images/tacos-al-pastor-guacamole.jpg',
          ],

          [
            'name' => 'Fajitas di pollo con tortillas fatte in casa',
            'price' => 15.00,
            'ingredients' => 'Strisce di pollo marinato, peperoni, cipolla, salsa di soia, tortillas fatte in casa',
            'description' => 'Saporite fajitas con strisce di pollo marinato, peperoni, cipolla e salsa di soia. Servite con tortillas fatte in casa.',
            'image' => '/images/fajitas-pollo-tortillas-fatte-in-casa.jpg',
          ],
          [
            'name' => 'Quesadillas di mais con pollo e formaggio',
            'price' => 9.50,
            'ingredients' => 'Tortilla di mais, pollo, formaggio, cipolla, peperoncino',
            'description' => 'Deliziose quesadillas di mais farcite con pollo, formaggio, cipolla e peperoncino.',
            'image' => '/images/quesadillas-mais-pollo-formaggio.jpg',
          ],

          [
            'name' => 'Guacamole fresco con totopos',
            'price' => 7.00,
            'ingredients' => 'Avocado, pomodoro, cipolla, lime, coriandolo, totopos',
            'description' => 'Un guacamole fresco e cremoso preparato con avocado, pomodoro, cipolla, lime e coriandolo. Servito con totopos croccanti.',
            'image' => '/images/guacamole-fresco-totopos.jpg',
          ],

          [
            'name' => 'Chili con carne',
            'price' => 11.00,
            'ingredients' => 'Carne macinata, fagioli, pomodori, cipolla, peperoncino, spezie',
            'description' => 'Un classico chili con carne preparato con carne macinata, fagioli, pomodori, cipolla, peperoncino e spezie aromatiche.',
            'image' => '/images/chili-con-carne.jpg',
          ],
          [
            'name' => 'Burrito di manzo con fagioli e riso',
            'price' => 10.50,
            'ingredients' => 'Tortilla di grano, manzo, fagioli, riso, formaggio, pico de gallo',
            'description' => 'Un burrito abbondante e gustoso con manzo tenero, fagioli, riso, formaggio e pico de gallo.',
            'image' => '/images/burrito-manzo-fagioli-riso.jpg',
          ],

          [
            'name' => 'Salsa di formaggio fondente con nachos',
            'price' => 6.50,
            'ingredients' => 'Formaggio cheddar, formaggio Jack, peperoncino jalapeno, nachos',
            'description' => 'Una salsa cremosa e irresistibile preparata con formaggio cheddar, formaggio Jack e peperoncino jalapeno. Da gustare con nachos croccanti.',
            'image' => '/images/salsa-formaggio-fondente-nachos.jpg',
          ],
        ]
      ],
      [
        'name' => 'Thai Orchid',
        'foods' => [
          [
            'name' => 'Pad Thai con gamberi',
            'price' => 12.00,
            'ingredients' => 'Tagliatelle di riso, gamberi, uova, germogli di soia, arachidi, salsa di pesce',
            'description' => 'Un delizioso piatto di Pad Thai con gamberi, tagliatelle di riso, uova, germogli di soia, arachidi e salsa di pesce.',
            'image' => '/images/pad-thai-gamberi.jpg',
          ],

          [
            'name' => 'Pollo al curry rosso',
            'price' => 11.50,
            'ingredients' => 'Pollo, curry rosso, latte di cocco, peperoni, bambù, basilico',
            'description' => 'Un gustoso pollo al curry rosso preparato con pollo, curry rosso, latte di cocco, peperoni, bambù e basilico.',
            'image' => '/images/pollo-curry-rosso.jpg',
          ],

          [
            'name' => 'Tom Yum Soup (zuppa piccante con gamberi e funghi)',
            'price' => 9.50,
            'ingredients' => 'Brodo di gamberi, gamberi, funghi, citronella, lime, peperoncino',
            'description' => 'Una zuppa piccante e aromaticamente deliziosa preparata con brodo di gamberi, gamberi, funghi, citronella, lime e peperoncino.',
            'image' => '/images/tom-yum-soup.jpg',
          ],
          [
            'name' => 'Insalata di papaya verde',
            'price' => 8.00,
            'ingredients' => 'Papaya verde, pomodori ciliegia, fagioli verdi, arachidi, salsa di pesce, lime',
            'description' => 'Un\'insalata fresca e croccante preparata con papaya verde, pomodori ciliegia, fagioli verdi, arachidi, salsa di pesce e lime.',
            'image' => '/images/insalata-papaya-verde.jpg',
          ],
          [
            'name' => 'Satay di pollo con salsa di arachidi',
            'price' => 10.00,
            'ingredients' => 'Pollo, salsa di arachidi, spezie, salsa di soia, aglio',
            'description' => 'Spiedini di pollo marinati e grigliati, serviti con una deliziosa salsa di arachidi. Un piatto ricco di sapore e aromi.',
            'image' => '/images/satay-pollo.jpg',
          ],
          [
            'name' => 'Riso fritto alla thailandese con ananas',
            'price' => 9.00,
            'ingredients' => 'Riso, ananas, verdure miste, uova, salsa di soia, spezie',
            'description' => 'Un piatto classico della cucina thailandese con riso saltato in padella insieme ad ananas succoso, verdure miste e uova. Un equilibrio perfetto di sapori dolci e salati.',
            'image' => '/images/riso-fritto-ananas.jpg',
          ],
          [
            'name' => 'Gamberi in salsa di tamarindo',
            'price' => 12.00,
            'ingredients' => 'Gamberi, salsa di tamarindo, aglio, zenzero, peperoncino, verdure',
            'description' => 'Gamberi succulenti cotti in una salsa agrodolce al tamarindo con note di aglio, zenzero e peperoncino. Un piatto dal sapore unico.',
            'image' => '/images/gamberi-salsa-tamarindo.jpg',
          ],
          [
            'name' => 'Mango sticky rice (riso dolce al mango)',
            'price' => 7.00,
            'ingredients' => 'Riso glutinoso, mango maturo, latte di cocco, zucchero di palma',
            'description' => 'Un dessert tradizionale thailandese composto da riso glutinoso dolce e appiccicoso servito con fette di mango maturo. Un delizioso modo per concludere un pasto.',
            'image' => '/images/mango-sticky-rice.jpg',
          ],
        ]
      ],
      [
        'name' => 'Bollywood Bites',
        'foods' => [
          [
            'name' => 'Butter chicken',
            'price' => 14.00,
            'ingredients' => 'Pollo, salsa di pomodoro, burro, panna, spezie indiane',
            'description' => 'Un piatto classico della cucina indiana composto da pezzi di pollo tenero cotti in una salsa di pomodoro cremosa e burrosa. Servito con pane naan o riso basmati.',
            'image' => '/images/butter-chicken.jpg',
          ],
          [
            'name' => 'Biryani di pollo',
            'price' => 15.00,
            'ingredients' => 'Pollo, riso basmati, spezie, cipolla, yogurt, mandorle',
            'description' => 'Un piatto di riso aromatico e speziato preparato con pollo succulento, spezie fragranti, cipolla caramellizzata e mandorle croccanti. Un classico della cucina indiana.',
            'image' => '/images/biryani-pollo.jpg',
          ],
          [
            'name' => 'Samosa',
            'price' => 8.00,
            'ingredients' => 'Patate, piselli, spezie indiane, pasta sfoglia',
            'description' => 'Deliziosi fagottini fritti ripieni di patate speziate e piselli. Un antipasto croccante e saporito tipico della cucina indiana.',
            'image' => '/images/samosa.jpg',
          ],
          [
            'name' => 'Paneer tikka masala',
            'price' => 12.00,
            'ingredients' => 'Paneer (formaggio indiano), salsa di pomodoro, panna, spezie indiane',
            'description' => "Un piatto vegetariano della cucina indiana che presenta cubetti di paneer marinati e grigliati in una salsa di pomodoro cremosa e speziata. Un'esplosione di sapori.",
            'image' => '/images/paneer-tikka-masala.jpg',
          ],
          [
            'name' => 'Chana masala',
            'price' => 10.00,
            'ingredients' => 'Ceci, salsa di pomodoro, spezie indiane',
            'description' => 'Un delizioso piatto vegetariano della cucina indiana che presenta ceci cotti in una salsa di pomodoro ricca di spezie. Saporito e nutriente.',
            'image' => '/images/chana-masala.jpg',
          ],
          [
            'name' => 'Naan all\'aglio',
            'price' => 4.00,
            'ingredients' => 'Farina, lievito, aglio, burro',
            'description' => 'Un pane indiano tradizionale cotto al forno tandoor e spennellato con burro e aglio. Morbido, profumato e perfetto da accompagnare con i piatti indiani.',
            'image' => '/images/garlic-naan.jpg',
          ],
          [
            'name' => 'Aloo gobi',
            'price' => 11.00,
            'ingredients' => 'Patate, cavolfiore, spezie indiane',
            'description' => 'Un piatto vegetariano classico della cucina indiana che unisce patate e cavolfiore in una deliziosa salsa di spezie. Gustoso e appagante.',
            'image' => '/images/aloo-gobi.jpg',
          ],
          [
            'name' => 'Gulab jamun',
            'price' => 6.00,
            'ingredients' => 'Latte in polvere, burro ghee, zucchero, acqua di rose',
            'description' => 'Un dolce indiano amato composto da palline di latte in polvere fritte e immerse in uno sciroppo di zucchero profumato all\'acqua di rose. Dolce e delizioso.',
            'image' => '/images/gulab-jamun.jpg',
          ],
        ]
      ],
      [
        'name' => 'The Lounge Oasis',
        'foods' => [
          [
            'name' => 'Antipasto misto',
            'price' => 15.00,
            'ingredients' => 'Formaggi assortiti, affettati misti, olive, grissini',
            'description' => 'Una selezione di formaggi pregiati e affettati assortiti, accompagnati da olive e grissini. Ideale per condividere e iniziare il pasto con gusto.',
            'image' => '/images/antipasto-misto.jpg',
          ],
          [
            'name' => 'Bruschette',
            'price' => 8.00,
            'ingredients' => 'Pane tostato, pomodori freschi, basilico, aglio',
            'description' => 'Deliziose bruschette preparate con pane tostato croccante, pomodori freschi, basilico e uno spicchio d\'aglio. Un antipasto classico e saporito.',
            'image' => '/images/bruschette-pomodori-basilico.jpg',
          ],
          [
            'name' => 'Insalata di quinoa con avocado e pomodorini',
            'price' => 12.00,
            'ingredients' => 'Quinoa, avocado, pomodorini, cetrioli, limone',
            'description' => "Un'insalata fresca e gustosa preparata con quinoa, avocado maturo, pomodorini succosi, cetrioli freschi e condita con succo di limone. Un'opzione leggera e salutare per gli amanti della quinoa.",
            'image' => '/images/insalata-quinoa-avocado.jpg',
          ],
          [
            'name' => 'Tagliere di formaggi con miele e noci',
            'price' => 16.00,
            'ingredients' => 'Formaggi assortiti, miele, noci',
            'description' => "Una selezione di formaggi pregiati accompagnati da miele dolce e noci croccanti. Un'esplosione di sapori per gli amanti dei formaggi.",
            'image' => '/images/tagliere-formaggi-miele-noci.jpg',
          ],
          [
            'name' => 'Polpettine di carne al sugo',
            'price' => 10.00,
            'ingredients' => 'Carne macinata, pangrattato, uova, salsa di pomodoro',
            'description' => 'Deliziose polpettine di carne fatte in casa, cotte al sugo di pomodoro. Un classico piatto italiano che conquista sempre.',
            'image' => '/images/polpettine-carne-sugo.jpg',
          ],
          [
            'name' => 'Mini burger con salsa barbecue',
            'price' => 14.00,
            'ingredients' => 'Carne macinata, pane per hamburger, formaggio, lattuga, pomodoro, salsa barbecue',
            'description' => 'Gustosi mini burger preparati con carne di alta qualità, serviti su morbidi panini per hamburger e conditi con formaggio, lattuga, pomodoro e una deliziosa salsa barbecue.',
            'image' => '/images/mini-burger-salsa-barbecue.jpg',
          ],
          [
            'name' => 'Insalata di mare con gamberetti',
            'price' => 16.00,
            'ingredients' => 'Gamberetti, insalata mista, pomodorini, cetrioli, olive, limone',
            'description' => 'Un\'insalata fresca e leggera con gamberetti succosi, insalata mista croccante, pomodorini dolci, cetrioli freschi, olive e un dressing al limone. Perfetta per gli amanti del mare.',
            'image' => '/images/insalata-mare-gamberetti.jpg',
          ],
        ]
      ],
      [
        'name' => 'Trattoria del nonno',
        'foods' => [
          [
            'name' => 'Agnolotti burro e salvia',
            'price' => 14.00,
            'ingredients' => 'Agnolotti ripieni di carne o formaggio, burro, salvia',
            'description' => 'Deliziosi agnolotti freschi ripieni di carne o formaggio, serviti con una delicata salsa di burro e salvia. Un piatto classico e gustoso.',
            'image' => '/images/agnolotti-burro-salvia.jpg',
          ],
          [
            'name' => 'Baccalà con patate e olive nere',
            'price' => 18.00,
            'ingredients' => 'Baccalà, patate, olive nere, aglio, prezzemolo',
            'description' => 'Un piatto tradizionale a base di baccalà, patate e olive nere, condito con aglio e prezzemolo. Una combinazione di sapori mediterranei che delizierà il palato.',
            'image' => '/images/baccala-patate-olive.jpg',
          ],
          [
            'name' => 'Spaghetti alla carbonara',
            'price' => 12.00,
            'ingredients' => 'Spaghetti, guanciale, uova, pecorino romano, pepe nero',
            'description' => 'Un classico della cucina italiana, gli spaghetti alla carbonara sono preparati con guanciale croccante, uova, pecorino romano e pepe nero. Una pasta cremosa e saporita.',
            'image' => '/images/spaghetti-carbonara.jpg',
          ],
          [
            'name' => 'Fiorentina',
            'price' => 25.00,
            'ingredients' => 'Bistecca di manzo alla fiorentina, sale marino',
            'description' => 'La Fiorentina è una succulenta bistecca di manzo alla griglia, cotta al punto giusto e servita con un pizzico di sale marino. Un piatto prelibato per gli amanti della carne.',
            'image' => '/images/fiorentina.jpg',
          ],
          [
            'name' => 'Frittura di Pesce',
            'price' => 16.00,
            'ingredients' => 'Calamari, gamberi, cozze, seppie, farina, olio di oliva',
            'description' => 'Una gustosa frittura mista di pesce che include calamari, gamberi, cozze e seppie. Il tutto viene fritto in una leggera pastella di farina e servito con una salsa di accompagnamento.',
            'image' => '/images/frittura-pesce.jpg',
          ],
          [
            'name' => 'Tiramisù',
            'price' => 6.00,
            'ingredients' => 'Savoiardi, mascarpone, uova, caffè, cacao',
            'description' => 'Il tiramisù è un dolce al cucchiaio preparato con savoiardi, mascarpone, uova, caffè e cacao. Un dessert classico e irresistibile.',
            'image' => '/images/tiramisu.jpg',
          ],
          [
            'name' => 'Pizza Margherita',
            'price' => 10.00,
            'ingredients' => 'Pizza dough, tomato sauce, mozzarella cheese, basil leaves',
            'description' => 'A classic Italian pizza topped with tomato sauce, mozzarella cheese, and fresh basil leaves. A simple yet delicious choice for pizza lovers.',
            'image' => '/images/pizza-margherita.jpg',
          ],
        ]
      ]
    ];

    foreach ($restaurants as $restaurantData) {
      $restaurant = Restaurant::create(['name' => $restaurantData['name']]);
      $foods = $restaurantData['foods'];
      foreach ($foods as $foodData) {
        Food::create([
          'restaurant_id' => $restaurant->id,
          'name' => $foodData['name'],
          'price' => $foodData['price'],
          'ingredients' => $foodData['ingredients'],
          'description' => $foodData['description'],
          'image' => $foodData['image'],
        ]);
      }
    }
  }
}
