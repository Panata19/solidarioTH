@extends('adminlte::page')

@section('title', 'departamento')
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugin', true)
@section('content_header')

    <div class="row">
        <h1>Departamento</h1> 
        <a href="{{url('/departamento/create')}}" class="btn btn-primary">Nuevo</a>
    </div>
    
@stop

@section('content')
{{-- Setup data for datatables --}}
@php
$heads = [
    
    'Nombre',
    ['label' => 'Acciones', 'no-export' => true],
];


$config = [
    
    'order' => [[1, 'asc']],
    'columns' => [null, ['orderable' => false]],
    'responsive' => true,
    'autoWidth' => true,
    'language'=> [
            "lengthMenu"=> "Mostrar _MENU_ registro por pagina",
            "zeroRecords"=> "No existe informacion - lo siento",
            "info"=> "Mostrando la pagina _PAGE_ of _PAGES_",
            "infoEmpty"=> "No encontrado",
            "infoFiltered"=> "(filtrado de _MAX_ total records)",
            "search"=> "Buscar:",
            "paginate" => [
                "next"=> "Siguiente",
                "previous" => "Anterior"
            ]
        ],
    
];

@endphp

<div class="container">
    <x-adminlte-datatable id="table1" :heads="$heads" :config="$config">
        @foreach($departamentos as $departamento)
            <tr>
                
                <td>{{ $departamento->nombre}}</td>
                
                <td>
                    <div class="row">
                    <a href="{{ url('/departamento/'.$departamento->id.'/edit')}}" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Editar"><i class="fa fa-lg fa-fw fa-pen"></i></a>
                        
                        
                        <form action="{{ url('/departamento/'.$departamento->id)}}" method="post">
                            @csrf
                            {{ method_field('DELETE')}}
                            <button type="submit" onclick="return confirm('Seguro que deseas borrar?')" 
                            class="btn btn-xs btn-default text-danger mx-1 shadow" title="Eliminar"><i class="fa fa-lg fa-fw fa-trash-alt"></i></button>
                            
                            
                        </form>
                        
                    </div>
                </td>
                
            </tr>
        @endforeach
    </x-adminlte-datatable>
    
</div>




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
