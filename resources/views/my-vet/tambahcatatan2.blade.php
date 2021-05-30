@extends('my-vet.index')
@section('konten')

  <div class="container">
    <div class="jumbotron mt-3" style="background-color: #ffffff;">
        <div>
            <a href="{{ url('my-vet') }}"><i class="far fa-times-circle" style="float: right; font-size: 27px"></i></a>
        </div>
        <br>
        <br>

            <div class="form-group">
                <input type="judul" class="form-control" placeholder="Judul Catatan" id="jdl">
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Isi Catatan" rows="5" id="comment" name="text"></textarea>
            </div>
        <div style = "float: right;">
            <a href="{{ url('my-vet') }}"><button type="button" class="btn btn-outline-secondary">Batal</button></a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
  </div>

  <!--div class="card">
    <div class="card-body">
  <h5 class="card-title"></h5>
  <p class="card-text"></p>
  <br>
  <br>
  <br>
</div>
</div-->


@endsection
