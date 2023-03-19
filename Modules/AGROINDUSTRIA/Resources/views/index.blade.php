@extends('agroindustria::layouts.master')

@section('content')
    
    

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('cssagroindustria/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

    <section class="ganaderia" id="ganaderia">
        <div class="container">
            <h2 class="h2-sub1">
                <span class="fil">B</span>ienvenido
            </h2>
            <h1 class="head">Agroindustria</h1>
            <div class="he-des">
                <h5>Cefa</h5>
                <button class="learn-more"> Mas Informacion
</button>
            </div>
        </div>
            </section>
            <section>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('imgagroindustria/3.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('imgagroindustria/2.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('imgagroindustria/3.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
            </section>
           
           
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

    <script>

        const selectElement = function(element) {
            return document.querySelector(element);
        }


        let menuToggle = selectElement('.inicio-to');
        let body = selectElement('body');

        menuToggle.addEventListener('click', function(){
            body.classList.toggle('open');
        })

    </script>
@endsection