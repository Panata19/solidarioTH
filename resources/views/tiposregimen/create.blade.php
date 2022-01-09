@extends('adminlte::page')

@section('title', 'tiposregimen nuevo')

@section('content_header')
    <h1>tipos Regimen nuevo</h1>
@stop
@section('plugins.BsCustomFileInput', true)
@section('plugins.Select2', true)
@section('content')
<div class="container">
    <div class="row">

            <form action="{{url('/tiposregimen')}}" method="post" enctype="multipart/form-data">
               @csrf
               @include('tiposregimen.form')
               
            </form>
    </div>
    

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('tiposregimen nuevo'); </script>
@stop
