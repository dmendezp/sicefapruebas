@extends('layouts.adminlite')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $title }}</div>

                <div class="card-body">
                    {{$resultado}}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection