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

    <div class="row">
      <div class="col-md-8">
        <img src="images/logo-atani-horizontal.png">
      </div>
      <div class="col-md-4">
        <h6>Rabu, 8 Desember 2021</h6>
        <p style="color: #E27E05">No Pesanan. 2110162K6W26JK</p>
      </div>
    </div>

    <div class="thankyou">
      <div class="row">
        <div class="col-md-8" style="margin-top: 20px">
          <h5>Terima kasih atas kepercayaan anda!</h5>
          <p>Semoga anda puas dengan layanan kami</p>
        </div>
      </div>
    </div>
    
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

    <div class="rincian-detail">
      <div class="row">
        <div class="col-md-8" style="margin-top: 30px">
          <h6 style="color: #75AA5B">Rincian pesanan</h6>
        </div>
        <div class="col-md-4" style="margin-top: 30px">
          <h6 style="color: #75AA5B">Detail pengantaran</h6>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection
