 <?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     DB::table('books')->insert([
          'id' => '1',
          'titulo' => 'orgullo y prejuicio',
          'autor' => 'jane austen',
          'price' => '500',
          'stock' => '200',
          'category_id' => '3',
          'avatar'=>'/imagenes/novelas/orgullo.jpg',
     ]);
     DB::table('books')->insert([
         'id' => '2',
         'titulo' => 'el grito de la tierra',
         'autor' => 'sarah lark',
         'price' => '500',
         'stock' => '390',
         'category_id' => '3',
         'avatar'=>'/imagenes/novelas/grito.jpg',
    ]);
    DB::table('books')->insert([
        'id' => '3',
        'titulo' => 'yo antes de ti',
        'autor' => 'jojo moyes',
        'price' => '480',
        'stock' => '100',
        'category_id' => '3',
        'avatar'=>'/imagenes/novelas/jojo.jpg',
   ]);
   DB::table('books')->insert([
       'id' => '4',
       'titulo' => 'el amante japones',
       'autor' => 'isabel allende',
       'price' => '290',
       'stock' => '100',
       'category_id' => '3',
       'avatar'=>'/imagenes/novelas/amante.jpg',
  ]);
    DB::table('books')->insert([
      'id' => '5',
      'titulo' => 'la casa torcida',
      'autor' => 'agatha christie',
      'price' => '600',
      'stock' => '69',
      'category_id' => '4',
      'avatar'=>'/imagenes/policiales/casa.jpg',
 ]);
    DB::table('books')->insert([
     'id' => '6',
     'titulo' => 'cuentos policiales',
     'autor' => 'borges y casares',
     'price' => '430',
     'stock' => '80',
     'category_id' => '4',
     'avatar'=>'/imagenes/policiales/cuentos.jpg',
]);
    DB::table('books')->insert([
    'id' => '7',
    'titulo' => 'asesinato en el orient express',
    'autor' => 'agatha christie',
    'price' => '500',
    'stock' => '90',
    'category_id' => '4',
    'avatar'=>'/imagenes/policiales/orient.jpg',
]);
    DB::table('books')->insert([
    'id' => '8',
    'titulo' => 'telon',
    'autor' => 'agatha christie',
    'price' => '480',
    'stock' => '200',
    'category_id' => '4',
    'avatar'=>'/imagenes/policiales/telon.jpg',
]);
    DB::table('books')->insert([
    'id' => '9',
    'titulo' => 'el principito',
    'autor' => 'antoine de saint exupery',
    'price' => '800',
    'stock' => '20',
    'category_id' => '5',
    'avatar'=>'/imagenes/infantiles/principito.jpg',
]);
    DB::table('books')->insert([
    'id' => '10',
    'titulo' => 'peter pan',
    'autor' => 'j.m barrie',
    'price' => '400',
    'stock' => '50',
    'category_id' => '5',
    'avatar'=>'/imagenes/infantiles/peter.jpg',
]);
      DB::table('books')->insert([
            'id' => '11',
            'titulo' => 'narnia',
            'autor' => 'c.s lewis',
            'price' => '400',
            'stock' => '50',
            'category_id' => '5',
            'avatar'=>'/imagenes/infantiles/narnia.jpg',
]);

DB::table('books')->insert([
      'id' => '12',
      'titulo' => 'mago de oz',
      'autor' => 'frank baum',
      'price' => '580',
      'stock' => '70',
      'category_id' => '5',
      'avatar'=>'/imagenes/infantiles/oz.jpg',
]);
DB::table('music')->insert([
    'id' => '1',
    'titulo' => 'abbey road',
    'autor' => 'the beatles',
    'stock' => '200',
    'price' => '630',
    'category_id' => '1',
    'avatar'=>'/imagenes/images/Abeyroad.jpg',
]);
DB::table('music')->insert([
   'id' => '2',
   'titulo' => 'ace of spades',
   'autor' => 'motorhead',
   'stock' => '100',
   'price' => '139',
   'category_id' => '1',
   'avatar'=>'/imagenes/images/Aceofspades.jpg',
]);
DB::table('music')->insert([
  'id' => '3',
  'titulo' => 'es',
  'autor' => 'eruca sativa',
  'stock' => '200',
  'price' => '100',
  'category_id' => '1',
  'avatar'=>'/imagenes/images/eurucasativaes.jpg',
]);
DB::table('music')->insert([
 'id' => '4',
 'titulo' => 'live era 87 93',
 'autor' => 'guns roses',
 'stock' => '200',
 'price' => '280',
 'category_id' => '1',
 'avatar'=>'/imagenes/images/gunsitos.jpg',
]);
DB::table('music')->insert([
'id' => '5',
'titulo' => 'warning',
'autor' => 'green day',
'stock' => '100',
'price' => '120',
'category_id' => '1',
'avatar'=>'/imagenes/images/GreenBand.jpg',
]);
DB::table('music')->insert([
'id' => '6',
'titulo' => 'sonic temple',
'autor' => 'the cult',
'stock' => '150',
'price' => '150',
'category_id' => '1',
'avatar'=>'/imagenes/images/TheCult.jpg',
]);
DB::table('music')->insert([
'id' => '7',
'titulo' => 'nevermind',
'autor' => 'nirvana',
'stock' => '200',
'price' => '100',
'category_id' => '1',
'avatar'=>'/imagenes/images/Nirvana0.jpg',
]);
DB::table('music')->insert([
'id' => '8',
'titulo' => 'tercer arco',
'autor' => 'los piojos',
'stock' => '100',
'price' => '230',
'category_id' => '1',
'avatar'=>'/imagenes/images/piojos.jpg',
]);
DB::table('music')->insert([
'id' => '9',
'titulo' => 'believe',
'autor' => 'justin biever',
'stock' => '500',
'price' => '300',
'category_id' => '2',
'avatar'=>'/imagenes/images/Justin_.jpg',
]);
DB::table('music')->insert([
'id' => '10',
'titulo' => 'born this way',
'autor' => 'justin biever',
'stock' => '200',
'price' => '139',
'category_id' => '2',
'avatar'=>'/imagenes/images/lady_gaga_born-this-way.jpg',
]);
DB::table('music')->insert([
      'id' => '11',
      'titulo' => 'celebration',
      'autor' => 'madonna',
      'stock' => '200',
      'price' => '100',
      'category_id' => '2',
      'avatar'=>'/imagenes/images/madon.jpg',
]);

DB::table('music')->insert([
'id' => '12',
'titulo' => 'earth to mars',
'autor' => 'bruno mars',
'stock' => '200',
'price' => '219',
'category_id' => '2',
'avatar'=>'/imagenes/images/Mars.jpg',
]);
DB::table('music')->insert([
'id' => '13',
'titulo' => 'sing when you are winning',
'autor' => 'robbie williams',
'stock' => '200',
'price' => '180',
'category_id' => '2',
'avatar'=>'/imagenes/images/rwillim.jpg',
]);
DB::table('music')->insert([
'id' => '14',
'titulo' => 'dimelo',
'autor' => 'paulo londra',
'stock' => '500',
'price' => '100',
'category_id' => '2',
'avatar'=>'/imagenes/images/Londra.jpg',
]);
DB::table('music')->insert([
'id' => '15',
'titulo' => 'we are born',
'autor' => 'sia',
'stock' => '200',
'price' => '180',
'category_id' => '2',
'avatar'=>'/imagenes/images/Sia.jpg',
]);
DB::table('music')->insert([
'id' => '16',
'titulo' => 'pastel goth',
'autor' => 'billie ellish',
'stock' => '300',
'price' => '230',
'category_id' => '2',
'avatar'=>'/imagenes/images/BilieElish.jpg',
]);

DB::table('categories_tabla')->insert([
'id' => '1',
'name' => 'rock',

]);
DB::table('categories_tabla')->insert([
'id' => '2',
'name' => 'pop',

]);
DB::table('categories_tabla')->insert([
'id' => '3',
'name' => 'novelas',

]);
DB::table('categories_tabla')->insert([
'id' => '4',
'name' => 'policiales',

]);
DB::table('categories_tabla')->insert([
'id' => '5',
'name' => 'infantiles',

]);


    }
}
