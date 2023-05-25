<?php
include "koneksi.php";
$qry_pengurus=mysqli_query($koneksi, "select * from pengurus join jabatan on jabatan.id_jabatan=pengurus.id_jabatan");
$data_pengurus=mysqli_fetch_array($qry_pengurus);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>UBAH PENGURUS</title>
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
  <h1><center>UBAH DATA PENGURUS</center></h1>
  <form action="proses_edit_pengurus.php" method="post">
    <input type="hidden" name="id_pengurus" value="<?=$data_pengurus['id_pengurus']?>">
    <form>
      <div class="form-group">
        <label for="formGroupExampleInput">Nama Pengurus</label>
        <input type="text" class="form-control" name="nama_pengurus" value="<?=$data_pengurus['nama_pengurus']?>" placeholder="Masukkan Nama">
        
      <div class="form-group">
        <label for="formGroupExampleInput">Tetala</label>
        <input type="text" class="form-control" name="tetala" value="<?=$data_pengurus['tetala']?>" placeholder="Masukkan Tetala">
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput2">Alamat</label>
        <input type="text" class="form-control" name="alamat" value="<?=$data_pengurus['alamat']?>"placeholder="Masukkan Alamat">
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput2">Jabatan</label>
        <select name="id_jabatan" class="form-control">
          <option>Pilih Jabatan</option>
      <?php
      include "koneksi.php";
      $qry_jabatan=mysqli_query($koneksi, "select * from jabatan");
      while($data_jabatan=mysqli_fetch_array($qry_jabatan)){
        echo '<option value="'.$data_jabatan['id_jabatan'].'">'.$data_jabatan['nama_jabatan'].'</option>';
      }
      ?>
    </select>
      </div>
      <br>
      <input type="submit" name="simpan" value="Ubah Pengurus" class="btn btn-primary">

    </form>
  </body>
  </html>

