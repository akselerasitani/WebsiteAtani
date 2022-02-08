<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="auth.css">
  <title>Login | Akselerasi Tani</title>
</head>

<body>
    <div class="card">
        <div class="card-body">
            @csrf
            <form>
                <h3 class="text-center" style="color: #76AC5C">Login</h3>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">E-mail</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </div>
                    </div>
                    <div class="col">
                        <a style="color:blue; margin-left: 140px" href="#">Forgot password?</a>
                    </div>
                </div>
                <button type="submit" class="form-control" style="background-color: #76AC5C; color:white">Masuk</button>
            </form>
            <h6 class="text-center" style="margin-top: 20px">Atau masuk dengan</h6>
            <div class="row">
                <div class="col-lg-2" style="margin-left: 250px">
                    <div class="social-links mt-3">
                        <a href="#" class="google-plus"><i class="fa fa-google text-dark"> Google</i></a>
                    </div>
                </div>
            </div>
            <p  class="text-center" style="margin-top: 20px">Belum Mempunyai Akun? <a href="/daftar">Daftar</a></p>
        </div>
    </div>
</body>
</html>