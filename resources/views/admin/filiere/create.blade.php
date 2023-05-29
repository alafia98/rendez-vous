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
								<h1 style="font-size: 1.7rem;">Créer une Filière</h1>
							</div>
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->
					<form action="{{url('upload_filiere')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="container-fluid">
                            <div class="card">
                                <div class="card-body">								
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="nom_fr">Nom en Français</label>
                                                <input type="text" name="nom_fr" id="nom_fr" class="form-control" style="color: black">	
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="nom_ar">Nom en Arabe</label>
                                                <input type="text" name="nom_ar" id="nom_ar" class="form-control" style="color: black">	
                                            </div>
                                        </div>									
                                    </div>
                                    <div class="mb-3">
                                        <label for="id_lieu">Lieu</label>
                                        <select name="id_lieu" id="id_lieu" class="form-control" style="color:white">
                                            <option selected>Ajouter Lieu</option>
                                            @foreach ($lieu as $lieu)
                                                <option value="{{$lieu->id}}">{{$lieu->nom_fr}} / {{$lieu->nom_ar}}</option>
                                            @endforeach
                                        </select>
                                    </div>									
                                </div>
                                </div>							
                            </div>
                            <div class="pb-5 pt-3">
                                <button class="btn btn-primary" type="submit">Créer</button>
                                <a href="{{url('show_filiere')}}" class="btn btn-primary">Dos</a>
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