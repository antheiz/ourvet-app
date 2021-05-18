<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    {{-- <link href="{{ url('css/styles.css') }}" rel="stylesheet"> --}}
    <link href="{{ secure_asset('css/styles.css') }}" rel="stylesheet"> 
    <style>
        

    </style>
    <title>Sign In | OurVet</title>
  </head>
<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <p class="card-subheading text-center" style="margin-top:-20px; color:#8190A5">Sign in with your username and password</p>
            {{-- <p class="card-subheading text-center text-danger" >"Login gagal! username dan password salah!"</p> --}}
            <form class="form-signin mt-4">
              <div class="form-label-group d-flex justify-content-center">
                <input type="email" id="inputEmail" style="border-radius: 8px" class="form-control col-lg-8 " placeholder="Username" required autofocus>
                <label for="inputEmail" style="margin-left: 63px">Username</label>
              </div>

              <div class="form-label-group d-flex justify-content-center">
                <input type="password" id="inputPassword" style="border-radius: 8px" class="form-control col-lg-8" placeholder="Password" required>
                <label for="inputPassword" style="margin-left: 63px">Password</label>
              </div>
              <div class="d-flex justify-content-center">
                {{-- <button class="btn btn-lg btn-dark btn-block text-capitalize col-lg-8" style="border-radius: 8px" type="submit">Sign in</button> --}}
                <a href="/home" class="btn btn-lg btn-dark btn-block text-capitalize col-lg-8" style="border-radius: 8px">Sign In</a>
              </div>
              <a href="">
                <p class="text-center my-4" style="color: #8190A5">Forgot your password?</p>
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
