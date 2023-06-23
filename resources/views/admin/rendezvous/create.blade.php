<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        @if (Session::has('message'))
            <script>
                swal('Message', '{{Session::get('message')}}', 'success', {
                    button:true,
                    button:"ok",
                })
            </script>
        @endif
       <div class="container-fluid page-body-wrapper content-wrapper">
            <div class="container">
				<!-- Content Header (Page header) -->
				<section class="content-header">					
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6" style="margin: 20px 0;">
								<h1 style="font-size: 1.7rem;">Créer un Rendez-vous</h1>
							</div>
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->
					<form action="{{url('upload_rendezvous')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="container-fluid">
                            <div class="card">
                                <div class="card-body">								
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="">CIN</label>
                                            <input type="text" name="cin" id="cin" class="form-control" style="color: black">	
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">CNE</label>
                                            <input type="text" name="cne" id="cne" class="form-control" style="color: black">	
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Nom_fr</label>
                                            <input type="text" name="nom_fr" id="nom_fr" class="form-control" style="color: black">	
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Prenom_fr</label>
                                            <input type="text" name="prenom_fr" id="prenom_fr" class="form-control" style="color: black">	
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Nom_ar</label>
                                            <input type="text" name="nom_ar" id="nom_ar" class="form-control" style="color: black">	
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Prenom_ar</label>
                                            <input type="text" name="prenom_ar" id="prenom_ar" class="form-control" style="color: black">	
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">téléphone</label>
                                            <input type="number" name="telephone" id="telephone" class="form-control" style="color: black">	
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">email</label>
                                            <input type="email" name="email" id="email" class="form-control" style="color: black">	
                                        </div>
                                        <div class="col-md-6">
                                            <label for="id_fil">Filière</label>
                                            <select name="id_fil" id="id_fil" class="form-control" style="color:white">
                                                <option selected>Sélectionner filière</option>
                                                @foreach ($filieres as $id => $filiere)
                                                    <option value="{{$id}}">{{$filiere}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="id_lieu">Lieu :</label>
                                            <select name="id_lieu" id="id_lieu" class="form-control" style="color:white">
                                                <option selected>Sélectionner Lieu</option>
                                                @foreach ($lieus as $id => $lieu)
                                                    <option value="{{$id}}">{{$lieu}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> 
                                </div>							
                            </div>
                            <div class="pb-5 pt-3">
                                <button class="btn btn-primary" type="submit">Créer</button>
                                <a href="{{url('show_rendezvous')}}" class="btn btn-primary">Dos</a>
                            </div>
                        </div>
                    </form>
					<!-- /.card -->
				</section>
				<!-- /.content -->
            </div>
       </div>
          <!-- partial -->
        @include('admin.script')
  </body>
</html>