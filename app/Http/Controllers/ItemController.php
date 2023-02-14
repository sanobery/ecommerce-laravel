<?php

namespace App\Http\Controllers;

use Session;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ItemController extends Controller
{
    public function cartItem()
    {
        return view('item.cart');
    }

    
    public function buyNow()
    {
        return view('user.payment');
    }

    public function index()
    {
        Mail::to('sanoberyousuf786@gmail.com')->send(new TestMail());
        // return view('email.sendMail');
    }


}
