<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/style.scss')}}">
    <title>Abrigo Dos Velhinhos - Administração</title>
</head>
<body  class="body-branco">

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="menu"> 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto" >
        <li class="nav-item item-menu">
          <a class="nav-link" href="/home">Ir para o Site</a>
        </li>
        <li class="nav-item item-menu">
          <a class="nav-link" href="/publicacaoAdm">Fazer publicação</a>
        </li>
        <li class="nav-item item-menu" id="nav-item-logo">
          <img class="logo" src="{{ asset('img/logo/abrigologo.png') }}">
        </li>
        <li class="nav-item item-menu">
          <a class="nav-link" href="/cadastroIdosoAdm">Registro de Idosos</a>
        </li>
        <li class="nav-item item-menu">
          <a class="nav-link" href="/cadastroVoluntarioAdm">Registro de Voluntários</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    @yield('contentAdm')    


<script src="jquery-3.4.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{asset('/js/cep.js')}}"></script>
<script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
<script src="{{('/js/admin.js')}}"></script>   
</body>
</html>