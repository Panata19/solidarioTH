@extends('adminlte::page')

@section('title', 'cargo nuevo')

@section('content_header')
    <h1>cargo nuevo</h1>
@stop
@section('plugins.BsCustomFileInput', true)
@section('plugins.Select2', true)
@section('content')
<div class="container">
    <div class="row">

            <form action="{{url('/cargo')}}" method="post" enctype="multipart/form-data">
                @csrf
               @include('cargo.form')
               
            </form>
    </div>
    

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('cargo nuevo'); </script>
@stop


