@extends('layouts.adminlte')

@section('content')
    
    

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    

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
        <body>
</section>
        <section class="taste bt">
            <div class="container">
                <div class="global">
                    <h1 class="head111">HISTRIAL DE SOLICITUDES</h1> 
                    <div class="container">  
                        <div class="row">
                            <div class="col-6">
                                <form action="formunidad" method="get">
                                    <button type="submit" class="unidades1">MOVIMIENTOS</button>
                                </form>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>  
        </section>



        </body>
        
        
     
         
              

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


@endsection