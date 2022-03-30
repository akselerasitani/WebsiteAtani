<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="auth.css">
  <title>Login | Akselerasi Tani</title>

  <link rel="shortcut icon" href="{{asset('logoatas.png')}}" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-12 col-lg-12 col-xl-8">
                <div class="card " style="border-radius: 15px;">
                    
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-danger alert-block" style="margin-top: 10px">   
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form action="{{route('proses_loginpelanggan')}}" method="POST" >
                            {{ csrf_field() }}

                            <h3 class="text-center" style="color: #76AC5C">Login</h3>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <a style="color:blue; " href="#">Forgot password?</a>
                                </div>
                            </div>
                            <button type="submit" class="form-control" style="background-color: #76AC5C; color:white">Masuk</button>
                        </form>
                        <h6 class="text-center" style="margin-top: 20px">Atau masuk dengan</h6>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <button type="button" class="btn " style="text-decoration: none; color: black; "><i class="fa fa-google fa-2x"></i></button>
                            <button type="button" class="btn " style="text-decoration: none; color: black; "><i class="fa fa-facebook-square fa-2x"></i></button>
                        </div>
                        <p  class="text-center" style="margin-top: 20px">Belum Mempunyai Akun? <a href="/daftar" style="text-decoration: none; color: black; "><b>Daftar</b></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>