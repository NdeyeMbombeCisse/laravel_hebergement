{{--  --}}

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        h3 {
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
        input[type="text"],  input[type="date"] {
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
    <div class="container">
        @if(session('status'))
            <div class="alert alert-success">{{ session('status') }} </div>
        @endif
           <h3>detail de la commande</h3> 
           <form action="{{ url('sauvegarde_commande') }}" method="POST">
            @csrf
               <fieldset>
                   <label for="name">Reference</label>
                   <input type="text" id="name" name="reference">
                   @error('name')
                       <div  class="alert alert-danger">{{ $message }}</div>
                   @enderror
                   
                   <label for="email">Montant total</label>
                   <input type="text" id="email" name="montant-total">
                   @error('email')
                       <div  class="alert alert-danger">{{ $message }}</div>
                   @enderror

                   <label for="etat_commande">etat</label>
                   <input type="text" id="etat_commande" name="etat_commande">
                   @error('password')
                       <div  class="alert alert-danger">{{ $message }}</div>
                   @enderror
    
                   <button type="submit" class="btn">S'inscrire</button>
               </fieldset>
           </form>
       </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


