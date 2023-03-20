<x-layout>
<h1>Modifica Articolo</h1>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                
                <!-- Form e COMPO Livewire -->
                @livewire('article-edit-form', ['article' => $article])
            </div>
        </div>
    </div>

</x-layout>