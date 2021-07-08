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
          <button class="btn" style = "background-color: #FFFF; border: 2px solid rgb(221, 133, 133); color: rgb(221, 133, 133);" data-toggle="modal" data-target="#modalku2">Tanya Dokter</button>
          <!-- The Modal 2-->
          <div class="modal fade" id="modalku2">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color: #FFBA5C;">

                    <!-- Modal Header 2-->
                    <div class="modal-header">
                       <h5 class="modal-title text-center">Apakah Anda yakin ingin memulai sesi konsultasi?</h5>
                    </div>

                    <!-- Modal footer 2-->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                      <a href="{{ url('/penilaian') }}"><button type="button" class="btn btn-success" data-toggle="modal">Ya</button></a>
                    </div>
                </div>
            </div>
          </div>
          <p class="card-text">Klinik Hewan Amelys</p>
          <p class="card-text">Biaya Konsultasi : Rp 90.000</p>
          <p class="card-text">Hari/Tanggal : 17 Februari 2021 Pukul : 07.00 - 08.00</p>
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
            <button class="btn" style = "background-color: #FFFF; border: 2px solid rgb(221, 133, 133); color: rgb(221, 133, 133);" data-toggle="modal" data-target="#modalku2">Tanya Dokter</button>
          <!-- The Modal 2-->
          <div class="modal fade" id="modalku2">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color: #FFBA5C;">

                    <!-- Modal Header 2-->
                    <div class="modal-header">
                       <h5 class="modal-title text-center">Apakah Anda yakin ingin memulai sesi konsultasi?</h5>
                    </div>

                    <!-- Modal footer 2-->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                      <a href="{{ url('/penilaian') }}"><button type="button" class="btn btn-success" data-toggle="modal">Ya</button></a>
                    </div>
                </div>
            </div>
          </div>
            <p class="card-text">SavePet Klinik</p>
            <p class="card-text">Biaya Konsultasi : Rp 105.000</p>
            <p class="card-text">Hari/Tanggal : 20 Februari 2021 Pukul : 13.00 - 14.00</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
