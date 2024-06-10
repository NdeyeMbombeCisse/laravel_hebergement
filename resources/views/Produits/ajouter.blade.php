<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">ajouter un produit</h1>
    @if(session ('status'))
    <div class="alert alert-success">
        {{ session ('status') }}
    </div>
    @endif
    {{-- <h1 class="text-center">Ajouter une categorie de produit</h1> --}}
    <form class="form container" action="sauvegarder_produit" method="POST">
        @csrf
        <input type="hidden" class="form-control" id="reference" name="user_id"  value="1">
        <div class="mb-3 ">
          <label for="reference" class="form-label">referenciel du produit?</label>
            <input type="text" class="form-control" id="reference" name="reference" >
          @error('reference')
          <div class="alert alert-danger">{{ $message }}</div>    
          @enderror
        </div>
        <div class="mb-3 ">
            <label for="designation" class="form-label">designtion de la categorie?</label>
              <input type="text" class="form-control" id="designation" name="designation" >
            @error('designation')
            <div class="alert alert-danger">{{ $message }}</div>    
            @enderror
          </div>
         
          <div class="mb-3 ">
            <label for="cathegorie_id" class="form-label">categorie du produit</label>
            <select class="form-select form-select-sm" aria-label="Small select example" name="cathegorie_id">
                @foreach ($cathegories as $cathegorie )
                    <option value="{{ $cathegorie->id }}">{{ $cathegorie->libelle }}</option>
                @endforeach
            </select>
            @error('cathegorie_id')
            <div class="alert alert-danger">{{ $message }}</div>    
            @enderror
          </div>
          <div class="mb-3 ">
            <label for="prix_unitaire" class="form-label">prix_unitaire de la categorie?</label>
              <input type="text" class="form-control" id="prix_unitaire" name="prix_unitaire" >
            @error('prix_unitaire')
            <div class="alert alert-danger">{{ $message }}</div>    
            @enderror
          </div>
          <div class="mb-3 ">
            <label for="url_img" class="form-label">url_img de la categorie?</label>
              <input type="text" class="form-control" id="url_img" name="url_img" >
            @error('url_img')
            <div class="alert alert-danger">{{ $message }}</div>    
            @enderror
          </div>
          <div class="mb-3 ">
            <label for="etat" class="form-label">etat du produt</label>
            <select class="form-select form-select-sm" aria-label="Small select example" name="etat">
                <option value="disponible">disponible</option>
                <option value="en_stock">en rupture</option>
                <option value="en_rupture">en stock</option>
            </select>
            @error('url_img')
            <div class="alert alert-danger">{{ $message }}</div>    
            @enderror
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>