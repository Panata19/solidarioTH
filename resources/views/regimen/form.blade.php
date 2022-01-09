<x-adminlte-input id="nombre" name="nombre" value="{{ isset($regimen->nombre)?$regimen->nombre:'' }}" label="Nombre regimen" placeholder="regimen" label-class="text-lightblue">
    <x-slot name="prependSlot">
        <div class="input-group-text">
            <i class="fas fa-user text-lightblue"></i>
        </div>
    </x-slot>
</x-adminlte-input>

<x-adminlte-button class="btn-flat" type="submit" label="Guardar" theme="success" icon="fas fa-lg fa-save"/>

