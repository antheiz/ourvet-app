@extends('ask-vet.index')
@section('konten')

  <div class="container">
    <a style = "float: right;">
        <button type="button" class="btn btn-outline-dark">Selanjutnya</button>
    </a>
    <br>
    <br>

    <div class="alert alert-success">
        Penilaian Anda sudah berhasil dikirim. Terima kasih telah menggunakan layanan kami!
    </div>

    <div class="row mt-5">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body" style="background-color: #FFBA5C;">
            <div class="text-center">
                <img src="https://icon-library.com/images/icon-of-a-person/icon-of-a-person-6.jpg" class="card-img-top" style="width: 9rem" alt="...">
            </div>
            <!--i class="far fa-user text-center mt-3" style="font-size: 45px"></i>
            <i class="fas fa-user mr-3 text-center" style="font-size: 27px"></i> -->

            <h1 class="card-title text-center">drh. Ananda Putro
            <div class="text-center">
                <!--span class="fa fa-star checked"></span-->
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
            </div>
            </h1>

            <p class="text-center">Pelayanan sangat baik, terima kasih. </p>

            <div style = "float: left;">
                <a href="{{ url('resep') }}"><button type="button" class="btn btn-secondary">Resep</button></a>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
