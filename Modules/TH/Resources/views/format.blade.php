@extends('layouts.app')
@section('content')
<style>
.grid-container {
  display: grid;
  gap: 10px;
  background-color: black;
  padding: 10px;
  width: 95%;
}

.grid-item {
  background-color: gray;
  text-align: center;
  padding: 3px;
  font-size: 18px;
}

.item1 {
  grid-column: 1 / span 3;
  grid-row: 1;
}

.item2 {
  grid-column: 1;
  grid-row: 2 / span 1;
}

.item3 {
  grid-column: 2/ span 1;
  grid-row: 2;
}
.item4 {
  grid-column: 3 / span 1;
  grid-row: 2;
}
.item5 {
  grid-column: 1 / span 3;
  grid-row: 3;
}

.item6 {
  grid-column: 1 / span 1;
  grid-row: 4;
}

.item7 {
  grid-column: 2 / span 1;
  grid-row: 4;
}

.item8 {
  grid-column: 3 / span 1;
  grid-row: 4;
}

.item9 {
  grid-column: 1 / span 3;
  grid-row: 5;
}

.item10 {
  grid-column: 1 / span 3;
  grid-row: 6;
}

.item11 {
  grid-column: 2 / span 2;
  grid-row: 7;
}

.item12 {
  grid-column: 1 / span 1;
  grid-row: 7;
}

.item13 {
  grid-column: 1 / span 2;
  grid-row: 8;
}

.item14 {
  grid-column: 3 / span 1;
  grid-row: 8;
}

.item15 {
  grid-column: 1/ span 1;
  grid-row: 9;
}

.item16 {
  grid-column: 2 / span 1;
  grid-row: 9;
}

.item17 {
  grid-column: 3 / span 1;
  grid-row: 9;
}

.item18 {
  grid-column: 1 / span 1;
  grid-row: 10;
}

.item19 {
  grid-column: 2 / span 2;
  grid-row: 10;
}
</style>
<br>
<br>


<center>
<div class="grid-container">

  <div class="grid-item item1"><br><h1> <strong> SOLICITUD Y AUTORIZACION DE PERMISO </strong></h1> <br>
<h2 > <strong>Centro de formación agroindustrial "La Angostura" <br>
    Sena-Regional Huila </strong>
</h2></div>

  <div class="grid-item item2"><label> <h5>Solicitante </h5></label>
<input type="text" class="form-control" > <br> <label><h5>Cargo</h5></label>
<input type="text" class="form-control" ></div>

  <div class="grid-item item3"><label><h5> C.C</h5> </label>
<input type="number" class="form-control"  > <br> <label><h5>Dependencia </h5></label>
<input type="text" class="form-control" ></div>

  <div class="grid-item item4"><br><input type="submit"  class="btn btn-success" value="Compensatorio">
  <br><br><input type="submit"  class="btn btn-success" value="Renumerar"></div>

  <div class="grid-item item5"><h2><strong> CLASE DE PERMISO</strong></h2> <br> <label><h5><strong> Legales e institucionales: </strong></h5></label>
<select class="form-control" >

  <option class="text-center"> Select </option>


</select> <br> <label><h5><strong>Por necesidad de los servicios públicos: </strong> </h5></label>
<select class="form-control" >

  <option class="text-center"> Select </option>


</select></div>
  
  <div class="grid-item item6"><H3>PERIODO POR LA CUAL SE SOLICITA EL PERMISO <br> <h5>Diligenciar solo en caso que el permiso sea inferior a un dia: </h5></H3></div>

  <div class="grid-item item7"><h4>DESDE</h4> <input type="date"></div>

  <div class="grid-item item8"><h4>HASTA</h4> <input type="date"></div>

  <div class="grid-item item9"><h5><strong>Objetivo:</strong></h5></label>
<input type="text" class="form-control" ></div>

  <div class="grid-item item10"><h5><strong>Forma de como compensará el tiempo dejado de trabajar:</strong> <br> (Si aplica) </h5></label>
<input type="text" class="form-control" ></div>

  <div class="grid-item item12"><label> <h5>Ciudad</h5></label>
<input type="text" class="form-control" > <br> <h5>Fecha</h5> <input type="date"></div>

  <div class="grid-item item11"><label><br> <h5>Firma del solicitante</h5></label>
<input type="text" class="form-control" ></div>

  <div class="grid-item item13"><br><h5><strong>CONCEPTO DEL SUPERIOR INMEDIATO:</strong></h5></label>
<input type="text" class="form-control" ></div>

  <div class="grid-item item14"><h5><strong>Visto bueno</strong></h5><input type="submit"  class="btn btn-warning" value="Si"><br><br><input type="submit"  class="btn btn-warning" value="No"></div>

  <div class="grid-item item15"><h5><strong>Nombre:</strong></h5></label>
<input type="text" class="form-control" ></div>

  <div class="grid-item item16"><h5><strong>FIRMA SUPERIOR INMEDIATO:</strong></h5></label>
<input type="text" class="form-control" ></div>

  <div class="grid-item item17"><h5><strong>Aprobación</strong></h5><input type="submit"  class="btn btn-warning" value="Si"><br><br><input type="submit"  class="btn btn-warning" value="No"></div>

  <div class="grid-item item18"><label> <h5>Ciudad</h5></label>
<input type="text" class="form-control" > <br> <h5>Fecha</h5> <input type="date"></div>

<div class="grid-item item19"><h5><strong>FIRMA SUBDIRECTOR:</strong></h5></label>
<input type="text" class="form-control" ></div>




</div>
                </div>
            </div>
        </div>
    </div>
@endsection