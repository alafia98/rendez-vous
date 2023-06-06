<div style="flex:1; display:flex; flex-direction:column; align-items:center">
    <div style="margin-bottom:30px; display:flex;align-items:center;justify-content:center" class="product-card">
        <img src="{{asset('user/img/facultélogo.png')}}" alt="logo" style="width: 250px;">
        <h1 style="color: #00549F;font-style: italic;font-size: 2rem;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); width:50%">Bienvenue sur l'application de prise de rendez-vous dans la faculté des lettres et des sciences humaines</h1>
        <a href="/login" class="btn" style="margin-left:20px">Espace administrateur</a>
    </div>

    <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
    slides-per-view="auto" coverflow-effect-rotate="5" coverflow-effect-stretch="0" coverflow-effect-depth="100"
    coverflow-effect-modifier="5" coverflow-effect-slide-shadows="true">
    @foreach ($calendrier as $calendrier)
    <swiper-slide class="product-card">
        <h3>Filière : {{$calendrier->filiere->nom_fr}}</h3>
        <h3>Lieu : {{$calendrier->filiere->lieu->nom_fr}}</h3>
        <h3>{{$calendrier->date}}</h3>
        <h3>{{$calendrier->heure_debut}} -> {{$calendrier->heure_fin}}</h3>
        <a class="btn" url="">Prendre RDV</a>
    </swiper-slide>
    @endforeach
  </swiper-container>
</div>