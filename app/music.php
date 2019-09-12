<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class music extends Model
{
    public $guarded =[];
    
    public function category(){
      return $this->belongsTo("App\category", "category_id");
    }
}
