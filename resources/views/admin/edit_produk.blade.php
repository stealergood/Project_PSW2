<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard Admin | JoFe Bakkery</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xjhcw0t4e4D67BdVItiPv0c/fV2Q9NC8/U5h5QvOrwHH5fRJcwH8pMGSyjvOzO1qLwm9X6d+kg61vrBZ6i3UOA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- Bootstrap -->
    <link href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset('admin/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/img/jofe.png') }}" rel="shortcut icon">
    <!-- Custom styling plus plugins -->
    <link href="{{ asset('admin/build/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="halaman_utama" class="site_title"><i class="fa fa-spinner fa-spin fa-1x fa-fw"></i>
                            <span class="sr-only">Loading...</span>
                            <span>JoFe Bakery</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Mengelola Informasi</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Teks <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="halaman_beranda">Halaman Beranda</a></li>
                                        <li><a href="halaman_about">Halaman Tentang Toko</a></li>
                                    </ul>
                                </li><br>

                                <h3>Mengelola Data</h3>
                                <li><a href="m_produk"><i class="fa fa-edit"></i>Data Produk</a></li>
                                <li><a href="m_costumer"><i class="fa fa-laptop"></i>Data Costumer</a></li><br>

                                <h3>Mengelola Data</h3>
                                <li><a><i class="fa fa-bar-chart-o"></i> Detail Pesanan <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="produksi">Pemesanan</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->


          <!-- footer content -->
          <div class="sidebar-footer hidden-small">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <span class="text-muted">© 2023 JoFe Bakery</span>
                </div>
                <div class="col-md-6 text-md-right">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- /footer content -->
        </div>
      </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="assets/img/jofe.png" alt="">JoFe
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="index"><i class="fa fa-sign-out pull-right"></i>
                                        Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="container py-4" style="background-color: #f8f9fa">
                    <h2 class="text-center pb-4" style="color: #6C5B7B">
                        <b>Ubah Produk</b>
                    </h2>
                    <form action="proses/edit_produk.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group d-flex flex-column align-items-center mb-4">
                            <label for="exampleInputFile"><img src="../image/produk/"
                                    width="150"></label>
                            <input type="file" id="exampleInputFile" name="files">
                            <p class="help-block mt-2">Pilih gambar untuk produk (maks. 2MB, format: JPEG, PNG, atau
                                GIF)</p>
                        </div>
                        <hr>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kode Produk</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Masukkan Nama Produk" disabled
                                        value="">
                                    <input type="hidden" name="kode" class="form-control" id="exampleInputEmail1"
                                        placeholder="Masukkan Nama Produk" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Produk</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Masukkan Nama Produk" name="nama" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Harga</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1"
                                        placeholder="masukkan Harga" name="harga" value="">
                                    <p class="help-block mt-2">Isi Harga tanpa menggunakan Titik(.) atau Koma (,)</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="exampleInputPassword1">Deskripsi</label>
                            <textarea name="desk" class="form-control" rows="16"></textarea>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <button type="submit" class="btn btn-success btn-block"><i
                                            class="fa fa-plus"></i> Simpan Perubahan</button>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <a href="m_produk" class="btn btn-danger btn-block">Batal</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

<!-- jQuery -->
<script src="{{ asset('admin/vendors/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin/vendors/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('admin/vendors/nprogress/nprogress.js') }}"></script>
<!-- bootstrap-wysiwyg -->
<script src="{{ asset('admin/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
<script src="{{ asset('admin/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
<script src="{{ asset('admin/endors/google-code-prettify/src/prettify.js') }}"></script>

<!-- Custom Theme Scripts -->
<script src="{{ asset('admin/build/js/custom.min.js') }}"></script>


</body>

</html>