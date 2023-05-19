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


<div class="container" style="margin-top: 100px;">
    <h2 class="text-center pb-4 pt-5 mb-0"
        style="border-bottom: 2px solid #6C5B7B; padding: 10px; margin-bottom: 100px; font-family: 'Helvetica Neue', sans-serif; color: #333; text-shadow: 2px 2px #ccc; width: 100%;">
        <b>KERANJANG</b>
    </h2>
    <table class="table table-striped">
       
                <thead>
                    <tr>
                        <th style="text-align:center;" scope="col">Nomor</th>
                        <th style="text-align:center;" scope="col">Gambar</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th style="text-align:center" scope="col">Jumlah</th>
                        <th scope="col">Total</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
               
                        <tbody>
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="">
                                <tr>
                                    <th style="text-align:center;" scope="row">
                                    </th>
                                    <td style="text-align:center;"><img src="image/produk/" width="100"></td>
                                    <td>
                                    </td>
                                    <td>Rp.
                                    </td>
                                    <td><input type="number" class="form-control" style="text-align: center;" value="" readonly></td>

                                    <td>Rp.
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-toggle="modal"
                                            data-target="#myModal">
                                            Ubah
                                        </button>
                                        |
                                        <a href="keranjang.php?del=1&id=" class="btn btn-danger">Hapus</a>
                                    </td>

                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Ubah Jumlah Pesanan</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Form untuk mengubah keranjang -->
                                                    <form action="keranjang" method="POST">
                                                        <input type="hidden" name="id" value="">
                                                        <div class="form-group">
                                                            <label for="qty">Jumlah:</label>
                                                            <input type="number" class="form-control" id="qty" name="qty"
                                                                value="">
                                                        </div>
                                                        <button type="submit" name="submit1" class="btn btn-primary">Simpan
                                                            Perubahan</button>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </tr>
                            </form>
                        </tbody>

                <tr>
                    <td colspan="7" style="text-align: right; font-weight: bold;">Total Akhir = Rp.
                    </td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align: right; font-weight: bold;"><a href="produk"
                            class="btn btn-success">Lanjutkan Belanja</a> <a href="checkout?kode_cs="
                            class="btn btn-primary btn">Lanjutkan Pemesanan</a></td>
                </tr>
               
						<tr>
						<th scope='col'>No</th>
						<th scope='col'>Gambar</th>
						<th scope='col'>Nama</th>
						<th scope='col'>Harga</th>
						<th scope='col'>Jumlah</th>
						<th scope='col'>Total</th>
						<th scope='col'></th>
						</tr>
						<tr>
						<td colspan='7' class='text-center bg-warning'><h5><b>KERANJANG BELANJA ANDA KOSONG </b></h5></td>
						</tr>
                        <tr>
                      <td colspan='7' class='text-center bg-danger'>
                          <h5><b><span class='glyphicon glyphicon-exclamation-sign'></span> SILAHKAN <a href='/login'>MASUK</a> TERLEBIH DAHULU SEBELUM BERBELANJA</b></h5>
                      </td>
                  </tr>


        </tbody>
    </table>
</div>
</div>





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