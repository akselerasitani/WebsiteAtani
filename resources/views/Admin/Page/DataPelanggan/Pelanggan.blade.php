@extends('Admin.master')

@section('content')
                <h5 class="card-title mb-0" style="font-size: 24px;">Data Pelanggan</h5>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">   
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                    <div class="row">
						<div class="col-12 col-lg-12 col-xxl-12 d-flex">
                        
							<div class="card flex-fill" style="margin-top: 3%">

                                <div style="margin: 3%; margin-top: 1%">
                                <table class="table table-hover " >
									<thead> 
										<tr>
											<th class="d-xl-table-cell">No </th>
											<th class=" d-xl-table-cell">Nama Pelanggan</th>
											<th class="d-none d-xl-table-cell">Email Pelanggan</th>
											<th class="d-xl-table-cell">Nama Toko</th>
                                            <th class=" d-xl-table-cell">Status</th>
											<th class="d-none d-md-table-cell">Aksi</th>
										</tr>
									</thead>
									<tbody>
                                        <?php
                                            $no = 0;
                                        ?>
                                        @foreach($pelanggan as $pl)
                                        <?php
                                            $no += 1;
                                        ?>
										<tr>
											<td>{{$no}}</td>
											<td class=" d-xl-table-cell">{{$pl->name}}</td>
											<td class="d-none d-xl-table-cell">{{$pl->email}}</td>
											<td class=" d-md-table-cell">Vanessa Tucker</td>
											<td><span class="badge bg-success">Toko Aktif</span></td>
                                            <td class="d-none d-xl-table-cell">
                                                <a href="" class="btn btn-primary"><i class="align-middle" data-feather="file-text" style="margin-right: 10px"></i>Detail</a>
                                                <a href="" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="align-middle" data-feather="trash-2" style="margin-right: 10px"></i>Hapus</a>
                                            </td>
										</tr>
										@endforeach
									</tbody>
								</table>
                                <div class="d-flex justify-content-center">
                                    {!! $pelanggan->links() !!}
                                </div>
                                </div>
								
							</div>
						</div>
						
					</div>

@endsection