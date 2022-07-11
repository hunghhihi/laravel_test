<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class authRegister extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'member';
        $reg = $user->save();
        if($reg){
            auth()->login($user);
            Session::put('login_id', $user->id);
            return redirect(route('home', ['success'=>'Register Successfully',
                                             'user'=> $user]));
        }
        else{
            return redirect(route('register_view'))->with('error', 'Register Failed');
        }

    }
}