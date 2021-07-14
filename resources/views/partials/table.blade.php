<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Quantité</th>
                <th scope="col">Lien Image</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ingredients as $ingredient)
                <tr>
                    <th scope="row">{{$ingredient->id}}</th>
                    <td>{{$ingredient->nom}}</td>
                    <td>{{$ingredient->quantite}}</td>
                    <td>public\images\dgball.jpg</td>
                    <td>
                        <form action="/ingredient/{{$ingredient->id}}/delete" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger text-white" type="submit">DELETE</button>
                        </form>
                    </td>
                    <td>
                        <a class="btn btn-primary text-white" href="/ingredient/{{$ingredient->id}}/show">SHOW</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
