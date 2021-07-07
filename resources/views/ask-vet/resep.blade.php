@extends('ask-vet.index')
@section('konten')

  <div class="container">
    <a style = "float: right;">
        <button type="button" class="btn btn-outline-dark">Selanjutnya</button>
    </a>
    <br>

    <div class="row mt-5">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body" style="background-color: #2cdd76;">
            <div class="text-align: justify">
            <p> <strong>drh. Ananda Putro </strong> </p>
            <strong> Waktu : </strong> 17 Februari 2021
            <br>
            <strong> Jenis Hewan : </strong> Kucing
            <br>
            <strong> Umur : </strong> 5 bulan
            <br>
            <strong> Catatan : </strong>
            <br>
            <p> Kucing diberi shampoo plankton 3x sehari agar bulu tidak rontok. </p>
            <!--i class="far fa-user text-center mt-3" style="font-size: 45px"></i>
            <i class="fas fa-user mr-3 text-center" style="font-size: 27px"></i> -->
            </div>

            <div style = "float: right;">
                <button type="button" class="btn btn-secondary">Cetak</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
