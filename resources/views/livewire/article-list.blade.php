<div>
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
                        <button class="btn btn-warning">Modifica</button>
                        <button class="btn btn-danger">Cancella</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
</div>
