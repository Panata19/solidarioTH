@extends('adminlte::page')

@section('title', 'trabajador-edit')

@section('content_header')
    <h1>Editar tipos regimen </h1>
@stop
@section('plugins.BsCustomFileInput', true)
@section('plugins.Select2', true)
@section('content')
<div class="row">
    
<div class="col-xl-4">
    <!-- Profile picture card-->
    <div class="card mb-4 mb-xl-0">
        <div class="card-header">Foto de perfil</div>
        <div class="card-body text-center">
            <!-- Profile picture image-->
            <img class="img-account-profile rounded-circle mb-2"   src="{{ asset('storage').'/'.$trabajador->foto }}" width="200" alt="300"/>
            <!-- Profile picture help block-->
            <a href="{{ asset('storage').'/'.$trabajador->cv }}" target="_blank">Curriculo</a></td>
            <div class="small font-italic text-muted mb-4">JPG o PNG menor a  5 MB</div>
            <!-- Profile picture upload button-->   
        </div>
    </div>
   
</div>

<div class="col-xl-8">
    <!-- Account details card-->
    <div class="card mb-4">
        <div class="card-header">Datos personales</div>
        <div class="card-body">
            <form action="{{ url('/trabajador/'.$trabajador->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH')}}
                @include('trabajador.form')
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
    <script> console.log('Editar trabajador'); </script>
@stop
