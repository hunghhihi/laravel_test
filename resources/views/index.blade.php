@extends('layouts.base')
@yield('sidebar')
@include('layouts.sidebar')
@yield('content')
    <div>
        @if(Session::has('error'))
        <script>
            alert('{{Session::get('error')}}');
            </script>
        @endif
        @if(Session::has('success'))
        <script>
            alert('{{Session::get('success')}}');
            </script>
        @endif
    </div>
        @if(!Session::get('login_id'))
        <div class="text">
            <h2>Welcome to my Wesite</h2>
            <h3>
                Here you can know some more English vocabulary and how to use it...</h3>
        </div>
        @else
            <div class="text">
                <h2>
                    Hello
                </h2>
                <h3>
                    <a href="{{ route('course', ['id'=>Session::get('login_id')])}}">My course</a>
                </h3>
        @endif
        @if(!Session::get('login_id'))
        <div class="container">
            <div>
                <h3 class="logo">Lara<span>vel</span></h3>
            </div>
            <div class="login_form">
                <h2>Login</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <input class="input" type="text" placeholder="User name" name="name" value="{{ old('name') }}">
                    </div>
                    <div>
                        {{$errors->first('name')}} 
                    </div>
                    <div>
                        <input class="input" type="password" placeholder="Password" name="password">
                    </div>
                    <div>
                    {{ $errors->first('password') }}
                    </div>
                    <div>
                        <input class="submit" type="submit" value="Login" name="submit">
                    </div>
                    <a class="forgot" href="#">Forgot Password</a>
                    <a class="sign_up" href="{{ route('register_view') }}">Sign up</a>             
                </form>
            </div>
            @endif
            
        </div>
    </div>
    
@yield('footer')
    <div class="footer">
        <p>&copy; Copyright 2020 Laravel    </p>
    </div>
