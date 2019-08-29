<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carrito extends Model
{
    public $guarded =[];

    public function book(){

      return $this->hasMany("App\book","id_books");

    }

    public function music(){

      return $this->hasMany("App\music","id_music");
    }
}
