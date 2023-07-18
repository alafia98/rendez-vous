<!DOCTYPE html>
<html lang="en">
@include('user.css')
<body>
    @include('user.navbar')
    @if (Session::has('message'))
        <script>
            swal('Message', '{{Session::get('message')}}', 'success', {
                button:true,
                button:"ok",
            })
        </script>
    @endif
    <section>
        <form action="{{url('create_rdv')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="body">
                <div class="card1">
                    <div>
                        <label for="nom_fr">Nom FR :</label>
                        <input type="text" name="nom_fr" required>
                    </div>
                    <div>
                        <label for="prenom_fr">Prénom FR :</label>
                        <input type="text" name="prenom_fr" required>
                    </div>                                    
                    <div>
                        <label for="nom_ar">Nom AR :</label>
                        <input type="text" name="nom_ar" required>
                    </div>
                    <div>
                        <label for="prenom_ar">Prénom AR :</label>
                        <input type="text" name="prenom_ar" required>
                    </div>
                    <div>
                        <label for="cin">Numéro CIN:</label>
                        <input type="text" name="cin" required>
                    </div>
                    <div>
                        <label for="cne">Numéro CNE :</label>
                        <input type="text" name="cne" required>
                    </div>
                    <div>
                        <label for="email">Addresse email :</label>
                        <input type="email" name="email" required>
                    </div>
                    <div>
                        <label for="telephone">N° téléphone :</label>
                        <input type="number" name="telephone" required>
                    </div>
                    
                    <div>
                        <label>Filière :</label>
                        <select name="id_fil" id="filiere">
                            <option value=''>Séléctionner</option>
                            @foreach ($filieres as $filiere)
                                <option value="{{$filiere->id}}">{{$filiere->nom_fr}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label>Lieu : </label>
                        <select name="id_lieu" id="lieu">
                            <option value=''>Séléctionner</option>
                        </select>
                    </div>
                    <div>
                        <label>Jour : </label>
                        <select name="id_date" id="date">
                            <option value=''>Séléctionner</option>
                        </select>
                    </div>
                    <div>
                        <label>Heure : </label>
                        <select name="id_time" id="time">
                            <option value=''>Séléctionner</option>
                        </select>
                    </div>
                </div>

                <div class="card2">
                    <h4>Documents requis pour l'inscription</h4>
                    <ul>
                        <li>Reçu du rendez-vous.</li>
                        <li>Reçu de Pré-inscription.</li>
                        <li>Diplôme Baccalauréat original.</li>
                        <li>2 copies Baccalauréat.</li>
                        <li>2 copies CIN.</li>
                        <li>2 photos.</li>
                        <li>2 enveloppe timbré.</li>
                    </ul>
                </div>
            </div>

            <div class="button">
                <button class="btn btn-primary" type="submit">Confirmer</button>
            </div>
        </form>
    </section>

    @include('user.script')
</body>
</html>