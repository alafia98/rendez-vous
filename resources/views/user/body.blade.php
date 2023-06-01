{{-- <h1 style="color: #00549F;font-style: italic;font-size: 3rem;text-align: center;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Bienvenue sur l'application de prise de rendez-vous dans la faculté des lettres et des sciences humaines</h1>
<div class="grid-container" style="flex:1;">
@foreach ($filiere as $filiere)
<div class="product-card">
        <h2>Filière</h2>
        <div style="display:flex;justify-content:space-between;">
            <h3>{{$filiere->nom_fr}}</h3>
            <h3>{{$filiere->nom_ar}}</h3>
        </div>
        <h2>Lieu</h2>
        <div style="display:flex;justify-content:space-between;">
            <h3>{{$filiere->lieu->nom_fr}}</h3>
            <h3>{{$filiere->lieu->nom_ar}}</h3>
        </div>
        <a class="btn" url="">Prendre RDV</a>
</div>
@endforeach
    
</div> --}}

<div style="flex:1; display:flex; flex-direction:column; align-items:center">
    <div style="margin-bottom:30px; display:flex;align-items:center;justify-content:center" class="product-card">
        <img src="{{asset('user/img/facultélogo.png')}}" alt="logo" style="width: 250px;">
        <h1 style="color: #00549F;font-style: italic;font-size: 2rem;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); width:50%">Bienvenue sur l'application de prise de rendez-vous dans la faculté des lettres et des sciences humaines</h1>
        <a href="/login" class="btn" style="margin-left:20px">Espace administrateur</a>
    </div>

    <div class="grid-container">
        @foreach ($filiere as $filiere)
        <div class="product-card">
                <h2>Filière</h2>
                <div style="display:flex;justify-content:space-between;">
                    <h3>{{$filiere->nom_fr}}</h3>
                    <h3>{{$filiere->nom_ar}}</h3>
                </div>
                <h2>Lieu</h2>
                <div style="display:flex;justify-content:space-between;">
                    <h3>{{$filiere->lieu->nom_fr}}</h3>
                    <h3>{{$filiere->lieu->nom_ar}}</h3>
                </div>
                <a class="btn" url="">Prendre RDV</a>
        </div>
        @endforeach
            
        </div>
</div>