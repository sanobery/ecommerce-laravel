<?php

namespace App\Http\Controllers;

use App\Models\UserRegister;
use Illuminate\Http\Request;
use App\Http\Requests\Registration;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function updateData()
    {
        return view('user.update');
    }

    public function updateUserInfo(Request $request,UserRegister $user)
    {
        $user = $user->updateData($request->all());

        if($user) {
        Session::flush();
        Session::flash('message', 'User Information Updated! Please Login Again.'); 
        return redirect('/login');
        }
    }
}
