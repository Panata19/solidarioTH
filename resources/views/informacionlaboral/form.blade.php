<!-- Form Group (username)-->
<div class="mb-3">
    <label class="small mb-1" for="inputUsername">motivación</label>
    <input class="form-control" id="motivacion" name="motivacion" type="text" value="{{ isset($trabajador->motivacion)?$trabajador->motivacion:'' }}" />
</div>
<!-- Form Group (username)-->
<div class="mb-3">
    <label class="small mb-1" for="inputUsername">Nro informe</label>
    <input class="form-control" id="nro_informe" name="nro_informe" type="text" value="{{ isset($trabajador->nro_informe)?$trabajador->nro_informe:'' }}" />
</div>


{{-- With prepend slot, label and data-placeholder config --}}
<x-adminlte-select2 name="servicio_id" id="servicio_id" label="Servicico" label-class="text-lightblue"
     data-placeholder="{{ isset($cargo->servicio->nombre)?$cargo->servicio->part_presu:'Seleccione' }}">
    <x-slot name="prependSlot">
        <div class="input-group-text ">
            <i class="fas fa-fw fa-address-card"></i>
        </div>
    </x-slot>
    <option/>
    @foreach($servicios as $servicio)
        <option value="{{$servicio->id}}">{{$servicio->part_presu}}</option>
    @endforeach
</x-adminlte-select2>


<input id="trabajador_id" name="trabajador_id" type="hidden" value="{{$trabajador->id}}">


{{-- With prepend slot, label and data-placeholder config --}}
<x-adminlte-select2 name="cargo_id" id="cargo_id" label="Tipo de Regimen" label-class="text-lightblue"
     data-placeholder="{{ isset($cargo->departamento->nombre)?$cargo->departamento->nombre:'Seleccione' }}">
    <x-slot name="prependSlot">
        <div class="input-group-text ">
            <i class="fas fa-fw fa-address-card"></i>
        </div>
    </x-slot>
    <option/>
    @foreach($tiposRegimenes as $tiposRegimen)
        <option value="{{$tiposRegimen->id}}">{{$tiposRegimen->nombre}}</option>
    @endforeach
</x-adminlte-select2>

{{-- With prepend slot, label and data-placeholder config --}}
<x-adminlte-select2 name="tipos_regimen_id" id="tipos_regimen_id" label="Cargo" label-class="text-lightblue"
     data-placeholder="{{ isset($cargo->departamento->nombre)?$cargo->departamento->nombre:'Seleccione' }}">
    <x-slot name="prependSlot">
        <div class="input-group-text ">
            <i class="fas fa-fw fa-address-card"></i>
        </div>
    </x-slot>
    <option/>
    @foreach($cargos as $cargo)
        <option value="{{$cargo->id}}">{{$cargo->nombre}}</option>
    @endforeach
</x-adminlte-select2>



<!-- Save changes button-->
<button class="btn btn-success" type="submit">Guardar</button>