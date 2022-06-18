@extends('Pelanggan.master')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard">Order</a></li>
            <li class="breadcrumb-item active" aria-current="page">Keranjang Belanja</li>
        </ol>
    </nav>

    <div class="card" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">Toko Tani Makmur</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Produk</th>
                        <th scope="col"></th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Harga Satuan</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                        <th scope="row"><img src="fotoproduk/npk.jpg" width="100px" height="100px"></th>
                        <td>Pupuk NPK Mutiara</td>
                        <td>Super</td>
                        <td>Rp. 20.000</td>
                        <td>1</td>
                        <td>Rp. 20.000</td>
                    </tr>
                    <tr>
                        <th><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                        <th scope="row"><img src="fotoproduk/npk.jpg" width="100px" height="100px"></th>
                        <td>Pupuk Kompos</td>
                        <td>Biasa</td>
                        <td>Rp. 30.000</td>
                        <td>1</td>
                        <td>Rp. 30.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card" style="width: 100%;">
        
    </div>
@endsection
