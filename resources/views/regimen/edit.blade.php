

@extends('adminlte::page')

@section('title', 'regimen-edit')

@section('content_header')
    <h1>Editar regimen </h1>
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
        <form action="{{ url('/regimen/'.$regimen->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH')}}
            @include('regimen.form')
        </form>
        
    </div>
    

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Editar regimen'); </script>
@stop



