@extends('Pelanggan.master')

@section('content')

<div class="card">
    <div class="alamat" style="margin-top: 30px; margin-left: 20px; margin-bottom: 20px">
        <h5>Alamat Pengiriman</h5><hr>
        <div class="row">
            <div class="col-md-10">
                <p>Jl. Boreno VI Taman Wisma Asri N45/123 Rt.01 Rw.02, KOTA LAMPUNG, LAMPUNG UTARA, ID, 17121</p>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-light" style="background-color: #E27E05; color: white">Edit</button>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="alamat" style="margin-top: 30px; margin-left: 20px">
        <h5>Produk</h5>

        <table class="table">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Jenis Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Subtotal</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="fotoproduk/npk.jpg" style="width: 100px; height: 60px"></td>
                <td>Pupuk NPK Mutiara</td>
                <td>Super</td>
                <td>Rp. 20.000</td>
                <td>1</td>
                <td>Rp. 20.000</td>
              </tr>
            </tbody>
        </table>
        <div class="row">
          <div class="col-md-8">
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Catatan</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </div>
          <div class="col-md-4">
            Opsi Pengiriman
            <div class="form-floating" style="margin-top: 8px">
              <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected>== Pilih Opsi Pengiriman ==</option>
                <option value="1">Hemat</option>
                <option value="2">Reguler</option>
                <option value="3">Instant</option>
              </select>
            </div>
          </div>
        </div>
    </div>
</div>

<div class="card">
  <div class="row" style="margin-top: 30px; margin-left: 20px; margin-bottom: 20px">
    <h5 class="col-md-2">
      Metode Pembayaran
    </h5>
    <div class="col-md-10">
      <button type="button" class="btn btn-outline-dark">Cicilan 12x</button>
      <button type="button" class="btn btn-outline-dark">COD (Cash on Delivery)</button>
      <button type="button" class="btn btn-outline-dark">Transfer Bank</button>
      <button type="button" class="btn btn-outline-dark">Kartu Kredit/Debit</button>
      <button type="button" class="btn btn-outline-dark">Merchant</button>
    </div>
  </div>

  <div id="rincian total" style="margin-left: 600px; margin-bottom: 20px">
    <div class="row">
      <div class="col">
        <p>Subtotal</p>
        <p>Ongkos Kirim</p>
        <p>Biaya Penanganan</p>
        <p><b>Total Pesanan</b></p><hr>
        <button type="button" class="btn btn-light" style="background-color: #E27E05; color: white">Buat Pesanan</button>
      </div>
      <div class="col">
        <p>Rp. 20.000</p>
        <p>Rp. 10.000</p>
        <p>Rp. 2.000</p>
        <p style="color:#E27E05"><b>Rp. 32.000</b></p>
        
      </div>
    </div>
  </div>
</div>

@endsection