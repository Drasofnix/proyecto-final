<div class="card-body">
    @if (array_key_exists('message', $errores))
        <div class="alert alert-danger">
            <b>{{ $errores['message'] }}</b>
        </div>
    @endif
    <div class="mb-3">
        <label class="col-form-label" style="color: #FFFFFF;">Nombre:</label>
        <input class="form-control" wire:model="datos.nombre">
        @if (array_key_exists('message', $errores) && array_key_exists('nombre', $errores['errors']))
            <b class="text-danger">{{ $errores['error']['nombre'][0] }}</b>
        @endif
    </div>
    <div class="mb-3">
        <label class="col-form-label" style="color: #FFFFFF;">Apellidos:</label>
        <input class="form-control" wire:model="datos.apellido">
        @if (array_key_exists('message', $errores) && array_key_exists('apellido', $errores['errors']))
            <b class="text-danger">{{ $errores['errors']['apellido'][0] }}</b>
        @endif
    </div>
    <div class="mb-3">
        <label class="col-form-label" style="color: #FFFFFF;">Salario:</label>
        <input type="number" step="any" class="form-control" wire:model="datos.salario">
        @if (array_key_exists('message', $errores) && array_key_exists('salario', $errores['errors']))
            <b class="text-danger">{{ $errores['errors']['salario'][0] }}</b>
        @endif
    </div>
    <div class="mb-3">
        <label class="col-form-label" style="color: #FFFFFF;">Codio de oficina:</label>
        <input type="number" class="form-control" wire:model="datos.CodOficina">
        @if (array_key_exists('message', $errores) && array_key_exists('CodOficina', $errores['errors']))
            <b class="text-danger">{{ $errores['errors']['CodOficina'][0] }}</b>
        @endif
    </div>
    <div class="mb-3">
        <label class="col-form-label" style="color: #FFFFFF;">Fecha:</label>
        <input type="date" class="form-control" wire:model="datos.fecha">
        @if (array_key_exists('message', $errores) && array_key_exists('fecha', $errores['errors']))
            <b class="text-danger">{{ $errores['errors']['fecha'][0] }}</b>
        @endif
    </div>
</div>
