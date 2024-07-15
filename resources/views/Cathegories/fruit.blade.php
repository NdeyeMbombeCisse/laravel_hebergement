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

        .deconnexion{
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
      margin-left: -1px;
      text-align: center;
      height: 400px;
      text-align: center;

    }
    footer h3{
      margin-top: 30px;
      font-family: "Leckerli One", cursive;


    }

    h3{
        font-family: "Leckerli One", cursive;
        color: #ce0033;
        /* color:#5FAA3C; */


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


   
    .card {
        height: 100%;
        height: 400px;

    }

    .desgnation {
        font-weight: bold;
    }

    .bouton {
        display: flex;
        justify-content: center;
    }

    .les_fruits img{
    width: 180px;
    height: 200px;
    margin-left: 42px;
   } 
</style>


    </style>
  </head>
  <body>
    <header>
        <nav style="display: flex; justify-content: center;">
            <a href="{{ url('user_simple') }}">Les produits</a>

            @auth
            <a href="#" class="deconnexion" onclick="document.getElementById('logout-form').submit()"><form action="{{ url('deconnexion') }}" method="POST" id="logout-form">@csrf</form>Deconnexion</a> 
            <a href="{{ url('panier') }}"><i class="fa-solid fa-cart-plus"></i>
              @if(session()->has('nombreElementsPanier') && session('nombreElementsPanier') > 0)
            <span  style="top: -10px; right: -10px;">
            {{ session('nombreElementsPanier') }}
            </span>
            @endif
             </a> 
             @endauth
             @guest
            <a href="{{ url('connexion') }}"><button>Connexion</button> </a>
            @endguest
        </nav>
       
    </header>

    <div class="banner">
      <div>
        <img src="{{ asset('images/image 52.png ') }}" alt="">
      </div>
      <div class="text_baniere">   
        <h1 class="text-center">Découvrez une sélection exquise de fruits frais chez Kane et Frère. <br> Nous nous engageons à vous offrir des produits de la plus haute qualité, <br> </h1> 
</div>
    </div>



         <div class="les_fruits">
          <div class="container">
              <div class="row">
                  @foreach ($produits as $produit)
                      <div class="col-md-3">
                          <div class="card mb-4">
                              <img src="{{ $produit->url_img }}" class="card-img-top" alt="...">
                              <div class="card-body">
                                  <h6 class="card-text text-center">{{ $produit->designation }}</h6>
                                  <h6 class="card-text text-center">{{ $produit->prix_unitaire }} FCFA</h6>
                                  <div class="bouton">
                                      <form action="{{ url('ajouterpanier/' . $produit->id) }}" method="post">
                                          @csrf
                                          <button class="btn btn-success m-1" type="submit"><i class="fa-solid fa-cart-plus"></i></button>
                                      </form>
                                      <button type="button" class="btn btn-success m-1 btn-detail"
                                              data-bs-toggle="modal" 
                                              data-bs-target="#modalDetail"
                                              data-designation="{{ $produit->designation }}"
                                              data-reference="{{ $produit->reference }}"
                                              data-cathegorie="{{ $produit->cathegorie_id }}"
                                              data-prix="{{ $produit->prix_unitaire }}"
                                              data-etat="{{ $produit->etat }}"><i class="fa-solid fa-eye" style="color: white;"></i></button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  @endforeach
              </div>
          </div>
      </div>


       <!-- Modal -->
  <div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalDetailLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         <h3>Reference:</h3><h5 id="modalReference"></h5>
          <h6 id="modalCathegorie"></h6>
          <h3>Prix:</h3><h6 id="modalPrix"></h6>
          <h3>Etat:</h3><h6 id="modalEtat"></h6>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          <a href="{{ url('user_simple') }}" class="btn btn-info">Fermer et quitter</a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script>
    // JavaScript pour charger les détails du produit dans la modal
    const btnDetails = document.querySelectorAll('.btn-detail');
    btnDetails.forEach(btn => {
      btn.addEventListener('click', function() {
        const designation = btn.getAttribute('data-designation');
        const reference = btn.getAttribute('data-reference');
        const cathegorie = btn.getAttribute('data-cathegorie');
        const prix = btn.getAttribute('data-prix');
        const etat = btn.getAttribute('data-etat');

        document.getElementById('modalDetailLabel').textContent = designation;
        document.getElementById('modalReference').textContent = reference;
        document.getElementById('modalCathegorie').textContent = cathegorie;
        document.getElementById('modalPrix').textContent = prix + " FCFA";
        document.getElementById('modalEtat').textContent = etat;
      });
    });
  </script>
      
        



    
  


   
  <footer>
  <h3>Nous contacter</h3>
  <div class="contacts">
     <i class="fa-solid fa-phone"></i>78 405 53 67  
    <i class="fa-solid fa-envelope"></i>ndeye@gmail.com 
     <i class="fa-solid fa-location-dot"></i>Cite Keur Gorgui 
  </div>
  
    <div class="trait"><hr> </div>
  
    <h3>Nos reseaux</h3> 
     <div class="reseau">
      <i class="fa-brands fa-instagram fa-1x"></i>
      <i class="fa-brands fa-twitter fa-1x"></i>
      <i class="fa-brands fa-tiktok fa-1x"></i>
    </div>  

    </footer>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>    


