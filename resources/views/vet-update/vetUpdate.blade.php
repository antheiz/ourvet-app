@extends('vet-update.index')
@section('konten')
<center><h5><b>Kategori Artikel</b></h5><center>
<hr />
<div class="container">
    <div class = "row">
        <div class="col-3">
            <div>
            <img src="{{ url('img/kucing.jpg') }}"class="card-img" alt="dokter2" height="100%">
            </div>
            <br>
            <button class="btn" style = "background-color:Transparent; border: 2px solid rgb(59, 52, 52); color: rgb(59, 52, 52);">Kucing</button>
        </div>
        <div class="col-3">
            <div>
            <img src="{{ url('img/anjing.jpg') }}"class="card-img" alt="dokter2" height="100%">
            </div>
            <br>
            <button class="btn" style = "background-color:Transparent; border: 2px solid rgb(59, 52, 52); color: rgb(59, 52, 52);">Anjing</button>
        </div>
        <div class="col-3">
            <div>
            <img src="{{ url('img/burung.jpg') }}"class="card-img" alt="dokter2" height="100%">
            </div>
            <br>
            <button class="btn" style = "background-color:Transparent; border: 2px solid rgb(59, 52, 52); color: rgb(59, 52, 52);">Burung</button>
        </div>
        <div class="col-3">
            <div>
            <img src="{{ url('img/reptil.jpg') }}"class="card-img" alt="dokter2" height="100%">
            </div>
            <br>
            <button class="btn" style = "background-color:Transparent; border: 2px solid rgb(59, 52, 52); color: rgb(59, 52, 52);">Reptil</button>
        </div>
    </div>
</div>
<hr />
<center><h5><b>Kategori Podcast</b></h5><center>
    <hr />
    <div class="container">
        <div class = "row">
            <div class="col-3">
                <div>
                <img src="{{ url('img/anjing.jpg') }}"class="card-img" alt="dokter2" height="100%">
                </div>
                <br>
                <button class="btn" style = "background-color:Transparent; border: 2px solid rgb(59, 52, 52); color: rgb(59, 52, 52);">Podcast Vet</button>
            </div>
            <div class="col-3">
                <div>
                <img src="{{ url('img/kucing.jpg') }}"class="card-img" alt="dokter2" height="100%">
                </div>
                <br>
                <button class="btn" style = "background-color:Transparent; border: 2px solid rgb(59, 52, 52); color: rgb(59, 52, 52);">Bucin with Majikan</button>
            </div>
            <div class="col-3">
                <div>
                <img src="{{ url('img/reptil.jpg') }}"class="card-img" alt="dokter2" height="100%">
                </div>
                <br>
                <button class="btn" style = "background-color:Transparent; border: 2px solid rgb(59, 52, 52); color: rgb(59, 52, 52);">Reptilian Journey</button>
            </div>
            <div class="col-3">
                <div>
                <img src="{{ url('img/burung.jpg') }}"class="card-img" alt="dokter2" height="100%">
                </div>
                <br>
                <button class="btn" style = "background-color:Transparent; border: 2px solid rgb(59, 52, 52); color: rgb(59, 52, 52);">Animal Trainer</button>
            </div>
        </div>
    </div>
@endsection

