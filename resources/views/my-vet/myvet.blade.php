@extends('my-vet.index')
@section('konten')

    <div class="container">
            <div>
                <a href="/my-vet/tambahcatatan" style = "float: right;">
                    <button type="button" class="btn btn-outline-dark">+ Tambah Catatan</button>
                </a>
                <a style = "float: left;">
                    <p style="color: #5c646e">Catatan Riwayat Kesehatan Hewan</p>
                </a>
            </div>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="jumbotron mt-3" style="background-color: #FFBA5C; width:100%; height:450px;">
            <p class="text-center text-align: center;">Anda Tidak Memiliki Catatan</p>
            </div>
        </div>
    </div>

@endsection

