<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    public $guarded =[];

    public function customers(){
      return $this->belongsTo("App\pedido", "customers_id");
    }
}
