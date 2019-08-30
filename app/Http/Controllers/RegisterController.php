<?php

namespace App\Http\Controllers;
use App\User;
use App\http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegisterUsers;


class RegisterController extends Controller
{

use RegisterUsers;
@var string

protected $redirecTo = '\home';

@return void

public function __construct(){
  $this->middleware('guest');

}

@param array
@return
protected function validator(array $data){

  return Validator::make($data,[
    'name'=>['required','string','max:255'],
    'email'=>['required','string','email','max:255','unique'],
    'password'=>['required','string','min:8','confirmed']
  ])
}

protected function create(array $data){
    return User::create([])
}

}
