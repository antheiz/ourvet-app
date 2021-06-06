@extends('ask-vet.index')
@section('konten')

<div style="margin : 30px;">
<h2>Jadwal Konsultasi Dokter Hewan</h2>
<br>
<form action="/action_page.php">
  <label for="konsultasi">Hari/Tanggal:</label>
  <input type="date" id="jadwalkonsul" name="jadwal">
  <label for="appt">Jam:</label>
  <input type="time" id="appt" name="appt">
  </form>
<br>
<div class="card mb-4" style="max-width: 850px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{ url('') }}" class="card-img" alt="dokter1" height="100%">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Drh. Ananda Putro</h5>
          <a href="{{ url('/rinciankonsul') }}"><button class="btn">Konsultasi</button></a>
          <p class="card-text">Klinik Hewan Amelys</p>
          <p class="card-text">Biaya Konsultasi : Rp 90.000</p>
          <p class="card-text">Rating :
            <style>
                .checked {
                  color: orange;
                }
            </style>
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
        <img src="{{ url('') }}" class="card-img" alt="dokter2" height="100%">
      </div>
      <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">Drh. Angga Tom</h5>
            <a href="{{ url('/rinciankonsul') }}"><button class="btn">Konsultasi</button></a>
            <p class="card-text">SavePet Klinik</p>
            <p class="card-text">Biaya Konsultasi : Rp 105.000</p>
            <p class="card-text">Rating :
                <style>
                .checked {
                  color: orange;
                }
                </style>
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

  <div class="card mb-3" style="max-width: 850px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{ url('') }}" class="card-img" alt="dokter3" height="100%">
      </div>
      <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">Drh. Donald</h5>
            <a href="{{ url('/rinciankonsul') }}"><button class="btn">Konsultasi</button></a>
            <p class="card-text">PetCare Animalia</p>
            <p class="card-text">Biaya Konsultasi : Rp 120.000</p>
            <p class="card-text">Rating :
                <style>
                .checked {
                  color: orange;
                }
                </style>
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
</div>
@endsection
