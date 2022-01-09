
@extends('adminlte::page')

@section('title', 'Departamento nuevo')

@section('content_header')
    <h1>Departamento nuevo</h1>
@stop
@section('plugins.BsCustomFileInput', true)
@section('content')
<div class="container">
    <div class="row">

            <form action="{{url('/departamento')}}" method="post" enctype="multipart/form-data">
                @csrf
               @include('departamento.form')
               
            </form>
    </div>
    

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Departamento nuevo'); </script>
@stop


