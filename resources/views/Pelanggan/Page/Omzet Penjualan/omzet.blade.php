@extends('Pelanggan.master')

@section('content')

<h4 style="text-align: left">Rp. 13.550.400</h4>
<p style="color: rgb(25, 126, 25); text-align: left">+1009.28 (7.53%)</p>

<div class="row">
    <div class="col">
        <div class="chart" style="width: 550px">
            <div>
                <canvas id="myChart"></canvas>
            </div>
            <link rel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"type="text/css"/>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>

            <style>
                .container {
                width: 70%;
                margin: 15px auto;
                }
                body {
                text-align: center;
                color: green;
                }
                h2 {
                text-align: center;
                font-family: "Verdana", sans-serif;
                font-size: 30px;
                }
            </style>

            <script>
                var ctx = document.getElementById("myChart").getContext("2d");
                var myChart = new Chart(ctx, {
                type: "line",
                data: {
                    labels: [
                    "Januari",
                    "Februari",
                    "Maret",
                    "April",
                    "Mei",
                    "Juni",
                    "Juli",
                    ],
                    datasets: [
                    {
                        label: "pemasukan",
                        data: [2, 9, 3, 12, 6, 3, 7],
                        backgroundColor: "rgba(153,205,1,0.6)",
                    },
                    {
                        label: "pengeluaran",
                        data: [2, 2, 5, 5, 2, 1, 10],
                        backgroundColor: "rgba(155,153,10,0.6)",
                    },
                    ],
                },
                });
            </script>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem; text-align: left">
            <div class="card-body">
              <h5 class="card-title" style="text-align: center">Detail Penjualan</h5>
              <p class="card-text" style="margin-top: 10px">Pemasukkan : 1.009.028</p>
              <p class="card-text">Pengeluaran : 2.789.000</p>
              <p class="card-text">Jumlah Transaksi : 20+</p>
              <p class="card-text">Profit : 7.53%</p>
            </div>
        </div>
    </div>
</div>
@endsection