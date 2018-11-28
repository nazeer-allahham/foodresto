<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand text-primary" href=""><span>Food Resto</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#content" aria-controls="content" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="content">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item px-2 active">
                <a class="nav-link" href="#home-section">Home</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" href="#offer-section">Offer</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" href="#meals-section">Menu</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" href="#contactus-section">Contact us</a>
            </li>
        </ul>
    </div>

    <ul class="navbar-nav ml-auto">
        @guest
        <li class="nav-item">
            {{-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> --}}
            <button onclick="setVisibility('#loginModal', true)" class="btn btn-sm btn-outline-success">Login</button>
        </li>
        <li class="nav-item">
            @if (Route::has('register'))
            {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> --}}
            <button onclick="setVisibility('#registerModal', true)" class="btn btn-sm btn-outline-info mx-1">Register</button>
            @endif
        </li>
        @else
        <li class="nav-item px-2">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                                                               document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @endguest
        <li class="nav-item">
            <button onclick="setVisibility('#basketModal', true)" class="btn btn-sm btn-outline-danger">Basket</button>
        </li>
    </ul>
</nav>