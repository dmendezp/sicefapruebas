@extends('dicsena::layouts.master')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="dic.css">
@section('content')
<body>
<div class="container">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="notresult.blade.php"><p style="color: greenyellow;">Dicsena</p></a>
    </div>
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  </nav>
</div>
  <div>
  <div class="container text-center">
  <div class="row">
    <div class="col-4">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Resultados similares</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Palabras similares</h6>
    <ul class="list-group list-group-flush">
    <li class="list-group-item">Sugerencia 1</li>
    <li class="list-group-item">Sugerencia 2</li>
    <li class="list-group-item">Sugerencia 3</li>
  </ul>
    <a href="#" class="card-link"><form action="https://www.google.com/search" method="get">
  <input type="text" name="q">
  <button class="btn" type="submit">Buscar</button>
</form>
</a>
    
  </div>
</div>
    </div>
    <div class="col-8">
    <div class="card" style="width: 48rem;">
  <div class="card-body">
    <h5 class="card-title">PALABRA BUSCADA</h5>
    <ul class="list-group list-group-flush"></ul>
    <p style="color:red">lo sentimos no alojamos esa palabra en nuestro diccionario</p>
    <form>
  <label for="comentario">Escribe tu comentario:</label><br>
  <textarea id="comentario" name="comentario" rows="4" cols="50"></textarea><br>
  <button type="submit">Enviar</button>
</form>


    
    </div>
    
  </div>
</div>
  </div>
</body>
<script>function translateText() {
  // Obtener el elemento que contiene el texto a traducir
  var textElement = document.getElementById("texto-a-traducir");

  // Obtener el texto actual
  var text = textElement.innerHTML;

  // Traducir el texto a otro idioma (por ejemplo, a inglés)
  var translatedText = /* Aquí va el código para traducir el texto */;

  // Actualizar el contenido del elemento con el texto traducido
  textElement.innerHTML = translatedText;
}


@endsection