@extends('ask-vet.index')
@section('konten')
<div style="margin : 20px;">
<div class="card mb-3" style="max-width: 850px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{ url('img/dokter2.jpg') }}" class="card-img" alt="dokter2" height="100%">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Drh. Ananda Putro</h5>
          <a href="{{ url('resep') }}"><button class="btn" style = "background-color: #FFFF; border: 2px solid rgb(221, 133, 133); color: rgb(221, 133, 133);">Resep</button></a>
          <p class="card-text">Klinik Hewan Amelys</p>
          <p class="card-text">Biaya Konsultasi : Rp 90.000</p>
          <p class="card-text"> Rating Anda :
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3" style="max-width: 850px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{ url('img/dokter1.jpg') }}" class="card-img" alt="dokter1" height="100%">
      </div>
      <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">Drh. Angga Tom</h5>
            <a href="{{ url('resep') }}"><button class="btn" style = "background-color: #FFFF; border: 2px solid rgb(221, 133, 133); color: rgb(221, 133, 133);">Resep</button></a>
            <p class="card-text">SavePet Klinik</p>
            <p class="card-text">Biaya Konsultasi : Rp 105.000</p>
            <p class="card-text"> Rating Anda :
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


