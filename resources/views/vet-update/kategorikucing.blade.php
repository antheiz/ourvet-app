@extends('vet-update.index')
@section('konten')

<div style="margin : 20px;">
    <label for="artikel">Kategori Artikel:
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kucing
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button">Anjing</button>
          <button class="dropdown-item" type="button">Burung</button>
          <button class="dropdown-item" type="button">Reptil</button>
        </div>
    </label>
    </div>
</div>
</div>

<div style="margin : 80px;">
<div class="card mb-3" style="max-width: 1250px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{ url('') }}" class="card-img" alt="artikel 1" height="100%">
      </div>
      <div class="col-md-8">
        <div class="card-body">
        <a href="{{ url('vet-update/artikelkucing') }}"><h5 class="card-title">Cara Menghilangkan Kutu pada Kucing Kesayangan</h5></a>
          <i class='far fa-clock'>20 Maret 2021</i>
          <i class="fa fa-eye">50 pembaca</i>
          <i class='far fa-thumbs-up'>40 disukai</i>
          <br>
            <div>
                <i class='far fa-thumbs-up' style='font-size:36px'></i>
                <i class="fa fa-download" style="font-size:36px"></i>
                <i class='fas fa-share-alt' style='font-size:36px'></i>
            </div>
        </div>
      </div>
    </div>
</div>
</div>

  <div style="margin : 80px;">
  <div class="card mb-3" style="max-width: 1250px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{ url('') }}" class="card-img" alt="dokter2" height="100%">
      </div>
      <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">Tips Memandikan Kucing yang Takut Air</h5>
            <i class='far fa-clock'>10 April 2021</i>
            <i class="fa fa-eye">40 pembaca</i>
            <i class='far fa-thumbs-up'>38 disukai</i>
            <br>
                <div>
                    <i class='far fa-thumbs-up' style='font-size:36px'></i>
                    <i class="fa fa-download" style="font-size:36px"></i>
                    <i class='fas fa-share-alt' style='font-size:36px'></i>
                 </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <div style="margin : 80px;">
  <div class="card mb-3" style="max-width: 1250px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{ url('') }}" class="card-img" alt="dokter3" height="100%">
      </div>
      <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">Vaksinasi Idealnya dilakukan pada Umur Berapa?</h5>
            <i class='far fa-clock'>10 April 2021</i>
            <i class="fa fa-eye">40 pembaca</i>
            <i class='far fa-thumbs-up'>38 disukai</i>
            <br>
                <div>
                    <i class='far fa-thumbs-up' style='font-size:36px'></i>
                    <i class="fa fa-download" style="font-size:36px"></i>
                    <i class='fas fa-share-alt' style='font-size:36px'></i>
                 </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
