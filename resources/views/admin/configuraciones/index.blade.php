@extends('adminlte::page')

@section('content_header')
    <h1><b>Lista de configuraciones </b></h1>
    <hr>
@stop

@section('content')
    <div class="row">
        <ul>
      @foreach($configuracion as $config)
        <li>{{ $config->nombre }}</li>
      @endforeach
</ul>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop