@extends('daily-vet.index')
@section('konten')
<div class="card-deck" style="margin : 20px;">
    <div class="card">
      <img src= "{{ url('img/snackanjing.png') }}" class="card-img-top" alt="Snack Anjing">
      <div class="card-body">
        <h5 class="card-title">Snack Anjing</h5>
        <p class="card-text"> Mari berbagi rahasia bersama untuk kesehatan si anjing kesayangan kita.</p>
        {{-- <br>
        <br>
        <br> --}}
        <button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#myModal1">
            Beli Sekarang
          </button>
        <!-- The Modal -->
        <div class="modal fade" id="myModal1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Snack Anjing</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <h1 style="color:Tomato;">Rp28.090</h1>
                  <p class="text-warning">Snack Anjing® Makanan Anjing Kering 750gr</p>
                  <h5> Makanan Anjing mengandung: </h5>

                  <p>Mengandung Nutrisi Lengkap, Vitamin dan Mineral. Sangat baik untuk hewan kesayangan anda: - Kesehatan Gigi - Fungsi Pencernaan - Kesehatan Kulit dan Bulu - Penglihatan</p>
                </div>


                <!-- Modal footer -->
                <div class="modal-footer">
                    <p class="text-secondary"> Anda sudah memilih barang yang akan di beli, masukkan ke Keranjang?</p>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                  <button type="button" class="btn btn-success " data-dismiss="modal">Lanjutkan</button>
                </div>

              </div>
            </div>
          </div>
        {{-- <button class="btn">Beli Sekarang</button> --}}
    </div>
    </div>
    <div class="card">
      <img src="{{ url('img/whiswhis.png') }}" class="card-img-top" alt="WhisWhis">
      <div class="card-body">
        <h5 class="card-title">WhisWhis</h5>
        <p class="card-text">Nikmati makanan yang lezat dan bergizi untuk kucing peliharaan Anda</p>
        {{-- <br>
        <br>
        <br> --}}
        <button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#myModal2">
            Beli Sekarang
          </button>
        <!-- The Modal -->
        <div class="modal fade" id="myModal2">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Makanan Kucing WhisWhis</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <h1 style="color:Tomato;">Rp62.950</h1>
                  <p class="text-warning">WHISWHIS® Makanan Kucing Kering 480gr</p>
                  <h5> Makanan Kucing mengandung: </h5>
                  <p>1. WHISWHIS makanan kucing lengkap dan seimbang, dirancang khusus untuk memenuhi kebutuhan kucing Anda pada tahap kehidupan mereka. </p>
                  <p>2. Renyah di luar dengan tekstur lembut yang creamy di tengah.</p>
                  <p>3. Lengkungan WHISKAS Dry akan membantu merawat kesehatan mulut dan gigi mereka.</p>
                  <p>4. Diperkaya dengan omega 3 danomega 6, asam lemak dan seng untuk kulit sehat dan bulu yang mengkilap.</p>
                  <p>5. Vitamin A dan taurine yang ditingkatkan untuk Penglihatan sehat.</p>
                  <p>6. Protein berkualitas yang dipilih dari ikan sungguhan, termasuk lemak, vitamin dan mineral untuk hidup dan energik.</p>
                </div>


                <!-- Modal footer -->
                <div class="modal-footer">
                    <p class="text-secondary"> Anda sudah memilih barang yang akan di beli, masukkan ke Keranjang?</p>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                  <button type="button" class="btn btn-success " data-dismiss="modal">Lanjutkan</button>
                </div>

              </div>
            </div>
          </div>
        {{-- <button class="btn">Beli Sekarang</button> --}}
    </div>
    </div>
    <div class="card">
        <img src="{{ url('img/snackbardog.png') }}" class="card-img-top" alt="Snackbar Dog">
        <div class="card-body">
          <h5 class="card-title">SnackBar Dog</h5>
          <p class="card-text"> Kini tak perlu repot membawa makanan Anjing kita. Easy to Grab!</p>
          <br>
          {{-- <br>
          <br>
          <br> --}}
          <button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#myModal3">
            Beli Sekarang
          </button>
        <!-- The Modal -->
        <div class="modal fade" id="myModal3">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">SnackBar Dog</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <h1 style="color:Tomato;">Rp27.340</h1>
                  <p class="text-warning">SnackBar Dog® Makanan Anjing adalam bentuk bar 150gr</p>
                  <h5> Ingredients: </h5>
                  <p> Chicken Meat, Tapioca Flour, Wheat Flour, Soy Protein, Sobitol Powder, Salmon Flavor, Glycerin, Wheat Gluten, Gelatin, Salt, Coloring, Preservative.</p>

                  <h5>Feeding Instructions</h5>
                  <p>Feed as a snack or reward to dog, aged over 3 months</p>
                </div>


                <!-- Modal footer -->
                <div class="modal-footer">
                    <p class="text-secondary"> Anda sudah memilih barang yang akan di beli, masukkan ke Keranjang?</p>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                  <button type="button" class="btn btn-success " data-dismiss="modal">Lanjutkan</button>
                </div>

              </div>
            </div>
          </div>
          {{-- <button class="btn">Beli Sekarang</button> --}}
        </div>
      </div>
      <div class="card">
        <img src="{{ url('img/vitacat.png') }}" class="card-img-top" alt="VitaCat">
        <div class="card-body">
          <h5 class="card-title">VitaCat</h5>
          <p class="card-text">Berikan vitamin terbaik untuk kucinng anda dalam kemasan kaleng</p>
          {{-- <br>
          <br>
          <br> --}}
          <button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#myModal4">
            Beli Sekarang
          </button>
        <!-- The Modal -->
        <div class="modal fade" id="myModal4">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">VitaCat</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <h1 style="color:Tomato;">Rp34.000</h1>
                  <p class="text-warning">VITACAT® Minuman bervitamin untuk Kucing anda dalam kemasan kaleng </p>
                  <h5> Manfaat Vitamin ini: </h5>
                  <p>1. Meningkatkan sistem kekebalan tubuh </p>
                  <p>2. Menyembuhkan dan mencegah flu dan pilek</p>
                  <p>3. Melawan dan mencegah penyakit terutama yang disebabkan oleh virus</p>
                  <p>4. Menambahkan energi dan stamina</p>
                  <p>5. Membantu persendian kucing lanjut usia</p>
                  <p>6. Mempunyai kandungan kuat untuk detoksifikasi racun tubuh</p>
                  <p>7. Menyeimbangkan gizi secara keseluruhan</p>

                </div>


                <!-- Modal footer -->
                <div class="modal-footer">
                    <p class="text-secondary"> Anda sudah memilih barang yang akan di beli, masukkan ke Keranjang?</p>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                  <button type="button" class="btn btn-success " data-dismiss="modal">Lanjutkan</button>
                </div>

              </div>
            </div>
          </div>
          {{-- <button class="btn">Beli Sekarang</button> --}}
      </div>
  </div>
@endsection

