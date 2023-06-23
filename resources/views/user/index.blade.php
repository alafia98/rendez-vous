<div class="home">
    <div class="home-card">
        <img src="{{asset('user/img/facultélogo.png')}}" alt="logo">
        <h1>Bienvenue sur le site de prise de rendez-vous de l'Université Abdelmalek Essaadi des Lettres et Sciences Humaines.</h1>
        <a href="/login" class="btn">Espace d'administrateur</a>
    </div>

    <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
    slides-per-view="auto" coverflow-effect-rotate="5" coverflow-effect-stretch="0" coverflow-effect-depth="100"
    coverflow-effect-modifier="5" coverflow-effect-slide-shadows="true">
    @foreach ($date as $date)
    <swiper-slide>
        <h3>Filière: {{$date->lieu->filiere->nom_fr}}</h3>
        <h3>Lieu: {{$date->lieu->nom_fr}}</h3>
        <h3>Filière: {{$date->date}}</h3>
        <a class="btn" href="{{url('prendre_rdv')}}">Prendre RDV</a>
    </swiper-slide>
@endforeach

  </swiper-container>
</div>