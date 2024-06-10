<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>projet Laravel_hebergement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Liste des differentes cathegorie</h1>
    <table class="table container">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">libelle</th>
            <th scope="col">modifer</th>
            <th scope="col">supprimer</th>
          </tr>
        </thead>
        @foreach ($cathegories as $cathegorie )

        <tbody>
          <tr>
            <th scope="row">{{ $cathegorie->id }}</th>
            <td>{{ $cathegorie->libelle }}</td>
            <td><a href="modifier/{{ $cathegorie->id }}" class="btn btn-info" >Modifier</a></td>
            <td><a href="supprimer/{{ $cathegorie->id }}" class="btn btn-danger">supprimer</a></td>
          </tr>
        </tbody>
        @endforeach
      
      </table>
      <td><a href="ajouter_cathegorie" class="btn btn-primary">ajouter</a></td>

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>