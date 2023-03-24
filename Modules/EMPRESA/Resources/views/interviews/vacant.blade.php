@extends('empresa::layouts.adminlte')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
<li class="breadcrumb-item active">Vacantes</a></li>
@endsection
@section('content')

<link href="{{ asset('empresa/css/style.css')}}" rel="stylesheet">
<div id="contactos" class="team">
<h1><strong><em><span>Vacantes</span></strong></em></h1>

        <div class="team_box">
            <div class="profile">
                <img src="https://www.thomsonreuters.com.ar/content/dam/ewp-m/images/argentina/es/artworked-images/contador-del-futuro.jpg.transform/rect-768/q90/image.jpg">

                <div class="info">
                    <h2 class="name">Contador</h2>
                    <p class="bio">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                    <div class="team_icon">
                        <i class="far fa-eye fa-lg" style="color: #1e55b3;"></i>
                    </div>

                </div>

            </div>

            <div class="profile">
                <img src="https://uploads-ssl.webflow.com/5fae79706d8334674145afcd/60d0f685e4661743bd213cb3_Effective-school-administration-supports-databased-decision-making_896_6065058_0_14102171_1000.jpeg">

                <div class="info">
                    <h2 class="name">Administrador Talento Humano</h2>
                    <p class="bio">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                    <div class="team_icon">
                        <i class="far fa-eye fa-lg" style="color: #1e55b3;"></i>
                    </div>

                </div>

            </div>

            <div class="profile">
                <img src="https://ingeniia.com/wp-content/uploads/2022/07/01-Blog-UL-15-1200x600.png">

                <div class="info">
                    <h2 class="name">Administrador Gestion de calidad</h2>
                    <p class="bio">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                    <div class="team_icon">
                        <i class="far fa-eye fa-lg" style="color: #1e55b3;"></i>
                    </div>

                </div>

            </div>

            <div class="profile">
                <img src="https://www.nosequeestudiar.net/site/assets/files/55272/secretario-secretaria_hr.jpg">

                <div class="info">
                    <h2 class="name">Secretario</h2>
                    <p class="bio">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                    <div class="team_icon">
                        <i class="far fa-eye fa-lg" style="color: #1e55b3;"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
