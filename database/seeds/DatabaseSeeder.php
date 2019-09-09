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
/**  DB::table('books')->insert([
          'id' => '1',
          'titulo' => 'orgullo y prejuicio',
          'autor' => 'jane austen',
          'stock' => '200',
          'price' => '500',
          'category_id' => '3',
          'avatar'=>'/public/imagenes/novelas/orgullo.jpg',
     ]);
     DB::table('books')->insert([
         'id' => '2',
         'titulo' => 'el grito de la tierra',
         'autor' => 'sarah lark',
         'stock' => '390',
         'price' => '500',
         'category_id' => '3',
         'avatar'=>'/public/imagenes/novelas/grito.jpg',
    ]);
    DB::table('books')->insert([
        'id' => '3',
        'titulo' => 'yo antes de ti',
        'autor' => 'jojo moyes',
        'stock' => '100',
        'price' => '480',
        'category_id' => '3',
        'avatar'=>'/public/imagenes/novelas/jojo.jpg',
   ]);
   DB::table('books')->insert([
       'id' => '4',
       'titulo' => 'el amante japones',
       'autor' => 'isabel allende',
       'stock' => '100',
       'price' => '290',
       'category_id' => '3',
       'avatar'=>'/public/imagenes/novelas/amante.jpg',
  ]);
    DB::table('books')->insert([
      'id' => '5',
      'titulo' => 'la casa torcida',
      'autor' => 'agatha christie',
      'stock' => '69',
      'price' => '600',
      'category_id' => '4',
      'avatar'=>'/public/imagenes/policiales/casa.jpg',
 ]);
    DB::table('books')->insert([
     'id' => '6',
     'titulo' => 'cuentos policiales',
     'autor' => 'borges y casares',
     'stock' => '80',
     'price' => '430',
     'category_id' => '4',
     'avatar'=>'/public/imagenes/policiales/cuentos.jpg',
]);
    DB::table('books')->insert([
    'id' => '7',
    'titulo' => 'asesinato en el orient express',
    'autor' => 'agatha christie',
    'stock' => '90',
    'price' => '500',
    'category_id' => '4',
    'avatar'=>'/public/imagenes/policiales/orient.jpg',
]);
    DB::table('books')->insert([
    'id' => '8',
    'titulo' => 'telon',
    'autor' => 'agatha christie',
    'stock' => '200',
    'price' => '480',
    'category_id' => '4',
    'avatar'=>'/public/imagenes/policiales/telon.jpg',
]);
    DB::table('books')->insert([
    'id' => '9',
    'titulo' => 'el principito',
    'autor' => 'antoine de saint exupery',
    'stock' => '20',
    'price' => '800',
    'category_id' => '5',
    'avatar'=>'/public/imagenes/infantiles/principito.jpg',
]);
    DB::table('books')->insert([
    'id' => '10',
    'titulo' => 'peter pan',
    'autor' => 'j.m barrie',
    'stock' => '50',
    'price' => '400',
    'category_id' => '5',
    'avatar'=>'/public/imagenes/infantiles/peter.jpg',
]);
      DB::table('books')->insert([
            'id' => '11',
            'titulo' => 'narnia',
            'autor' => 'c.s lewis',
            'stock' => '50',
            'price' => '400',
            'category_id' => '5',
            'avatar'=>'/public/imagenes/infantiles/narnia.jpg',
]);

DB::table('books')->insert([
      'id' => '12',
      'titulo' => 'mago de oz',
      'autor' => 'frank baum',
      'stock' => '70',
      'price' => '580',
      'category_id' => '5',
      'avatar'=>'/public/imagenes/infantiles/oz.jpg',
]);**/
DB::table('music')->insert([
    'id' => '1',
    'titulo' => 'abbey road',
    'autor' => 'the beatles',
    'price' => '630',
    'stock' => '200',
    'category_id' => '1',
    'avatar'=>'/public/imagenes/images/Abeyroad.jpg',
]);
DB::table('music')->insert([
   'id' => '2',
   'titulo' => 'ace of spades',
   'autor' => 'motorhead',
   'price' => '139',
   'stock' => '100',
   'category_id' => '1',
   'avatar'=>'/public/imagenes/images/Aceofspades.jpg',
]);
DB::table('music')->insert([
  'id' => '3',
  'titulo' => 'es',
  'autor' => 'eruca sativa',
  'price' => '100',
  'stock' => '200',
  'category_id' => '1',
  'avatar'=>'/public/imagenes/images/eurucasativaes.jpg',
]);
DB::table('music')->insert([
 'id' => '4',
 'titulo' => 'live era 87 93',
 'autor' => 'guns roses',
 'price' => '280',
 'stock' => '200',
 'category_id' => '1',
 'avatar'=>'/public/imagenes/images/gunsitos.jpg',
]);
DB::table('music')->insert([
'id' => '5',
'titulo' => 'warning',
'autor' => 'green day',
'price' => '120',
'stock' => '100',
'category_id' => '1',
'avatar'=>'/public/imagenes/images/GreenBand.jpg',
]);
DB::table('music')->insert([
'id' => '6',
'titulo' => 'sonic temple',
'autor' => 'the cult',
'price' => '150',
'stock' => '150',
'category_id' => '1',
'avatar'=>'/public/imagenes/images/TheCult.jpg',
]);
DB::table('music')->insert([
'id' => '7',
'titulo' => 'nevermind',
'autor' => 'nirvana',
'price' => '100',
'stock' => '200',
'category_id' => '1',
'avatar'=>'/public/imagenes/images/Nirvana0.jpg',
]);
DB::table('music')->insert([
'id' => '8',
'titulo' => 'tercer arco',
'autor' => 'los piojos',
'price' => '230',
'stock' => '100',
'category_id' => '1',
'avatar'=>'/public/imagenes/images/piojos.jpg',
]);
DB::table('music')->insert([
'id' => '9',
'titulo' => 'believe',
'autor' => 'justin biever',
'price' => '300',
'stock' => '500',
'category_id' => '2',
'avatar'=>'/public/imagenes/images/Justin_.jpg',
]);
DB::table('music')->insert([
'id' => '10',
'titulo' => 'born this way',
'autor' => 'justin biever',
'price' => '139',
'stock' => '200',
'category_id' => '2',
'avatar'=>'/public/imagenes/images/lady_gaga_born-this-way.jpg',
]);
DB::table('music')->insert([
      'id' => '11',
      'titulo' => 'celebration',
      'autor' => 'madonna',
      'price' => '100',
      'stock' => '200',
      'category_id' => '2',
      'avatar'=>'/public/imagenes/images/madon.jpg',
]);

DB::table('music')->insert([
'id' => '12',
'titulo' => 'earth to mars',
'autor' => 'bruno mars',
'price' => '219',
'stock' => '200',
'category_id' => '2',
'avatar'=>'/public/imagenes/images/Mars.jpg',
]);
DB::table('music')->insert([
'id' => '13',
'titulo' => 'sing when you are winning',
'autor' => 'robbie williams',
'price' => '180',
'stock' => '200',
'category_id' => '2',
'avatar'=>'/public/imagenes/images/rwillim.jpg',
]);
DB::table('music')->insert([
'id' => '14',
'titulo' => 'dimelo',
'autor' => 'paulo londra',
'price' => '100',
'stock' => '500',
'category_id' => '2',
'avatar'=>'/public/imagenes/images/Londra.jpg',
]);
DB::table('music')->insert([
'id' => '15',
'titulo' => 'we are born',
'autor' => 'sia',
'price' => '180',
'stock' => '200',
'category_id' => '2',
'avatar'=>'/public/imagenes/images/Sia.jpg',
]);
DB::table('music')->insert([
'id' => '16',
'titulo' => 'pastel goth',
'autor' => 'billie ellish',
'price' => '230',
'stock' => '300',
'category_id' => '2',
'avatar'=>'/public/imagenes/images/BilieElish.jpg',
]);

/**DB::table('categories_tabla')->insert([
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
]);**/

    }
}
