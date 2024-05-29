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
            <form action="comments/traitement" method="POST">
                @csrf
                <ul>
                    @foreach ( $errors->all() as $error )
                    <li class="alert alert-danger">{{ $error }}</li>
                    
                    @endforeach
                </ul>
                <div class="mb-1">
                  <label for="contenu" class="form-label">Donner le contenu de l'article</label>
                    <input type="text" class="form-control" id="contenu" name="contenu" accept="contenu/*" ><br>
                  </div>
                <div class="mb-3">
                  <label for="auteur" class="form-label">Donner votre nom complet</label>
                  <input type="text" class="form-control" id="auteur" name="auteur">
                </div>
                <div class="mb-3">
                    <label for="date_heure_creation" class="form-label">Donner la date et l'heure de la creation</label>
                    <input type="datetime-local" class="form-control" id="date_heure_creation" name="date_heure_creation">
                  </div>
                  <div class="mb-3">
                    <label for="articles_id" class="form-label">Article</label>
                        <select name="articles_id" id="articles_id" class="form-control">
                        @foreach($articles as $article)
                            <option value="{{ $article->id }}">{{ $article->nom }}</option>
                        @endforeach
                        </select>
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