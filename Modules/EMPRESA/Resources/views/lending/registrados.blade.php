@extends('empresa::layouts.adminlte')

@section('css')
<link href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
<li class="breadcrumb-item active">Permisos Registrados</a></li>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $title }}</div>

                <div class="card-body">
                    <table id="datatable" class="table table-sm table-striped" >
						<thead class="bg-primary text-white">
                        <tr>
                            <th>Id</th>
                            <th>Documento</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Fecha</th>
                            <th>Id bpa</th>
                            <th>Estado</th>
                        </tr>
						</thead>
						<tbody>
                        <tr>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                            <td>Row 1 Data 3</td>
                            <td>Row 1 Data 4</td>
                            <td>Row 1 Data 5</td>
                            <td>Row 1 Data 6</td>
                            <td>Row 1 Data 7</td>
                            <td>Row 1 Data 8</td>
                        </tr>
						</tbody>
                    </table>
					@section('js')
					<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
					<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
					<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
                    <!-- jQuery -->
                    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
                    <!-- Bootstrap 4 -->
                    <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                    <!-- DataTables  & Plugins -->
                    <script src="{{ asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
                    <script src="{{ asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
                    <script src="{{ asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
                    <script src="{{ asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
                    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
                    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
                    <script src="{{ asset('AdminLTE/plugins/jszip/jszip.min.js') }}"></script>
                    <script src="{{ asset('AdminLTE/plugins/pdfmake/pdfmake.min.js') }}"></script>
                    <script src="{{ asset('AdminLTE/plugins/pdfmake/vfs_fonts.js') }}"></script>
                    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
                    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
                    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

                    <script>
                        $(document).ready(function () {
                            $('#datatable').DataTable({
                                "responsive": true, "lengthChange": false, "autoWidth": false,
                                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                              }).buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');

                        });</script>
					@endsection
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
