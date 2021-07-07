@extends('pembayaran.index2')
@section('konten')


<div class="container d-flex justify-content-center">
    <div class="jumbotron mt-3" style="background-color: #ffffff; width:90%; height:250px;">
        <h5>Keranjang</h5>
        <p class="text-danger">BELUM DIBAYAR</p>
        <p>Total: Rp 140.000</p>
        <a href="{{ url('pembayaran2') }}"><button type="bayar" class="btn btn-primary" style = "float: right;">Bayar</button></a>
    </div>
</div>

<div class="container d-flex justify-content-center">
    <div class="jumbotron mt-3" style="background-color: #ffffff; width:90%; height:250px;">
        <h5>AskVet</h5>
        <p class="text-danger">BELUM DIBAYAR</p>
        <p>Total: Rp 90.000</p>
        <a href="{{ url('pembayaran2') }}"><button type="bayar" class="btn btn-primary" style = "float: right;">Bayar</button></a>
    </div>
</div>

@endsection
