@extends('Pelanggan.master')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Invoice</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">

            {{-- tanggal dan no pesanan --}}
            <div class="row">
                <div class="col-md-8">
                    <img src="images/logo-atani-horizontal.png">
                </div>
                <div class="col-md-4">
                    <h6>Rabu, 8 Desember 2021</h6>
                    <p style="color: #E27E05">No Pesanan. 2110162K6W26JK</p>
                </div>
            </div>

            {{-- thankyou --}}
            <div class="thankyou">
                <div class="row">
                    <div class="col-md-8" style="margin-top: 20px">
                        <h5>Terima kasih atas kepercayaan anda!</h5>
                        <p>Semoga anda puas dengan layanan kami</p>
                    </div>
                </div>
            </div>

            {{-- total bayar --}}
            <div class="total-bayar">
                <div class="row">
                    <div class="col-md-8" style="margin-top: 20px">
                        <h5 style="color: #75AA5B">Total dibayar</h5>
                    </div>
                    <div class="col-md-4" style="margin-top: 20px">
                        <h5 style="color: #75AA5B">Rp. 62.000</h5>
                    </div>
                </div>
            </div>

            {{-- rincian pesanan dan detail pesanan --}}
            <div class="rincian-detail">
                <div class="row">
                  {{-- rincian pesanan --}}
                    <div class="col-md-8" style="margin-top: 30px">
                        <h6 style="color: #75AA5B">Rincian pesanan</h6>

                        {{-- keterangan rincian pesanan --}}
                        <div class="row" style="margin-top: 10px">
                            <div class="col-sm-2">1</div>
                            <div class="col-sm-6">NPK Mutiara</div>
                            <div class="col-sm-4">@50.000</div>
                        </div>
                        <hr style="margin-top: 8px">
                        <div class="row" style="margin-top: 10px">
                            <div class="col-sm-8">Total harga</div>
                            <div class="col-sm-4">50.000</div>
                        </div>
                        <div class="row" style="margin-top: 10px">
                          <div class="col-sm-8">Subtotal</div>
                          <div class="col-sm-4">50.000</div>
                        </div>
                        <div class="row" style="margin-top: 10px">
                          <div class="col-sm-8">Ongkos Kirim</div>
                          <div class="col-sm-4">10.000</div>
                        </div>
                        <div class="row" style="margin-top: 10px">
                          <div class="col-sm-8">Biaya Penanganan</div>
                          <div class="col-sm-4">2.000</div>
                        </div>
                        <div class="row" style="color: #E27E05; margin-top: 15px">
                          <div class="col-sm-8">Total Pesanan</div>
                          <div class="col-sm-4">Rp 62.000</div>
                        </div>
                    </div>

                  {{-- detail pesanan --}}
                    <div class="col-md-4" style="margin-top: 30px">
                        <h6 style="color: #75AA5B">Detail pengantaran</h6>

                        <div class="row" style="margin-top: 10px">
                          <div class="col-sm-12">Diantarkan jam 12:01 dari</div>
                          <h6 class="col-sm-12" style="margin-top: 20px">Akselerasi Tani</h6>
                          <div class="col-sm-12">Lampung Hall, Jl. Perjuangan No. 48, Lampung Tengah, Lampung</div>
                        </div>
                        <div class="row" style="margin-top: 30px">
                          <div class="col-sm-12">Sampai jam 12:15 di</div>
                          <h6 class="col-sm-12" style="margin-top: 20px">Toko Tani Berkah Jaya</h6>
                          <div class="col-sm-12">Jl. Borneo Raya No.xx No.xxx, RT.xxx/RW.xxx, Tlk. Pucung, Kec. LampungUtara, Kota Lampung, Lampung Utara 17121, Indonesia</div>
                        </div>

                        <div class="row" style="margin-top: 10px">
                          <div class="col-sm-6"><img src="images/petani.png" class="float-left" width="100px" height="100px"></div>
                          <div class="col-sm-6"  style="text-align: right">Oki Darmawan</div>
                          <div class="col-sm-12" style="text-align: right">B4123FUF</div>
                          <div class="col-sm-12"  style="text-align: right">Jarak 3 km</div>
                          <div class="col-sm-12"  style="text-align: right">Waktu antar 13 mins</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
