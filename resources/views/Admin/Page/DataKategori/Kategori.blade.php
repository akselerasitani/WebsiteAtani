@extends('Admin.master')

@section('content')
                <h5 class="card-title mb-0" style="font-size: 24px;">Data Kategori</h5>
                    <div class="row">
						<div class="col-12 col-lg-12 col-xxl-12 d-flex">
                        
							<div class="card flex-fill" style="margin-top: 3%">
                                
								<div class="card-header">
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-outline-light" name="checkout" type="submit" style="background-color:#E27E05;font-color:white;width:100%;border-radius:15px; font-size:18px"><b>Add Kategori</b></button>
                                    </div>
                                </div>

                                <div style="margin: 3%; margin-top: 1%">
                                <table class="table table-hover " >
									<thead> 
										<tr>
											<th class=" d-xl-table-cell">No</th>
											<th class=" d-xl-table-cell">Nama Kategori</th>
											<th class="d-none d-xl-table-cell">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$no = 0;
										?>
										@foreach($kategori as $kt)
										<?php
											$no += 1;
										?>
										<tr>
											<td>{{$no}}</td>
											<td class=" d-xl-table-cell">{{$kt->kategori}}</td>
											<td class="d-none d-xl-table-cell">
												<a href="" class="btn btn-info"><i class="align-middle" data-feather="file-text" style="margin-right: 10px"></i>Detail</a>
												<a href="" class="btn btn-warning"><i class="align-middle" data-feather="file-text" style="margin-right: 10px"></i>Detail</a>
                                                <a href="" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="align-middle" data-feather="trash-2" style="margin-right: 10px"></i>Hapus</a>
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