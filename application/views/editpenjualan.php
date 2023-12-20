<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Data Penjualan</title>

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('css/sb-admin-2.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

                <!-- Sidebar -->
                <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-home"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Penjualan Perumahan</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?php echo base_url('welcome')?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Tables -->
<li class="nav-item active">
    <a class="nav-link" href="<?php echo base_url('welcome/tbladmin')?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Admin</span></a>
</li>

<li class="nav-item active">
    <a class="nav-link" href="<?php echo base_url('welcome/tblcus')?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Customer</span></a>
</li>

<li class="nav-item active">
    <a class="nav-link" href="<?php echo base_url('welcome/tblrumah')?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Rumah</span></a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="<?php echo base_url('welcome/tblpenjualan')?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Penjualan</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
        <form
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                    <img class="img-profile rounded-circle"
                        src="<?php echo base_url('img/undraw_profile.svg')?>">
                </a>
                <!-- Dropdown - User Information -->
                
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
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
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Silahkan diubah Data Customer</h6>
                        </div>
                        <div class="card-body">
                        <form action="<?php echo base_url('penjualan/aksi_edit_penjualan'); ?>" method="POST">
                        <input type="hidden" name="Id_penjualan" value="<?php echo $penjualan['Id_penjualan']; ?>">
                        <div class="mb-3">
                                <label for="tglPengambilan" class="form-label">Tanggal Pengambilan</label>
                                <input type="date" class="form-control" name="Tgl_Pengambilan" value="<?php echo $penjualan['Tgl_Pengambilan']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="totalByr" class="form-label">Total Bayar</label>
                                <input type="text" class="form-control" name="Total_Byr" value="<?php echo $penjualan['Total_Byr']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="Tgl_JatuhTempo" class="form-label">Tanggal Jatuh Tempo</label>
                                <input type="date" class="form-control" name="Tgl_JthTempo" value="<?php echo $penjualan['Tgl_JthTempo']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="Pembayaran_Cicilan" class="form-label">Pembayaran Cicilan</label>
                                <input type="text" class="form-control" name="Pembayaran_Cicilan" value="<?php echo $penjualan['Pembayaran_Cicilan']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="Down_Payment" class="form-label">Down Payment</label>
                                <input type="text" class="form-control" name="Down_Payment" value="<?php echo $penjualan['Down_Payment']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="Bunga" class="form-label">Bunga</label>
                                <input type="text" class="form-control" name="Bunga" value="<?php echo $penjualan['Bunga']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="id_admin" class="form-label">ID Admin</label>
                                <input type="text" class="form-control" name="Id_admin" value="<?php echo $penjualan['Id_admin']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="id_rumah" class="form-label">ID Rumah</label>
                                <input type="text" class="form-control" name="Id_rumah" value="<?php echo $penjualan['Id_rumah']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="id_Cus" class="form-label">ID Customer</label>
                                <input type="text" class="form-control" name="Id_Cus" value="<?php echo $penjualan['Id_Cus']; ?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Edit Data</button>
                        </form>
                        </div>

                    </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('js/sb-admin-2.min.js'); ?>"></script>

</body>

</html>