<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
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
        $user->password = Hash::make($data['password']);
        $user->save();

        return $user;
    }
    
    
    public function checkUserDetail($data)
    {
        $user = new UserRegister;
        $user = $user->where('email',$data['email'])->get();

        if(!empty($user[0]) && Hash::check($data['password'],$user[0]->password)) {
        return $user;
        }
        
        return false;
    }  


    public function getData()
    {
        $user = new UserRegister;
        $user = $user->all();

        return $user;
    }
    

    public function updateData($data)
    {
        $user = new UserRegister;
        $user = $user->where('user_id',$data['userId'])->update([ 
            "first_name" => $data['firstName'],
            "last_name" => $data['lastName'],
            "email" => $data['email'],
        ]);

        return $user;
    }


    public function getCount()
    {
        $user = new UserRegister;
        $user = $user->count();

        return $user;
    }
  
}
