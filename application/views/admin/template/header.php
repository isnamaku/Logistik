<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <?php 
    if(isset($judul)){ ?>
    <title><?= $judul ?> | Logistik BPBD DIY</title>
    <?php }  ?>

    <!-- Custom fonts for this template -->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<body>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #F69133;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="">
                    <img src="<?= base_url('assets/'); ?>img/logo.png" style="width: 70px; height: 60px;">
                </div>
                <div class="sidebar-brand-text mx-3"  style="color: black;">Logistik BPBD DIY</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('admin/'); ?>index">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span style="font-size: 16px; font-color: white;">Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Barang
            </div>

            <!-- Nav Item - Pages Barang Masuk -->
            <li class="nav-item" >
                <a class="nav-link collapsed" href="<?= base_url('admin/'); ?>barang_masuk" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo" >
                    <i class="fas fa-fw fa-table"></i>
                    <span style="font-size: 16px; font-color: white;">Barang Masuk</span>
                </a>

            </li>

            <!-- Nav Item - Pages Barang Keluar -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('admin/'); ?>barang_keluar"  data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-table"></i>
                    <span style="font-size: 16px; font-color: white;">Barang Keluar</span>
                </a>
            </li>

            <!-- Nav Item - Pages Laporan-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('admin/'); ?>berita_acara"  data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-file-alt"></i>
                    <span style="font-size: 16px; font-color: white;">&nbsp;Berita Acara</span>
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
    
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand  topbar mb-4 static-top shadow"  style="background: #000000;">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="table" style="margin-top: 30px; color: #FFFFFF;">
                                    <tr><span class="mr-2 d-none d-lg-inline text-white-700 medium">Halo! <?= $admin['nama']; ?></span></tr>
                                    <tr><p style="font-size: 12px; color: #F69133;">Anda masuk sebagai admin</p></tr>
                                </div>                               
                                <img class="img-profile rounded-circle"
                                    src="<?= base_url('assets/'); ?>img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400" href=""></i>
                                    Pengaturan Anggota
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

