<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
  public $guarded=[];
  
  public function category(){
    return $this->belongsTo("App\category", "category_id");
  }
}
