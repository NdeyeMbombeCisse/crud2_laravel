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
            <h1> liste des commentaires</h1>
            <a href="Ajout_comments" class="btn btn-primary">Ajouter un commentaire</a> <br> <br>
            <a href="Affichage" class="btn btn-primary">Liste des articles</a> <br> <br>
            <table class="table">
                
                <thead>
                   
                        
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Contenu</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Date_heur_creation</th>
                    <th scope="col">Article</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $comment)
                  <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->contenu }}</td>
                    <td> {{ $comment->auteur }}</td>
                    <td>{{ $comment->date_heure_creation }}</td>
                    <td> {{ $comment->articles_id }}</td>
                    <td>
                        <a href="comments_update/{{ $comment->id }}" class = "btn btn-info">update</a>
                    <a href="delete_comments/{{ $comment->id }}" class = "btn btn-danger">Delet</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>