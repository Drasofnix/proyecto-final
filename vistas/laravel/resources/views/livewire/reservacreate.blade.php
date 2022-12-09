<div>
    <div class="card bg-dark">
        <div class="card-header">
            <h3 class="card-title">Registrar reservacion</h3>
            <form wire:submit.prevent='crear'>
                @include('livewire.reservaform')
                <div class="footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Crear</button>
                </div>
            </form>
        </div>
    </div>
</div>
