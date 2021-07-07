@extends('pembayaran.index2')
@section('konten')

    <div class="card ml-5" style="width:90%; background-color: #FFBA5C;">
        <div class="card-body">
            <h5 class="card-title text-center">Rincian Pembayaran</h5>
            <hr>
            <div style = "float: right;">
                <p>&emsp;&emsp; Cakaran Kucing Tiang Garukan &emsp;&emsp;&emsp; x1 &emsp; Rp.125.000 </p>
                <p>&emsp;&emsp; Meo Creamy Treats &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; x1 &emsp; Rp. 15.000 </p>
                <hr>
                <p>&emsp;&emsp; <strong>TOTAL</strong> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Rp.140.000</p>
            </div>

            <br><br><br><br><br><br>

            <hr>
            <h5 class="card-title text-center">Metode Pembayaran</h5>
            <hr>
            <div>
                <div class="form-check-inline">
                    <label class="form-check-label" for="radio1">
                        &emsp;&emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;&emsp; <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1">Gopay
                    </label>
                </div>

                <div class="form-check-inline">
                    <label class="form-check-label" for="radio2">
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Alfamart/Alfamidi/Dan+Dan
                    </label>
                </div>
            </div>

            <br>

            <div>
                <div class="form-check-inline">
                    <label class="form-check-label" for="radio3">
                        &emsp;&emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;&emsp; <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option3" checked>ShopeePay
                    </label>
                </div>

                <div class="form-check-inline">
                    <label class="form-check-label" for="radio4">
                        &emsp;&emsp;&emsp;&emsp;&emsp; <input type="radio" class="form-check-input" id="radio4" name="optradio" value="option4">Indomaret/i.Saku
                    </label>
                </div>
            </div>

            <hr>
            <!--button type="proses" class="btn btn-primary" style = "float: right;">Proses Pembayaran</button-->
            <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#modalku">
                Proses Pembayaran
            </button>

            <!-- The Modal -->
            <div class="modal fade" id="modalku">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title text-center"><strong>Dibayar dengan ShopeePay</strong></h4>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                          <p><strong>Total Pembayaran</strong></p>
                          <p style="color:rgb(248, 152, 62); float:right">Rp140.000</p>
                          <br>
                          <hr>
                          <p><strong>Metode Pembayaran</strong></p>
                          <p class="text-secondary"> ShopeePay (Saldo ShopeePay Rp.150.000) </p>
                          <hr>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <!--button type="button" class="btn btn-primary " data-dismiss="modal">Konfirmasi dan Bayar</button-->
                          <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#modalku2">Konfirmasi dan Bayar</button>

                          <!-- The Modal 2-->
                          <div class="modal fade" id="modalku2">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content" style="background-color: #FFBA5C;">

                                    <!-- Modal Header 2-->
                                    <div class="modal-header">
                                       <h5 class="modal-title text-center">Apakah Anda yakin bayar dengan ShopeePay?</h5>
                                    </div>

                                    <!-- Modal footer 2-->
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalku3">Ya</button>

                                        <!-- The Modal 3-->
                                        <div class="modal fade" id="modalku3">
                                          <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content" style="background-color: #FFBA5C;">

                                            <!-- Modal Header 3-->
                                            <div class="modal-header">
                                             <h5 class="modal-title text-center">Apakah ingin lakukan pembayaran sekarang?</h5>
                                            </div>

                                            <!-- Modal Footer 3-->
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Nanti Saja</button>
                                              <button type="button" class="btn btn-success " data-dismiss="modal">Bayar</button>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        </div>
    </div>
@endsection
