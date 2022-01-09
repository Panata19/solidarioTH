<x-adminlte-input id="nombre" name="nombre" value="{{ isset($tiposregimen->nombre)?$tiposregimen->nombre:'' }}" label="Nombre" placeholder="Nombre" label-class="text-lightblue">
    <x-slot name="prependSlot">
        <div class="input-group-text">
            <i class="fas fa-user text-lightblue"></i>
        </div>
    </x-slot>
</x-adminlte-input>

{{-- With prepend slot, label and data-placeholder config --}}
<x-adminlte-select2 name="regimen_id" id="regimen_id" label="Regimen" label-class="text-lightblue"
     data-placeholder="{{ isset($tiposregimen->regimen->nombre)?$tiposregimen->regimen->nombre:'Seleccione' }}">
    <x-slot name="prependSlot">
        <div class="input-group-text ">
            <i class="fas fa-fw fa-address-card"></i>
        </div>
    </x-slot>
    <option/>
    @foreach($regimenes as $regimen)
        <option value="{{$regimen->id}}">{{$regimen->nombre}}</option>
    @endforeach
</x-adminlte-select2>


<x-adminlte-button class="btn-flat" type="submit" label="Guardar" theme="success" icon="fas fa-lg fa-save"/>

