<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use illuminate\Http\Response;
use illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function Register(Request $request){
    $fields = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|min:6|confirmed'
        ]);
    }

}