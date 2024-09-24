<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;



class registrationcontroller extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function register(Request $request)
    {
        $request->validate(
            [
                'name'=>'Required',
                'email'=>'Required|email',
                'password'=>'Required|confirmed' ,
               // 'password_confirmation'=>'Required' ,
            ]
        ); 
        

    }
}
