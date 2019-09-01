<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedidoDetalle extends Model
{
  public $guarded =[];

  public function book(){

    return $this->hasMany("App\book","category_id");

  }

  public function music(){

    return $this->hasMany("App\music","category_id");
  }
}
