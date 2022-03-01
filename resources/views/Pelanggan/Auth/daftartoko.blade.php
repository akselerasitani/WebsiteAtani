<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="auth.css">
  <title>Register | Akselerasi Tani</title>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-12 col-lg-12 col-xl-8">
                <div class="card " style="border-radius: 15px;">
                    <div class="card-body">
                        @csrf
                        <form method="POST" action="">
                            <h3 class="text-center" style="color: #76AC5C">Data Toko</h3>
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Toko</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1">Alamat Toko</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlFile1">Upload Akte Pendirian/SIUP/SITU</label>
                                <input type="file" class="form-control" id="exampleFormControlFile1">
                            </div>
                            <button type="submit" class="form-control" style="background-color: #76AC5C; color:white">Kirim</button>
                        </form>
                        <p  class="text-center" style="margin-top: 20px">Sudah Mempunyai Akun? <a href="/masuk" style="text-decoration: none; color: black;"><b>Masuk</b></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>