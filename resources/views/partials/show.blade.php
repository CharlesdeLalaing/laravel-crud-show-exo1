<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <section>
        <div class="container">
            <p>ID: {{$show->id}}</p>
            <p>NOM: {{$show->nom}}</p>
            <p>QUANTITE: {{$show->quantite}}</p>
            <p>VALEUR: {{$show->base}}</p>

            <form action="/ingredient/{{$show->id}}/delete" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger text-white" type="submit">DELETE</button>
            </form>

            <a class="btn btn-success text-white" href="/ingredient/{{$show->id}}/edit">EDIT</a>
        </div>
    </section>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
