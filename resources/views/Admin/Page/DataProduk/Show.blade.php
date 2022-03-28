@extends('Admin.master')

@section('content')
                <h5 class="card-title mb-0" style="font-size: 24px;">Detail Data Produk</h5>
                    <div class="row">
						<div class="col-12 col-lg-12 col-xxl-12 d-flex">
                        
							<div class="card flex-fill" style="margin-top: 3%">
                                
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">   
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif

                                <div style="margin: 3%; margin-top: 1%">
                                <center><img src="{{ asset('produk/' . $produk->foto_produk) }}" alt="foto" class="img-fluid" style="height: 20rem;"></center>
                                <div class="card-body">
                                    <h2 style="font-weight: bold">{{$produk->nama_produk}}</h2>
                                    <p class="card-text">{{$produk->detail_produk}}</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>Stok Produk</p>
                                            <p>Kategori Produk</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p>: {{$produk->stok_produk}} </p>
                                            <p>: {{$produk->kategori->kategori}}</p>
                                        </div>
                                    </div>
                                </div>
								
							</div>
						</div>
						
					</div>

@endsection