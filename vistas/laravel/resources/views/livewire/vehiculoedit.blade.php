<div>
    <div class="card bg-dark">
        <div class="card-header">
            <h3 class="card-title">Editar vehiculo</h3>
            <form wire:submit.prevent='edit'>
                @include('livewire.vehiculoform')
                <div class="footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>
