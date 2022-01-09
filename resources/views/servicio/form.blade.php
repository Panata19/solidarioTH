<x-adminlte-input id="part_presu" name="part_presu" value="{{ isset($servicio->part_presu)?$servicio->part_presu:'' }}" label="Partida presupuestaria" placeholder="Partida presupuestaria" label-class="text-lightblue">
    <x-slot name="prependSlot">
        <div class="input-group-text">
            <i class="fas fa-user text-lightblue"></i>
        </div>
    </x-slot>
</x-adminlte-input>

<x-adminlte-input id="grupo_ocupa" name="grupo_ocupa" value="{{ isset($servicio->grupo_ocupa)?$servicio->grupo_ocupa:'' }}" label="Grupo ocupacional" placeholder="Grupo ocupacional" label-class="text-lightblue">
    <x-slot name="prependSlot">
        <div class="input-group-text">
            <i class="fas fa-user text-lightblue"></i>
        </div>
    </x-slot>
</x-adminlte-input>

<x-adminlte-input id="grado" name="grado" value="{{ isset($servicio->grado)?$servicio->grado:'' }}" label="Grado de servicio" placeholder="Grado de servicio" label-class="text-lightblue">
    <x-slot name="prependSlot">
        <div class="input-group-text">
            <i class="fas fa-user text-lightblue"></i>
        </div>
    </x-slot>
</x-adminlte-input>


<x-adminlte-input type="number" step="0.01" id="remuneracion" name="remuneracion" value="{{ isset($servicio->remuneracion)?$servicio->remuneracion:'' }}" label="remuneracion servicio" placeholder="servicio" label-class="text-lightblue">
    <x-slot name="prependSlot">
        <div class="input-group-text">
            <i class="fas fa-user text-lightblue"></i>
        </div>
    </x-slot>
</x-adminlte-input>

<x-adminlte-button class="btn-flat" type="submit" label="Guardar" theme="success" icon="fas fa-lg fa-save"/>
