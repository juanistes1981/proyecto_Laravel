<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class customer extends Model
{
  protected $fillable = [
       'apellido', 'avatar', 'domicilio',
  ];
  public function User(){
    return $this->belongsTo("App\User", "users_id");
  }
}
