@extends('layouts.base')

@section('content')
    <div class="container">
        <form action="/ingredient/{{$edit->id}}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-4">
                <label for="exampleFormControlInput1">Nom</label>
                <input type="text" name="nom" value="{{$edit->nom}}" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group mb-4">
                <label for="exampleFormControlInput1">Quantité</label>
                <input type="number" name="quantite" value="{{$edit->quantite}}" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group mb-4">
                <select name="base" class="custom-select">
                    <option selected>Open this select menu</option>
                    <option value="litre">Litre</option>
                    <option value="kg">Kg</option>
                    <option value="autre">autre</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>
@endsection
