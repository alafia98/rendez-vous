<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="{{asset('user/img/facultélogo.png')}}" alt="logo" style="height:50px; width:80px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Prendre un rendez-vous</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gérer mes rendez-vous</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            @if (Route::has('login'))
                @auth
                    <form action="{{ url('logout') }}" method="post">
                        @csrf
                        <input type="submit" value="Log out">
                    </form>
                @else
                <li class="nav-item">
                    <a href="{{ route('login') }}"  class="nav-link">Log in</a>
                </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}"  class="nav-link">Register</a>
                    </li>
                    @endif
                @endauth
            @endif
            </li>
        </ul>
      </div>
    </div>
  </nav>