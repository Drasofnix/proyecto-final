<div>
    <button class="btn btn-success" wire:click="incrementar">INCREMENTART</button>
    <button class="btn btn-danger" wire:click="decrementar">DECREMENTAR</button>
    <h1>{{$valor}}</h1>
    <h1>Hola mi nombre es {{$nombre}}</h1>
    <input type="text" wire:model="nombre">
</div>
