<div class="card-body">
    @if (array_key_exists('message', $errores))
        <div class="alert alert-danger">
            <b>{{ $errores['message'] }}</b>
        </div>
    @endif
    <div class="mb-3">
        <label class="col-form-label" style="color: #FFFFFF;">Fecha:</label>
        <input type="date" class="form-control" wire:model="datos.fecha">
        @if (array_key_exists('message', $errores) && array_key_exists('fecha', $errores['error']))
            <b class="text-danger">{{ $errores['error']['fecha'][0] }}</b>
        @endif
    </div>
    <div class="mb-3">
        <label class="col-form-label" style="color: #FFFFFF;">Destino:</label>
        <input class="form-control" wire:model="datos.destino">
        @if (array_key_exists('message', $errores) && array_key_exists('destino', $errores['error']))
            <b class="text-danger">{{ $errores['error']['destino'][0] }}</b>
        @endif
    </div>
    <div class="mb-3">
        <label class="col-form-label" style="color: #FFFFFF;">Distancia:</label>
        <input type="number" step="any" class="form-control" wire:model="datos.kilometros">
        @if (array_key_exists('message', $errores) && array_key_exists('kilometros', $errores['error']))
            <b class="text-danger">{{ $errores['error']['kilometros'][0] }}</b>
        @endif
    </div>
    <div class="mb-3">
        <label class="col-form-label" style="color: #FFFFFF;">Codigo de Empleado:</label>
        <input type="number" step="any" class="form-control" wire:model="datos.CodEmpleado">
        @if (array_key_exists('message', $errores) && array_key_exists('CodEmpleado', $errores['error']))
            <b class="text-danger">{{ $errores['error']['CodEmpleado'][0] }}</b>
        @endif
    </div>
    <div class="mb-3">
        <label class="col-form-label" style="color: #FFFFFF;">Codio de Vehiculo:</label>
        <input type="number" step="any" class="form-control" wire:model="datos.CodVehiculo">
        @if (array_key_exists('message', $errores) && array_key_exists('CodVehiculo', $errores['error']))
            <b class="text-danger">{{ $errores['error']['CodVehiculo'][0] }}</b>
        @endif
    </div>

</div>
