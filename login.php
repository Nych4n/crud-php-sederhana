<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php require_once('_css.php')?>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">

        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>MAHASISWA</h3>
                            </a>
                            <h3>Login</h3>
                        </div>
                        <form action="_crud.php" method="POST">
                        <div class="form-floating mb-3">
                            <input type="teks" class="form-control" placeholder="masukan nis" name="nis">
                            <label for="floatingInput">NIS</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" placeholder="**********" name="password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button type="submit" name="login" class="btn btn-primary py-3 w-100 mb-4">Login</button>
                        <p class="text-center mb-0">Don't have an Account? <a href="input.php">Sign Up</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <?php require_once('_js.php')?>
</body>