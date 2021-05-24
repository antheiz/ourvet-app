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
    <title>Tambah Catatan Kesehatan Hewan | OurVet</title>
  </head>

<body>
  <nav class="navbar navbar-expand-lg ">
    <a class="navbar-brand" href="#">
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
        <li class="nav-item dropdown" style="margin-right: 50%">
          <a class="nav-item nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#">
            <i class="fas fa-user mr-3 text-center" style="font-size: 27px"></i>
            <br><small style="color: #8190A5">Budi</small>
          </a>
          <ul class="dropdown-menu dropdown-menu-right text-uppercase" >
              <li>
                  <a class="dropdown-item" href="/profile">
                      <i class="fas fa-user mr-1"></i>
                      Profile
                  </a>
              </li>
              <li>
                  <a class="dropdown-item" href="/signin">
                      <i class="fas fa-sign-out-alt mr-1"></i>
                      Logout
                  </a>
              </li>
          </ul>
      </li>
      {{-- <div class="btn-group dropdown">
        <a class="nav-item nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#">
          <i class="fas fa-user mr-3 text-center" style="font-size: 27px"></i>
          <br><small style="color: #8190A5">Budi</small>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <button class="dropdown-item" type="button">
            <i class="fas fa-user mr-1"></i>
                      Profile
          </button>
          <button class="dropdown-item" type="button">
            <i class="fas fa-sign-out-alt mr-1"></i>
                      Logout
          </button>
        </div>
      </div>
           <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> harusnya taro head --}}
      </div>
    </div>
  </nav>
  <hr style="border:1px solid">

  <div class="container">
    <div class="jumbotron mt-3" style="background-color: #ffffff;">
        <div>
            <i class="far fa-times-circle" style="float: right; font-size: 27px"></i>
        </div>
        <br>
        <br>

            <div class="form-group">
                <input type="judul" class="form-control" placeholder="Judul Catatan" id="jdl">
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Isi Catatan" rows="5" id="comment" name="text"></textarea>
            </div>
        <div style = "float: right;">
            <button type="button" class="btn btn-outline-secondary">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
