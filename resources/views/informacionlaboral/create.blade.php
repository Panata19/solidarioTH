@extends('adminlte::page')

@section('title', 'tiposregimen-edit')

@section('content_header')
    <h1>Informacion laboral </h1>
@stop
@section('plugins.BsCustomFileInput', true)
@section('plugins.Select2', true)
@section('content')
<div class="row">
    


<div class="col-xl-8">
    <!-- Account details card-->
    <div class="card mb-4">
        <div class="card-header">{{$trabajador->nombre_completo}} &nbsp; (CC: {{$trabajador->cedula}})</div>
        <div class="card-body">
            <form action="{{url('/informacionlaboral')}}" method="post" enctype="multipart/form-data">
                @csrf
                @include('informacionlaboral.form')
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Editar tiposregimen'); </script>
@stop


