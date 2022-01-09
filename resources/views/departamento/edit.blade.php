@extends('adminlte::page')

@section('title', 'Departamento-edit')

@section('content_header')
    <h1>Editar departamento </h1>
@stop
@section('plugins.BsCustomFileInput', true)
@section('content')
<div class="container">
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="row">
        <form action="{{ url('/departamento/'.$departamento->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH')}}
            @include('departamento.form')
        </form>
        
    </div>
    

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Editar departamento'); </script>
@stop



