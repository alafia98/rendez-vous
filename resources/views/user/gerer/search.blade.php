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
    <h1 class="h1">Veuillez saisir les informations suivantes</h1>
    <section>
        <form class="search" action="{{url('search')}}" method="get" enctype="multipart/form-data">
            @csrf
            <div class="main">
                <div>
                    <label for="code_rdv">Code de confirmation :</label>
                    <input type="text" name="code_rdv" id="code_rdv">
                </div>
                <div>
                    <label for="cin">Numéro CIN :</label>
                    <input type="text"  name="cin" id="cin">
                </div>
            </div>
            <div class="button">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>

        {{-- <table>
            <thead>
                <tr>
                    <th>Code RDV</th>
                    <th>CIN</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <!-- Ajoutez d'autres colonnes selon vos besoins -->
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $result)
                <tr>
                    <td>{{ $result->code_rdv }}</td>
                    <td>{{ $result->cin }}</td>
                    <td>{{ $result->nom_fr }}</td>
                    <td>{{ $result->prenom_fr }}</td>
                    <!-- Affichez d'autres colonnes selon vos besoins -->
                </tr>
                @endforeach
            </tbody>
        </table> --}}
    </section>

    @include('user.script')
</body>
</html>