@extends('komunitas.layout')
@section('title','Detail Pertanyaan')
@section('content')
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
            <a href="/komunitas/balas_pertanyaan" class="btn btn-info"><i class="fas fa-plus-circle"></i> Komentar</a>
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
@endsection