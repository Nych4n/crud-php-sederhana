<?php
    require_once('_koneksi.php');
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $query = "SELECT*from siswa where id='$id'";
        $data_siswa = mysqli_query($conn, $query);
    }
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

        <form action="_crud.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">
          <h3>Formulir</h3>

        <?php foreach($data_siswa as $siswa) { ?>

          <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Nis : </label>
          <div class="col-sm-10">
          <input type="hidden" name="id" class="form-control" value="<?php echo $siswa['id'] ?>"/> 
          <input type="text" name="nis" value="<?php echo $siswa['nis'] ?>">
          </div>
        </div>

        <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Nama : </label>
          <div class="col-sm-10">
          <input type="text" name="nama" value="<?php echo $siswa['nama'] ?>">
          </div>
        </div>

        <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Alamat : </label>
          <div class="col-sm-10">
          <input type="text" name="alamat" value="<?php echo $siswa['alamat'] ?>">
          </div>
        </div>

        <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0" name="jenis_kelamin">Jenis Kelamin</legend>
          <div class="col-sm-10">
          <div class="form-check">
                <input type="radio" class="form-chec-input" name="jenis_kelamin" value="laki-laki"
                <?php if ($siswa['jenis_kelamin']=='laki-laki'){echo "checked";}  ?>>
                <label>Laki-laki</label>  
            </div>             
            <div class="form-check">
                <input type="radio" class="form-chec-input" name="jenis_kelamin" value="perempuan"
                <?php if ($siswa['jenis_kelamin']=='perempuan'){echo "checked";}  ?>>
                <label>Perempuan</label>
            </div>
          </div>
        </fieldset>

        <div class="form-group">
        <label>Agama :</label>
        <select class="from-select" name="agama">
          <option value="Islam"<?php if($siswa['agama']=='Islam'){echo"selected";}?>>Islam</option>
          <option value="Budha"<?php if($siswa['agama']=='Budha'){echo"selected";}?>>Budha</option>
          <option value="Katolik"<?php if($siswa['agama']=='Katolik'){echo"selected";}?>>Katolik</option>
          <option value="Hindu"<?php if($siswa['agama']=='Hindu'){echo"selected";}?>>Hindu</option>
          <option value="Kristen"<?php if($siswa['agama']=='Kristen'){echo"selected";}?>>Kristen</option>
        </select>
      </div>
      
        <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
          <input type="password" class="form-control" name="password" value="password"<?php if ($siswa['password']=='password'){echo "password";} {
            # code...
          } ?>>
          </div>
        </div>

        <button type="submit" name="simpan_edit" class="btn btn-primary">Simpan</button>
        </form>

        <?php require_once('_footer.php')?>
        </div>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <?php }?>

<?php require_once('_js.php')?>
</body>

</html>