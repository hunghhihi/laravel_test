<div class="body">
      <nav>
          <h2 class="logo">Lara<span>vel</span></h2>
          <ul class="bar_content">
              <li><a href="{{ route('home') }}">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              @if(Auth::check())
              <li><a class="logout" href="{{ route('logout')}}">Logout</a></li>
              @endif
          </ul>
</nav>