<div class="home">
    <div class="home-card">
        <img src="{{asset('user/img/facultélogo.png')}}" alt="logo">
        <h1>أهلا بكم في تطبيق حجز المواعيد بكلية الآداب والعلوم الإنسانية</h1>
        <a href="/login" class="btn">فضاء المسؤول</a>
    </div>

    <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
    slides-per-view="auto" coverflow-effect-rotate="5" coverflow-effect-stretch="0" coverflow-effect-depth="100"
    coverflow-effect-modifier="5" coverflow-effect-slide-shadows="true">
    @foreach ($filiere as $filiere)
        <swiper-slide>
            <h3>Filière : {{$filiere->nom_ar}}</h3>
            <h3>Lieu : @foreach ($filiere->lieu as $lieu) {{$lieu->nom_ar}} - @endforeach</h3>
            <h3> Les jours : @foreach ($lieu->date as $date) / {{$date->date}} @endforeach</h3>
            <a class="btn" href="{{url('prendre_rdv')}}">Prendre RDV</a>
        </swiper-slide>
    @endforeach
  </swiper-container>
</div>