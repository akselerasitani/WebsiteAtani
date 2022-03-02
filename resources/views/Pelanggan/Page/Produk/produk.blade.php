@extends('Pelanggan.master')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Order</li>
    </ol>
</nav>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>All Categories</option>
                    <option value="1">Pupuk</option>
                    <option value="2">Benih</option>
                    <option value="3">Obat-obatan</option>
                    </select>
                    <label for="floatingSelect">Categories</label>
                </div>
            </div>
            <div class="col">
                <div class="input-group" style="height: 60px">
                  <input type="search" class="form-control rounded" placeholder="Search your product in here..." aria-label="Search" aria-describedby="search-addon" />
                  <button type="button" class="btn btn-light" style="background-color: #77AC5C; color: white">SEARCH</button>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top: 10px">
              <?php
                $no = 0;
              ?>
              @foreach($produk as $pr)
              <?php
                $no += 1;
              ?>
            <div class="col-lg-4">
              <div class="card" style="background-color: #F5F5F5">
                <img src="{{ asset('produk/' . $pr->foto_produk) }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><a href="{{route('order.detail', $pr->id)}}" style="color: black">{{$pr->nama_produk}}</a></h5>
                  <p class="card-text">Pupuk NPK Mutiara diklaim dapat menyuburkan keseluruhan dari tanaman, mulai dari daun, bunga, batang serta akar tanaman.</p>
                  <div class="row">
                    <div class="col">
                        <h5>Rp. {{$pr->harga}}</h5>
                    </div>
                    <div class="col">
                      <a href="{{route('order.detail', $pr->id)}}" class="btn btn-light" style="margin-top: -8px; margin-left: 30px; background-color: #77AC5C; color: white" >Order Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center">
      {!! $produk->links() !!}
    </div>
</div>



<div id="myModal" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pupuk Mutiara</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6>Rp.50.000</h6>
        <p>
          Pupuk NPK mutiara merupakan salah satu jenis pupuk yang banyak digunakan, 
          baik untuk tanaman perkebunan atau sekadar untuk tanaman hias. Pupuk ini diketahui memiliki manfaat yang sangat baik untuk pertumbuhan tanaman dengan cepat. Pupuk NPK sendiri merupakan pupuk jenis kimia yang memiliki kandungan nitrogen (N), fosfor (P), dan kalium (K). 
          
          Pupuk NPK mutiara diklaim dapat menyuburkan keseluruhan dari tanaman, mulai dari daun, bunga, batang serta akar tanaman, tu apabila penggunaan pupuk NPK dilakukan dengan tepat dan benar.
        </p>
        <button type="button" class="btn btn-light" style="margin-top: -8px; margin-left: 30px; background-color: #77AC5C; color: white">Order Now</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection