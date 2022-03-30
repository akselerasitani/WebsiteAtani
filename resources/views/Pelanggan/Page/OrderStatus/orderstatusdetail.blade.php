@extends('Pelanggan.master')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="/orderstatus">Order Status</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail</li>
    </ol>
</nav>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="row">
                <div class="col-xs-12 col-md-8 offset-md-2 block border">
                  <div class="wrapper-progressBar">
                    <ul class="progressBar">
                      <li class="active">Being Processed</li>
                      <li class="active">Waiting for payment</li>
                      <li>Paid</li>
                    </ul>
                  </div>
                </div>
            </div>              
        </div>
        <br>
        <div id="pesanan">
            <div class="row">
                <div class="col">
                    <h5 style="color: #E27E05">No Pesanan 2110162K6W26JK</h5>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-light" style="background-color:#77AC5C; color: white; margin-left: 10px">Hubungi Penjual</button>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-light" style="background-color: #E27E05; color: white;">Batalkan Pesanan</button>
                </div>
            </div>
        </div>

        <hr>

        <div id="alamat pesanan">
            <h5>Alamat Pengiriman</h5>
            <h6>Berkah Jaya</h6>
            <p>
                (+62) 895330683880<br>
                Jl. Boreno VI Taman Wisma Asri N45/123 Rt.01 Rw.02, KOTA LAMPUNG, LAMPUNG UTARA, ID, 17121
            </p>
        </div>

        <div id="produk detail" style="margin-top: 50px">
            <div class="row">
                <div class="col">
                    <img src="images/npk.png" width="150px" height="150px">
                </div>
                <div class="col" style="margin-left: -300px">
                    <h5 style="color: #77AC5C">Pupuk NPK Mutiara</h5>
                    <p>Jenis: Super</p>
                    <p>x1</p>
                </div>
                <div class="col">
                    <h5 style="margin-top: 50px; margin-left: 200px; color: #77AC5C">Rp. 50.000</h5>
                </div>
            </div>
        </div>

        <div id="rincian total" style="margin-left: 600px">
            <div class="row">
                <div class="col">
                    <p>Subtotal</p>
                    <p>Ongkos Kirim</p>
                    <p>Biaya Penanganan</p>
                    <p><b>Total Pesanan</b></p>
                </div>
                <div class="col">
                    <p>Rp. 50.000</p>
                    <p>Rp. 10.000</p>
                    <p>Rp. 2.000</p>
                    <p style="color:#E27E05"><b>Rp. 62.000</b></p>
                </div>
            </div>
        </div>
    </div>

    <style>
        .wrapper-progressBar {
            width: 100%
        }

        .progressBar {
        }

        .progressBar li {
            list-style-type: none;
            float: left;
            width: 33%;
            position: relative;
            text-align: center;
        }

        .progressBar li:before {
            content: " ";
            line-height: 30px;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            border: 1px solid #ddd;
            display: block;
            text-align: center;
            margin: 0 auto 10px;
            background-color: white
        }

        .progressBar li:after {
            content: "";
            position: absolute;
            width: 100%;
            height: 4px;
            background-color: #ddd;
            top: 15px;
            left: -50%;
            z-index: -1;
        }

        .progressBar li:first-child:after {
            content: none;
        }

        .progressBar li.active {
            color: dodgerblue;
        }

        .progressBar li.active:before {
            border-color: dodgerblue;
            background-color: dodgerblue;
        }

        .progressBar .active:after {
            background-color: dodgerblue;
        }
    </style>
    
</div>
@endsection