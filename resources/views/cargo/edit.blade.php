@extends('adminlte::page')

@section('title', 'cargo-edit')

@section('content_header')
    <h1>Editar cargo </h1>
@stop
@section('plugins.BsCustomFileInput', true)
@section('plugins.Select2', true)
@section('content')
<div class="container">
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="row">
        <form action="{{ url('/cargo/'.$cargo->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH')}}
            @include('cargo.form')
        </form>
        
    </div>
    

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Editar cargo'); </script>
@stop



