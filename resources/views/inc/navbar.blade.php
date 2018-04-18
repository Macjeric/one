<nav class="navbar navbar-inverse">
        <a class="navbar-brand" href="/">CHUKUA</a>
        <div class="container">
            <div class="navbar-header">
    
                {{-- <!-- Collapsed Hamburger -->  navbar-toggle collapsed --}}
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
    
            </div>
    
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>
    
                <ul class="nav navbar-nav">
                  <li><a href="/home">Home</a></li>
                  @can('print_prequest')
                  <li><a href="/posts">Check Requests</a></li>
                  <li><a href="/orders">Create Order</a></li>
                  @endcan
                  {{--  <li><a href="/posts">Blog</a></li>  --}}
                </ul>
     
      <!-- Right Side Of Navbar -->
      <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @if (Auth::guest())
            <li class="nav-item">
            <a href="{{ route('login') }}">Login</a></li>

           <li class="nav-item">
            <a href="{{ route('register') }}">Register</a></li>
            
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="/home">Dashboard</a></li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endif
    </ul>
        </div>
</div>
</nav>