<!doctype html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

      /* new style */
      body{
        font-family: 'Times New Roman', Times, serif;
      }

      h1{
        font-family: "Leckerli One", cursive;
        color: #ce0033;
        /* color:#5FAA3C; */


      }



.banner {
    /* background-color: #8CAA13; */
    background-color: rgba(140, 170, 19, 0.1);
    position: relative;
    height: 700px; /* ou la hauteur que vous préférez */
    background-size: cover;
    background-position: center;
    color: #020202;
    text-align: center;
    display: flex;
}
.banner img{
  width: 600px;
  height: 600px;
  margin-left: 80px;
}
 .banner .text_baniere h1{
    font-size: 35px;
    padding-top: 170px;
    text-align: center;
    font-family: "Leckerli One", cursive;
  font-weight: 400;
  color:#5FAA3C;
  font-style: normal;

}

.banner p {
    font-size: 23px;
} 

.first_section img{
  width: 200px;
  height: 300px;
  margin-left: 530px;
}

.first_section {
 background-color: #5FAA3C;
 margin-top: -50px;
 border-top-left-radius: 200px;
 border-bottom-right-radius: 100px;
}

.first_section p{
  padding-top: 50px;
  font-size: 22px;
  color: white;

margin-top: 100px;
margin-left: 100px;
text-align: center;
}

 .categorie{
  background-image: url('images/image 47.png');
  width: 90%;
  height: 300px;
  margin-left: 80px;
  margin-top: 20px;
  background-color: rgba(0, 0, 0, 0.3); /* Ajustez l'opacité selon vos préférences */  
} 

.categorie{
    background-image: url('images/image 47.png');
    width: 90%;
    height: 300px;
    margin-left: 80px;
    margin-top: 10px;
    background-color: rgba(0, 0, 0, 0.3); /* Ajustez l'opacité selon vos préférences */  
  } 
  
  .les_categories{
    display: flex;
    margin-top: 110px;
    margin-left: 110px;
    font-family: "Leckerli One", cursive;
  text-align: center;
  }
  
  .card{
    margin-left: 30px;
    margin-top: 120px;
    width: 300px;
    border-radius: 50px;
  } 


  



        /* .card-img-top { 
            width: 100%; /* Ajustez cette valeur selon vos besoins */
            /* height: 300px;
        } */
        .btn-center {
            display: flex;
            justify-content: center;
        }

        header{
            /* background-color: rgb(58, 106, 121); */
            width: 100%;
            height: 70px;
            background-color:#5FAA3C;

           
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
        nav a{
            color: white;
            font-weight: 900;
            margin-left: 80px;
            margin-top: 15px;
            text-decoration: none;
            align-items: center;
            
        } 

        .les_produits{
          display: flex;
          margin-left: -190px;
          margin-top: 60px;

        }
        .les_produits img{
          width: 350px;
          height: 300px;;
        }

        .produit{
          margin-left: 60px;
        }
       

        .titre_categorie{
          margin-top: 70px;
          text-align: center;
        }
       


    footer {
      background-color: #000;
      color: #fff;
      margin-top: 70px;
      padding: 20px 0;
      width: 1670px;
      margin-left: -190px;
      text-align: center;
      height: 400px;
      text-align: center;

    }
    footer h3{
      margin-top: 30px;
      font-family: "Leckerli One", cursive;


    }

    .les_produits{
      display: flex;
        flex-wrap: wrap;
        gap: 1rem; 
    }


    .les_produits {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1rem; /* Espace entre les produits */
        margin: 20px;
        margin-left: -200px;
      }
      .produit {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 340px;
        border-radius: 8px;
        text-align: center;
      }
      .produit img {
        /* max-width: 100%; */
        width: 200px;
        height: auto;
        border-radius: 8px;
      }

    

    .categorie a{
      text-decoration: none;
      color: #000;
    }

   .contacts{
    margin-left: 10px;
    margin-top: 50px;
   }

   .contacts i{
    margin-left: 10px;
   
    
   }
   .reseau i{
    margin-top: 30px;
    margin-left: 20px;

   }
   .trait{
    margin-top: 60px;
   }
    </style>
  </head>
  <body>
    <header>
        <nav style="display: flex; justify-content: center;">
            <a href="user_simple">les produits</a>
            @auth
            <a href="ajouter_produit">ajouter produit</a>
            <a href="#" onclick="document.getElementById('logout-form').submit()"><form action="deconnexion" method="POST" id="logout-form">@csrf</form>Deconnexion</a> 
            {{-- <a href="panier"><i class="fa-solid fa-cart-plus"></i>
              @if(session()->has('nombreElementsPanier') && session('nombreElementsPanier') > 0)
            <span  style="top: -10px; right: -10px;">
            {{ session('nombreElementsPanier') }}
            </span>
            @endif
            </a> --}}
            @endauth
            @guest
            <a href="connexion"><button>Connexion</button> </a>
            @endguest
        </nav>
       
    </header>

    <div class="banner">
      <div>
        <img src="{{ asset('images/image 36.png ') }}" alt="">
      </div>
      <div class="text_baniere">   
        <h1 class="text-center">Bienvenue sur notre site Kane et frere!  <br>Explorez notre sélection variée de produits de saison, cultivés avec soin par nos agriculteurs locaux. </h1>
        <p class="text-center"> <br>Chez Kane et frere, nous nous engageons à vous offrir  <br>des produits de la plus haute qualité, directement du champ à votre table.</p>
</div>
    </div>
    <div class="container mt-5">
    <h1 class="text-center"> Qui Sommes Nous?</h1>

    <div class="first_section">
     
        <p>
          Chez Kane et Frere, notre mission est simple : vous fournir les légumes et fruits les plus frais, <br> directement du champ à votre table. Nous croyons fermement <br> en la valeur d'une alimentation saine et équilibrée, et nous nous engageons  <br>à vous offrir des produits de qualité exceptionnelle.
        </p>
        <img src="{{ asset('images/image 45.png') }}" alt="">
    </div>
      </div>
    </div>
    <h1 class="titre_categorie">Nos catégories de produits </h1>       
   <div class="categorie">
     <div class="les_categories">
      @foreach ($categories as $categorie )
       <div class="card">
       <h2> <a href="{{ url('categorie.produits', ['categorie_id' => $categorie->id]) }}">{{ $categorie->libelle }}</a></h2>
      </div> 
      @endforeach
     </div>  
    </div>  

    
      <div class="container">
     <h1 class="titre_categorie">nos meilleurs ventes!</h1>
          <div class="les_produits">
            @foreach ($produits as $produit)
            <div class="produit">
                  <img src="{{ $produit->url_img }}" class="card-img-top" alt="...">
                      <h4 class="card-text text-center">{{ $produit->designation }}</h4>
                      <h6 class="card-text text-center">{{ $produit->prix_unitaire }} FCFA</h6>
                          {{-- <a href="detail/{{ $produit->id }}" class="btn btn-primary m-1"><i class="fa-solid fa-eye " style="color: white; "></i></a> --}}
                          @auth
                          <a href="supprimer/{{ $produit->id }}" class="btn btn-danger m-1"><i class="fa-solid fa-trash" style="color: white;"></i></a>
                          <a href="modifier_produit/{{ $produit->id }}" class="btn btn-primary m-1"><i class="fa-solid fa-square-pen"></i></a>  
                        @endauth
            </div>
            @endforeach

           
        </div>
   
 <footer>
  <h3>Nous contacter</h3>
  <div class="contacts">
     <i class="fa-solid fa-phone"></i>78 405 53 67  
    <i class="fa-solid fa-envelope"></i>ndeye@gmail.com 
     <i class="fa-solid fa-location-dot"></i>Cite Keur Gorgui 
  </div>
  
    <div class="trait"><hr> </div>
  
    {{-- <h3>Nos reseaux</h3> --}}
    <div class="reseau">
      <i class="fa-brands fa-instagram fa-1x"></i>
      <i class="fa-brands fa-twitter fa-1x"></i>
      <i class="fa-brands fa-tiktok fa-1x"></i>
    </div>
    @copycore
  </footer> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>   