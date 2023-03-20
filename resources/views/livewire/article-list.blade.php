<div>
    @if(session('articleDestroyed'))
        <div class="alert alert-success">
            {{(session('articleDestroyed'))}}
        </div>
    @endif
    <table class="table table-striped border table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Creato il</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <th scope="row">{{$article->id}}</th>
                    <td>{{$article->title}}</td>
                    <td>{{$article->created_at}}</td>
                    <td>
                        <a href="{{route('article.edit', compact('article'))}}" class="btn btn-warning">Modifica</a>
                        <button class="btn btn-danger"wire:click="destroy({{$article}})">Cancella</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
</div>
