<div>
    <div class="card bg-dark">
        <div class="card-header">
            <h3 class="card-title">Registrar nuevo vehiculo</h3>
            <form wire:submit.prevent='crear'>
                @include('livewire.vehiculoform')
                <div class="footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
