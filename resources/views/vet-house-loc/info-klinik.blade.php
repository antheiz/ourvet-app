@extends('vet-house-loc.master')
@section('konten')
<div class="container">
<div class = "row">
    <div class="col-4">
    <h5><b>Klinik Hewan Bahagia</b></h5>
    <br>
    <div>
    <img src="{{ url('img/klinik-hewan-bahagia.jpg') }}"class="card-img" alt="dokter2" height="100%">
    </div>
    <br>
    <h5><b>Tentang</b></h5>
    <p>Klinik hewan bahagia adalah klinik hewan keluarga yang terpercaya sejak tahun 1973.</p>
    <br>
    </div>
    <div class="col-5">
    <h5><b>Alamat</b></h5>
    <br>
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.50649202115!2d106.82037141404382!3d-6.196706462431039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f421e2243157%3A0x21f63a4263786972!2sMenara%20BCA!5e0!3m2!1sen!2sid!4v1622360828539!5m2!1sen!2sid" width="450" height="232" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <br>
    <p>Grand Indonesia, Jl. M.H. Thamrin No.1, RT.1/RW.5, Menteng, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10230</p>
    <br>
    <button class="btn" style="background-color: #49524c; float:left;">Telepon Klinik</button> <a href="https://goo.gl/maps/ay5E3zWc4ht4dDah8"><button class="btn" style="background-color: #49524c; float:right;">Petunjuk Lokasi</button></a>
    </div>
    <div class="col-3">
    <br>
    <br>
    <h5><b>Review</b></h5>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <small><p>1000+ orang sudah pernah berkunjung</p></small>
    <br>
    <h5><b>Jam Operasional</b></h5>
    <p>Klinik Buka 24 Jam</p>
    <br>
    <h5><b>Fasilitas</b></h5>
    <p>
        <ul>
            <li>Area Parkir</li>
            <li>Ruang Rawat Inap</li>
            <li>Ruang Operasi</li>
            <li>Laboratorium</li>
        </ul>
    </p>
    </div>
</div>
</div>
@endsection
