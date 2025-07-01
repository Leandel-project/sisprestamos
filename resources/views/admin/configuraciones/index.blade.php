@extends('adminlte::page')

@section('content_header')
    <h1><b>Listado de configuraciones</b></h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Configuraciones registradas</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered table-hover table-striped table-sm">
                    <thead>
                        <tr>
                            <th style="text-align: center">Nro</th>
                            <th style="text-align: center">Nombre</th>
                            <th style="text-align: center">Descripción</th>
                            <th style="text-align: center">Teléfono</th>
                            <th style="text-align: center">Email</th>
                            <th style="text-align: center">Moneda</th>
                            <th style="text-align: center">Logo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($configuraciones as $configuracion)
                            <tr>
                                <td style="text-align: center">{{ $configuracion->id }}</td>
                                <td style="text-align: center">{{ $configuracion->nombre }}</td>
                                <td style="text-align: center">{{ $configuracion->descripcion }}</td>
                                <td style="text-align: center">{{ $configuracion->telefono }}</td>
                                <td style="text-align: center">{{ $configuracion->email }}</td>
                                <td style="text-align: center">{{ $configuracion->moneda }}</td>
                                <td style="text-align: center">{{ $configuracion->logo }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
@stop
