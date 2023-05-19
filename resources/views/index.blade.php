<!DOCTYPE html>
<html>
<head>

    <title>JoFe - Bakery</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.css') }}">
    <link href="{{ asset('image/jofe.png') }}" rel="shortcut icon" />
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</head>

<body>
	<div class="container-fluid">
		<div class="row top" style="background: linear-gradient(to bottom right, #6C5B7B, #355C7D);">
			<div class="col-md-4" style="margin-bottom:2%;">
				<span style="font-size: 60px; color: #fff; font-family: 'Montserrat';">
					<img src="image/Logo_JoFe-removebg-preview.png" alt="JoFe - Shop" width="300" height="300"
						style="vertical-align: middle; padding-right:10px; margin-top:40px;">JoFe Bakery</span>
			</div>
			<div class="col-md-4" style="margin-top: 50px; float: left; margin-left:21%;">
				<h2 style="color: #fff; font-family: 'Montserrat'; font-size: 36px;">Nikmati Kelezatan Kue di
					JoFe - Bakery</h2>
				<p style="color: #fff; font-family: 'Montserrat'; font-size: 24px;">Nikmati kelezatan kue berkualitas
					terbaik yang siap memanjakan lidah Anda hanya di JoFe Bakery! Kami menyediakan berbagai pilihan kue
					yang dibuat dengan bahan-bahan terbaik dan dengan keahlian yang profesional, sehingga setiap gigitan
					pasti membuat Anda terpesona. Segera kunjungi toko kami dan rasakan sendiri
					kelezatan kue kami yang tak tertandingi!</p>
			</div>
		</div>
	</div>

  <nav class="navbar navbar-default custom-navbar" style="border-bottom: 8px solid linear-gradient(to bottom right, #6C5B7B, #355C7D);">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <div class="container-fluid navbar-center">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/produk">Produk</a></li>
                    <li><a href="/about">Tentang Kami</a></li>
                    <li><a href="/keranjang"><i class="glyphicon glyphicon-shopping-cart"></i><b class="badge badge-sion"></b></a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    @auth
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="glyphicon glyphicon-user"></i>
                            {{ auth()->user()->nama }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="proses/logout">Keluar</a></li>
                        </ul>
                    </li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="glyphicon glyphicon-user"></i>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-dark"><i class="bi bi-box-arrow-left"></i>&nbsp;Keluar</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
  </nav>


      
<div class='container' style='margin-top: 100px; margin-bottom: 100px;'>
          <h4 class='text-center heading' style='font-family: \"Segoe UI\", Tahoma, Geneva, Verdana, sans-serif; padding-top: 10px; padding-bottom: 10px; font-style: italic; line-height: 29px; border-top: 2px solid #8a2be2; border-bottom: 2px solid #4169e1; font-size:30px'>
           
          </h4>
      </div>";
    
 
    
    
    <!-- Carousel -->
    
    <div id="carousel-example" class="carousel slide" data-ride="carousel" style="margin-top: 19px">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example" data-slide-to="1"></li>
            <li data-target="#carousel-example" data-slide-to="2"></li>
        </ol>
    
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{ asset('image/carousel/carousel1.jpg') }}" alt="Carousel Image 1" style="width: 100%;">
                <div class="carousel-caption">
                    <h2>Kue Kering</h2>
                    <p>Beraneka macam kue kering, seperti kue nastar, salju, coklat, kacang, keju, dll.</p>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('image/carousel/carousel2.jpg') }}" alt="Carousel Image 2" style="width: 100%;">
                <div class="carousel-caption">
                    <h2>Kue Kering</h2>
                    <p>dijamin bermutu dan berkualitas</p>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('image/carousel/carousel3.jpg') }}" alt="Carousel Image 3" style="width: 100%;">
                <div class="carousel-caption">
                    <h2>Kunjungan Mahasiswa IT DEL</h2>
                    <p>Melakukan Observasi mengenai produk kue di JoFe - Bakery.</p>
                </div>
            </div>
        </div>
    
      <a class="left carousel-control" href="#carousel-example" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
    <!-- Produk Kami -->
    
    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
      <h2 class="text-center pb-4 pt-5 mb-0" style="border-bottom: 2px solid #6C5B7B; font-size: 3.9rem; padding: 10px; margin-bottom: 100px;font-weight: bold; text-shadow: 2px 2px #ccc; width: 100%;">
          <b>Produk Kami</b>
      </h2>
  
      <div class="row">
          @foreach ($allproduk->take(3) as $item)
              <div class="col-sm-6 col-md-4">
                  <div class="thumbnail" style="border: 2px solid #ddd; padding: 10px;">
                      <img src="/image/produk/{{$item->image}}" style="width:300%; height: 400px; object-fit: cover;">
                      <div class="caption">
                          <h3 style="font-size: 1.5rem; font-weight: bold;">
                              {{$item->nama}}
                          </h3>
                          <h4 style="font-size: 1.2rem; font-weight: bold; color: black;">
                              Rp.{{ number_format($item->harga) }}
                          </h4>
                          <div class="row">
                              <div class="col-md-6">
                                  <a href="detail_produk.php?produk={{ $item->kode_produk }}"
                                      class="btn btn-primary btn-block">
                                      <span class="glyphicon glyphicon-eye-open"></span> Detail
                                  </a>
                              </div>
                              <div class="col-md-6">
                                  @if (isset($_SESSION['kd_cs']))
                                      <a href="proses/add.php?produk={{ $item->kode_produk }}&kd_cs={{ $kode_cs }}&hal=1"
                                          class="btn btn-success btn-block" type="button" role="button">
                                          <i class="glyphicon glyphicon-shopping-cart"></i> Masukkan Keranjang
                                      </a>
                                  @else
                                      <a href="keranjang.php" class="btn btn-success btn-block" role="button">
                                          <i class="glyphicon glyphicon-shopping-cart"></i> Masukkan Keranjang
                                      </a>
                                  @endif
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          @endforeach
      </div>
  </div>
  

    <center>
      <a href="/produk">
        <button type="button" class="btn btn-primary">
          <span class="glyphicon glyphicon-chevron-right"></span> Lihat Lebih Banyak
        </button>
      </a>
    </center>
    
    <hr style="border-top: 2.3px solid #ccc; margin-top: 50px; margin-bottom: 50px;">

    
      <div style="max-width: 1000px; margin: 50px auto;">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
          <div style="width: 100%; text-align: center;">
            <h2 style="font-size: 3.5rem; font-weight: bold; margin-bottom: 20px;">Sejarah Toko Jofe - Bakery</h2>
            <p style="font-size: 1.9rem; color: #666; margin-bottom: 20px; margin-top: -29px;">
            </p>
            <center>
              <a href="about.php">
                <button type="button" class="btn btn-primary">
                  <span class="glyphicon glyphicon-chevron-right"></span> Baca Lebih Banyak
                </button>
              </a>
            </center>
          </div>
          <div style="width: 100%; text-align: center; margin-bottom: -3%; margin-top: 2%;">
            <img src="./image/teks_about/" alt="Gambar About" style="max-width: 100%; height: auto;">
          </div>
        </div>
      </div>
    
    
   
    <section class="location">
      <h2 style="font-size: 3.5rem; font-weight: bold; margin-bottom: 20px;">Lokasi Toko Kami</h2>
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7973.0080315270125!2d99.0537582697754!3d2.335540200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e0466d4af5ef7%3A0x82931087a70bca84!2sPLN%20Ranting%20Balige!5e0!3m2!1sid!2sid!4v1680680148682!5m2!1sid!2sid"
          width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
      <div class="info" style="margin-top: 17%;">
        <img src="image/carousel/carousel3.jpg" alt="Toko Kami">
        <img src="image/carousel/carousel3.jpg" alt="Toko Kami">
        <img src="image/carousel/carousel3.jpg" alt="Toko Kami">
        <img src="image/carousel/carousel3.jpg" alt="Toko Kami">
        <img src="image/carousel/carousel3.jpg" alt="Toko Kami">
    
        <p style="margin-top: 16px;">
          Toko Kami merupakan toko yang menyediakan Kue Kering dengan harga yang terjangkau.
          Terletak di jalan Dr. Td. Pardede No.14, Komplek PLN Balige. Membuat Toko Kami mudah dijangkau oleh semua
          orang.
          Kami buka setiap hari mulai pukul 08.00 - 22.00 WIB.
        </p>
        <a href="https://www.google.com/maps/dir//PLN+Ranting+Balige/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x302e0466d4af5ef7:0x82931087a70bca84?sa=X&ved=2ahUKEwiO_8HY8Yv3AhXQaCsKHfZlDQwQ9Rd6BAh3EAQ"
          target="_blank" class="button">Navigasi</a>
      </div>
    </section>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Site footer -->
    <footer class="site-footer">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h4><b>Tentang</b></h4>
                    <p class="text-justify"><b> Jofe Shop </b> adalah toko online
                        terpercaya yang menyediakan produk berkualitas dengan harga yang terjangkau. Kami berkomitmen untuk
                        memberikan pengalaman belanja yang menyenangkan bagi pelanggan kami, Bergabunglah dengan komunitas
                        <b>Jofe Shop</b> dan dapatkan akses ke penawaran dan promo <i>eksklusif<i>, serta informasi tentang
                                produk
                                terbaru dan tren terkini.
                    </p>
                </div>
    
                <div class="col-xs-6 col-md-3">
                    <h4><b>Alamat</b></h4>
                    <p p class="text-justify">Jl. Dr. Td. Pardede No.14 Komplek PLN Balige, Toba, Sumatra Utara</p>
                    <p><i class="fa fa-phone"></i> 082278900178</p>
                    <p><i class="fa fa-envelope"></i> Jofeshoop@gmail.com</p>
                    </h3>
                </div>
    
                <div class="col-xs-6 col-md-3">
                    <h4><b>Layanan</b></h4>
                    <ul class="footer-links">
                        <li><a href="about.php">Tentang Kami</a></li>
                        <li><a href="carapemesanan.php">Bantuan</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by
                        <a href="about.php">JoFeShop</a>.
                    </p>
                </div>
    
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="whatsapp" href="#"><i class="fa fa-whatsapp"></i></a></li>
                        <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    
    </footer>