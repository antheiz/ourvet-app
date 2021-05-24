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
    <title>Home | OurVet</title>
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
    <div class="container" style="height: 800px">
        <div class="row">
            <div class="col">
                <a href="/komunitas" class="btn btn-warning text-white"><b> <i class="fas fa-arrow-circle-left"></i> Kembali</b></a>
                <div class="col-6 mt-5 pb-5 pt-3 bg-white" style="border-radius: 10px">
                    <p>
                        <b>
                            Bagaimana cara merawat Kucing <br> Peliharaan?
                        </b>
                    </p>
                </div>
                <p class="mt-2">30 Jawaban</p>
            </div>
            <div class="">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Cari..." aria-label="Search">
                    <a class="my-2 my-sm-0" style="margin-left: -40px" type="submit"><i class="fas fa-search text-dark"></i></a>
                </form>
            </div>
        </div>
        <div class="row" style="margin-top:2%">
            <div class="col" style="margin-left: 25%">
                <a href="" class="btn btn-primary">Terbaik</a>
                <a href="" class="btn btn-primary ml-3">Terbaru</a>
            </div>
            <div class="my-2 my-lg-0">
                <a href="/komunitas/buat_pertanyaan" class="btn btn-info"><i class="fas fa-plus-circle"></i> Komentar</a>
            </div>
        </div>
        <div class="row" style="margin-top:3%">
            <div class="col-3">
                <div class="text-dark text-center pt-2 pb-2" style="background-color: #DDE1DF;"><b>Kategori</b></div> 
                <a href="" class="text-dark bg-white pt-3 pb-3 text-center d-block">
                    <b>Anjing</b>
                </a>
                <a href="" class="text-dark pt-3 pb-3 text-center d-block" style="background-color:#a4a9b1">
                    <b>Kucing</b>
                </a>
                <a href="" class="text-dark bg-white pt-3 pb-3 text-center d-block">
                    <b>Marmut</b>
                </a>
                <a href="" class="text-dark bg-white pt-3 pb-3 text-center d-block">
                    <b>Hamsters</b>
                </a>
            </div>
            <div class="col-1">
                <div class="text-dark bg-white">
                    <img src="https://www.kindpng.com/picc/m/264-2644335_lost-and-found-transparent-lost-icon-png-png.png" width="120px">
                </div> <br>

                <div class="text-dark bg-white">
                    <img src="https://www.kindpng.com/picc/m/264-2644335_lost-and-found-transparent-lost-icon-png-png.png" width="120px" style="margin-top: -8px">
                </div> 
            </div>
            <div class="col" style="margin-left: 25px">
                <div class="text-dark bg-white pl-2" style="height: 120px">
                    <div class="row">
                        <div class="col">
                            <p><b>Mark Joe</b> <i>5 jam yang lalu</i></p> 
                            <p>Berikan makanan bernutrisi tinggi</p>
                            <a href="">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-dark"></i>
                            </a>
                        </div>
                        <div class="col-2">
                            <p> <b>10</b>
                                <i class="fas fa-thumbs-up pt-2 ml-3" style="font-size: 30px"></i>
                            </p>
                            <p> <b>5</b>
                                <i class="fas fa-thumbs-down pt-3 ml-3" style="font-size: 30px"></i>
                            </p>
                        </div>
                    </div>
                </div> <br>

                <div class="text-dark bg-white pl-2" style="height: 120px">
                    <div class="row">
                        <div class="col">
                            <p><b>Paskahlia</b> <i> 4 jam yang lalu</i></p> 
                            <p>Pastikan kucing anda mendapat tempat yang nyaman untuk beristirahat.</p>
                            <a href="" class="text-warning">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </a>
                        </div>
                        <div class="col-2">
                            <p> <b>5</b>
                                <i class="fas fa-thumbs-up pt-2 ml-3" style="font-size: 30px"></i>
                            </p>
                            <p> <b>1</b>
                                <i class="fas fa-thumbs-down pt-3 ml-3" style="font-size: 30px"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5 d-flex justify-content-end">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link text-white bg-primary" href="#">1</a></li>
              <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
              <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
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
</body>

</html>
