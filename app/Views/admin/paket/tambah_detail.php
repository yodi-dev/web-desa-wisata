<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title> <?= $title ?></title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="../../assets/img/logo.png" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Open+Sans:300,400,600,700"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
                urls: ['../../assets/css/fonts.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/azzara.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <!-- <link rel="stylesheet" href="../../assets/css/demo.css"> -->
</head>

<body>
    <div class="wrapper">
        <!--
				Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
        <div class="main-header" data-background-color="green">
            <!-- Logo Header -->
            <div class="logo-header">

                <a href="#" class="logo">
                    <h1 class="title mt-2 text-dark">Bumi Arum</h1>
                    <!-- <img src="../../assets/img/logo.png" alt="navbar brand" class="navbar-brand" style="width: 3em;"> -->
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fa fa-bars"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
                <div class="navbar-minimize">
                    <button class="btn btn-minimize btn-rounded">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg">

                <div class="container-fluid">
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="../../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <li>
                                    <div class="user-box">
                                        <div class="avatar-lg"><img src="../../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                                        <div class="u-text">
                                            <h4> <?= session('username') ?> </h4>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">My Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url() ?>logout">Logout</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar">

            <div class="sidebar-wrapper scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav">
                        <li class="nav-item <?php if ($sidebar == "dashboard") echo 'active'; ?>">
                            <a href="<?= base_url() ?>admin">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item <?php if ($sidebar == "pesanan") echo 'active'; ?>">
                            <a href="<?= base_url() ?>pesanan">
                                <i class="fas fa-cart-arrow-down"></i>
                                <p>Pesanan</p>
                            </a>
                        </li>
                        <li class="nav-item <?php if ($sidebar == "galeri") echo 'active'; ?>">
                            <a href="<?= base_url() ?>galeri">
                                <i class="fas fa-image"></i>
                                <p>Galeri</p>
                            </a>
                        </li>
                        <li class="nav-item <?php if ($sidebar == "destinasi") echo 'active'; ?>">
                            <a href="<?= base_url() ?>destinasi">
                                <i class="fas fa-star"></i>
                                <p>Destinasi</p>
                            </a>
                        </li>
                        <li class="nav-item <?php if ($sidebar == "paket") echo 'active'; ?>">
                            <a href="<?= base_url() ?>paket">
                                <i class="fas fa-cubes"></i>
                                <p>Paket</p>
                            </a>
                        </li>
                        <li class="nav-item <?php if ($sidebar == "potensi") echo 'active'; ?>">
                            <a href="<?= base_url() ?>admin/potensi">
                                <i class="fas fa-address-card"></i>
                                <p>Potensi Desa</p>
                            </a>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content content-full">
                <div class="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Tambah Destinasi</div>
                                </div>
                                <?= form_open_multipart(base_url('paket/simpan_detail')); ?>
                                <div class="form-group">
                                    <input type="hidden" name="id_paket" value="<?= $id_paket ?>">
                                    <label for="destinasi">Destinasi</label>
                                    <select class="form-control" name="destinasi" id="destinasi">
                                        <?php foreach ($all_destinasi as $value) { ?>
                                            <option value="<?= $value->id ?>"><?= $value->nama_wisata ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="card-action">
                                    <button class="btn btn-sm btn-success">Submit</button>
                                </div>
                                <?= form_close(); ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
    <!--   Core JS Files   -->
    <script src="../../assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="../../assets/js/core/popper.min.js"></script>
    <script src="../../assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="../../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Moment JS -->
    <script src="../../assets/js/plugin/moment/moment.min.js"></script>

    <!-- Chart JS -->
    <script src="../../assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="../../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="../../assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="../../assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="../../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- Bootstrap Toggle -->
    <script src="../../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="../../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="../../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

    <!-- Google Maps Plugin -->
    <script src="../../assets/js/plugin/gmaps/gmaps.js"></script>

    <!-- Sweet Alert -->
    <script src="../../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Azzara JS -->
    <script src="../../assets/js/ready.min.js"></script>
</body>

</html>