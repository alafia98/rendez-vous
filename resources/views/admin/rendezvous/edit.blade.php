<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
                                            <div class="mb-3">
                                                <label for="code_rdv">Code Rendez-vous</label>
                                                <input value="{{$rendezvous->code_rdv}}" type="text" name="code_rdv" id="code_rdv" class="form-control" style="color: black">	
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="id_cal">Calendrier</label>
                                            <select name="id_cal" id="id_cal" class="form-control" style="color:white">
                                                @foreach ($calendrier as $calendrier)
                                                    <option selected value="{{$calendrier->id}}">{{$calendrier->date}} de {{$calendrier->heure_debut}} jusqu'à {{$calendrier->heure_fin}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="id_etd">Etudiant</label>
                                            <select name="id_etd" id="id_etd" class="form-control" style="color:white">
                                                @foreach ($etudiant as $etudiant)
                                                    <option selected value="{{$etudiant->id}}">{{$etudiant->cin}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> 
                                </div>							
                            </div>
                            <div class="pb-5 pt-3">
                                <button class="btn btn-primary" type="submit">Modifier</button>
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