@extends('Admin.master')

@section('content')
                <h5 class="card-title mb-0" style="font-size: 24px;">Tambah Data Produk</h5>
                    <div class="row">
						<div class="col-12 col-lg-12 col-xxl-12 d-flex">
                        
							<div class="card flex-fill" style="margin-top: 3%">
                                
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">   
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif

                                <div style="margin: 3%; margin-top: 1%">
                                <div class="card-body">
                                <form class="form form-horizontal" action="{{ route('produk.create.process') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-3 mb-4">
                                                        <label>Nama Produk</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Nama Produk" id="first-name-icon" value="{{old('produk_nama')}}" name="produk_nama" id="produk_nama" >
                                                                
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mb-4">
                                                        <label>Stok</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Stok" id="first-name-icon" value="{{old('produk_stok')}}" name="produk_stok" id="produk_stok" >
                                                                
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mb-4">
                                                        <label>Harga</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="number" class="form-control"
                                                                    placeholder="Harga" id="first-name-icon" value="{{old('produk_harga')}}" name="produk_harga" id="produk_harga" >
                                                                
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mb-4">
                                                        <label>Nama Kategori</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <select class="form-control" name="produk_kategori" id="produk_kategori" >
                                                                    @foreach($kategori as $kt)
                                                                        <option value="{{$kt->id}}">{{$kt->kategori}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mb-4">
                                                        <label>Foto Produk</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <div class="position-relative">
                                                                <input type="file" class="form-control" value="{{old('foto')}}" name="foto" onchange="loadFile(event)" >  
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mb-4">
                                                        <label>Deskripsi Produk</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <div class="position-relative">
                                                                <div class="form-floating">
                                                                    <textarea class="form-control" placeholder="Leave a comment here"
                                                                        id="floatingTextarea" value="{{old('produk_detail')}}" name="produk_detail" id="produk_detail"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="d-grid gap-2" style="padding-left: 20%; padding-right: 20%; margin-top: 30px;">
                                                        <button class="btn btn-primary" type="submit" name="produk">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
								
							</div>
						</div>
						
					</div>

@endsection