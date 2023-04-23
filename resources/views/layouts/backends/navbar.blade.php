  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand fixed-top navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard" class="nav-link">Home</a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto nav-list">
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
      @endauth
  </ul>
  </nav>
  <!-- /.navbar -->