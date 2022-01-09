@extends('adminlte::page')

@section('title', 'tiposregimen-edit')

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
            <img class="img-account-profile rounded-circle mb-2" src="{{asset('libs/assets/img/illustrations/profiles/profile-1.png')}}" alt="" />
            <!-- Profile picture help block-->
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
            <form action="{{url('/trabajador')}}" method="post" enctype="multipart/form-data">
                @csrf
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
    <script> console.log('Editar tiposregimen'); </script>
@stop
