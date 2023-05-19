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

	<nav class="navbar navbar-default custom-navbar"
		style="border-bottom: 8px solid linear-gradient(to bottom right, #6C5B7B, #355C7D);">
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<div class="container-fluid navbar-center">
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="/">Beranda</a></li>
						<li><a href="/produk">Produk</a></li>
						<li><a href="/about">Tentang Kami</a></li>

							<li><a href="/keranjang"><i class="glyphicon glyphicon-shopping-cart"></i>
									<b class="badge badge-sion">
									</b></a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
									aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i>
									Masuk
									<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="/login">Masuk</a></li>
									<li><a href="/register">Daftar</a></li>
								</ul>
							</li>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
									aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i>
									 <span class="caret"></span>
								</a>
                                
								<ul class="dropdown-menu">
									<li><a href="proses/logout">Keluar</a></li>
								</ul>
							</li>
					    </ul>
                    </ul>
				</div>
			</div>
		</div>
	</nav>



    <div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only"></span>Kesalahan:
        NAMA PENGGUNA / KATA SANDI YANG ANDA MASUKKAN TIDAK BENAR ATAU SALAH!
    </div>


<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
    <h2 class="text-center pb-4 pt-5 mb-0"
        style="border-bottom: 2px solid #6C5B7B; padding: 10px; margin-bottom: 100px; font-family: 'Helvetica Neue', sans-serif; color: #333; text-shadow: 2px 2px #ccc; width: 100%;">
        <b>MASUK</b>
    </h2>
    <div style="width:400px; position: relative; left: 30%; ">
        <form action="/login/proses" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Pengguna</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan username"
                    name="username" style="width: 500px;">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Kata Sandi</label>
                <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Masukkan password"
                    name="password" style="width: 500px;">
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
            </div>

            <button type="submit" class="btn btn-success">Masuk</button>
        </form>

        <div class="mt-4">
            <p>Belum punya akun? <a href="register">Daftar di sini</a>.</p>
        </div>
    </div>
</div><br><br>
<!-- Animasi ketika input focus -->
<style>
    .form-control:focus {
        border-color: #6C5B7B !important;
        box-shadow: 0 0 0 0.2rem rgba(108, 91, 123, 0.25) !important;
    }
</style>
<!-- Animasi ketika tombol hover -->
<style>
    .btn:hover {
        color: #fff !important;
        background-color: #6C5B7B !important;
        border-color: #6C5B7B !important;
    }
</style>
<!-- Style untuk checkbox -->
<style>
    .form-check-input:checked~.form-check-label::before {
        background-color: #6C5B7B !important;
        border-color: #6C5B7B !important;
    }
</style>

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