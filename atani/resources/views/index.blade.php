<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="index.css">
    <title>Akselerasi Tani</title>
</head>

<body>

  {{-- NAVBAR --}}
  {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/index">
          {{-- Logo ATANI --}}
          <div class="container">
            <div class="row">
              <div class="col-lg-2 mb-2" style="margin-left: 10px;">
                <img src="images/logo-atani-horizontal.png" width="130" height="120" class="d-inline" style="" alt="">
              </div>
            </div>
          </div>
          {{-- END OF LOGO --}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 150px;">
          <ul class="navbar-nav">
            <li class="nav-tentang" style="margin-right: 10px;">
              <a class="nav-link" style="color:#499026;" href="#tentang">Tentang Kami</a>
            </li>
            <li class="nav-produk" style="margin-right: 10px;">
                <a class="nav-link" style="color:#499026" href="#produk">Produk</a>
            </li>
            <li class="nav-manfaat" style="margin-right: 10px;">
                <a class="nav-link" style="color:#499026" href="manfaat">Manfaat</a>
            </li>

            <li class="nav-masuk">
                <button type="button" class="btn btn-outline-success" style="background-color: #fff;">Masuk</button>
            </li>
            <li class="nav-daftar">
              <button type="button" class="btn" style="background-color:#499026; color:#fff">Daftar</button>
            </li>
          </ul>
        </div>
    </nav>
    {{-- AKHIR DARI NAVBAR --}}


    {{-- MAIN CONTENT --}}
    <div class="content-1">
        <img src="images/cabbage.png" width="1500" height="625" class="d-inline img-fluid" style="" alt="">
    </div>

    <div class="container mt-5">
        <div class="row">
          <div class="col">
                <p style="color: #499026">TENTANG KAMI</p>
                <h3>Memperkenalkan Anda Cara<br>Baru Dalam Berbisnis</h3>
                <p>A-Tani merupakan sebuah platform digital yang<br>mengakomodir segala hal tentang pertanian dan perkebunan<br>dari hulu sampai ke hilir dengan berbagai layanan terbaik kami.</p>
                <button type="button" class="btn btn-light" style="background-color: #499026; color: #fff">Pelajari Lebih Lanjut</button>
          </div>
          <div class="col">
            <img src="images/tentang.png" width="500" height="400" class="d-inline" style="" alt="">
          </div>
        </div>
    </div>

    <div class="mengapa">
        <h4 class="text-center" style="color: #499026">MENGAPA A-TANI?</h4>
        <h5 class="text-center">“For Farmer For Nation”</h5>
        <div class=" mt-5 p-2" style="background-color: #499026">
            <div class="row">
                <div class="col text-center">
                    <img src="images/harga.png" width="150" height="160" class="d-inline" style="" alt="">
                    <h6 style="color: #fff">Harga produk lebih stabil</h6>
                    <p style="color: #fff">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="col text-center">
                    <img src="images/pembayaran.png" width="150" height="160" class="d-inline" style="" alt="">
                    <h6 style="color: #fff">Pembayaran diakhir (Pay-Later)</h6>
                    <p style="color: #fff">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="col text-center">
                    <img src="images/jaminan.png" width="150" height="160" class="d-inline" style="" alt="">
                    <h6 style="color: #fff">Jaminan kualitas produk</h6>
                    <p style="color: #fff">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="col text-center">
                    <img src="images/branding.png" width="150" height="160" class="d-inline" style="" alt="">
                    <h6 style="color: #fff">Branding Toko Gratis</h6>
                    <p style="color: #fff">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="button text-center mt-5 mb-2">
                <button type="button" class="btn btn-warning" style="background-color: #F7DE06; color: #fff">GABUNG SEKARANG</button>
            </div>
        </div>
    </div>

    <div class="produk">
        <h4 class="text-center" style="color: #499026">PRODUK KAMI</h4>
        <p class="text-center">Kami menyediakan kebutuhan pertanian seperti bibit unggul, pupuk berkualitas dan obat-obatan<br>terbaik dari berbagai produsen ternama di Indonesia.</p>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <img src="images/benih.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-title">Bibit unggul</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images/pupuk.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-title">Pupuk berkualitas</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images/obat-obatan.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-title">Obat-obatan</p>
                </div>
              </div>
            </div>
        </div>
    </div>

    
    {{-- END OF MAIN CONTENT --}}

    {{-- FOOTER --}}
    <div class="bottom footer p-4 mt-5" style="background-color: #499026">
      <div class="footer-top">
        <div class="container">
            <div class="row">
  
                <div class="col-lg-3 col-md-6 footer-contact">
                <h4 class="judul-footer">A-Tani</h4>
                <p>
                    A-Tani merupakan sebuah platform digital yang  mengakomodir segala hal tentang pertanian dan perkebunan dari hulu sampai ke hilir dengan berbagai layanan terbaik kami.
                </p>
                </div>
    
                <div class="col-lg-2 col-md-6 footer-links">
                <h4 class="judul-footer">Links</h4>
                    <li class="link" style="list-style:none;" href="#home">Home</a></li>
                    <li class="link" style="list-style:none;" href="#tentang">Produk Kami</li>
                    <li class="link" style="list-style:none;" href="#visimisi">Mengapa A-Tani</li>
                    <li class="link" style="list-style:none;" href="#mengapa">Masuk</li>
                    <li class="link" style="list-style:none;" href="#kegiatan">Daftar</li>
                </div>
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4 class="judul-footer">Bantuan</h4>
                <li class="bantuan" style="list-style:none;" href="/daftar">Cara Memesan</a></li>
                <li class="bantuan" style="list-style:none;" href="/masuk">Kebijakan Toko</a></li>
                <li class="bantuan" style="list-style:none;" href="/metode">Metode Pembayaran</a></li>
            </div>
  
            <div class="col-lg-4 footer-links">
              <h6 class="judul-footer">Yuk berlangganan untuk mendapatkan info terkini</h6>

              <div class="input-group">
                <input type="text" placeholder="Masukan E-mail Anda" class="form-control">
                <span class="input-group-btn">
                  <button class="btn btn-warning" style="background-color: #F7DE06; color:#fff" type="submit">Berlangganan</button>                
                </span>
              </div>


              <h6 class="judul-footer mt-5">Ikuti Kami</h6>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="fa fa-twitter text-dark" aria-hidden="true"></i></a>
                </div>
                <div class="social-links mt-3">
                  <a href="#" class="facebook"><i class="fa fa-facebook text-dark"></i></a>
                </div>
                <div class="social-links mt-3">
                  <a href="#" class="instagram"><i class="fa fa-instagram text-dark"></i></a>
                </div>
                <div class="social-links mt-3">
                  <a href="#" class="google-plus"><i class="fa fa-skype text-dark"></i></a>
                </div>
                <div class="social-links mt-3">
                  <a href="#" class="linkedin"><i class="fa fa-linkedin text-dark"></i></a>
                </div>
            </div>
  
          </div>
        </div>
      </div>
    </div>
    {{-- AKHIR DARI FOOTER --}}
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>