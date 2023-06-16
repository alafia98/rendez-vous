<!DOCTYPE html>
<html lang="en">
@include('user.css')
<body>
    @include('user.navbar')

    <section>
        <h1 class="title">Saisissez tous les données</h1>
        <form action="">
            <div class="body">
                <div class="card1">
                    <div>
                        <label for="nom_fr">Nom français :</label>
                        <input type="text" name="nom_fr">
                    </div>
                    <div>
                        <label for="prenom_fr">Prénom français :</label>
                        <input type="text" name="prenom_fr">
                    </div>
                    <div>
                        <label for="nom_fr">Nom arabe</label>
                        <input type="text" name="nom_fr">
                    </div>
                    <div>
                        <label for="nom_fr">Prénom arabe</label>
                        <input type="text" name="nom_fr">
                    </div>
                    <div>
                        <label for="cin">CIN :</label>
                        <input type="text" name="cin">
                    </div>
                    <div>
                        <label for="cne">CNE :</label>
                        <input type="text" name="cne">
                    </div>
                    <div>
                        <label for="email">Email :</label>
                        <input type="email" name="email">
                    </div>
                    <div>
                        <label for="telephone">Téléphoone :</label>
                        <input type="text" name="telephone">
                    </div>
                    <div>
                        <label for="filiere">Filière : </label>
                        <select name="filiere" id="">
                            <option value="">Séléctionnez</option>
                        </select>
                    </div>
                    <div>
                        <label for="lieu">Lieu : </label>
                        <select name="lieu" id="">
                            <option value="">Séléctionnez</option>
                        </select>
                    </div>
                    <div>
                        <label for="date">Date : </label>
                        <select name="date" id="">
                            <option value="">Séléctionnez</option>
                        </select>
                    </div>
                    <div>
                        <label for="heure_debut">Heure : </label>
                        <select name="heure_debut" id="">
                            <option value="">Séléctionnez</option>
                        </select>
                    </div>
                </div>

                <div class="card2">
                    <h1>Fournitures d'inscription</h1>
                    <ol>
                        <li>L'impression d'enregistrement.</li>
                        <li>Certificat original du baccalauréat.</li>
                        <li>Une copie du certificat de baccalauréat.</li>
                        <li>Une copie du contrat d'augmentation.</li>
                        <li>Une copie de la carte d'identité nationale.</li>
                        <li>Quatre photos pour identification.</li>
                    </ol>
                </div>
            </div>
            <div class="button">
                <a class="btn" href="{{url('confirmation')}}">Valider</a>
            </div>
        </form>
    </section>

    @include('user.script')
</body>
</html>