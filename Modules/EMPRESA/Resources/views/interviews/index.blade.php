@extends('empresa::layouts.adminlte')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
<li class="breadcrumb-item active">Registros</a></li>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ $title }}</div>

                <div class="card-body">
					{!! Form::open(['url' => route('Registros')]) !!}
                    <div class="mb-6">
                        <label for="document_number" class="form-label">Documento</label>
                        {!! Form::number('document_number',null, ['class'=>'form-control']) !!}
                        <br>
                    </div>
                    <div class="mb-6">
                        <label for="document_number" class="form-label">Nombre</label>
                        {!! Form::text('document_number',null, ['class'=>'form-control']) !!}
                        <br>
                    </div>
                    <div class="mb-6">
                        <label for="document_number" class="form-label">Correo</label>
                        {!! Form::text('document_number',null, ['class'=>'form-control']) !!}
                        <br>
                    </div>
                    <div class="mb-6">
                        <label for="document_number" class="form-label">Telefono</label>
                        {!! Form::number('document_number',null, ['class'=>'form-control']) !!}
                        <br>
                    </div>
                    <div class="mb-6">
                        <label for="document_number" class="form-label">Fecha</label>
                        {!! Form::date('document_number',null, ['class'=>'form-control']) !!}
                        <br>
                    </div>
                    <div class="mb-6">
                        <label for="document_number" class="form-label">Id Vacante</label>
                        {!! Form::text('document_number',null, ['class'=>'form-control']) !!}
                        <br>
                    </div>
                    <div class="mb-6">
                        <label for="document_number" class="form-label">Hoja de vida</label><br>
                        {!! Form::file('document_number',null, ['class'=>'form-control']) !!}
                        <br><br>
                    </div>
                    {!! Form::submit('Postulación',['class' => 'btn btn-warning','name' => 'postulación']) !!}
                    {!! Form:: close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


