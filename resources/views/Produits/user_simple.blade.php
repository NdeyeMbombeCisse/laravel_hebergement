<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

card-custom {
        max-width: 840px;
      }
      .card-custom img {
        height: 100%;
        width: 100%; /* Augmentez la largeur de l'image */
        object-fit: cover;
      }
      .card-custom .card-body {
        font-size: 1.2rem; /* Taille du texte */
      }
      .card-custom .card-title {
        font-size: 1.5rem; /* Taille du titre */
      }

.banner {
    background-image: url(https://i.pinimg.com/564x/a3/25/71/a32571a826c419fc4d4510f7aa623e7c.jpg);
    position: relative;
    height: 700px; /* ou la hauteur que vous préférez */
    background-size: cover;
    background-position: center;
    color: #020202;
    text-align: center;
}
 .banner h1 {
    font-size: 36px;
    margin-top: 50px;

}

.banner p {
    font-size: 18px;
} 

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
            display: flex;
            font-size: 27px;
        }
        nav a{
            color: white;
            font-weight: 900;
            margin-left: 80px;
            text-decoration: none;
            align-items: center;
            
        }
        .categorie{
            display: flex;
        }

        footer {
      background-color: #000;
      color: #fff;
      padding: 20px 0;
      text-align: center;
      bottom: 0;
      width: 100%;
      height: 200px;
    }
    footer img{
        width: 30px
    }
    .icon{
        width: 20px;
    }
    </style>
  </head>
  <body>
    <header>
        <nav style="display: flex; justify-content: center;">
            <a href="">les produits</a>
            @auth
            <a href="ajouter_produit">ajouter produit</a>
            <a href="#" onclick="document.getElementById('logout-form').submit()"><form action="deconnexion" method="POST" id="logout-form">@csrf</form>Deconnexion</a> 
            <a href="panier">voir le panier</a>
            @endauth
            @guest
            <a href="connexion"> Connexion</a>
            @endguest
        </nav>
       
    </header>

    <div class="banner">
        <h1 class="text-center">Bienvenue sur notre site Kane et frere!</h1>
        <p class="text-center">Découvrez nos produits de qualité au meilleur prix.</p>
    </div>
    <div class="container mt-5">
    <h1 class="text-center">A propos de nous</h1>

    <div class="container mt-4">
        <div class="card mb-3 card-custom">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="https://i.pinimg.com/564x/2f/be/83/2fbe83a750f3e06495566103a426633d.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">L'histoir de Kane et frere</h5>
                <p class="card-text">Ceci est une carte plus large avec un texte de support en dessous comme un guide naturel vers un contenu supplémentaire. Ce contenu est un peu plus long.
                  Ce contenu est un peu plus long.
                  Ce contenu est un peu plus long.
                  Ce contenu est un peu plus long.
                  Ce contenu est un peu plus long. Ce contenu est un peu plus long
                  Ceci est une carte plus large avec un texte de support en dessous comme un guide naturel vers un contenu supplémentaire. Ce contenu est un peu plus long.
                  Ce contenu est un peu plus long.
                  Ce contenu est un peu plus long.
                  Ce contenu est un peu plus long.
                  Ce contenu est un peu plus long. Ce contenu est un peu plus long.Ce contenu est un peu plus long.
                  Ce contenu est un peu plus long.
                  Ce contenu est un peu plus long.
                  Ce contenu est un peu plus long. Ce contenu est un peu plus long
                  Ceci est une carte plus large avec un texte de support en dessous comme un guide naturel vers un contenu supplémentaire. Ce contenu est un peu plus long.
                  Ce contenu est un peu plus long.
                  Ce contenu est un peu plus long.
                  Ce contenu est un peu plus long.
                  Ce contenu est un peu plus long. Ce contenu est un peu plus long.</p>
                <p class="card-text"><small class="text-body-secondary">Dernière mise à jour il y a 3 minutes</small></p>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>

    <h1 class="text-center mt-4">Nos catégories de produits </h1>
    <div class="categorie">
      <!-- Catégorie Fruits -->
      <div class="card mb-3 mx-auto mt-4 " style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://i.pinimg.com/564x/d6/12/c6/d612c64a1cc11ff458d37097fd5b973c.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Fruits</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    
      <!-- Catégorie Légumes -->
      <div class="card mb-3 mx-auto mt-4" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://i.pinimg.com/564x/76/29/9d/76299d41555231ad8df34a89fac075a6.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Légumes</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    {{-- deuxieme partie --}}
    <div class="categorie">
        <!-- Catégorie Fruits -->
        <div class="card mb-3 mx-auto mt-4" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="https://i.pinimg.com/564x/d6/12/c6/d612c64a1cc11ff458d37097fd5b973c.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Fruits</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      
        <!-- Catégorie Légumes -->
        <div class="card mb-3 mx-auto mt-4" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="https://i.pinimg.com/564x/76/29/9d/76299d41555231ad8df34a89fac075a6.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Légumes</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
   
    <div class="container">
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
                            <a href="detail/{{ $produit->id }}" class="btn btn-info m-1"><img class="icon" src="https://png.pngtree.com/png-clipart/20191027/ourmid/pngtree-view-icon-png-image_1869829.jpg" alt=""></a>
                            @auth
                            <form action="ajouterpanier/{{ $produit->id }}" method="post">
                                @csrf
                                <button class="btn btn-primary" type="submit"><img class="icon" src="https://i.pinimg.com/564x/02/3b/3e/023b3e3ca534ae94a88cfc898b31e0cf.jpg" alt=""></button>
                            </form>
                            @endauth
                            
                        </div>
                    </div>
                </div>
            </div>
            
            @endforeach
        </div>
    </div>
</div>   
<footer>
    <h3>nos reseaux</h3>
    <div>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/1200px-Facebook_f_logo_%282019%29.svg.png" alt="">
        <img src="https://img.freepik.com/vecteurs-libre/icone-medias-sociaux-vecteur-instagram-7-juin-2021-bangkok-thalande_53876-136728.jpg?size=338&ext=jpg&ga=GA1.1.1788614524.1717891200&semt=ais_user" alt="">
        <img src="https://i.pinimg.com/736x/f5/de/4d/f5de4dd481fae5ba014b4a736d5ce0c8.jpg" alt="">
    </div>
  </footer> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>