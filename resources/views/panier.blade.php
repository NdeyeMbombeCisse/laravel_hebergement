<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>  header{
      /* background-color: rgb(58, 106, 121); */
      width: 100%;
      height: 70px;
      background-color:#5FAA3C; 
  }

  h1{
        font-family: "Leckerli One", cursive;
        color: #ce0033;
        /* color:#5FAA3C; */
      }

  nav{
      display: flex;
      font-size: 27px;
  }
  nav button{
    padding: 5px;
    border-radius: 30px;
    color: #5FAA3C;
    background-color:white;
    border: 1px solid white;
    font-size: 23px;
    width: 150px;
  }

  .contenu{
    display: flex;
  }
  nav a{
      color: white;
      font-weight: 900;
      margin-left: 80px;
      margin-top: 15px;
      text-decoration: none;
      align-items: center;
      font-family: 'Times New Roman', Times, serif
      
  } </style>
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
  <nav style="display: flex; justify-content: center;">
      <a href="user_simple">les produits</a>
      @auth
      {{-- <a href="ajouter_produit">ajouter produit</a> --}}
      <a href="#" onclick="document.getElementById('logout-form').submit()"><form action="deconnexion" method="POST" id="logout-form">@csrf</form><button>Deconnexion</button></a> 
      {{-- <a href="panier"><i class="fa-solid fa-cart-plus"></i>
        @if(session()->has('nombreElementsPanier') && session('nombreElementsPanier') > 0)
      <span  style="top: -10px; right: -10px;">
      {{ session('nombreElementsPanier') }}
      </span> --}}
      {{-- @endif --}}
      </a>
      @endauth
      @guest
      <a href="connexion"><button>Connexion</button> </a>
      @endguest
  </nav>
 
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
                <li>{{ $item['nom'] }} - {{ $item['prix'] }} FCFA</li>
            @endforeach
            </ul></p>
            <p><p class="card-text">
              <strong>Total : {{ session('totalPrix', 0) }} FCFA</strong>
          </p></p>
            <div class="contenu">
              <p class="card-text"><small class="text-body-secondary"><form action="valider" method="post">
                @csrf
                <button class="btn btn-success m-1" type="submit">Valider</button>
            </form></small></p>


            <p class="card-text">
                    <form action="{{ url('supprimerDuPanier', $item['id']) }}" method="post" style="display:inline;">
                      @csrf
                      @method('post')
                      <button type="submit" class="btn btn-danger btn-sm m-2">Supprimer</button>
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
