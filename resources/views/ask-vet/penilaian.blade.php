@extends('ask-vet.index')
@section('konten')

  <div class="container">
    <div class="row mt-5">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body" style="background-color: #FFBA5C;">
            <div class="text-center">
                <img src="https://icon-library.com/images/icon-of-a-person/icon-of-a-person-6.jpg" class="card-img-top" style="width: 9rem" alt="...">
            </div>
            <!--i class="far fa-user text-center mt-3" style="font-size: 45px"></i>
            <i class="fas fa-user mr-3 text-center" style="font-size: 27px"></i> -->

            <h5 class="card-title text-center">drh. Ananda Putro
            <div class="text-center">
                <!--span class="fa fa-star checked"></span-->
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
            </h5>

            <div class="form-group">
                <textarea class="form-control" placeholder="Type here your message" rows="5" id="comment" name="text"></textarea>
            </div>

            <div style = "float: right;">
                <a href="{{ url('penilaian2') }}"><button type="button" class="btn btn-primary">Kirim</button></a>
            </div>
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
