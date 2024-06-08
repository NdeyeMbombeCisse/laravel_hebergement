<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .card-img-top {
            width: 100%; /* Ajustez cette valeur selon vos besoins */
            height: 300px;
        }
        .btn-center {
            display: flex;
            justify-content: center;
        }

        header{
            background-color: rgb(58, 106, 121);
            width: 100%;
            height: 70px;
           
        }
        nav{
            text-align: center;
            font-size: 27px;
        }
        nav a{
            color: white;
            font-weight: 900;
            margin-left: 80px;
            text-decoration: none;
            align-items: center;
            
        }
    </style>
  </head>
  <body>
    <header>
        <nav>
            <a href="">les produits</a>
            <a href="">cathegoris</a>
            <a href="ajouter_produit">ajouter_produit</a>

        </nav>
    </header>
   
        
  
    <h1 class="text-center mt-3">nos meilleurs ventes!</h1>
    <div class="container mt-4">
        <div class="row">
            @foreach ($produits as $produit)
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 90%;">
                    <img src="{{ $produit->url_img }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-text text-center">{{ $produit->designation }}</h4>
                        <h6 class="card-text text-center">{{ $produit->prix_unitaire }} FCFA</h6>
                        <div class="btn-center">
                            <a href="detail/{{ $produit->id }}" class="btn btn-info m-1">Voir Détail</a>
                            <a href="supprimer/{{ $produit->id }}" class="btn btn-danger m-1">Supprimer</a>
                            <a href="modifier_produit/{{ $produit->id }}" class="btn btn-primary m-1">modifier</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>