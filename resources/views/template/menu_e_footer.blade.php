<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500|Gaegu:700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <title>Abrigo Dos Velhinhos</title>

</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light sticky-top" id="ftco-navbar">
    <div class="container">
      <a href="/homer"><img class="navbar-brand" src="{{ asset('img/logo/abrigologo.png') }}"></a>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto" >
          <li class="nav-item active"><a href="/homer" style="color: black; font-weight: 600" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="/sobre" style="color: black; font-weight: 600" class="nav-link">Sobre</a></li>
          <li class="nav-item"><a href="/noticias" style="color: black; font-weight: 600" class="nav-link">Notícias</a></li>
          <li class="nav-item"><a href="/cadastroVoluntario" style="color: black; font-weight: 600" class="nav-link">Voluntários</a></li>
          <li class="nav-item"><a href="/cadastroIdoso" style="color: black; font-weight: 600" class="nav-link">Vagas</a></li>
        </ul>
      </div>
    </div>
</nav>
 
  
  @yield('content')

  <footer class="footer">
    <div class="container">

    <!-- Sobre e botão para ser voluntário -->
      <div class="row mb-5">
        <div class="col-md-6 col-lg-6 text-center">
          <h3 class="heading-section">Sobre o Abrigo</h3>
          <p class="mb-5">O Abrigo dos Velhinhos de Tubarão, Santa Catarina, atua há anos cuidando dos idosos da região. Seu principal intuito é oferecer um local que possua os cuidados necessários para os mesmos.</p>
          <p><a href="/cadastroVoluntario" class="btn btn-primary px-4 py-3">Seja um Voluntário</a></p>
        </div>

        <!-- Contatos -->
        <div class="col-md-6 col-lg-6 text-center">
          <div class="block-23">
            <h3 class="heading-section">Contatos</h3>
              <ul>
                <li><a href="https://wego.here.com/directions/mix//Abrigo-dos-Velhinhos-de-Tubarao,-Rua-S%C3%A3o-Jo%C3%A3o-,-1125,-88704-100-Tubar%C3%A3o,-Brazil:e-eyJuYW1lIjoiQWJyaWdvIGRvcyBWZWxoaW5ob3MgZGUgVHViYXJhbyIsImFkZHJlc3MiOiJSdWEgU1x1MDBlM28gSm9cdTAwZTNvICwgMTEyNSwgVHViYXJcdTAwZTNvIChTYW50YSBDYXRhcmluYSkiLCJsYXRpdHVkZSI6LTI4LjQ3NDc2NjgwMDEwNiwibG9uZ2l0dWRlIjotNDkuMDMxOTgyODkyMDAyLCJwcm92aWRlck5hbWUiOiJmYWNlYm9vayIsInByb3ZpZGVySWQiOjIwMDU3NzE3Njk2OTA5MH0=?map=-28.47477,-49.03198,15,normal&fb_locale=pt_BR"><span class="icon icon-map-marker"></span><span class="text">Rua São João, 1125 8704-100 Tubarão (Santa Catarina)</span></a></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                <li><a href="https://www.instagram.com/abrigotubarao/?hl=pt-br"><span class="icon icon-envelope"></span><span class="text">@abrigotubarao</span></a></li>
                <li><a href="https://www.facebook.com/pages/Abrigo-dos-Velhinhos-de-Tubarao/200577176969090"><span class="icon icon-envelope"></span><span class="text">Abrigo dos Velhinhos Tubarão</span></a></li>
              </ul>
            </div>
        </div> 
      </div>

      <!-- Copyright -->
      <!-- <div class="row pt-5">
        <div class="col-md-12 text-center">
          <p> -->
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a> -->
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          <!-- </p>
        </div>
      </div>
    </div> -->
  </footer>
  
</body>
{{-- <script src="jquery-3.4.0.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
@yield('js')
</html>