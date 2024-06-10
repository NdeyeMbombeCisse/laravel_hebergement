<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        fieldset {
            border: none;
            margin: 0;
            padding: 0;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 0.75rem;
            background: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            /* transition: background 0.3s; */
        }
        .btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    @if(session('status'))
    <div class="alert alert-success">{{ session('status') }} </div>
    @endif
   <div class="container">
       <h1>Connexion</h1> 
       <form action="{{ url('verification_connexion') }}" method="POST">
        @csrf
           <fieldset>
               
               <label for="email">Email</label>
               <input type="email" id="email" name="email" >
               
               <label for="password">Mot de passe</label>
               <input type="password" id="password" name="password" >

               <button type="submit" class="btn">S'inscrire</button>
               <p>vous v'avez pas de compe ?<a href="{{ url('inscription') }}">S'inscrire</a>
               </p>
           </fieldset>
       </form>
   </div>
</body>
</html>
