@extends('admin.layout')
@section('title','Dashboard')
@section('content')

<div class="col ml-5 bg-white" style="height: 555px; margin-bottom:5%">
    <h3 class="pt-4 pl-4">Daftar Podcast</h3>
    <div class="jumbotron" style="height: 470px">
        <div class="row" style="margin-top: -50px">
            <div class="col">
                <p>All (20)</p>
            </div>
            <div class="">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Cari..." aria-label="Search">
                    <a class="my-2 my-sm-0" style="margin-left: -40px" type="submit"><i class="fas fa-search text-dark"></i></a>
                </form>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-4 pt-4 rounded bg-white">
                <div class="text-dark text-center mb-3" style=" margin-top:-17px; margin-left:-8px">
                    <img src="https://image.freepik.com/free-vector/404-error-background_23-2148071744.jpg" class="rounded" width="200px">
                    <p class="text-center pt-2">Hello World</p>
                    <i class="fas fa-step-backward" style="font-size:25px"></i>
                    <i class="fas fa-play-circle" style="font-size:25px"></i>
                    <i class="fas fa-step-forward" style="font-size:25px"></i>
                </div>
            </div>
            <div class="col-4 ml-5 pt-4 rounded bg-white">
                <div class="text-dark text-center mb-3" style=" margin-top:-17px; margin-left:-8px">
                    <img src="https://image.freepik.com/free-vector/404-error-background_23-2148071744.jpg" class="rounded" width="200px">
                    <p class="text-center pt-2">Hello World</p>
                    <i class="fas fa-step-backward" style="font-size:25px"></i>
                    <i class="fas fa-play-circle" style="font-size:25px"></i>
                    <i class="fas fa-step-forward" style="font-size:25px"></i>
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
</div>


@endsection