@extends('adminlte::page')

@section('title', 'Bienvenido')

@section('content_header')
    <h1>Bienvenido!</h1>
@stop

@section('content')
    <p>Has ingresado al administrador de Bodega</p>
      
@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
