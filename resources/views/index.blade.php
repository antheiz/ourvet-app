<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!--<link href="{{ url('css/styles.css') }}" rel="stylesheet">-->
    <link href="{{ secure_asset('css/styles.css') }}" rel="stylesheet"> 
    <style>
        

    </style>
    <title>Welcome | OurVet</title>
  </head>
  <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <img src="{{ url('img/ourvet.png') }}" style="margin-left:-20px" class="" width="120px" alt="">
            <h5 class="card-title text-center ml-4" style="margin-top: -45px">Welcome</h5>
            <hr style="border:1px solid; margin: 0px 0 40px 0">
            <div class="form-signin">
              <div class="form-label-group d-flex justify-content-center">
                <a href="" class="btn btn-lg col-lg-6 btn-dark btn-block" style="border-radius: 8px">Register</a>
              </div>
              <br>
              <div class="form-label-group d-flex justify-content-center">
                <a href="" class="btn btn-lg col-lg-6  btn-dark btn-block" style="border-radius: 8px">Sign In</a>
              </div>
              <hr style="border:1px solid; margin: 40px 0 0 0">
              <div class="text-center mt-3">
                <p>2021</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
