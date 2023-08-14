<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return User::get();
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email'=> ['required', 'email'],
            'password'=> ['required']
        ]);
        return $credentials;

        // return ['sdfsdfdsf', validator(request()->all(), [
        //     'email'=> ['required', 'email'],
        //     'password'=> ['password'],
        // ])->validate()];

        // // if ($credentials){

        // // }
    }
    
}
