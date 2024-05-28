<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud_laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container ">
        <div class="row">
          <div class="col">
            <h1> Ajouter des articles</h1>
            @if(session ('status'))
            <div class="alert alert-success">
                {{ session ('status') }}
            </div>
            @endif
            <form action="ajouter/traitement" method="POST">
                @csrf
                <ul>
                    @foreach ( $errors->all() as $error )
                    <li class="alert alert-danger">{{ $error }}</li>
                    
                    @endforeach
                </ul>
                <div class="mb-1">
                  <label for="text" class="form-label">Ajouter L'URL de l'image</label>
                    <input type="text" class="form-control" id="image" name="image" accept="image/*" ><br>
                  </div>
                <div class="mb-3">
                  <label for="nom" class="form-label">Donner le nom de l'article</label>
                  <input type="text" class="form-control" id="nom" name="nom">
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Donner la description de l'article</label>
                    <input type="text" class="form-control" id="desc" name="desc">
                  </div>
                  <div class="mb-3">
                    <label for="date_creation" class="form-label">Donner le date_creation de l'article</label>
                    <input type="date" class="form-control" id="date_creation" name="date_creation">
                  </div>
                  <div class="mb-3">
                    <label for="a_la_une" class="form-label">Donner le a_la_une de l'article</label>
                     <input type="text" class="form-control" id="a_la_une" name="a_la_une"> 
                  
                    
                  </div>
                <button type="Soumettre" class="btn btn-primary">Soumettre</button>
                <a href="Affichage"  class="btn btn-danger"> voir la liste</a>
              </form>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>