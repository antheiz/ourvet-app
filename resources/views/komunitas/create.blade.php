@extends('komunitas.layout')
@section('title','Buat Pertanyaan')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            
            <a href="/komunitas" class="btn btn-warning text-white"><b> <i class="fas fa-arrow-circle-left"></i> Kembali</b></a>
        </div>
        <div class="">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari..." aria-label="Search">
                <a class="my-2 my-sm-0" style="margin-left: -40px" type="submit"><i class="fas fa-search text-dark"></i></a>
            </form>
        </div>
    </div>
    <div style="margin-top:6%">
        <div class="jumbotron bg-white" style="width: 80%; margin-left:120px">
            <h4 class="text-center" style="color: #47525E; margin-top:-50px">Buat Pertanyaan</h4>
            <hr style="border: 1px solid">
            <i class="fas fa-user-circle mt-4 d-" style="font-size: 30px"></i>
            <p>Budi</p>
            <textarea name="" id="" cols="78" rows="10" class="ml-5"></textarea>
            <br>
            <i class="fas fa-tags mt-5 ml-5" style="font-size: 20px; color:rgb(248, 73, 3)"></i>
            <i class="fas fa-images mt-5 ml-3 text-success" style="font-size: 25px"></i>
            <div class="text-right">
                <button type="submit" class="btn btn-dark">Kirim</button>
            </div>
        </div>
    </div>
</div>
@endsection