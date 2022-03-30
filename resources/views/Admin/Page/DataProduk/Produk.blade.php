@extends('Admin.master')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('content')
                <h5 class="card-title mb-0" style="font-size: 24px;">Data Produk</h5>
                    <div class="row">
						<div class="col-12 col-lg-12 col-xxl-12 d-flex">
                        
							<div class="card flex-fill" style="margin-top: 3%">
                                
								<div class="card-header">
								@if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">   
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('produk.create') }}" class="btn btn-outline-light" name="checkout" type="submit" style="background-color:#E27E05;font-color:white;width:100%;border-radius:15px; font-size:18px"><b>Add Produk</b></a>
                                    </div>
                                </div>

                                <div style="margin: 3%; margin-top: 1%">
                                <table class="table table-hover " >
									<thead> 
										<tr>
											<th class=" d-xl-table-cell">No</th>
											<th class=" d-xl-table-cell">Nama Produk</th>
											<th class="d-none d-xl-table-cell">Kategori</th>
											<th class=" d-xl-table-cell">Stok</th>
											<th class=" d-xl-table-cell">Harga</th>
											<th class="d-none d-xl-table-cell ">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$no = 0;
										?>
										@foreach($produk as $pr)
										<?php
											$no += 1;
										?>
										<tr>
											<td>{{$no}}</td>
											<td class=" d-xl-table-cell">{{$pr->nama_produk}}</td>
											<td class="d-none d-xl-table-cell">{{$pr->kategori->kategori}}</td>
											<td class=" d-xl-table-cell">{{$pr->stok_produk}}</td>
											<td class=" d-xl-table-cell">Rp {{$pr->harga}},-</td>
											<td class="d-none d-xl-table-cell">
												<a href="{{route('produk.view', $pr->id)}}" class="btn btn-info"><i class="align-middle" data-feather="file-text" style="margin-right: 10px"></i>Detail</a>
												<a href="{{route('produk.update', $pr->id)}}" class="btn btn-warning"><i class="align-middle" data-feather="edit" style="margin-right: 10px"></i>Edit</a>
                                                <a href="{{route('produk.delete', $pr->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="align-middle" data-feather="trash-2" style="margin-right: 10px"></i>Hapus</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
                                </div>
								
							</div>
						</div>
						
					</div>

@endsection