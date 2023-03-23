@extends('empresa::layouts.adminlte')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
<li class="breadcrumb-item active">Nosotros</a></li>
@endsection
@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Lo Que Ofrecemos!</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
      </div><br>
    <div class="row justify-content-auto">
        <div class="card" style="width: 20rem;">
            <img src="https://static.wixstatic.com/media/30d63c_bb9cb5514b0546beafb671ec02cd2244~mv2.png/v1/fill/w_387,h_441,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/30d63c_bb9cb5514b0546beafb671ec02cd2244~mv2.png" class="card-img-top" alt="..." height="348" width="1000">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div><br>
                </div>
                  <div class="card" style="width: 20rem;">
                    <img src="https://static.wixstatic.com/media/30d63c_bb9cb5514b0546beafb671ec02cd2244~mv2.png/v1/fill/w_387,h_441,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/30d63c_bb9cb5514b0546beafb671ec02cd2244~mv2.png" class="card-img-top" alt="..." height="348" width="1000">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                  <div class="card" style="width: 20rem;">
                    <img src="https://static.wixstatic.com/media/30d63c_bb9cb5514b0546beafb671ec02cd2244~mv2.png/v1/fill/w_387,h_441,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/30d63c_bb9cb5514b0546beafb671ec02cd2244~mv2.png" class="card-img-top" alt="..." height="348" width="1000">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
            </div>
@endsection
