
<div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group mr-2" role="group" aria-label="First group">
    <button type="button" wire:click="increment" class="btn btn-secondary">+</button>
    <span class="btn btn-info" style="min-width: 100px">{{ $count }}</span>
    <button type="button" wire:click="decrement" class="btn btn-secondary">-</button>
</div>
  </div>