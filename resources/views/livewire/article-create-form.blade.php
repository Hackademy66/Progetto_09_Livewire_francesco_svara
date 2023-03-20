<div>
    <form class="shadow p-5 rounded" wire:submit.prevent="store">
        @csrf

        @if(session('articleCreated'))
        <div class="alert alert-success">
            {{(session('articleCreated'))}}
        </div>
        @endif
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label> <span class="fw-bold text-danger">{{$title}}</span>
            <input type="text" wire:model="title" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Sottotitolo</label> <span class="fw-bold text-danger">{{$subtitle}}</span>
            <input type="text" wire:model="subtitle" class="form-control" id="subtitle">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Corpo del testo</label>
            <textarea id="body" wire:model="body" cols="30" rows="7" class="form-control"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Inserisci articolo</button>
    </form>
</div>
