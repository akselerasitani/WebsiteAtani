<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />
    <link rel="stylesheet" href="{{asset('assetsdashboard/vendors/bootstrap-icons/bootstrap-icons.css')}}">

	<title>Admin - A - Tani</title>

	<link rel="shortcut icon" href="{{asset('logoatas.png')}}" type="image/x-icon">

	<link href="{{asset('assetsadmin/css/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
        {{-- sidebar --}}
        @include('Admin.Layout.sidebar')

		<div class="main">
            {{-- sidebar --}}
            @include('Admin.Layout.header')

			<main class="content">
                {{-- content --}}
                @yield('content')
			</main>
		</div>
	</div>

	<script src="{{asset('assetsadmin/js/app.js')}}"></script>

	

</body>

</html>