<div class="home">
    <div class="home-card">
        <img src="{{asset('user/img/facultélogo.png')}}" alt="logo">
        <h1>Bienvenue sur l'application de prise de rendez-vous dans la faculté des lettres et des sciences humaines</h1>
        <a href="/login" class="btn">Espace administrateur</a>
    </div>

    <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
    slides-per-view="auto" coverflow-effect-rotate="5" coverflow-effect-stretch="0" coverflow-effect-depth="100"
    coverflow-effect-modifier="5" coverflow-effect-slide-shadows="true">
    @foreach ($calendrier as $calendrier)
    <swiper-slide>
        <h3>Filière : {{$calendrier->filiere->nom_fr}}</h3>
        <h3>Lieu : {{$calendrier->filiere->lieu->nom_fr}}</h3>
        <h3>{{$calendrier->date}}</h3>
        <h3>{{$calendrier->heure_debut}} -> {{$calendrier->heure_fin}}</h3>
        <a class="btn" href="{{url('create_std')}}">Prendre RDV</a>
    </swiper-slide>
    @endforeach
  </swiper-container>
</div>