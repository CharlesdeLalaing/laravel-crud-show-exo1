<div class="container">
    <form action="/" method="POST">
        @csrf
        <div class="form-group mb-4">
            <label for="exampleFormControlInput1">Nom</label>
            <input type="text" name="nom" class="form-control" id="exampleFormControlInput1">
        </div>
    
        <div class="form-group mb-4">
            <label for="exampleFormControlInput1">Quantité</label>
            <input type="number" name="quantite" class="form-control" id="exampleFormControlInput1">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    
</div>