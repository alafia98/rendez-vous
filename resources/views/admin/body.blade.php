<div class="main-panel">
  <div class="content-wrapper">

    <div class="row">

      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5>Nombre Total des <span style="color: orange;">filières</span></h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
              </div>
              <div class="col-4 col-sm-10 col-xl-4 text-center text-xl-right">
                <p class="text-success ms-2 mb-0 font-weight-medium">{{$filiere->count()}}</p>
                <a href="{{url('show_filiere')}}"><h6 class="text-muted font-weight-normal">Détails</h6></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5>Nombre Total des <span style="color: red;">lieux</span></h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
              </div>
              <div class="col-4 col-sm-10 col-xl-4 text-center text-xl-right">
                <p class="text-success ms-2 mb-0 font-weight-medium">{{$lieu->count()}}</p>
                <a href="{{url('show_lieu')}}"><h6 class="text-muted font-weight-normal">Détails</h6></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5>Nombre Total des <span style="color: purple;">Rendez-vous</span></h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
              </div>
              <div class="col-4 col-sm-10 col-xl-4 text-center text-xl-right">
                <p class="text-success ms-2 mb-0 font-weight-medium">{{$rendezvous->count()}}</p>
                <a href="{{url('show_rendezvous')}}"><h6 class="text-muted font-weight-normal">Détails</h6></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2023</span>
    </div>
  </footer>