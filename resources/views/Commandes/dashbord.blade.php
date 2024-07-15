{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>body {
        font-family: 'Times New Roman', Times, serif;
        background: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    
    .wrapper {
        display: flex;
        align-items: stretch;
    }
    
    #sidebar {
        min-width: 250px;
        max-width: 250px;
        background:  #5FAA3C;
        color: #fff;
        transition: all 0.3s;
    }
    
    #sidebar .sidebar-header {
        padding: 20px;
        background:  #5FAA3C;
        font-family: 'Times New Roman', Times, serif
        }
    
    #sidebar ul.components {
        padding: 20px 0;
        border-bottom: 1px solid #47748b;
    }
    
    #sidebar ul p {
        color: #fff;
        padding: 10px;
    }
    
    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
        color: #d3d3d3;
        transition: 0.3s;
    }
    
    #sidebar ul li a:hover {
        color: #7386D5;
        background: #fff;

    }

    #sidebar ul li a{
        text-decoration: none;
        color: white;
        font-family: 'Times New Roman', Times, serif;
        font-size: 22px;

    }

    h1{
        font-family: "Leckerli One", cursive;
        color: #ce0033;
        margin-top: 70px;


      }
    
    #sidebar ul li.active > a, a[aria-expanded="true"] {
        color: #fff;
        background: #6d7fcc;
    }
    
    #content {
        width: 100%;
        padding: 20px;
        min-height: 100vh;
        transition: all 0.3s;
    }
    
    .navbar {
        padding: 15px 10px;
        background: #fff;
        border: none;
        border-radius: 0;
        margin-bottom: 40px;
        box-shadow: 1px 1px 5px rgba(0,0,0,0.1);
    }

    table{
        margin-top: 60px;
    }
    
    .navbar h4 {
        margin: 0;
    }
    
    .btn-info {
        background: #7386D5;
        border: none;
        color: #fff;
        padding: 10px 20px;
        cursor: pointer;
    }
    
    .main-content {
        background: #fff;
        padding: 20px;
        box-shadow: 1px 1px 5px rgba(0,0,0,0.1);
    }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Admin Dashboard</h3>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="dashbord">Home</a>
                </li>
                <li>
                    <a href="afficher_cathegorie">Categorie</a>
                </li>
                <li>
                    <a href="afficher_produit">Products</a>
                </li>
                <li>
                    <a href="#" onclick="document.getElementById('logout-form').submit()"><form action="deconnexion" method="POST" id="logout-form">@csrf</form>Deconnexion</a> 

                </li>
            </ul>
        </nav>

        <!-- Page Content -->
        <div id="content">
            {{-- <nav class="navbar">
                {{-- <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <h4>Dashboard</h4>
                </div> --}}
            {{-- </nav>  --}}
            {{-- <div class="main-content">
                <h2>Bienvenue dans le dashboard de l'admin</h2>
                {{-- <p>This is a simple dashboard template.</p> --}}
                <!-- Add your content here -->
            {{-- </div>
            <h1 class="text-center">Liste des differentes comande</h1>
        <table class="table container">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Reference</th>
                <th scope="col">Etat</th>
                <th scope="col">Montant</th>
                <th scope="col">Date</th>
                <th scope="col">Valider</th>
                <th scope="col">supprimer</th>
              </tr>
            </thead>
            @foreach ($commandes as $commande )
    
            <tbody>
              <tr>
                <th scope="row">{{ $commande->id }}</th>
                <td>{{ $commande->reference }}</td>
                <td>{{ $commande->etat_commande }}</td>
                <td>{{ $commande->montant_total }}</td>
                <td>{{ $commande->created_at }}</td>


                <td><a href="modifier/{{ $commande->id }}" class="btn btn-info" >Valider</a></td>
                <td><a href="supprimer/{{ $commande->id }}" class="btn btn-danger">supprimer</a></td>
              </tr>
            </tbody>
            @endforeach
          
          </table>
          
        </div>
        
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>  --}}
<style>

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@extends('layouts.dashbord')
@section('content')
<h1 class="text-center">Liste des differentes commandes</h1>
<table class="table container">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Reference</th>
        <th scope="col">Etat</th>
        <th scope="col">Montant</th>
        <th scope="col">Date</th>
        <th scope="col">Valider</th>
        <th scope="col">supprimer</th>
      </tr>
    </thead>
    @foreach ($commandes as $commande )

    <tbody>
      <tr>
        <th scope="row">{{ $commande->id }}</th>
        <td>{{ $commande->reference }}</td>
        <td>{{ $commande->etat_commande }}</td>
        <td>{{ $commande->montant_total }}</td>
        <td>{{ $commande->created_at }}</td>


        <td><a href="modifier/{{ $commande->id }}" class="btn btn-info" >Valider</a></td>
        <td><a href="supprimer/{{ $commande->id }}" class="btn btn-danger">supprimer</a></td>
      </tr>
    </tbody>
    @endforeach
  
  </table>
  <div class="d-flex justify-content-center">
    {{ $commandes->links() }}
</div>
  
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection