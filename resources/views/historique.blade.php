<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Document</title>
</head>
@include('layouts.app')

<body > 
<div class="d-flex align-items-center justify-content-center bg-light">
  <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">  
    <div class="card-body">
      <h5 class="card-title">Statistique de votre plateforme</h5>
      <div>
        <h6 class="card-subtitle mb-2 text-muted">Total de users : {{$usersCount}}</h6>
      </div>
      <div>
        <h6 class="card-subtitle mb-2 text-muted">Total de Announcement Publier : {{$annoncesCount}}</h6>
      </div>
    
    </div>
  </div>
</div>
</body>
</html>
