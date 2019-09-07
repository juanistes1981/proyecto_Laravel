<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class MusicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('musics')->insert([
          'id' => '1',
          'titulo' => 'abbey road',
          'autor' => 'the beatles',
          'stock  ' => '200',
          'price' => '630',
          'category_id' => '1',
          'avatar'=>'/public/imagenes/images/Abeyroad.jpg',
     ]);
     DB::table('musics')->insert([
         'id' => '2',
         'titulo' => 'ace of spades',
         'autor' => 'motorhead',
         'stock  ' => '100',
         'price' => '139',
         'category_id' => '1',
         'avatar'=>'/public/imagenes/images/Aceofspades.jpg',
    ]);
    DB::table('musics')->insert([
        'id' => '3',
        'titulo' => 'es',
        'autor' => 'eruca sativa',
        'stock  ' => '200',
        'price' => '100',
        'category_id' => '1',
        'avatar'=>'/public/imagenes/images/eurucasativaes.jpg',
   ]);
   DB::table('musics')->insert([
       'id' => '4',
       'titulo' => 'live era 87 93',
       'autor' => 'guns roses',
       'stock  ' => '200',
       'price' => '280',
       'category_id' => '1',
       'avatar'=>'/public/imagenes/images/gunsitos.jpg',
  ]);
    DB::table('musics')->insert([
      'id' => '5',
      'titulo' => 'warning',
      'autor' => 'green day',
      'stock  ' => '100',
      'price' => '120',
      'category_id' => '1',
      'avatar'=>'/public/imagenes/images/GreenBand.jpg',
 ]);
    DB::table('musics')->insert([
     'id' => '6',
     'titulo' => 'sonic temple',
     'autor' => 'the cult',
     'stock  ' => '150',
     'price' => '150',
     'category_id' => '1',
     'avatar'=>'/public/imagenes/images/TheCult.jpg',
]);
    DB::table('musics')->insert([
    'id' => '7',
    'titulo' => 'nevermind',
    'autor' => 'nirvana',
    'stock  ' => '200',
    'price' => '100',
    'category_id' => '1',
    'avatar'=>'/public/imagenes/images/Nirvana0.jpg',
]);
    DB::table('musics')->insert([
    'id' => '8',
    'titulo' => 'tercer arco',
    'autor' => 'los piojos',
    'stock  ' => '100',
    'price' => '230',
    'category_id' => '1',
    'avatar'=>'/public/imagenes/images/piojos.jpg',
]);
    DB::table('musics')->insert([
    'id' => '9',
    'titulo' => 'believe',
    'autor' => 'justin biever',
    'stock  ' => '500',
    'price' => '300',
    'category_id' => '2',
    'avatar'=>'/public/imagenes/images/Justin_.jpg',
]);
    DB::table('musics')->insert([
    'id' => '10',
    'titulo' => 'born this way',
    'autor' => 'justin biever',
    'stock  ' => '200',
    'price' => '139',
    'category_id' => '2',
    'avatar'=>'/public/imagenes/images/lady_gaga_born-this-way.jpg',
]);
      DB::table('musics')->insert([
            'id' => '11',
            'titulo' => 'celebration',
            'autor' => 'madonna',
            'stock  ' => '200',
            'price' => '100',
            'category_id' => '2',
            'avatar'=>'/public/imagenes/images/madon.jpg',
]);

DB::table('musics')->insert([
      'id' => '12',
      'titulo' => 'earth to mars',
      'autor' => 'bruno mars',
      'stock  ' => '200',
      'price' => '219',
      'category_id' => '2',
      'avatar'=>'/public/imagenes/images/Mars.jpg',
]);
DB::table('musics')->insert([
      'id' => '13',
      'titulo' => 'sing when you are winning',
      'autor' => 'robbie williams',
      'stock  ' => '200',
      'price' => '180',
      'category_id' => '2',
      'avatar'=>'/public/imagenes/images/rwillim.jpg',
]);
DB::table('musics')->insert([
      'id' => '14',
      'titulo' => 'dimelo',
      'autor' => 'paulo londra',
      'stock  ' => '500',
      'price' => '100',
      'category_id' => '2',
      'avatar'=>'/public/imagenes/images/Londra.jpg',
]);
DB::table('musics')->insert([
      'id' => '15',
      'titulo' => 'we are born',
      'autor' => 'sia',
      'stock  ' => '200',
      'price' => '180',
      'category_id' => '2',
      'avatar'=>'/public/imagenes/images/Sia.jpg',
]);
DB::table('musics')->insert([
      'id' => '16',
      'titulo' => 'pastel goth',
      'autor' => 'billie ellish',
      'stock  ' => '300',
      'price' => '230',
      'category_id' => '2',
      'avatar'=>'/public/imagenes/images/BilieElish.jpg',
]);
    }
}
