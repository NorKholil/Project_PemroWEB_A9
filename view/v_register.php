<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi User</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/register.css">
</head>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card register-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="../assets/images/donate.jpg" alt="register" class="register-card-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="brand-wrapper">
                                <img src="../assets/images/logo1.png" alt="logo" class="logo">
                            </div>
                            <p class="register-card-description">Register your account here</p>

                            <form action="../controller/c_registrasi.php" method="POST">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Username</label>
                                    <input type="teks" name="username" id="username" class="form-control" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" class="sr-only">Confirm Password</label>
                                    <input type="password" name="cpassword" id="password" class="form-control" placeholder="Confirm Password" required>
                                </div>
                                <input name="submit" id="register" class="btn btn-block register-btn mb-4" type="submit" value="Register">
                            </form>

                            <a href="#!" class="forgot-password-link">Forgot password?</a>
                            <p class="register-card-footer-text"><a href="v_login.php" class="text-reset">Login Here</a></p>
                            <nav class="register-card-footer-nav">
                                <a href="#!">copyright © 2021 Kholil-Fahreza</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>