@extends('hdc::layouts.adminlite')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
          <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">CONTACTENOS:</h1>
            <p class="lead my-3">Ingrese sus datos para recibir mas información respecto a Huella de Carbono </p>
          </div>
        </div>
        <center> <div class="container">
            <main>
              <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="{!! asset('imagenes/campo.png') !!} " width="100px" height="100px">
              </div>
                <div class="col-md-7 col-lg-8">
                  <form class="needs-validation" novalidate>
                    <div class="row g-3">
                      <div class="col-sm-6">
                        <label for="firstName" class="form-label">Primer nombre</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                          Valid first name is required.
                        </div>
                      </div>
          
                      <div class="col-sm-6">
                        <label for="lastName" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                          Valid last name is required.
                        </div>
                      </div>
          
                      <div class="col-12">
                        <label for="username" class="form-label">Usuario</label>
                        <div class="input-group has-validation">
                          <span class="input-group-text">@</span>
                          <input type="text" class="form-control" id="username" placeholder="" required>
                        <div class="invalid-feedback">
                            Your username is required.
                          </div>
                        </div>
                      </div>
          
                      <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        <div class="invalid-feedback">
                          Please enter a valid email address for shipping updates.
                        </div>
                      </div>
          
                      <div class="col-12">
                        <label for="address" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="address" placeholder="" required>
                        <div class="invalid-feedback">
                          Please enter your shipping address.
                        </div>
                    </div>
                      <div class="col-md-6">
                        <label for="country" class="form-label">Pais/Ciudad</label>
                        <input type="text" class="form-control" id="address" placeholder="" required>
                        <div class="invalid-feedback">
                          Please enter your shipping address.
                        </div>
                      </div>
          
                      <div class="col-md-6">
                        <label for="state" class="form-label">Departamento</label>
                        <input type="text" class="form-control" id="address" placeholder="" required>
                         <div class="invalid-feedback">
                              Please enter your shipping address.
                            </div>
                      </div>
                    </div>
                    <br></br>
                    <button class="w-100 btn btn-primary btn-lg" type="submit">Enviar</button>
                    </form> 
                    </div>
                    </div>
                    </main>
                    </div>
                    </center>
                </br>
            </br>

</body>
</html>
@endsection