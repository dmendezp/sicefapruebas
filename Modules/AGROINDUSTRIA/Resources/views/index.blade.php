@extends('agroindustria::layouts.master')

@section('content')
    
    

    
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
            </ul>
        </div>
    </nav>

    <section class="ganaderia" id="ganaderia">
        <div class="container">
            <h2 class="h2-sub1">
                <span class="fil">B</span>ienvenid@s
            </h2>
            <h1 class="head">Agroindustrial</h1>
        </div>
            </section>

    <section>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            <center>
            <div class="card mb-3" >
                <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('imgagroindustria/foto1.jpg')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                     <div class="col-md-8">
                <div class="card-body">
                        <h1 class="card-title">Nosotros</h1>
                        <p class="card-text">TLorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived 
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged.</p>
                </div>
            </div>
        </div>
</div>
<br>
            </center>
            <div class="container">
            <div class="profile">
                <img src="{{asset('imgagroindustria/db.jpeg')}}" alt="John" style="width:100%">
                <h1>Diego Bonilla</h1>
                    <p class="title">CEO & Founder, Example</p>
                    <p>Harvard University</p>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                <p><button>Contact</button></p>
            </div>
            <div class="profile">
                <img src="{{asset('imgagroindustria/jh.jpg')}}" alt="John" style="width:100%">
                <h1>Julian Ramirez</h1>
                    <p class="title">CEO & Founder, Example</p>
                    <p>Que Bendicion ve</p>
                    <p>Harvard University</p>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                <p><button>Contact</button></p>
            </div>
            <div class="profile">
                <img src="{{asset('imgagroindustria/cadena.jpeg')}}" alt="John" style="width:100%">
                <h1>David Cadena</h1>
                    <p class="title">CEO & Founder, Example</p>
                    <p>Harvard University</p>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                <p><button>Contact</button></p>
            </div>
            <div class="profile">
                <img src="{{asset('imgagroindustria/marin.jpeg')}}" alt="John" style="width:100%">
                <h1>Jennifer Marin</h1>
                    <p class="title">CEO & Founder, Example</p>
                    <p>Harvard University</p>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                <p><button>Contact</button></p>
            </div>
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