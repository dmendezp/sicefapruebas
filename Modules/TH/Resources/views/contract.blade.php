@extends('th::layouts.master')
@section('content')

<div class="contenedor_contract">
    <center>
    <form action="">
        <div class="tittle"><h1> REGISTROS DE CONTRATO </h1></div>
    <label></label>
        <input type="number" name="documento" class="form-control" style="width: 65%"  placeholder="Numero de identificación"><br>
        <label></label>
        <input type="text" name="nombre"  class="form-control" style="width: 65%" placeholder="Nombres y apellidos"><br>

        
        </select><br>
        
		<button>Consultar</button>
	<br>
		<td><button type="button" class="btn btn-success " data-bs-toggle="modal" ><i class="fa-solid fa-file-pdf"></i></button></td>
        </form>
        </center>
        </div> 
    

              

@endsection
