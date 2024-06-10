<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>header{
        background-color: rgb(58, 106, 121);
        width: 100%;
        height: 70px;
       
    }
    nav{
        display: flex;
        font-size: 27px;
    }
   
    
    nav a{
        color: white;
        font-weight: 900;
        margin-left: 80px;
        text-decoration: none;
        align-items: center;
        
    }</style>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
@if(session ('status'))
<div class="alert alert-success">
    {{ session ('status') }}
</div>
@endif
<header>
    <nav>
        <a href="afficher_produit">les produits</a>
        <a href="afficher_cathegorie">cathegoris</a>
        @auth
        <a href="ajouter_produit">ajouter_produit</a>
        <a href="#" onclick="document.getElementById('logout-form').submit()"><form action="deconnexion" method="POST" id="logout-form">@csrf</form>Deconnexion</a> 
        <a href="panier">voir le panier</a>
        @endauth
        @guest
        <a href="connexion"> Connexion</a>

        @endguest
    </nav>
    {{-- <div class="banner">
        <h1 class="text-center">Bienvenue sur notre site!</h1>
        <p class="text-center">Découvrez nos produits de qualité au meilleur prix.</p>
    </div> --}}
</header>
<h1 class="text-center">Contenu du Panier</h1>
@if (!empty($panier))
    
    <div class="container">
    <div class="card mb-3 container"  style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://i.pinimg.com/564x/82/0b/b6/820bb68d8807487978df2257c49e504b.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">les produit mis au panier</h5>
              <p class="card-text"><ul>
                @foreach ($panier as $item)
                    <li>{{ $item['nom'] }} - {{ $item['prix'] }} </li>
                @endforeach
            </ul></p>
            <div class="contenu">
              <p class="card-text"><small class="text-body-secondary"><form action="valider" method="post">
                @csrf
                <button class="btn btn-primary" type="submit">Valider la Commande</button>
            </form></small></p>


            <p class="card-text">
                    <form action="{{ url('supprimerDuPanier', $item['id']) }}" method="post" style="display:inline;">
                      @csrf
                      @method('post')
                      <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                  </form>
                <small class="text-body-secondary">  
           
            </div>
          </div>
        </div>
      </div>
    </div>
@else
    <p>Le panier est vide.</p>
@endif
