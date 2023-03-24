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
                <img src="https://marketplace.canva.com/EAE2_HrPNRU/1/0/1600w/canva-mascot-character-twitch-profile-picture-jF0b61iv4pQ.jpg">

                <div class="info">
                    <h2 class="name">Contador</h2>
                    <p class="bio">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>

                </div>

            </div>

            <div class="profile">
                <img src="https://marketplace.canva.com/EAEjwVtGaFM/2/0/1600w/canva-azul-y-negro-limpio-minimalista-imagen-de-perfil-de-twitch-e7SU6tIoyis.jpg">

                <div class="info">
                    <h2 class="name">Administrador Talento Humano</h2>
                    <p class="bio">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>

                </div>

            </div>

            <div class="profile">
                <img src="https://ehorus.com/wp-content/uploads/2018/06/administrador-de-sistemas-featured.png">

                <div class="info">
                    <h2 class="name">Administrador Gestion de calidad</h2>
                    <p class="bio">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>

                </div>

            </div>

            <div class="profile">
                <img src="https://marketplace.canva.com/EAE2_DLA9H8/1/0/1600w/canva-mascot-character-twitch-profile-picture-wD-8htUsoVw.jpg">

                <div class="info">
                    <h2 class="name">Secretario</h2>
                    <p class="bio">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
