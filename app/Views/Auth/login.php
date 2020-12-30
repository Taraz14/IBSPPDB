<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in - Voler Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />

    <link rel="shortcut icon" href="../assets/images/fav.jpeg" type="image/x-icon" />
    <link rel="stylesheet" href="../assets/css/app.css" />
</head>

<body>
    <div id="auth">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <img src="../assets/images/MainLogoSmall.jpg" height="48" class="mb-4" />
                                <h3>Sign In</h3>
                                <p>Masukkan username dan password untuk masuk ke halaman admin.</p>
                                <!-- <p><?= password_hash('dimas', PASSWORD_DEFAULT); ?></p> -->
                                <?php if (session()->getFlashdata('msg')) : ?>
                                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                                <?php endif; ?>
                            </div>
                            <form action="/auth/login/auth" method="post">
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">Username</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="username" />
                                        <div class="form-control-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left">
                                    <div class="position-relative">
                                        <input type="password" class="form-control" name="password" />
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <button class="btn btn-primary float-right">Masuk</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/feather-icons/feather.min.js"></script>
    <script src="../assets/js/app.js"></script>

    <script src="../assets/js/main.js"></script>
</body>

</html>