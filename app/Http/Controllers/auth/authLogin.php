<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class authLogin extends Controller
{
    public function checkLogin(Request  $request)
    {

        $data = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            $request->session()->regenerate();
            return back();
        } else {
            return back()->withErrors(['error' => 'Invalid credentials']);
        }
    }
    public function Logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
