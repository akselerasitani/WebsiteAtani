<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - A-Tani</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('assetsdashboard/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('assetsdashboard/vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="{{asset('assetsdashboard/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assetsdashboard/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assetsdashboard/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('assetsdashboard/images/favicon.svg')}}" type="image/x-icon">
</head>
<body style="background-color: #f9fcf7">
    <div id="app">
        {{-- sidebar --}}
        @include('Pelanggan.Layout.sidebar')
        
        <div id="main">  
            {{-- header --}}
            @include('Pelanggan.Layout.header')  
            <div style="padding: 2rem">  
                {{-- content --}}
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{asset('assetsdashboard/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assetsdashboard/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('assetsdashboard/vendors/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('assetsdashboard/js/pages/dashboard.js')}}"></script>

    <script src="{{asset('assetsdashboard/js/main.js')}}"></script>
</body>
</html>