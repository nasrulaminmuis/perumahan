<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Customer</title>

    <!-- Custom fonts for this template-->

    <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->

    <link href="<?php echo base_url('css/sb-admin-2.min.css'); ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <?php
                                        if (isset($_GET['silahkan'])) {
                                            echo "<h4>Akun anda berhasil terdaftar Silahkan Login</h4>";
                                        }
                                        if (isset($_GET['kosong'])) {
                                            echo "
                                                <h3 style='color: red;'>
                                                    Data Tidak Boleh Kosong
                                                </h3>
                                                ";
                                        } elseif (isset($_GET['tsama'])) {
                                            echo "
                                                <h3 style='color: red;'>
                                                    Password anda belum cocok
                                                </h3>
                                                ";
                                        } elseif (isset($_GET['tada'])) {
                                            echo "
                                                <h3 style='color: red;'>
                                                    NIS dan password salah
                                                </h3>
                                            ";
                                        } else {
                                            echo "
                                                <h1 class='h4 text-gray-900 mb-4'>Login Customer</h1>
                                            ";
                                        }
                                        ?>
                                    </div>
                                    <form class="user" action="<?php echo site_url('welcome/aksi_logincus'); ?>" method="post">
                                        <div class="form-group">
                                            <input type="gmail" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukkan Gmail..." name="gmail">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password..." name="password">
                                        </div>
                                        <button type="submit" class="btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form><br><br>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Buat Akun</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('js/sb-admin-2.min.js'); ?>"></script>

</body>

</html>