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
					<div class="container-fluid my-1">
						<div class="row mb-3">
							<div class="col-sm-3" style="margin:20px auto;">
								<h1 style="font-size: 1.7rem;">Les Filières</h1>
							</div>
							<input type="text" style="width: 30%; margin:15px auto; text-align:center;" name="table_search" class="form-control" placeholder="Chercher ici ...">
							<div class="col-sm-3 text-right" style="margin:20px auto;">
								<a href="{{url('create_filiere')}}" class="btn btn-primary">Nouvelle Filière</a>
							</div>
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->
					<div class="container-fluid">
						<div class="card">
							<div class="card-body table-responsive p-0">								
								<table class="table table-hover text-nowrap">
									<thead align="center">
										<tr>
											<th width="100">ID</th>
											<th>Nom_fr</th>
											<th>Nom_ar</th>
											<th width="100">Action</th>
										</tr>
									</thead>
									<tbody align="center">
										@foreach ($filiere as $filiere)
											
										<tr>
											<td>{{$filiere->id}}</td>
											<td>{{$filiere->nom_fr}}</td>
											<td>{{$filiere->nom_ar}}</td>
											<td>
												<a href="{{url('edit_filiere', $filiere->id)}}" class="text-success w-4 h-4 mr-1">
													<svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
													</svg>
												</a>
												<a href="{{url('delete_filiere', $filiere->id)}}" class="text-danger w-4 h-4 mr-1">
													<svg wire:loading.remove.delay="" wire:target="" class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path ath fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
												  	</svg>
												</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>										
							</div>
							<div class="card-footer clearfix">
								<ul class="pagination pagination m-0 float-right">
								  <li class="page-item"><a class="page-link" href="#">«</a></li>
								  <li class="page-item"><a class="page-link" href="#">1</a></li>
								  <li class="page-item"><a class="page-link" href="#">2</a></li>
								  <li class="page-item"><a class="page-link" href="#">3</a></li>
								  <li class="page-item"><a class="page-link" href="#">»</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /.card -->
				</section>
				<!-- /.content -->
            </div>
       </div>
          <!-- partial -->
        @include('admin.script')
  </body>
</html>