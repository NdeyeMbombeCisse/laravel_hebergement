<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .container{
            width: 560px;
            height: 700px;
            background-color: rgb(212, 209, 209);
            border-radius: 10px;
            margin-top: 60px;
        }
        form  input{
            height: 50px;
        }

        form select{
            height: 50px;

        }
        body{
            font-size: 20px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 0.75rem;
            margin-top: 30px;
            background: #5FAA3C;
            color: #fff;
            /* transition: background 0.3s; */
        }

        h1{
            margin-top: 50px;
            color: #ce0033;
        }

        body{
            font-family: 'Times New Roman', Times, serif
        }
    </style>
  </head>
  <body>
    <h1 class="text-center">modifier un produit</h1>
    @if(session ('status'))
    <div class="alert alert-success">
        {{ session ('status') }}
    </div>
    @endif
    {{-- <h1 class="text-center">Ajouter une categorie de produit</h1> --}}
    <div class="container">
      <form class="form container" action="{{ url('sauvegarder_produit_modification/' .$produit->id) }}" method="POST">
        @csrf
        <input type="hidden" class="form-control" id="reference" name="id"  value="{{ $produit->id }}">

        <input type="hidden" class="form-control" id="reference" name="user_id"  value="1">
        <div class="mb-3 ">
          <label for="reference" class="form-label">referenciel du produit?</label>
            <input type="text" class="form-control" id="reference" name="reference"  value="{{ $produit->reference }}">
          @error('reference')
          <div class="alert alert-danger">{{ $message }}</div>    
          @enderror
        </div>
        <div class="mb-3 ">
            <label for="designation" class="form-label">designtion de la categorie?</label>
              <input type="text" class="form-control" id="designation" name="designation"  value="{{ $produit->designation }}">
            @error('designation')
            <div class="alert alert-danger">{{ $message }}</div>    
            @enderror
          </div>
         
          <div class="mb-3 ">
            <label for="cathegorie_id" class="form-label">categorie du produit</label>
            <select class="form-select form-select-sm" aria-label="Small select example" name="cathegorie_id">   
                    @foreach($cathegories as $cathegorie)
                        <option value="{{ $cathegorie->id }}"{{ $cathegorie->id == $produit->cathegories_id ? 'selected' : '' }}>{{ $cathegorie->libelle }}</option>
                    @endforeach 
            </select>
            @error('cathegorie_id')
            <div class="alert alert-danger">{{ $message }}</div>    
            @enderror
          </div>
          <div class="mb-3 ">
            <label for="prix_unitaire" class="form-label">prix_unitaire de la categorie?</label>
              <input type="text" class="form-control" id="prix_unitaire" name="prix_unitaire"  value="{{ $produit->prix_unitaire }}" >
            @error('prix_unitaire')
            <div class="alert alert-danger">{{ $message }}</div>    
            @enderror
          </div>
          <div class="mb-3 ">
            <label for="url_img" class="form-label">url_img de la categorie?</label>
              <input type="text" class="form-control" id="url_img" name="url_img"  value="{{ $produit->url_img }}" >
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


