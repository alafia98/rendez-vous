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
					<form action="{{url('update_plan', $plan->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="container-fluid">
                            <div class="card">
                                <div class="card-body">								
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="id_fil">Filière</label>
                                            <select name="id_fil" id="id_fil" class="form-control" style="color:white">
                                                <option selected>Ajouter la filière</option>
                                                @foreach ($filiere as $filiere)
                                                    <option selected value="{{$filiere->id}}">{{$filiere->nom_fr}} / {{$filiere->nom_ar}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="id_lieu">Lieu</label>
                                            <select name="id_lieu" id="id_lieu" class="form-control" style="color:white">
                                                <option selected>Ajouter le lieu</option>
                                                @foreach ($lieu as $lieu)
                                                    <option selected value="{{$lieu->id}}">{{$lieu->nom_fr}} / {{$lieu->nom_ar}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="id_date">Jour</label>
                                            <select name="id_date" id="id_date" class="form-control" style="color:white">
                                                <option selected>Ajouter le Jour</option>
                                                @foreach ($date as $date)
                                                    <option selected value="{{$date->id}}">{{$date->jour}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="id_time">Heure</label>
                                            <select name="id_time" id="id_time" class="form-control" style="color:white">
                                                <option selected>Ajouter l'Heure</option>
                                                @foreach ($time as $time)
                                                    <option selected value="{{$time->id}}">{{$time->heure}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> 
                                </div>							
                            </div>
                            <div class="pb-5 pt-3">
                                <button class="btn btn-primary" type="submit">Créer</button>
                                <a href="{{url('show_plan')}}" class="btn btn-primary">Dos</a>
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