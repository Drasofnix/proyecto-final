<div>
    <div class="card bg-dark">
        <div class="card-header">
            <h3 class="card-title">Registrar empleado</h3>
            <form wire:submit.prevent='crear'>
                @include('livewire.empleadoform')
                <div class="footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Crear</button>
                </div>
            </form>
        </div>
    </div>
</div>
