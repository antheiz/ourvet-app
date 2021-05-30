@extends('ask-vet.index')
@section('konten')
<div class="card-deck" style="margin : 10px;">
    <div class="card">
      <img src= "{{ url('img/pesan-konsultasi.jpg') }}" class="card-img-top" alt="Pesanan Konsultasi">
      <div class="card-body">
        <h5 class="card-title">Pesan Konsultasi</h5>
        <p class="card-text">Pilih dokter dan atur jadwal sesuai keinginanmu sebelum melakukan konsultasi</p>
        <br>
        <br>
        <br>
        <button class="btn">Pesan</button>
    </div>
    </div>
    <div class="card">
      <img src="{{ url('img/konsultasi.jpg') }}" class="card-img-top" alt="konsultasi">
      <div class="card-body">
        <h5 class="card-title">Konsultasi</h5>
        <p class="card-text">Nikmati layanan konsultasi dengan dokter dan jadwal pilihan yang sudah kamu pesan</p>
        <br>
        <br>
        <br>
        <a href="{{ url('/konsultasi') }}"><button class="btn">Konsultasi</button></a>
    </div>
    </div>
    <div class="card">
        <img src="{{ url('img/riwayat-konsultasi.jpg') }}" class="card-img-top" alt="riwayat konsultasi">
        <div class="card-body">
          <h5 class="card-title">Riwayat Konsultasi</h5>
          <p class="card-text">Kamu bisa melihat riwayat konsultasimu dan mencetak resep yang diberikan oleh dokter</p>
          <br>
          <br>
          <br>
          <button class="btn">Lihat</button>
        </div>
      </div>
  </div>
@endsection

