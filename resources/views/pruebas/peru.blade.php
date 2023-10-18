<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/peru.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class="cuerpo">
<nav class="navs navbar navbar-expand-lg bg-body-tertiary">
  <div class="barra c container-fluid">
    <a class="navbar-brand" href="/brasil">Pollos Hermanos Brother</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pollos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pollos x2
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <h1 class="titulo text-center">
        welcome to pollos hermanos brother
    </h1>
    <div class="card" style="width: 18rem;">
  <img src="{{ asset('/img/paloma.png')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Paloma</h5>
    <p class="card-text">AAAAAA</p>
    <a href="#" class="btn btn-primary">Welcome to pollos hermanos brother</a>
  </div>
</div>
</div>
</body>
</html>