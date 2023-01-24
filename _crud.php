<?php  
       session_start();
       require_once('_koneksi.php');
       
       if(isset($_POST['login'])){
           $nis = $_POST['nis'];
           $password = md5($_POST['password']);
           $query = "SELECT * FROM siswa where nis='$nis'";
           $hasil = mysqli_query($conn, $query);
           $data = mysqli_fetch_array($hasil);
           if($data==NULL){
               echo "User Tidak ditemukan";
           }else
               if($password==$data['password']){
                    $_SESSION['nis'] = $data['nis'];
                    $_SESSION['nama'] = $data['nama'];
                    $_SESSION['alamat'] = $data['alamat'];
                   header("Location: index.php");
           } else {
               header("Location: login.php");
           }
       }


       if (isset($_POST['simpan_siswa'])){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $agama = $_POST['agama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $password = md5($_POST['password']);
        $query = "INSERT INTO siswa
        VALUES('','$nis','$nama','$alamat','$agama','$jenis_kelamin','$password')";
        mysqli_query($conn, $query);
        header("Location: tabeldsn.php");
    }
    
    if (isset($_GET['hapus'])){
        $id = $_GET['hapus'];
        $query = "DELETE from siswa where id = '$id'";  
        mysqli_query($conn, $query);
        header("Location: tabeldsn.php"); 
     }

     if(isset($_POST['simpan_edit'])){
        $id = $_POST['id'];
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $agama = $_POST['agama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $password = md5($_POST['password']);
        $query = "UPDATE siswa SET
                  nis = '$nis',
                  nama = '$nama',
                  alamat = '$alamat',
                  agama = '$agama',
                  jenis_kelamin = '$jenis_kelamin',
                  password = '$password'
                  WHERE id=$id
                  ";
                  mysqli_query($conn, $query);
                  header("Location: tabeldsn.php");

     }
?>