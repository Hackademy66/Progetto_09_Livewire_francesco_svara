<x-layout>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">

            @if(session('articleUpdated'))
            <div class="alert alert-success">
                {{(session('articleUpdated'))}}
            </div>
            @endif

        <!-- Tabella degli articoli - COMPO LIVEWIRE -->
        @livewire('article-list')

        </div>
    </div>
</div>

</x-layout>