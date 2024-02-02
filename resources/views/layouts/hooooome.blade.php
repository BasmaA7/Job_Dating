hoolooooooooo
@section('content')
<div class="container">
    <div class="row justify-content-center">
       
    </div>
</div>
@endsection
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  @include('Layouts.app')
  <div class="container">
    <div class="row">
      <div class="col-md-6 bg-danger d-flex align-items-center">
        <p>
          Are you ready to take the next step in your career?<br>
          Join us at our upcoming Job Dating event! This is a unique opportunity to connect with leading employers in various industries, explore exciting job opportunities, and showcase your skills.
        </p>
      </div>
      <div class="col-md-6 bg-danger">
        @foreach($announcements as $announcement)
        <img src="https://www.ville-louvres.fr/wp-content/uploads/2023/03/job_dating_2022-2000x0-c-default.jpg" style="width:100%; height: auto;" alt="">
      </div>
    </div>
  </div>
  <div class="card container" style="width: 18rem;">
    <img src="https://static.vecteezy.com/ti/vecteur-libre/p3/19902188-entreprise-nouvelles-discours-bulle-avec-megaphone-entreprise-information-annonce-vecteur-icone-vectoriel.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $announcement->name }}</h5>
      <p class="card-text">{{ $announcement->descreption }}</p>
      <h1>Company name</h1>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</body>
</html>

