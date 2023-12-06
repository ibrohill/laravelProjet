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
    <div class="container text-center">
      <div class="row">
          <div class="col s12">
            <h1>LISTE DE FORMATION</h1>
            <hr><br>
            <a href="/ajouter" class="btn btn-primary">AJOUTER UNE FORMATIONS</a>
            <br><br>
            @if (session('status'))
              <div class="alert alert-success">
                  {{session('status')}}
              </div>
            @endif
            <br><br>
            <table class="table">
              <thead> 
                <tr>
                  <th>#</th>
                  <th>Nom</th>
                  <th>ecole</th>
                  <th>filiere</th>
                </tr>
              </thead>
              <tbody>
                @foreach($formations as $formation)
                <tr>
                  <td>{{ $formation->id}}</td> 
                  <td>{{ $formation->nom}}</td>
                  <td>{{ $formation->ecole}}</td>
                  <td>{{ $formation->filiere}}</td>
                </tr> 
                @endforeach
              </tbody>
            </table>
          </div> 
      </div> 
</div>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>