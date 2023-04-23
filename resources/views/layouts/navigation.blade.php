<nav class="navbar navbar-expand-lg fixed-top navbar-dark"  >
    <div class="container-fluid px-4">
        <h1><a href="/" class="navbar-brand">Innovation</a></h1>
        <button class="navbar-toggler btn btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
            <!-- aria-controls="collapseOne" aria-expanded="false" aria-label="Toggle navigation" -->
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="collapseOne" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto nav-list">
                <li class="nav-item">
                    <a href="/#about_us" class="nav-link" title="not yet available">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="/#contact_us" class="nav-link" title="not yet available">Contact Us</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a href="{{ route('profile.edit') }}" class="nav-link">Profile</a>
                    </li>
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li class="nav-item">
                            <a href="#" onclick="event.preventDefault();
                            this.closest('form').submit();" class="nav-link">Logout</a>
                        </li>
                        
                    </form>
                @else
                        {{--  --}}
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Log in</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>
                @endauth
            </ul>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
</nav>
