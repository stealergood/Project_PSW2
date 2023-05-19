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
						<li><a href="/index">Beranda</a></li>
						<li><a href="/produk">Produk</a></li>
						<li><a href="/about">Tentang Kami</a></li>

							<li><a href="/keranjang"><i class="glyphicon glyphicon-shopping-cart"></i>
									<b class="badge badge-sion">
									</b></a>
							</li>
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
					</div>
				</div>
			</div>
		</div>
	</nav>


<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
	<h2 class="text-center pb-4 pt-5 mb-0"
		style="border-bottom: 2px solid #6C5B7B; padding: 10px; margin-bottom: 100px; font-family: 'Helvetica Neue', sans-serif; color: #333; text-shadow: 2px 2px #ccc; width: 100%;">
		<b>DETAIL PESANAN ANDA</b>
	</h2>
	<div class="row">
		<div class="col-md-6">
			<h4><b>Daftar Pesanan</b></h4>
			<table class="table table-stripped">
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Total Harga</th>
				</tr>

					<tr>
						<td>
						</td>
						<td>
						</td>
						<td>Rp.
						</td>
						<td>
						</td>
						<td>Rp.
						</td>
					</tr>

				<tr>
					<td colspan="5" style="text-align: right; font-weight: bold;">Harga Akhir =
					</td>
				</tr>

			</table>
		</div>
	</div>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<div class="row">
		<div class="col-md-6 bg-success">
			<h5><i class="fas fa-check"></i> Pastikan Pesanan Anda Sudah Benar</h5>
		</div>
	</div>
	<div class="container my-5" style="margin-top: 2%; margin-bottom: -1000%;">
		<div class="row">
			<div class="col-md-6">
				<div class="card bg-light">
					<div class="card-body">
						<div class="card-body border border-danger p-4">
							<h5 class="card-title"><i class="fas fa-user"></i> Pemesanan</h5>
							<p class="card-text">Untuk pemesanan lebih lanjut melalui platform
								e-commerce kami, silakan lengkapi form di bawah ini:</p>
							<p>pastikan semua terisi dan silahkan lanjutkan pemesanan Anda dengan menekan tombol
								<b>Pesan Sekarang</b> yang akan melanjutkan anda ke link <b>WhatsApp Kami!</b>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card bg-light">
					<h5 class="card-title"><i class="fas fa-bullhorn"></i> Peringatan:</h5>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Tipe Pengiriman</th>
								<th>Area Pengiriman</th>
								<th>Metode Pembayaran</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Pengiriman</td>
								<td>Sekitaran Kab. Toba</td>
								<td>Hanya melalui <b>via WhatsApp</b></td>
							</tr>
							<tr>
								<td>Pembelian Offline</td>
								<td>Daerah toko</td>
								<td>Tunai</td>
							</tr>
						</tbody>
					</table>
					<p class="card-text">Untuk pembelian offline, silakan datang langsung ke <a href="about">toko
							kami</a>.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="row mt-3" style="margin-top:3%; margin-bottom:2%;">
		<div class="col-md-6 bg-warning">
			<h5><i class="fas fa-pencil-alt"></i> Isi Form Dibawah Ini</h5>
		</div>
	</div>

	<form action="proses/order.php" method="POST">
		<input type="hidden" name="kode_cs" value="">
		<div class="form-group">
			<label for="nama">Nama</label>
			<input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" style="width: 557px;"
				value="">
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="provinsi">Provinsi</label>
					<select class="form-control" id="provinsi" name="prov" required>
						<option value="Sumatra Utara">Sumatra Utara</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="kota">Pilih Kota / Kecamatan</label>
					<select class="form-control" id="kota" name="kota" required>
						<option value="Balige">Balige</option>
						<option value="Borbor">Borbor</option>
						<option value="Habinsaran">Habinsaran</option>
						<option value="Laguboti">Laguboti</option>
						<option value="Nassau Parmaksian">Nassau Parmaksian</option>
						<option value="Pintu Pohan Meranti">Pintu Pohan Meranti</option>
						<option value="Porsea">Porsea</option>
						<option value="Siantar Narumonda">Siantar Narumonda</option>
						<option value="Sigumpar">Sigumpar</option>
						<option value="Silaen">Silaen</option>
						<option value="Tampahan">Tampahan</option>
					</select>
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<input type="text" class="form-control" id="alamat" placeholder="Alamat" name="almt" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="kodepos">Kode Pos</label>
					<input type="text" class="form-control" id="kodepos" placeholder="Kode Pos" name="kopos" required>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="1" id="konfirmasi" name="konfirmasi" required>
				<label class="form-check-label" for="konfirmasi">
					Apakah sudah yakin?
				</label>
			</div>
		</div>
		<button type="submit" class="btn btn-success"><i class="fas fa-shopping-cart"></i> Pesan Sekarang</button>
		<a href="keranjang" class="btn btn-danger"><i class="fas fa-times"></i> Batal</a>
	</form>

</div>
</div>
</div>

<style>
	input[type=text],
	select {
		padding: 12px 20px;
		margin: 8px 0;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
		background-color: #f8f8f8;
	}

	input[type=checkbox] {
		margin-top: 16px;
	}

	.card-body.border-danger {
		border-width: 3px;
		border-style: solid;
		border-color: #dc3545;
		background-color: #f8d7da;
		color: black;
		padding: 20px;
		margin: 10px;
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
                    <li><a href="carapemesanan">Bantuan</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by
                    <a href="about">JoFeShop</a>.
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