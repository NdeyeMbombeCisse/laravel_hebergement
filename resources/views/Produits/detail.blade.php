 {{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .card-body{
            align-items: center
        }
        .mon_contenu{
            display: flex;
        }
        .btn-center{
            display: flex;
            margin-left: 20px;
        }
    </style>
  </head>
  <body>
    <h1 class="text-center">les detail du produit {{ $produit->designation }}</h1>
 <div class="mon_contenu">
    <img src="{{ $produit->url_img }}" class="img-fluid" alt="..."> 

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
          </div>
            <div class="card-body ">
              <h5 class="card-title">{{ $produit->designation }}</h5>
              <p class="card-text">{{ $produit->reference }}</p>
              <p class="card-text">{{ $produit->cathegorie_id }}</p>
              <p class="card-text">{{ $produit->prix_unitaire}} FCFA</p>
              <p class="card-text">{{ $produit->etat }}</p>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          </div>
          <div class="btn-center"> <a href="{{ url('user_simple') }}" class="btn btn-info  ">fermer</a></div>

        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> 

 --}}


 

 
