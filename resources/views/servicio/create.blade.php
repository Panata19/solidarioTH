@extends('adminlte::page')

@section('title', 'servicio nuevo')

@section('content_header')
    <h1>Servicio nuevo</h1>
@stop
@section('plugins.BsCustomFileInput', true)
@section('content')
<div class="container">
    <div class="row">

            <form action="{{url('/servicio')}}" method="post" enctype="multipart/form-data">
                @csrf
               @include('servicio.form')
               
            </form>
    </div>
    

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('servicio nuevo'); </script>
@stop


