<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Registasi</title>

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

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Halaman Sign up</h1>
                            </div>
                            <form class="user" action="" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <Label for="username">Nama</Label>
                                        <input type="text" class="form-control form-control-user" name="username" id="username" required
                                            placeholder="Masukkan username yang ingin anda buat">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <Label for="password">Password</Label>
                                    <input type="password" class="form-control form-control-user" name="password" id="password" required
                                        placeholder="Masukkan Password yang ingin anda buat">
                                </div>
                                <div class="form-group">
                                    <Label for="password2">Konfirmasi Password</Label>
                                    <input type="password" class="form-control form-control-user" name="password2" id="password2" required
                                        placeholder="Konfirmasi password">
                                </div>
                                <div class="form-group">
                                    <Label for="password2">No_Telp</Label>
                                    <input type="password" class="form-control form-control-user" name="password2" id="password2" required
                                        placeholder="Konfirmasi password">
                                </div>
                                <div class="form-group">
                                    <Label for="password2">Alamat_Cuss</Label>
                                    <input type="password" class="form-control form-control-user" name="password2" id="password2" required
                                        placeholder="Konfirmasi password">
                                </div>
                                <div class="form-group">
                                    <Label for="password2">Pekerjaan</Label>
                                    <input type="password" class="form-control form-control-user" name="password2" id="password2" required
                                        placeholder="Konfirmasi password">
                                </div>
                                <div class="form-group">
                                    <Label for="password2">NIK Cus</Label>
                                    <input type="password" class="form-control form-control-user" name="password2" id="password2" required
                                        placeholder="Konfirmasi password">
                                </div>
                                <div class="form-group">
                                    <Label for="password2">Email</Label>
                                    <input type="password" class="form-control form-control-user" name="password2" id="password2" required
                                        placeholder="Konfirmasi password">
                                </div>
                                <button type="submit" name="register" class="btn btn-primary btn-user btn-block">Register</button>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Lupa Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Sudah Mempunyai Akun?, Klik di sini!</a>
                            </div>
                        </div>
                    </div>
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