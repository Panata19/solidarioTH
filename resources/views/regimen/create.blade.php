@extends('adminlte::page')

@section('title', 'Regimen nuevo')

@section('content_header')
    <h1>Regimen nuevo</h1>
@stop
@section('plugins.BsCustomFileInput', true)
@section('content')
<div class="container">
    <div class="row">

            <form action="{{url('/regimen')}}" method="post" enctype="multipart/form-data">
                @csrf
               @include('regimen.form')
               
            </form>
    </div>
    

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('regimen nuevo'); </script>
@stop


