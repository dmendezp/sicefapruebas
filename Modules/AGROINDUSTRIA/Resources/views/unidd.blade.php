@extends('agroindustria::layouts.master')

@section('content')
    
    

    

<!-- nav -->
<nav class="navbar navbar-expand-sm navbar-Dark" style="background-color:white;">
        <a class="navbar-brand" href="#">K I R B I</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page">Inicio <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Unidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">movimientos</a>
                </li>
            </ul>
        </div>
    </nav>
<!-- /nav -->


<!-- tittle -->
  <section class="one">
             <div class="container">
                <div class="banner">
                <h2 class="bienvenido">
                        Unidades
                    </h2>
                    <h2 class="agrtittle">Productivas</h2>
                    </div>
                    <img class="imglogo" src="{{asset('imgagroindustria/logo1.png')}}" alt="">  
             </div>
  </section>
<!-- /tittle -->




<br><br><br>

<!-- tarjets - 1 fila -->
<div class="container">
  <div class="container text-center">
    <div class="row">


          <div class="col">
              <div class="card-client">
              <h2 class="tittleU">Pasteleria</h2>
              <br>
              <i  class="fas fa-birthday-cake fa-lg" style="color: #ffffff;"></i>
              <br><br>
              </div>
          </div>
      
  
          <div class="col">
              <div class="card-client">
              <h2 class="tittleU">Cafe</h2>
              <br>
              <i  class="fas fa-coffee fa-lg" style="color: #ffffff;"></i>
              <br><br>
              </div>
          </div>
    
  
          <div class="col">
              <div class="card-client">
              <h2 class="tittleU">Reposteria</h2>
              <br>
              <i  class="fas fa-cookie-bite fa-lg" style="color: #ffffff;"></i>
              <br><br>
              </div>
          </div>
  
  
          <div class="col">
              <div class="card-client">
              <h2 class="tittleU">Chocolateria</h2>
              <br>
              <i  class="fas fa-mug-hot fa-lg" style="color: #ffffff;"></i>
              <br><br>
              </div>
          </div>


     </div>
   </div>
</div>
<!-- /tarjets - 1 fila -->





<br><br><br>




<!-- tarjets - 2 fila -->
<div class="container">
  <div class="container text-center">
    <div class="row">

         <div class="col">
              <div class="card-client">
              <h2 class="tittleU">Lacteos</h2>
              <br>
              <i class="fas fa-cheese fa-lg" style="color: #ffffff;"></i>
              <br><br>
              </div>
          </div>

          <div class="col">
              <div class="card-client">
              <h2 class="tittleU">Panaderia</h2>
              <br>
              <i class="fas fa-bread-slice fa-lg" style="color: #ffffff;"></i>
              <br><br>
              </div>
          </div>

          <div class="col">
              <div class="card-client">
              <h2 class="tittleU">Carnicos</h2>
              <br>
              <i class="fas fa-drumstick-bite fa-lg" style="color: #ffffff;"></i>
              <br><br>
              </div>
          </div>

          <div class="col">
              <div class="card-client">
              <h2 class="tittleU">Fruver</h2>
              <br>
              <i class="fas fa-apple-alt fa-lg" style="color: #ffffff;"></i>
              <br><br>
              </div>
          </div>

     </div>
   </div>
</div>
<!-- /tarjets - 2 fila -->

<br><br><br>

<!-- footer -->
<footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-div">
                    <div class="social-media">
                         <h4>Mas Informacion</h4>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fab fa-telegram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>
                    
                    </div>
                </div>

            </div>
        </div>
    </footer>
<!-- /footer -->



              

  
@endsection