<?php
    require_once('_koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>From</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php require_once('_css.php')?>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <?php require_once('_sidebar.php')?>

        <!-- Content Start -->
        <div class="content">
        <?php require_once('_nav.php')?>

        <div class="container mt-3">
        <form action="_crud.php" method="POST">
          <h3>Formulir</h3>

          <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Nis  </label>
          <div class="col-sm-10">
          <input type="text" name="nis">
          </div>
        </div>

        <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Nama  </label>
          <div class="col-sm-10">
          <input type="text" name="nama">
          </div>
        </div>

        <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Alamat  </label>
          <div class="col-sm-10">
          <input type="text" name="alamat">
          </div>
        </div>

        <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Agama  </label>
          <div class="col-sm-10">
          <select class="from-select col-sam-10" name="agama">
          <option value=""></option>
          <option value="islam">Islam</option>
          <option value="budha">Budha</option>
          <option value="katolik">Katolik</option>
          <option value="hindu">Hindu</option>
          <option value="kristen">Kristen</option>
        </select>
          </div>
        </div>

        <!-- <div class="row mb-3 ">
        <label class="col-sm-2 col-form-label">Agama   </label>
        <select class="from-select col-sm-2" name="agama">
          <option value="islam">Islam</option>
          <option value="budha">Budha</option>
          <option value="katolik">Katolik</option>
          <option value="hindu">Hindu</option>
          <option value="kristen">Kristen</option>
        </select>
      </div> -->
        
        <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0" name="jenis_kelamin">Jenis Kelamin</legend>
          <div class="col-sm-10">
          <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki">
          <label class="form-check-label" for="gridRadios1">Laki-laki</label>
          </div>
          <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan">
          <label class="form-check-label" for="gridRadios2">Perempuan</label>
          </div>
          </div>
        </fieldset>

        <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Password  </label>
          <div class="col-sm-10">
          <input type="password" name="password">
          </div>
        </div>

        <button type="submit" name="simpan_siswa" class="btn btn-primary">Simpan</button>
        </form>
        </div>

        <?php require_once('_footer.php')?>
  </div>

        <!-- Back to Top -->
        <a href="" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>




<?php require_once('_js.php')?>
</body>

</html>