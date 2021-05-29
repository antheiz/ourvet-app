@extends('admin.layout')
@section('title','Dashboard')
@section('content')

<div class="col ml-5 bg-white" style="height: 535px; margin-bottom:5%">
    <h3 class="pt-4 pl-4">Daftar Artikel</h3>
    <div class="jumbotron" style="height: 450px">
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
        <div class="col-1 pt-4">
            <div class="text-dark">
                <img src="https://image.freepik.com/free-vector/404-error-background_23-2148071744.jpg" width="110px">
            </div> 
            <br>
            <div class="text-dark">
                <img src="https://image.freepik.com/free-vector/404-error-background_23-2148071744.jpg" width="110px">
            </div> 
        </div>
        <div class="col" style="padding-left: 125px; margin-top:-245px">
            <div class="text-dark bg-white pl-2" style="height: 110px">
                <div class="row">
                    <div class="col">
                        <h5 class="pt-3">Cara menghilangkan kutu pada kucing kesayangan.</h5>
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
            <div class="text-dark bg-white pl-2" style="height: 110px">
                <div class="row">
                    <div class="col">
                        
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