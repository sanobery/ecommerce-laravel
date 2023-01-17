<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
  use HasFactory;
  public function getAllColor(){
    $size = Color::all();
    
    return $size;
  }

  public function getCount()
  {
    $user = new Color;
    $user = $user->count();

    return $user;
  }
}
