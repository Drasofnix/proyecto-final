<div class="card-body">
    @if (array_key_exists('message', $errores))
        <div class="alert alert-danger">
            <b>{{ $errores['message'] }}</b>
        </div>
    @endif
    <div class="mb-3">
        <label class="col-form-label" style="color: #FFFFFF;">Direccion:</label>
        <input class="form-control" wire:model="datos.Direccion">
        @if (array_key_exists('message', $errores) && array_key_exists('Direccion', $errores['errors']))
            <b class="text-danger">{{ $errores['errors']['Direccion'][0] }}</b>
        @endif
    </div>
    <div class="mb-3">
        <label class="col-form-label" style="color: #FFFFFF;">Localidad:</label>
        <input class="form-control" wire:model="datos.Localidad">
        @if (array_key_exists('message', $errores) && array_key_exists('Localidad', $errores['errors']))
            <b class="text-danger">{{ $errores['errors']['Localidad'][0] }}</b>
        @endif
    </div>
    <div class="mb-3">
        <label class="col-form-label" style="color: #FFFFFF;">Provincia:</label>
        <input class="form-control" wire:model="datos.Provincia">
        @if (array_key_exists('message', $errores) && array_key_exists('Provincia', $errores['errors']))
            <b class="text-danger">{{ $errores['errors']['Provincia'][0] }}</b>
        @endif
    </div>
</div>
