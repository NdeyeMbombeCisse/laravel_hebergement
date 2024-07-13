
@extends('layouts.dashbord')
@section('content')
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
      {{-- <td><a href="ajouter_cathegorie" class="btn btn-primary">ajouter</a></td> --}}

      @if(session ('status'))
      <div class="alert alert-success">
          {{ session ('status') }}
      </div>
      @endif
      <h1 class="text-center">Ajouter une categorie de produit</h1>
      <form class="form container" action="sauvegarder_categorie" method="POST">
          @csrf
          <div class="mb-3 ">
            <label for="libelle" class="form-label">libelle de la categorie?</label>
            <input type="text" class="form-control" id="libelle" name="libelle" >
            @error('libelle')
            <div class="alert alert-succes">{{ $message }}</div>    
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  

@endsection