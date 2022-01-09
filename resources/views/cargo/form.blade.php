<x-adminlte-input id="nombre" name="nombre" value="{{ isset($cargo->nombre)?$cargo->nombre:'' }}" label="Partida presupuestaria" placeholder="Partida presupuestaria" label-class="text-lightblue">
    <x-slot name="prependSlot">
        <div class="input-group-text">
            <i class="fas fa-user text-lightblue"></i>
        </div>
    </x-slot>
</x-adminlte-input>

{{-- With prepend slot, label and data-placeholder config --}}
<x-adminlte-select2 name="departamento_id" id="departamento_id" label="Departamento" label-class="text-lightblue"
     data-placeholder="{{ isset($cargo->departamento->nombre)?$cargo->departamento->nombre:'Seleccione' }}">
    <x-slot name="prependSlot">
        <div class="input-group-text ">
            <i class="fas fa-fw fa-address-card"></i>
        </div>
    </x-slot>
    <option/>
    @foreach($departamentos as $departamento)
        <option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
    @endforeach
</x-adminlte-select2>


<x-adminlte-button class="btn-flat" type="submit" label="Guardar" theme="success" icon="fas fa-lg fa-save"/>

