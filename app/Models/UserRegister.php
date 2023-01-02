<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserRegister extends Model
{
  use HasFactory;

  public function saveUserDetail($data)
  {
    $user = new UserRegister;
    $user->first_name = $data['firstName'];
    $user->last_name = $data['lastName'];
    $user->email = $data['email'];
    $user->password = $data['password'];
    $user->save();
    return $user;
  }
  
  public function checkUserDetail($data)
  {
    $user = new UserRegister;
    $user = $user->where('email',$data['email'])->where('password',$data['password'])->get();
    Return $user;
  }  
}
