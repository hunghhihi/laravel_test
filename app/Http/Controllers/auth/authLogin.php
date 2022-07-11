<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Hash;

class authLogin extends Controller
{
    public function checkLogin(Request  $request)
    {
        
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('name', $request->name)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                auth()->login($user);
                Session::put('login_id', $user->id);
                return back()->with('user', $user);
            } else {
                return back()->with('error', 'Password is incorrect');
            }
        }
        else {
            return back()->with('error', 'name is incorrect');
        }
    }
    public function Logout()
    {
        if(Session::has('login_id')){
            Session::pull('login_id');
            auth()->logout();
            return redirect(route('home'));
        }
    }
}
