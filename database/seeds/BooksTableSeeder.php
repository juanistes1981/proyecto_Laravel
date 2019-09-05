<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('books')->insert([
          'id' => '1',
          'titulo' => 'orgullo y prejuicio',
          'autor' => 'jane austen',
          'stock  ' => '200',
          'price' => '500',
          'category_id' => '3',
          'avatar'=>'/public/imagenes/novelas/orgullo.jpg',
     ]);
     DB::table('books')->insert([
         'id' => '2',
         'titulo' => 'el grito de la tierra',
         'autor' => 'sarah lark',
         'stock  ' => '390',
         'price' => '500',
         'category_id' => '3',
         'avatar'=>'/public/imagenes/novelas/grito.jpg',
    ]);
    DB::table('books')->insert([
        'id' => '3',
        'titulo' => 'yo antes de ti',
        'autor' => 'jojo moyes',
        'stock  ' => '100',
        'price' => '480',
        'category_id' => '3',
        'avatar'=>'/public/imagenes/novelas/jojo.jpg',
   ]);
   DB::table('books')->insert([
       'id' => '4',
       'titulo' => 'el amante japones',
       'autor' => 'isabel allende',
       'stock  ' => '100',
       'price' => '290',
       'category_id' => '3',
       'avatar'=>'/public/imagenes/novelas/amante.jpg',
  ]);
    DB::table('books')->insert([
      'id' => '5',
      'titulo' => 'la casa torcida',
      'autor' => 'agatha christie',
      'stock  ' => '69',
      'price' => '600',
      'category_id' => '4',
      'avatar'=>'/public/imagenes/policiales/casa.jpg',
 ]);
    DB::table('books')->insert([
     'id' => '6',
     'titulo' => 'cuentos policiales',
     'autor' => 'borges y casares',
     'stock  ' => '80',
     'price' => '430',
     'category_id' => '4',
     'avatar'=>'/public/imagenes/policiales/cuentos.jpg',
]);
    DB::table('books')->insert([
    'id' => '7',
    'titulo' => 'asesinato en el orient express',
    'autor' => 'agatha christie',
    'stock  ' => '90',
    'price' => '500',
    'category_id' => '4',
    'avatar'=>'/public/imagenes/policiales/orient.jpg',
]);
    DB::table('books')->insert([
    'id' => '8',
    'titulo' => 'telon',
    'autor' => 'agatha christie',
    'stock  ' => '200',
    'price' => '480',
    'category_id' => '4',
    'avatar'=>'/public/imagenes/policiales/telon.jpg',
]);
    DB::table('books')->insert([
    'id' => '9',
    'titulo' => 'el principito',
    'autor' => 'antoine de saint exupery',
    'stock  ' => '20',
    'price' => '800',
    'category_id' => '5',
    'avatar'=>'/public/imagenes/infantiles/principito.jpg',
]);
    DB::table('books')->insert([
    'id' => '10',
    'titulo' => 'peter pan',
    'autor' => 'j.m barrie',
    'stock  ' => '50',
    'price' => '400',
    'category_id' => '5',
    'avatar'=>'/public/imagenes/infantiles/peter.jpg',
]);
      DB::table('books')->insert([
            'id' => '11',
            'titulo' => 'narnia',
            'autor' => 'c.s lewis',
            'stock  ' => '50',
            'price' => '400',
            'category_id' => '5',
            'avatar'=>'/public/imagenes/infantiles/narnia.jpg',
]);

DB::table('books')->insert([
      'id' => '12',
      'titulo' => 'mago de oz',
      'autor' => 'frank baum',
      'stock  ' => '70',
      'price' => '580',
      'category_id' => '5',
      'avatar'=>'/public/imagenes/infantiles/oz.jpg',
]);

    }
}
