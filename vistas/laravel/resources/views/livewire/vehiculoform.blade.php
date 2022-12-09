<div class="card-body">
    @if (array_key_exists('message', $errores))
        <div class="alert alert-danger">
            <b>{{ $errores['message'] }}</b>
        </div>
    @endif
    <div class="mb-3">
        <label class="col-form-label" style="color: #FFFFFF;">Descripcion:</label>
        <input class="form-control" wire:model="datos.descripcion">
        @if (array_key_exists('message', $errores) && array_key_exists('descripcion', $errores['error']))
            <b class="text-danger">{{ $errores['error']['descripcion'][0] }}</b>
        @endif
    </div>
</div>
