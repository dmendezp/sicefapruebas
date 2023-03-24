@extends('agroindustria::layouts.master')

@section('content')
    
    

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('cssagroindustria/style.css')}}">
    

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
            <section class="taste bt">
                <div class="container">
                    <div class="global">
                        <h1 class="head111">UNIDADES</h1>
                        <br>
                        <br>
                        <section>
                        <div class="container">  
                        <div class="row">
                            <div class="col-3">
                                <form action="pasteleria" method="get">
                              <a href=""><button type="submit" class="pasteleria">PASTELERIA</button></a>  
                                </form>            
                </div>
        <div class="col-3">
        <form action="reposteria" method="get">
        <button type="submit" class="reposteria">REPOSTERIA</button>
        </form>
        </div>

        <div class="col-3">
        <form action="cafe" method="get">
        <button type="submit" class="cafe">CAFE</button>
        </form>
        </div>
        <div class="col-3">
        <form action="chocolateria" method="get">
        <button type="submit" class="chocolateria">CHOCOLATERIA</button>
        </form>
        </div>

        </div>
        </div>
            
        <br>
        <br>
                        <div class="container">  
                        <div class="row">
                        <div class="col-3">
        <form action="lacteos" method="get">
        <button type="submit" class="lacteos">LACTEOS</button>
        </form>
        </div>
        <div class="col-3">
        <form action="panaderia" method="get">
        <button type="submit" class="panaderia">PANADERIA</button>
        </form>
        </div>
        <div class="col-3">
        <form action="carnicos" method="get">
        <button type="submit" class="carnicos">CARNICOS</button>
        </form>
        </div>
        <div class="col-3">
        <form action="fruber" method="get">
        <button type="submit" class="fruber">FRUBER</button>
        </form>
        </div>

        </div>
        </div>
            
                </div>
                </section>
              
<

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