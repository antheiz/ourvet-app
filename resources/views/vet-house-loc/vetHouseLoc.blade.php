@extends('vet-house-loc.master')
@section('konten')
<center><h6 style="color : #2196F3;">CARI KLINIK HEWAN TERDEKAT DENGAN LEBIH MUDAH</h6></center>
<br>
<form class="example" action="/action_page.php" style="margin:auto;max-width:800px">
    <input type="text" placeholder="Search.." name="search2">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>
<p style="margin:20px;">Hasil Pencarian : </p>
<div style="margin : 20px;">
    <div class="card mb-3" style="max-width: 800px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="{{ url('img/klinik-hewan-bahagia.jpg') }}" class="card-img" alt="dokter2" height="100%">
          </div>
          <div class="col-md-8">
            <div class="card-body">
            <br>
              <h5 class="card-title">Klinik Hewan Bahagia</h5>
              <a href="{{ url('/info-klinik') }}"><button class="btn">Lihat</button></a>
              <p class="card-text"><img src="https://img.icons8.com/material/24/fa314a/marker--v1.png"/>Percut Sei Tuan, Jakarta Pusat</p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" style="max-width: 800px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="{{ url('img/klinik-sayang-hewan.jpg') }}" class="card-img" alt="dokter1" height="100%">
          </div>
          <div class="col-md-8">
            <div class="card-body">
                <br>
                <h5 class="card-title">Klinik Sayang Hewan</h5>
                <a href="{{ url('/info-klinik') }}"><button class="btn">Lihat</button></a>
                <p class="card-text"><img src="https://img.icons8.com/material/24/fa314a/marker--v1.png"/>Jln. Siaga IV, -Kel. Harapan Mulya D.K.I Jakarta</p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
