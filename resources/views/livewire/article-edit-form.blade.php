<div>
    <form class="shadow p-5 rounded" wire:submit.prevent="">
        @csrf

        @if(session('articleUpdated'))
        <div class="alert alert-success">
            {{(session('articleUpdated'))}}
        </div>
        @endif
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label> <span class="fw-bold text-danger">{{$title}}</span>
            <input type="text" wire:model.debounce.1200ms="title" class="form-control @error('title') is-invalid @enderror" id="title">
            @error('title')
                <span class="fst-italic text-danger small">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Sottotitolo</label> <span class="fw-bold text-danger">{{$subtitle}}</span>
            <input type="text" wire:model.debounce.1200ms="subtitle" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle">
            @error('subtitle')
                <span class="fst-italic text-danger small">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Corpo del testo</label>
            <textarea id="body" wire:model.debounce.1200ms="body" cols="30" rows="7" class="form-control @error('body') is-invalid @enderror"></textarea>
            @error('body')
                <span class="fst-italic text-danger small">{{$message}}</span>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Aggiorna articolo</button>
    </form>
</div>
