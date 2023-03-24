@extends('th::layouts.master')
@section('content')
   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Ingreso al CEFA ") }}   
                    <input type="date" > <button class="btn btn-warning">Consultar</button>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col"> # Documento</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Hora de ingreso</th>
      <th scope="col">Hora de salida</th>
      <th scope="col">Rol</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">123 </th>
      <td>Jhordan</td>
      <td>Salazar</td>
      <td>7:00</td>
      <td>16:00</td>
      <td>Aprendiz</td>
    </tr>
    <tr>
      <th scope="row">456 </th>
      <td>Daniel</td>
      <td>Guzman</td>
      <td>8:00</td>
      <td>15:30</td>
      <td>Aprendiz</td>
    </tr>
    <tr>
      <th scope="row">789</th>
      <td>Mayerli</td>
      <td>Castañeda</td>
      <td>8:00</td>
      <td>15:30</td>
      <td>Aprendiz</td>
    </tr>
    
  </tbody>
</table>
@endsection
