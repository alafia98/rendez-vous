<nav class="navbar navbar-expand-lg">
    <a href="{{url('/')}}"><img class="logo" src="{{asset('user/img/facultélogo.png')}}" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="nav collapse navbar-collapse" id="navbarSupportedContent">
        <a href="{{url('/')}}">الصفحة الرئيسية</a>
        <a href="{{url('prendre_rdv')}}">أخذ موعد</a>
        <a href="#">تتبع مواعيدي</a>
      </div>
      <a href="{{ route('login') }}">اللغة</a>    
</nav>

{{-- <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('user/img/facultélogo.png')}}" alt="logo" style="height:50px; width:80px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Prendre un rendez-vous</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gérer mes rendez-vous</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a href="{{ route('login') }}"  class="nav-link">Langue</a>
            </li>
        </ul>
      </div>
    </div>
</nav> --}}