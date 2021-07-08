<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="{{ url('css/styles.css') }}" rel="stylesheet">
    {{-- <link href="{{ secure_asset('css/styles.css') }}" rel="stylesheet"> --}}
    <style>

    </style>
    <title>Home | OurVet</title>
  </head>

<body>
  <nav class="navbar navbar-expand-lg ">
    <a class="navbar-brand" href="/home">
      <img src="{{ url('img/ourvet.png') }}" class="mt-2" width="120px" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">Menu</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto mt-3">
        <a class="nav-item nav-link text-dark text-center" href="#">
          <i class="fas fa-file-invoice" style="font-size: 27px"></i>
          <br><small style="color: #8190A5">Pembayaran</small>
        </a>
        <p style="font-size: 40px; margin-top:-10px">|</p>
        <a class="nav-item nav-link text-dark text-center" href="#">
          <i class="fas fa-shopping-cart" style="font-size: 27px"></i>
          <br><small style="color: #8190A5">Keranjang</small>
        </a>
        <p style="font-size: 40px; margin-top:-10px">|</p>
      </div>
    </div>
  </nav>
  <hr style="border:1px solid">
    <h1 style="display:inline-block">
      <h4 style="color:#47525E;" class="text-center mt-5">My Profile</h4>
    </h1>
    <div class="container d-flex justify-content-center">
        <div class="jumbotron mt-3" style="background-color: #FFBA5C; width:80%;">
            <div class="text-center">
                <img src="https://icon-library.com/images/icon-of-a-person/icon-of-a-person-6.jpg" class="card-img-top" style="width: 9rem" alt="...">
            </div>
            <div>
                <hr style="border: 1px solid">
                <p class="ml-5">Nama     &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp; Budi</p>
                <hr style="border: 1px solid">
                <p class="ml-5">Username : &nbsp;&nbsp;&nbsp;&nbsp; BudiPrasetyo</p>
                <hr style="border: 1px solid">
                <p class="ml-5">Email    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp; prasetyobudi@gmail.com</p>
                <hr style="border: 1px solid">
                <p class="ml-5">Password : &nbsp;&nbsp;&nbsp;&nbsp; *******</p>
                <hr style="border: 1px solid">
                <p class="ml-5">No.Telp  &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp; 0812345678910</p>
                <hr style="border: 1px solid">
            </div>
            <div class="text-right">
                <a href="{{ url('/editprofile') }}" class="btn btn-dark pl-4 pr-4 mt-3">Edit</a>
            </div>
        </div>
    </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
