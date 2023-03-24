@extends('hdc::layouts.master')

@section('content')

<link rel="stylesheet" href="../hdc/add.css">

    <center><h1>HUELLA DE CARBONO</h1></center>
    

    <p>
        Bienvenidos A Huella de Carbono Cefa
    </p>
    <br>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="container" id="container">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://4.bp.blogspot.com/-A2XxBWAR1vo/VhBiUELBnpI/AAAAAAAAAVQ/ZwqTeB84NyA/s1600/LA_CASONA.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.sena.edu.co/es-co/Noticias/NoticiasImg/fotovoltaica_08172022.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV1kfe6skEjuy462onTYLQhH_XMbG1qPXOPQ&usqp=CAU" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
</div>

@endsection
