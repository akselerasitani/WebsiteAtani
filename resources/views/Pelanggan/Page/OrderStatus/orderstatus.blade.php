@extends('Pelanggan.master')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Order Status</li>
    </ol>
</nav>

<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Date</th>
                    <th scope="col">Order Number</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>14 / 02 / 2021</td>
                    <td>12345678</td>
                    <td>Rp. 550.000</td>
                    <td>Approved</td>
                    <td><button type="button" class="btn btn-outline-light" style="color: white; background-color: #E27E05" href="/orderstatusdetail">Detail Status</button></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>14 / 02 / 2021</td>
                    <td>12345678</td>
                    <td>Rp. 550.000</td>
                    <td>Pending</td>
                    <td><button type="button" class="btn btn-outline-light" style="color: white; background-color: #E27E05" href="/orderstatusdetail">Detail Status</button></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>14 / 02 / 2021</td>
                    <td>12345678</td>
                    <td>Rp. 550.000</td>
                    <td>Done</td>
                    <td><button type="button" class="btn btn-outline-light" style="color: white; background-color: #E27E05" href="/orderstatusdetail">Detail Status</button></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>14 / 02 / 2021</td>
                    <td>12345678</td>
                    <td>Rp. 550.000</td>
                    <td>Send</td>
                    <td><button type="button" class="btn btn-outline-light" style="color: white; background-color: #E27E05" href="/orderstatusdetail">Detail Status</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection