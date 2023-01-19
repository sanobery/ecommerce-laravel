<?php

namespace App\Models;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    use HasFactory;

    public function checkAdminDetail($data)
    {
        $user = new Admin;
        $user = $user->where('email',$data['email'])
                ->where('password',$data['password'])
                ->get();
        
        if(!empty($user[0])) {
        return $user;
        }
        
        return false;
    }

}
