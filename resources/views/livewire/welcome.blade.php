<div wire:poll="refreshExample">
    <div class="btn-group">
        <button type="button" class="btn btn-primary" wire:click="clickExample">Action</button>

    </div>

    <div>
        Status: {{ isset($status) && $status ? 'OK' : 'NICHT OK' }} 
        <br>
        (( {{ $status . "" }} ))
    </div>
</div>
