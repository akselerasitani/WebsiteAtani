@extends('Admin.master')

@section('content')
                <h5 class="card-title mb-0" style="font-size: 24px;">Tambah Data Kategori</h5>
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
                                        <form class="form form-horizontal" action="{{ route('kategori.create.process') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label>Nama Kategori</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Nama Kategori" id="first-name-icon" value="{{old('kategori_nama')}}" name="kategori_nama" id="kategori_nama" >
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="d-grid gap-2" style="padding-left: 20%; padding-right: 20%; margin-top: 30px;">
                                                        <button class="btn btn-primary" type="submit" name="pelanggan">Submit</button>
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