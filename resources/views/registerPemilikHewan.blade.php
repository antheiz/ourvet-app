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
    <a class="navbar-brand" href="">
      <img src="{{ url('img/ourvet.png') }}" class="mt-2" width="120px" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">Menu</span>
    </button>

    {{-- Tulisan REGISTER tidak bisa ditengah --}}
    <div class="d-flex justify-content-center" style="color:#47525E;">REGISTER
    </div>

  </nav>

  <hr style="border:1px solid">
    <h1 style="display:inline-block"></h1>
    <div class="container d-flex justify-content-center">
        <div class="jumbotron mt-3" style="background-color: #FFBA5C; width:80%;">
            <div class="text-center">
                <h5 style="color:#47525E;" class="text-center">Create your account. It's free and only takes a minute</h5>
                <label class="radio-inline" ><input type="radio" name="optradio" checked>Pemilik Hewan</label>
                <label class="radio-inline"><input type="radio" name="optradio">Dokter Hewan</label>
                {{-- <a href="/registerDokterHewan" class="radio-inline"><input type="radio" name="optradio">Dokter Hewan </a> --}}
            </div>

            <div>
                <form>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="usr" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="pwd" placeholder="Password">
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            Your password must be 8-20 characters long, contain letters and numbers.
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="only-number" placeholder="Nomor Telepon">
                    </div>
                    {{-- gimana caranya supaya cuma bisa input/masukin angka doang? --}}

                    <div class="form-group">
                        <select class="form-control" placeholder="Jenis Kelamin">
                            <option selected>Jenis Kelamin</option>
                            <option value="1">Laki-Laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Domisili ">
                    </div>
                </form>
            </div>
            <div class="text-center">
                <a href="/home" class="btn btn-dark pl-4 pr-4 mt-3">Buat Akun</a>
            </div>
        </div>
    </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>