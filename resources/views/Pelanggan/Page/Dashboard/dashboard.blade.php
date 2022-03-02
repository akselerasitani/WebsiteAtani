@extends('Pelanggan.master')

@section('content')

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3 style="color: #E27E05">Welcome to Dashboard Toko Berkah Jaya</h3>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="page-content">
                        <div class="row">
                            <h5 style="color: #4C8E27">Overview</h5>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold" >Inventory</h6>
                                                <h6 class="font-extrabold mb-0">{{$produk}}</h6>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="stats-icon">
                                                    <img src="icon/inventory.png" class="card-img-top" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Invoice</h6>
                                                <h6 class="font-extrabold mb-0"></h6>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="stats-icon">
                                                    <img src="icon/invoice.png" class="card-img-top" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Best Seller</h6>
                                                <h6 class="font-extrabold mb-0"></h6>
                                            </div>
                                            <div class="col-md-4">
                                            <div class="stats-icon">
                                                    <img src="icon/best.png" class="card-img-top" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">History</h6>
                                                <h6 class="font-extrabold mb-0"></h6>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="stats-icon">
                                                    <img src="icon/history.png" class="card-img-top" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-8 col-lg-8 col-md-6">
                            <h5 style="color: #4C8E27">History</h5>
                                <div class="card">
                                <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                
                                                <tbody>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="{{asset('images/bj.png')}}">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Congratulations on your graduation!</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="{{asset('images/bj.png')}}">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Wow amazing design! Can you make another
                                                                tutorial for
                                                                this design?</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    
                                </div>
                            </div>
                            
                            <div class="col-4 col-lg-4 col-md-6">
                            <h5 style="color: #4C8E27">Best Seller</h5>
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Invoice</h6>
                                                <h6 class="font-extrabold mb-0"></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
            </div>
@endsection