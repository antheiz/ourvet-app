@extends('komunitas.layout')
@section('title','Home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            {{-- <i class="far fa-user text-center mt-3" style="font-size: 45px"></i> --}}
            <h4 style="color:#00A6FF; display:inline-block">Semua Pertanyaan</h4>
            <p>301 Diskusi</p>
        </div>
        <div class="">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari..." aria-label="Search">
                <a class="my-2 my-sm-0" style="margin-left: -40px" type="submit"><i class="fas fa-search text-dark"></i></a>
            </form>
        </div>
    </div>
    <div class="row" style="margin-top:5%">
        <div class="col">
            <a href="" class="btn btn-primary">Terbaru</a>
            <a href="" class="btn btn-primary ml-3">Belum Dijawab</a>
        </div>
        <div class="my-2 my-lg-0">
            <a href="/komunitas/buat_pertanyaan" class="btn btn-info"><i class="fas fa-plus-circle"></i> Buat Pertanyaan</a>
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
                <img src="https://image.freepik.com/free-vector/404-error-background_23-2148071744.jpg" class="" width="120px">
            </div> <br>

            <div class="text-dark bg-white">
                <img src="https://image.freepik.com/free-vector/404-error-background_23-2148071744.jpg" width="120px">
            </div> 
        </div>
        <div class="col" style="margin-left: 25px">
            <div class="text-dark bg-white pl-2" style="height: 120px">
                <div class="row">
                    <div class="col">
                        <p><b>John Doe</b> <i>1 jam yang lalu</i></p> 
                        <a href="/komunitas/detail_pertanyaan">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </a>
                        <a href="" class="btn btn-primary">
                            <i class="fas fa-tags"></i>
                            Kucing
                        </a>
                    </div>
                    <div class="col-2">
                        <p> <b>5</b>
                            <i class="fas fa-comments pt-2 ml-3" style="font-size: 30px"></i>
                        </p>
                        <p> <b>10</b>
                            <i class="fas fa-chart-bar pt-3 ml-3" style="font-size: 30px"></i>
                        </p>
                    </div>
                </div>
            </div> <br>

            <div class="text-dark bg-white pl-2" style="height: 120px">
                <div class="row">
                    <div class="col">
                        <p><b>Jane Doe</b> <i> 1 jam yang lalu</i></p> 
                        <a href="/komunitas/detail_pertanyaan">
                            <p>Apa makanan yang baik untuk kucing ?</p>
                        </a>
                        <a href="" class="btn btn-primary">
                            <i class="fas fa-tags"></i>
                            Kucing
                        </a>
                    </div>
                    <div class="col-2">
                        <p> <b>5</b>
                            <i class="fas fa-comments pt-2 ml-3" style="font-size: 30px"></i>
                        </p>
                        <p> <b>10</b>
                            <i class="fas fa-chart-bar pt-3 ml-3" style="font-size: 30px"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5 d-flex justify-content-end">
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