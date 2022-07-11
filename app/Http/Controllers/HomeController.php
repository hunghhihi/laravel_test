<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Session;

class HomeController extends Controller
{
    public  function index()
    {
        return view('index');
    }
}
