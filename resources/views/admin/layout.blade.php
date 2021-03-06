<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    {{-- <link href="{{ url('css/styles.css') }}" rel="stylesheet"> --}}
    <link href="{{ secure_asset('css/styles.css') }}" rel="stylesheet">
    <style>


    </style>
    <title>@yield('title') | OurVet</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="/home">
            <img src="{{ url('img/ourvet.png') }}" class="mt-2" width="120px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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
                    <ul class="dropdown-menu dropdown-menu-right text-uppercase">
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
            </div>
        </div>
    </nav>
    <hr style="border:1px solid">
    <div class="container">
        <div class="row" style="margin-top:7%;">
            <div class="col-3 bg-white jumbotron" style="margin-bottom: 120px">
                <div class="text-center pt-3 pb-3" style="background-color: #ED965D; color:#47525E; margin-top:-64px; margin-left:-32px;margin-right:-32px">
                    <a href="" style="color:inherit">
                        <b>Our Vet</b>
                    </a>
                </div> 
                <div class="text-center pt-3 pb-3" style="background-color: #F0F0F0; color:#47525E; margin-top:30px; margin-left:-32px;margin-right:-32px">
                    <a href="/admin/artikel" style="color:inherit">
                        <b>Artikel</b>
                        <i class="fas fa-arrow-right"></i> 
                    </a>
                </div> 
                <div class="text-center pt-3 pb-3" style="background-color: #F0F0F0; color:#47525E; margin-top:10px; margin-left:-32px;margin-right:-32px">
                    <a href="/admin/podcast" style="color:inherit">
                        <b>Podcast</b>
                    </a>
                </div> 
                <div class="text-center pt-3 pb-3" style="background-color: #F0F0F0; color:#47525E; margin-top:10px; margin-left:-32px;margin-right:-32px">
                    <a href="" style="color:inherit">
                        <b>Pengaturan</b>
                    </a>
                </div> 
                <div class="text-center pt-3 pb-3" style="background-color: #F0F0F0; color:#47525E; margin-top:10px; margin-left:-32px;margin-right:-32px">
                    <a href="" style="color:inherit">
                        <b>Tentang</b>
                    </a>
                </div> 
                <p class="text-center" style="padding-top:60px; margin-bottom:-50px"><b>Version 1.1</b></p>
            </div>
            @yield('content')
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.0/chart.min.js" integrity="sha512-yadYcDSJyQExcKhjKSQOkBKy2BLDoW6WnnGXCAkCoRlpHGpYuVuBqGObf3g/TdB86sSbss1AOP4YlGSb6EKQPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
