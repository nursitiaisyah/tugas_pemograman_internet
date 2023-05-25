<?php
include "koneksi.php";
$qry_santri=mysqli_query($koneksi, "select * from santri join kamar on kamar.id_kamar=santri.id_kamar");
$data_santri=mysqli_fetch_array($qry_santri);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>UBAH SANTRI</title>
</head>
<style>
body{
  font-family: times roman;
}

form{
  background: ghostwhite;
  margin-left: 100px;
  margin-right: 100px;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 20px;
  padding-right: 20px;
  border-radius: 15px;
}
</style>

<body>
  <h1><center>UBAH DATA SANTRI</center></h1>
  <form action="proses_edit_santri.php" method="post">
    <input type="hidden" name="id_santri" value="<?=$data_santri['id_santri']?>">
    <form>
      <div class="form-group">
        <label for="formGroupExampleInput">NIS</label>
        <input type="text"  name="nis" value="<?=$data_santri['nis']?>"  class="form-control">
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput">Nama Santri</label>
        <input type="text" name="nama_santri" value="<?=$data_santri['nama_santri']?>" class="form-control" placeholder="Masukkan Nama Santri" >
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput2">Tetala</label>
        <input type="text" class="form-control" name="tetala" value="<?=$data_santri['tetala']?>">
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput2">Nama Ayah</label>
        <input type="text" class="form-control" name="nama_ayah" value="<?=$data_santri['nama_ayah']?>"  >
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput2">Nama Ibu</label>
        <input type="text" class="form-control" name="nama_ibu" value="<?=$data_santri['nama_ibu']?>">
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput2">Alamat</label>
        <input type="text" class="form-control" name="alamat"  value="<?=$data_santri['alamat']?>">
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput2">Tanggal Masuk</label>
        <input type="text" class="form-control" name="tanggal_masuk" value="<?=$data_santri['tanggal_masuk']?>">
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput2">Kamar</label>
        <select name="id_kamar" class="form-control">
          <option>Pilih Kamar</option>
      <?php
      include "koneksi.php";
      $qry_kamar=mysqli_query($koneksi, "select * from kamar");
      while($data_kamar=mysqli_fetch_array($qry_kamar)){
        echo '<option value="'.$data_kamar['id_kamar'].'">'.$data_kamar['nama_kamar'].'</option>';
      }
      ?>
    </select>
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput2">Username</label>
        <input type="text" class="form-control" name="username" value="<?=$data_santri['username']?>">
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput2">Password</label>
        <input type="text" class="form-control" name="password" value="<?=$data_santri['password']?>">
      </div>

      <br>
      <input type="submit" name="simpan" value="Ubah Data Santri" class="btn btn-primary">

    </form>
  </body>
  </html>

