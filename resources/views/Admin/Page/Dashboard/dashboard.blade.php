@extends('Admin.master')

@section('content')
    <div class="container-fluid p-0">

		<h1 class="h3 mb-3" style="color: #E27E05; font-size: 27px"><strong>Welcome To</strong> Dashboard Admin</h1>
		<div class="row">
						<div class="col-xl-12  d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Data Pelanggan</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="users"></i>
														</div>
													</div>
												</div>
												<h3 class="mt-1 mb-3">{{$pelanggan}}</h3>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Data Kategori</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="list"></i>
														</div>
													</div>
												</div>
												<h3 class="mt-1 mb-3">{{$kategori}}</h3>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Data Produk</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="package"></i>
														</div>
													</div>
												</div>
												<h3 class="mt-1 mb-3">{{$produk}}</h3>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Data Transaksi</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="dollar-sign"></i>
														</div>
													</div>
												</div>
												<h3 class="mt-1 mb-3">0</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						
					</div>

	</div>
@endsection