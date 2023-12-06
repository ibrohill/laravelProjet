<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LISTE DES FORMATIONS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <table>
    <div class="container">
      <div class="row">
          <div class="col s12">
            <h1>AJOUTER UNE FORMATION</h1>
            <hr><br>
        
            @if (session('status'))
              <div class="alert alert-success">
                  {{session('status')}}
              </div>
            @endif

            <ul>
               @foreach ($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
                @endforeach
            </ul>
          

            <form action="/ajouter/traitement" method="POST" class="form-group">
             @csrf

            
            <div class="form-group">
                <label for="Nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="Nom" name="nom">
              </div>

              <div class="form-group">
                <label for="Ecole" class="form-label">Ecole</label>
                <input type="text" class="form-control" id="Ecole" name="ecole">
              </div>

              <div class="form-group">
                <label for="Filiere" class="form-label">Filiere</label>
                <input type="text" class="form-control" id="Filiere" name="filiere">
              </div>
              <br> 
              <button type="submit" class="btn btn-primary">VALIDER</button>
              <br><br>
           <a href="/formations" class="btn btn-danger">REVENIR A LA LISTE DES FORMATIONS</a>
           
            </form>
              </div>
          </div> 
    </div>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>