<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter un produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <h1 class="text-center">Ajouter un produit</h1>
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
        <div class="container">
            <form class="form container" action="{{ url('sauvegarder_produit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" class="form-control" id="reference" name="user_id" value="1">
                <div class="mb-3">
                    <label for="reference" class="form-label">Référence du produit</label>
                    <input type="text" class="form-control" id="reference" name="reference">
                    @error('reference')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="designation" class="form-label">Désignation du produit</label>
                    <input type="text" class="form-control" id="designation" name="designation">
                    @error('designation')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="cathegorie_id" class="form-label">Catégorie du produit</label>
                    <select class="form-select form-select-sm" aria-label="Small select example" name="cathegorie_id">
                        @foreach ($cathegories as $cathegorie)
                        <option value="{{ $cathegorie->id }}">{{ $cathegorie->libelle }}</option>
                        @endforeach
                    </select>
                    @error('cathegorie_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="prix_unitaire" class="form-label">Prix unitaire</label>
                    <input type="text" class="form-control" id="prix_unitaire" name="prix_unitaire">
                    @error('prix_unitaire')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image du produit</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="etat" class="form-label">État du produit</label>
                    <select class="form-select form-select-sm" aria-label="Small select example" name="etat">
                        <option value="disponible">Disponible</option>
                        <option value="en_stock">En stock</option>
                        <option value="en_rupture">En rupture</option>
                    </select>
                    @error('etat')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Ajouter Produit</button>
            </form>
        
        </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
