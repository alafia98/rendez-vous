<div class="home">
    <div class="home-card">
        <img src="{{asset('user/img/facultélogo.png')}}" alt="logo">
        <h1>أهلا بكم في تطبيق حجز المواعيد بكلية الآداب والعلوم الإنسانية</h1>
        {{-- <a href="/login" class="btn">فضاء المسؤول</a> --}}
    </div>

    <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
    slides-per-view="auto" coverflow-effect-rotate="5" coverflow-effect-stretch="0" coverflow-effect-depth="100"
    coverflow-effect-modifier="5" coverflow-effect-slide-shadows="true">
    @foreach ($date as $date)
        <swiper-slide>
            <h3>الشعبة : {{$date->lieu->filiere->nom_ar}}</h3>
            <h3>المكان: {{$date->lieu->nom_ar}}</h3>
            <h3>التاريخ: {{$date->date}}</h3>
            <a class="btn" href="{{url('prendre_rdv_ar')}}">احجز موعد</a>
        </swiper-slide>
    @endforeach
  </swiper-container>
</div>