<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puntos Ecológicos CEFA</title>
<!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="{{ asset('SenaAmbiental/imagenes/reciclar.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('SenaAmbiental/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('SenaAmbiental/css/estilo.css') }}">
</head>
<body>
 <!-- Navbar -->  
<header class="hero">
    <nav class="nav container">
        <img src="{{asset('SenaAmbiental/imagenes/svg/logo.png')}}" class="logo">

        <div class="nav_logo">
            <h2 class="nav_title" id="inicio">Residuos Sólidos</h2>
        </div>
        <ul class="nav_link nav_link--menu">
            <li class="nav_items">
                <a href="#solido" class="nav_links">¿Qué son?</a>
            </li>
            <li class="nav_items">
                <a href="#clasificacion" class="nav_links">Clasificación</a>
            </li>
            <li class="nav_items">
                <a href="#r" class="nav_links">3R</a>
            </li>
            <li class="nav_items">
                <a href="#codigo" class="nav_links">Resolución</a>
            </li>
            <li class="nav_items">
                <a href="{{route('cefa.welcome')}}" class="nav_links">Volver a SICEFA</a>
            </li>
        

            <img src="{{ asset('SenaAmbiental/imagenes/svg/close.svg') }}" class="nav_close" >
        </ul>

        <div class="nav_menu">
            <img src="{{ asset('SenaAmbiental/imagenes/svg/menu.svg') }}" class="nav_img">
        </div>
    </nav>
    <section class="hero_container container">
        <h1 class="hero_title">Punto Ecológico </h1>
        <p class="hero_paragraph">"La naturaleza no es un lujo, sino una necesidad del espíritu humano". </p>
        <a href="#" class="cta">Comienza Ahora</a>
    </section>
</header>
<!-- about -->
<main>
    <section>
        <div class="knowledge_container container" id="solido">
            <div class="knowledge_texts">
                <h2 class="subtitle">¿Qué son los Residuos Sólidos? </h2>
                <p class="residuo">Cualquier objeto, material, sustancia 
                    o elemento sólido resultante del consumo o uso de un
                     bien o actividad doméstica, industrial, comercial,
                      institucional o de servicios que el generador abandona, 
                    rechaza o entrega, además es susceptible de aprovechamiento
                     o transformación en un nuevo bien con valor económico o de disposición final. 
                </p>
                
            </div>
            <figure class="knowledge_picture">
                <img src="{{ asset('SenaAmbiental/imagenes/residuo.jpg') }}" alt="" class="knowledge_img">
            </figure>
        </div>

    </section>
    <section class="container about" id="r">
        <h2 class="subtitle">ECONOMÍA CIRCULAR</h2>
        <p class="about_paragraph"> "Gestión De Los Residuos  a Través De Las 3R".</p>
        <div class="about_main">
            <article class="about_icons">
                <img src="{{asset('SenaAmbiental/imagenes/svg/reducir.svg')}}" class="about_icon" >
                <h3 class="about_title">Reducir</h3>
                <p class="about_paragrah">Debemos minimizar nuestro impacto en el medio ambiente produciendo menos desechos. </p>
            </article>
            <article class="about_icons">
                <img src="{{asset('SenaAmbiental/imagenes/svg/reciclar.svg')}}" class="about_icon" >
                <h3 class="about_title">Recliclar</h3>
                <p class="about_paragrah">Cuando no puedas ni reducir tu cantidad de residuos ni reutilizarlos para darles un nuevo uso, opta por el reciclaje.</p>
            </article><article class="about_icons">
                <img src="{{asset('SenaAmbiental/imagenes/svg/reutilizar.svg')}}" class="about_icon" >
                <h3 class="about_title">Reutilizar</h3>
                <p class="about_paragrah">Tenemos que acostumbrarnos a prolongar la vida útil de los objetos y los materiales dándoles una segunda oportunidad.</p>
            </article>
        </div>
    </section>
<!-- knowledge -->
<section class="knowledge" id="codigo">
<div class="knowledge_container container">
    <div class="knowledge_texts">
        <h2 class="subtitle">Nuevo Código de Colores</h2>
        <p class="knowledge_paragraph">El Ministerio del Medio Ambiente expidió la Resolución No.
             2184 de 2019, que empezó a regir en el 2021, y establece el código de colores blanco,
              negro y verde para los contenedores de basura, canecas de reciclaje y bolsas que se 
              utilicen en la separación de residuos en la fuente, quien no separe en la fuente los 
              residuos sólidos, ni deposite selectivamente en un lugar destinado para tal efecto, se 
              le impondrá una multa general tipo 3, que equivale a 16 SMDLV.</p>
        
    </div>
    <figure class="knowledge_picture">
        <img src="{{asset('SenaAmbiental/imagenes/caneca.jpeg')}}" alt="" class="knowledge_img">
    </figure>
</div>
    </section>

<!-- Price  seccion de las tarjetas-->
    <section class="price container">
        <h2 class="subtitle">Residuos Sólidos Que Más Contaminan</h2>
        <div class="price_table">

            <div class="price_element">
                <article class="card">
                    <div class="temporary_text">
                    <img src="{{asset('SenaAmbiental/imagenes/icopor.jpg')}}" alt="" class="icopor">
                    </div>
                <div class="card_content">
                    <span class="card_title">Icopor</span>
                        <span class="card_subtitle">¿Cuánto tiempo necesita el icopor para descomponerse?</span>
                        <p class="card_description">Nunca se descompone en el ambiente, un vaso de icopor puede tardar más de 1.000 años en descomponerse, o simplemente no lo hará nunca.</p>
                </div>
                </article>
            </div>


            <div class="price_element price_element--best">
                <article class="card">
                    <div class="temporary_text">
                        <img src="{{asset('SenaAmbiental/imagenes/chicle.jpg')}}" alt="" class="icopor">
                    </div>
                <div class="card_content">
                    <span class="card_title">Goma de Mascar</span>
                        <span class="card_subtitle">¿Cuánto tiempo necesita un chicle para descomponerse?</span>
                        <p class="card_description">La goma de mascar tarda en descomponerse entre 3 y 5 años, tiene un impacto visual, además de ser perjudicial para la higiene y el medio ambiente.</p>
                    
                </div>
                </article>
            </div>
            
            <div class="price_element">
                <article class="card">
                    <div class="temporary_text">
                        <img src="{{asset('SenaAmbiental/imagenes/colilla.jpg')}}" alt="" class="cigarrillo">
                    </div>
                <div class="card_content">
                    <span class="card_title">Colila de Cigarrillo</span>
                        <span class="card_subtitle">¿Cuánto tiempo necesita una colilla de cigarrillo para descomponerse?</span>
                        <p class="card_description">Las colillas tardan hasta 10 años en degradarse y son perniciosas por las sustancias tóxicas y metales pesados que contienen.</p>
                    
                </div>
                </article>
        </div>
   
    <!-- Otra Sección -->
    
        <div class="price_table">

            <div class="price_element">
                <article class="card">
                    <div class="temporary_text">
                        <img src="{{asset('SenaAmbiental/imagenes/lata.jpg')}}" alt="" class="lata">
                    </div>
                <div class="card_content">
                    <span class="card_title">Latas de Aluminio</span>
                        <span class="card_subtitle">¿Cuánto tiempo necesita una lata de aluminio para descomponerse?</span>
                        <p class="card_description">Tarda unos 10 años en convertirse en óxido de hierro a la intemperie.Después necesitará unos 40 años más para degradarse completamente. </p>
                </div>
                </article>
            </div>


            <div class="price_element price_element--best">
                <article class="card">
                    <div class="temporary_text">
                        <img src="{{asset('SenaAmbiental/imagenes/botella.jpg')}}" alt="" class="botella">
                    </div>
                <div class="card_content">
                    <span class="card_title">Botellas de Plástico</span>
                        <span class="card_subtitle">¿Cuánto tiempo necesita una botella de plastico para descomponerse?</span>
                        <p class="card_description">Se calcula que el plástico tarda entre 100 y 1.000 años en descomponerse. Una botella  puede tardar 1.000 años en desaparecer.</p>
                    
                </div>
                </article>
            </div>
            
            <div class="price_element">
                <article class="card">
                    <div class="temporary_text">
                        <img src="{{asset('SenaAmbiental/imagenes/coca.jpg')}}" alt="" class="icopor">
                    </div>
                <div class="card_content">
                    <span class="card_title">Botellas de Vidrio</span>
                        <span class="card_subtitle">¿Cuánto tiempo necesita una botella de vidrio para descomponerse?</span>
                        <p class="card_description"> Tarda 4000 años en degradarse. El vidrio es muy frágil, pero también muy resistente. La naturaleza necesita 40 siglos para transformarlo. </p>
                    
                </div>
                </article>
        </div>
    </section>

<!-- Sección de testimonio -->

<section class="testimony"  id="clasificacion">
        <div class="testimony_container container">
            <img src="{{asset('SenaAmbiental/imagenes/svg/izquierda.svg')}}" class="testimony_arrow" id="before">
<!-- Caneca Blanca -->
            <section class="testimony_body  testimony_body--show" data-id="1">
                <div class="testimony_texts">
                    <h2 class="subtitle">Recipiente Color Blanco <span
                         class="testimony_course">Residuos Aprovechables </span></h2>
                         <p class="testimony_review">El color blanco será para depositar los residuos aprovechables como plástico, vidrio, metales, papel y cartón.</p>
                </div>
                <figure class="testimony_picture">
                    <img src="{{asset('SenaAmbiental/imagenes/1blanca.jpeg')}}" class="testimony_img">
                </figure>
            </section>
<!-- Caneca Verde -->
            <section class="testimony_body" data-id="2">
                <div class="testimony_texts">
                    <h2 class="subtitle">Recipiente Color Verde<span
                         class="testimony_course">Residuos Orgánicos Aprovechables</span></h2>
                         <p class="testimony_review">Para depositar residuos orgánicos aprovechables como los restos de comida, desechos agrícolas, etc.</p>
                </div>
                <figure class="testimony_picture">
                    <img src="{{asset('SenaAmbiental/imagenes/2verde.jpeg')}}"  class="testimony_img">
                </figure>
            </section>
<!-- Caneca Negra -->
            <section class="testimony_body" data-id="3">
                <div class="testimony_texts">
                    <h2 class="subtitle">Recipiente Color Negro<span
                         class="testimony_course">Residuos No Aprovechables</span></h2>
                         <p class="testimony_review">Para depositar los residuos no aprovechables como el papel higiénico; servilletas, papeles y cartones contaminados con comida; papeles metalizados, entre otros.</p>
                </div>
                <figure class="testimony_picture">
                    <img src="{{asset('SenaAmbiental/imagenes/3negra.png')}}" class="testimony_img">
                </figure>
            </section>

            <img src="{{asset('SenaAmbiental/imagenes/svg/derecha.svg')}}" class="testimony_arrow"  id="next">
        </div>
</section> 
<!-- seccion de residuos peligrosos -->
<!-- ensayo de las tarjetas -->
<section class="price container">
    <h2 class="subtitle">Residuos Sólidos De Manejo Especial o Peligrosos-CRETIP</h2>
    <div class="price_table">

        <div class="price_elemente">
            <div class="book">
                <p>CORROSIVO</p>
                <div class="cover">
                    <img src="{{asset('SenaAmbiental/imagenes/corrosivo.png')}}" width="100%">
                </div>
               </div>
        </div>


        <div class="price_element price_element--beste">
            <div class="book">
                <p>REACTIVO</p>
                <div class="cover">
                    <img src="{{asset('SenaAmbiental/imagenes/reactivo.png')}}" width="110%">
                </div>
               </div>
        </div>
        
        <div class="price_elemente">
            <div class="book">
                <p>EXPLOSIVO</p>
                <div class="cover">
                    <img src="{{asset('SenaAmbiental/imagenes/explosivo.png')}}" width="200%">
                </div>
               </div>
    </div>

<!-- Otra Sección -->

    <div class="price_table">

        <div class="price_elemente">
            <div class="book">
                <p>TÓXICO</p>
                <div class="cover">
                    <img src="{{asset('SenaAmbiental/imagenes/toxico.png')}}" width="170%">
                </div>
               </div>
        </div>


        <div class="price_element price_element--beste">
            <div class="book">
                <p>INFLAMABLE</p>
                <div class="cover">
                    <img src="{{asset('SenaAmbiental/imagenes/inflamable.png')}}" width="300%">
                </div>
               </div>
        </div>
        
        <div class="price_elemente">
            <div class="book">
                <p>PATÓGENO/
                    BIOLÓGICO
                </p>
                <div class="cover">
                    <img src="{{asset('SenaAmbiental/imagenes/patogeno.png')}}" width="100%">
                </div>
               </div>
    </div>


</div>

<section class="questions_offer">
    <h2 class="subtitle">¿Qué son Residuos Sólidos De Manejo Especial o Peligrosos?</h2>
    <p class="questions_copy">Son todos aquellos que de acuerdo a sus características CRETIP
         de composición físico-química, peso y volumen, requieren de un manejo especial o contienen un grado de peligrosidad. La disposición de estos residuos debe ser en áreas donde generalmente produzcan este tipo de residuo peligroso con alguna de las características nombradas. (DECRETO 4741 2005)</p>
</section>
</section>
</main>

<footer class="footer">
<section class="footer_container container">
<nav class="nav nav--footer">
<h2 class="footer_title">Puntos Ecológicos CEFA</h2>
<ul class="nav_link nav_link--footer">
    <li class="nav_items">
        <a href="#inicio" class="nav_links" id="fin">Inicio</a>
    </li>
    <li class="nav_items">
        <a href="#solido" class="nav_links">¿Qué son?</a>
    </li><li class="nav_items">
        <a href="#clasificacion" class="nav_links">Clasificación</a>
    </li>
    <li class="nav_items">
        <a href="#r" class="nav_links">3R</a>
    </li>
    <li class="nav_items">
        <a href="#codigo" class="nav_links">Resolución</a>
    </li>
    <li class="nav_items">
                <a href="{{route('cefa.welcome')}}" class="nav_links">Volver a SICEFA</a>
            </li>  
</ul>
</nav>
<form  class="footer_form">
    <h2 class="footer_newsletter">¡Saber Reciclar Es Cultura General!</h2>
</form>

</section>
<section class="footer_copy container">
    <div class="footer_social">
        <a href="https://www.facebook.com/cefahuila" class="footer_icons"><img src="{{asset('SenaAmbiental/imagenes/svg/facebook.svg')}}" class="footer_img"></a>
        <a href="https://twitter.com/CEFAcomunica" class="footer_icons"><img src="{{asset('SenaAmbiental/imagenes/svg/twiter.svg')}}" class="footer_img"></a>
    </div>
    <h3 class="footer_copyright">Derechos Reservados &copy; Sena Empresa</h3>
</section>
</footer>

<script src="{{asset('SenaAmbiental/js/slider.js')}}"></script>
<script src="{{asset('SenaAmbientaljs/menu.js')}}"></script>
</body>
</html>