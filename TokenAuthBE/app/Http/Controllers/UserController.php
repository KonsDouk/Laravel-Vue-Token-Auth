<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        
        
        if (Auth::attempt($credentials)){
            $token = $request->user()->createToken(time());
            return [
                'token'=> $token->plainTextToken
            ];
        }
    }
    
}
