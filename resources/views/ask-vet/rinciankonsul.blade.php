@extends('ask-vet.index')
@section('konten')

<center><h4>Rincian Konsultasi</h4></center>

<h1 style="display:inline-block"></h1>
<div class="container d-flex justify-content-center">
    <div class="jumbotron mt-3" style="background-color: #FFBA5C; width:80%;">
        <div class="text-left">
            <h5 style="color:#47525E;" class="text">
            Dokter &emsp; &emsp; &emsp; &emsp; &emsp; :&emsp; drh. Ananda Putro
            </h5>
            <h5 style="color:#47525E;" class="text-left">
            Jadwal Konsultasi &emsp;&ensp;: &emsp; Senin 12 Mei (12.00-13.00)
            </h5>
            <h5 style="color:#47525E;" class="text-left">
            Harga &emsp; &emsp; &ensp; &emsp; &emsp;&emsp;: &emsp; Rp 90.000
            </h5>
            <h5 style="color:#47525E;" class="text-left">
                Jenis Hewan &emsp; &emsp; &ensp;&emsp;: &emsp;
                    <input type="text" class="form-control" id="usr" placeholder="">
            </h5>
            <h5 style="color:#47525E;" class="text-left">
                Umur Hewan &emsp; &emsp; &ensp;&emsp;: &emsp;
                    <input type="text" class="form-control" id="usr" placeholder="">
            </h5>
            <h5 style="color:#47525E;" class="text-left">
                Keluhan Hewan &emsp; &emsp; &ensp;: &emsp;
                    <input type="text" class="form-control" id="usr" placeholder="">
            </h5>
            <div class="text-center">
                <a href="" class="btn btn-dark pl-4 pr-4 mt-3">Konfirmasi</a>
            </div>

            {{-- POP-UP --
              Masih Belom Nemu codingannya
            }}


            {{-- ALERT--
            <style>
                .alert {
                  padding: 20px;
                  background-color: #f44336;
                  color: white;
                }

                .closebtn {
                  margin-left: 15px;
                  color: white;
                  font-weight: bold;
                  float: right;
                  font-size: 22px;
                  line-height: 20px;
                  cursor: pointer;
                  transition: 0.3s;
                }

                .closebtn:hover {
                  color: black;
                }
            </style>

                <div class="alert">
                  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                  <strong>Mohon isikan data Rincian Konsultasi secara lengkap</strong>
                </div> --}}
        </div>
     </div>
</div>

@endsection
