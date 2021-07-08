@extends('vet-update.index')
@section('konten')
    <div class="container d-flex justify-content-center">
        <div class="jumbotron mt-3" style="background-color: #FFBA5C; width:100%; height:700px;">
        <h4><b>Podcast</b></h4>
        <hr />
            <br>
            <div class="card mb-3;" style="max-width: 1030px; height: 150px">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="{{ url('img/kucing.jpg') }}" class="card-img" alt="dokter2" height="150px">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                    <br>
                      <h4 class="card-title">Bucin With Majikan</h4>
                      <p class="card-text">Podcast curhatan pengalaman unik seorang babu (pecinta kucing) dengan majikannya.</p>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="card mb-3;" style="max-width: 1030px; height: 100px; background-color:rgb(214, 136, 19);">
                <div class="row no-gutters">
                <div class="col-md-1" >
                    <i class="fa fa-play-circle-o" style="font-size:36px; margin:30px"></i>
                </div>
                  <div class="col-md-11">
                    <div class="card-body">
                      <h5 class="card-title">Episode 1 :</h5>
                      <p class="card-text">Rasanya jadi majikan kucing oren, ah mantap!</p>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="card mb-3;" style="max-width: 1030px; height: 100px; background-color:rgb(214, 136, 19);">
                <div class="row no-gutters">
                <div class="col-md-1" >
                    <i class="fa fa-play-circle-o" style="font-size:36px; margin:30px"></i>
                </div>
                  <div class="col-md-11">
                    <div class="card-body">
                      <h5 class="card-title">Episode 2 :</h5>
                      <p class="card-text">Ngabuburit sambil street feeding</p>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="card mb-3;" style="max-width: 1030px; height: 100px; background-color:rgb(214, 136, 19);">
                <div class="row no-gutters">
                <div class="col-md-1" >
                    <i class="fa fa-play-circle-o" style="font-size:36px; margin:30px"></i>
                </div>
                  <div class="col-md-11">
                    <div class="card-body">
                      <h5 class="card-title">Episode 3 :</h5>
                      <p class="card-text">Atur keuangan demi kebutuhan majikan</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        </div>
    </div>
@endsection
