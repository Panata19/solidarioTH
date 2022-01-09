
@extends('adminlte::page')

@section('title', 'servidor publico')
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugin', true)
@section('content_header')

    <div class="row">
        <h1>Servidor público </h1> 
        <a href="{{url('/trabajador/create')}}" class="btn btn-primary">Nuevo</a>
    </div>
    
@stop

@section('content')
{{-- Setup data for datatables --}}
@php
$heads = [
    
    'Foto',
    'Cédula',
    'Nombre completo',
    'correo',
    'teléfono',
    'CV',
    'Activo',
    ['label' => 'Acciones', 'no-export' => true],
];


$config = [
    
    'order' => [[1, 'asc']],
    'columns' => [null, null,null ,null, null,null, null, ['orderable' => false]],
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
        @foreach($trabajadores as $trabajador)
            <tr>
                <td>
                    
                        <img src="{{ asset('storage').'/'.$trabajador->foto }}" class="avatar-img img-fluid" width="50">
                    
                </td>
                <td>{{ $trabajador->cedula}}</td>
                <td>{{ $trabajador->nombre_completo }}</td>
                <td>{{ $trabajador->correo }}</td>
                <td>{{ $trabajador->telefono}}</td>
                
                <td>
                    <a href="{{ asset('storage').'/'.$trabajador->cv }}" target="_blank"><i class="fa fa-lg fa-fw fa-file-pdf"></i></a>
                </td>
                <td>
                    @if ($trabajador->activo == 1 )
                        <span class="badge badge-success">Activo</span>      
                    @else   
                        <span class="badge badge-danger">Desactivado</span>
                    @endif
                </td>
                    
                <td>
                    

                    <div class="row">
                    <a href="{{ url('/trabajador/'.$trabajador->id.'/edit')}}" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Editar"><i class="fa fa-lg fa-fw fa-pen"></i></a>
                        
                    @if ($trabajador->activo == 1 )
                    <form action="{{ url('/trabajador/'.$trabajador->id)}}" method="post">
                        @csrf
                        {{ method_field('DELETE')}}
                        <button type="submit" onclick="return confirm('Seguro que deseas desactivar ?')" 
                        class="btn btn-xs btn-default text-danger mx-1 shadow" title="Desactivar"><i class="fa fa-lg fa-fw fa-power-off"></i></button>
                        
                        
                    </form>     
                    @endif
                    <a href="{{ url('/informacion/nuevo/'.$trabajador->id)}}" class="btn btn-xs btn-default text-info mx-1 shadow" title="Información laboral"><i class="fa fa-lg fa-fw fa-briefcase"></i></a>   
                    <a href="{{ url('/informacion/nuevo/'.$trabajador->id)}}" class="btn btn-xs btn-default text-info mx-1 shadow" title="Ver"><i class="fa fa-lg fa-fw fa-eye"></i></a>    
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
