<div class="card">
    <div class="card-header">
        Counter
    </div>
    <div class="card-body">
        <p>Este é um contador que atualiza em tempo real com o estado no componente</p>
        <p>Valor atual: {{ $counter }}</p>
        <button type="button" class="btn btn-primary" wire:click="increment">Aumentar</button>
        <button type="button" class="btn btn-primary" wire:click="decrement">Diminuir</button>
    </div>
</div>
