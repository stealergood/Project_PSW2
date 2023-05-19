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
                        <a href="halaman_utama" class="site_title"><i class="fa fa-spin fa-1x fa-fw"></i>
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
                                <li><a href="m_customer"><i class="fa fa-user"></i>Data Costumer</a></li><br>

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

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-right: 100px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user"></i> JoFe
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="proses/logout.php"><i
                                            class="fa fa-sign-out pull-right"></i>Keluar</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

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

<div class="right_col" role="main">
    <div class="container" style="margin-bottom:5%;">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-5">Daftar Pesanan</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="alert alert-success text-center" role="alert">
                    <strong>Lakukan Reload Setiap Masuk Halaman ini, untuk menghindari terjadinya kesalahan data dan
                        informasi</strong>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="produksi.php" class="btn btn-primary btn-lg btn-block"><i class="mdi mdi-refresh"></i>Muat
                    Ulang</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Invoice</th>
                            <th scope="col">Kode Pembeli</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>

                            <tr style="color: black">
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                    <td style="color: black">Pesanan Diterima
                                       
                                        <td>Pesanan Ditolak
                                     
                                    <td>
                                       
                                </td>
                                <td>

                                        <a href="proses/terima.php?inv=&kdp="
                                            class="btn btn-success"><i class="glyphicon glyphicon-ok-sign"></i> Terima</a>
                                        <a href="proses/tolak.php?inv=" class="btn btn-danger"
                                            onclick="return confirm('Yakin Ingin Menolak ?')"><i
                                                class="glyphicon glyphicon-remove-sign"></i> Tolak</a>

                                    <a href="detailorder?inv=&cs="
                                        type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i>
                                        Detail Pesanan</a>
                                </td>
                            </tr>

                    </tbody>
                </table>

                <button type="hidden" data-toggle="modal" data-target="#myModal" id="btn"
                    style="background-color: #fff; border: #fff; margin-left:20%;">
                </button>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <a href="m_produk.php" class="btn btn-default close"></a>
                                <h4 class="modal-title" id="myModalLabel">#
                                </h4>
                            </div>
                            <div class="modal-body">
                                <table class="table table-striped">
                                    <tr>
                                        <td>Invoice</td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kode Customer</td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>No Telepon</td>
                                        <td>
                                        </td>
                                    </tr>
                                </table>

                                <hr>
                                <h4>List Order</h4>
                                <table class="table table-striped">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Total</th>
                                    </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                    <tr>
                                        <td colspan="6" class="text-right"><b>Total Akhir =
                                            </b></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <a href="produksi.php" class="btn btn-default">Tutup</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#btn").click();
    });
</script>