@extends('Pelanggan.master')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="/dashboard">Order</a></li>
    <li class="breadcrumb-item active" aria-current="page">Pupuk NPK Mutiara</li>
  </ol>
</nav>

<div class="row">
  <div class="col-lg-4">
    <img src="{{ asset('produk/' . $produk->foto_produk) }}" class="float-left mr-3 mb-4" alt="Pupuk NPK Mutiara" width="100%"  >
  </div>

  <div class="col-lg-8" >
    <h4 style="color: #77AC5C">{{$produk->nama_produk}}</h4>
      <div class="row">
        <div class="col">
          Terjual 790 | 200 Ulasan
        </div>
      </div>

    <h5 style="margin-top: 30px; color: #E27E05">Rp. {{$produk->harga}}</h5>

    <p>
      {{$produk->detail_produk}}
    </p>

    <div class="row" style="margin-top: 20px">
      <div class="col-lg-3">
        <h6>Pengiriman Ke</h6>
      </div>
      <div class="col-lg-9">
        <buttonnya>
      </div>
    </div>
    {{-- end of button pengiriman ke --}}

    {{-- jenis pupuk --}}
    <div class="row" style="margin-top: 20px">
      <div class="col-lg-3">
        <h6>Jenis Pupuk</h6>
      </div>
      <div class="col-lg-9" style="margin-top: -5px">
        <button type="button" class="btn btn-outline-secondary" >Biasa</button>
        <button type="button" class="btn btn-outline-secondary" >Super</button>
      </div>
    </div>
    {{-- end of jenis pupuk --}}

    {{-- jumlah --}}
    <div class="row" style="margin-top: 20px">
      <div class="col-lg-3">
        <h6>Jumlah</h6>
      </div>
      <div class="col-lg-3">
        <div class="d-flex" style="margin-top: -5px">
          <button type="button" id="sub" class="sub btn btn-link px-2"><i class="fa fa-minus"></i></button>
          <input type="number" id="jumlah" name="jumlah" value="1" min="1" max="100"  class="form-control text-center"/>
          <button type="button" id="add" class="add btn btn-link px-2"><i class="fa fa-plus"></i></button>
        </div>
      </div>
      <div class="col-lg-2">
        <p style="margin-top: 3%">Tersedia : <b>{{$produk->stok_produk}}</b></p>
      </div>
    </div>
    {{-- end of jumlah --}}

    {{-- catatan --}}
    <div class="row" style="margin-top: 10px">
      <div class="col-lg-3">
        <h6>Catatan (optional)</h6>
      </div>
      <div class="col-lg-9">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>
    {{-- end of catatan --}}

    <div class="row" style="margin-top: 20px;">
      <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-light" style="background-color:#E27E05; color: white; width:100%; margin-right: 10px;margin-left: 10px;">Add to Cart</button>
        <button type="button" class="btn btn-light" style="background-color: #77AC5C; color: white;  width:100%; margin-right: 10px;margin-left: 10px;">Order Now</button>
      </div>
    </div>

  </div>
</div>

  <script>
	
    $('.add').click(function () {
        
        $(this).prev().val(+$(this).prev().val() + 1);
        
    });
    $('.sub').click(function () {
            if ($(this).next().val() > 1) {
            $(this).next().val(+$(this).next().val() - 1);
            }
    });
    
	</script>

@endsection