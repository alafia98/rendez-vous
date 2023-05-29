<div class="grid-container">
@foreach ($filiere as $filiere)
<div class="product-card">
    <a href="">
        <h2>Filière</h2>
        <div style="display:flex;justify-content:space-between;">
            <h3>{{$filiere->nom_fr}}</h3>
            <h3>{{$filiere->nom_ar}}</h3>
        </div>
        <h2>Lieu</h2>
        <div>
            <h3>{{$filiere->lieu->nom_ar}}</h3>
            <h3>{{$filiere->lieu->nom_fr}}</h3>
        </div>
        <button class="btn">Prendre RDV</button>
    </a>
</div>
@endforeach
    
</div>