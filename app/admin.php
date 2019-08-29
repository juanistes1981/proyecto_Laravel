<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
public $guarded =[];

public function User(){
  return $this->belongsTo("App\User", "users_id");
}

}
