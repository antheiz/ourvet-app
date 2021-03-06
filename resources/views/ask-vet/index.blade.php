<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    {{-- <link href="{{ url('css/styles.css') }}" rel="stylesheet"> --}}
    <link href="{{ secure_asset('css/styles.css') }}" rel="stylesheet">
    <style>
        .btn {
          background-color: #49524c;
          border: none;
          color: white;
          padding: 16px 32px;
          text-align: center;
          font-size: 16px;
          margin: 4px 2x;
          transition: 0.3s;
          float: right;
        }

        .btn:hover {
          background-color: #19e63b;
          color: white;
        }
        .checked {
        color: orange;
        }
        .speech-bubble {
            position: relative;
            background: #0042bd;
            border-radius: .4em;
        }
        .speech-bubble:after {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            width: 0;
            height: 0;
            border: 20px solid transparent;
            border-right-color: #0042bd;
            border-left: 0;
            border-bottom: 0;
            margin-top: -10px;
            margin-left: -20px;
        }
    </style>
    <title>AskVet | OurVet</title>
  </head>

<body>
  <nav class="navbar navbar-expand-lg ">
    <a class="navbar-brand" href="/home">
      <img src="{{ url('img/ourvet.png') }}" class="mt-2" width="120px" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">Menu</span>
    </button>
    <h4 style="text-align: center; width: 100%;">AskVet</h4>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto mt-3">
        <li class="nav-item dropdown">
            <a class="nav-item nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#">
              <i class="fas fa-file-invoice" style="font-size: 27px"></i>
              <br><small style="color: #8190A5">Pembayaran</small>
            </a>
            <ul class="dropdown-menu dropdown-menu-right text-uppercase" >
                <li>
                    <a class="dropdown-item" href="/pembayaran1">
                        <i class="fas fa-file-invoice mr-1"></i>
                        Pembayaran
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="/signin">
                        <i class="fas fa-receipt mr-1"></i>
                        History Transaksi
                    </a>
                </li>
            </ul>
        </li>
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
      </div> --}}
      </div>
    </div>
  </nav>
  <hr style="border:1px solid">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="app.js"></script>
<br/>
  @yield('konten')
<br/>
</body>
</html>
