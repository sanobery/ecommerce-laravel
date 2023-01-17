<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
  use HasFactory;

  public function getAllSize(){
    $size = Size::all();

    return $size;
  }

  public function getFilterSize($size){
    $size = Size::where('size_option',$size)->get('size_id');

    return $size;
  }

  public function getCount()
  {
    $user = new Size;
    $user = $user->count();

    return $user;
  }

}
