<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public $guarded =[];
    protected $table = 'categories_tabla';

    public function book(){

      return $this->hasMany("App\book","category_id");

    }

    public function music(){

      return $this->hasMany("App\music","category_id");
    }
}
