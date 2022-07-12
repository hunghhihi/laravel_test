<x-layout >
<x-sidebar />
    <main class="box">
        <h2>Register</h2>
        <form method="post" action="{{ route('register') }}">
            @csrf  
            <div class="inputBox">
                <label for="name">Username</label>
                <input type="text" name="name" id="name" placeholder="type your username"  />
            </div>
            <div>
                {{$errors->first('name')}} 
            </div>
            <div class="inputBox">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="type your Email" />
            </div>
            <div>
                {{$errors->first('email')}} 
            </div>
            <div class="inputBox">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="type your password"
                    />
            </div>
            <div>
                {{$errors->first('password')}}
            </div>
            <div class="inputBox">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password" placeholder="confirm your password"
                    />
            </div>
            <div>
                {{$errors->first('confirm_password')}} 
            </div>
            <button type="submit" name="submit" style="float: left;">Register</button>
        </form>
    </main>
</x-layout>