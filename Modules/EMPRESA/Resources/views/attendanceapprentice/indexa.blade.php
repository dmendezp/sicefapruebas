@extends('layouts.adminlte')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
<li class="breadcrumb-item active">Agregar Asistencia</a></li>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ $title }}</div>

                <div class="card-body">
					{!! Form::open(['url' => route('Asistenciaaprendices')]) !!}
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
                        <label for="document_number" class="form-label">Programa</label>
                        {!! Form::number('document_number',null, ['class'=>'form-control']) !!}
                        <br>
                    </div>
                    <div class="mb-6">
                        <label for="document_number" class="form-label">Fecha</label>
                        {!! Form::date('document_number',null, ['class'=>'form-control']) !!}
                        <br>
                    </div>
                    <div class="mb-6">
                        <label for="document_number" class="form-label">Hora Entrada</label>
                        {!! Form::time('document_number',null, ['class'=>'form-control']) !!}
                        <br>
                    </div>
                    <div class="mb-6">
                        <label for="document_number" class="form-label">Hora Salida</label>
                        {!! Form::time('document_number',null, ['class'=>'form-control']) !!}
                        <br>
                    </div>
                    {!! Form::submit('Agregar',['class' => 'btn btn-success','name' => 'agregar']) !!}
                    {!! Form:: close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
