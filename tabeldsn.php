<?php
    require_once('_koneksi.php');

    $query = "SELECT * FROM siswa";
    $data_mahasiswa = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
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

  <div class="offset-lg-2 col-lg-8">
  <div class="container">
  <h3 class="m-3 text-center">DATA SISWA</h3>

  <table class="table table-striped">
    <thead>
      <tr>
      <th scope="col">#</th>
      <th scope="col">NIS</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jenis kelamin</th>
      <th scope="col">Agama</th>
      <th scope="col">Password</th>
      <th scope="col">Aksi</th>
      </tr>
      <tbody>
    <?php $no=1; foreach ($data_mahasiswa as $siswa) { ?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $siswa['nis']; ?></td>
        <td><?php echo $siswa['nama']; ?></td>
        <td><?php echo $siswa['alamat']; ?></td>
        <td><?php echo $siswa['jenis_kelamin']; ?></td>
        <td><?php echo $siswa['agama']; ?></td>
        <td><?php echo $siswa['password']; ?></td>
        <td>
          <a href="_crud.php?hapus=<?php echo $siswa['id']; ?>"
          onClick="return confirm('Apakah anda yakin menghapus data ini?')"
          class="bi bi-trash btn btn-danger"></a>
          <a href="from.php?edit=<?php echo $siswa['id'];?>" class="bi bi-pencil-square btn btn-warning"></a>
        </td>
      </tr>
    <?php $no++;} ?>
    </tbody>
    </thead>
    
  </table>


  </div>
  </div>

<?php require_once('_footer.php')?>
</div>

<!-- Back to Top -->
<a href="" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<?php require_once('_js.php')?>
</body>

</html>