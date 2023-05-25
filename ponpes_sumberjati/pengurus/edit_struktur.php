<?php
include "koneksi.php";
$qry_struktur=mysqli_query($koneksi, "select * from struktur join jabatan on jabatan.id_jabatan=struktur.id_jabatan");
$data_struktur=mysqli_fetch_array($qry_struktur);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>UBAH STRUKTUR</title>
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
  <h1><center>UBAH STRUKTUR</center></h1>
  <form action="proses_edit_struktur.php" method="post">
    <input type="hidden" name="id_struktur" value="<?=$data_struktur['id_struktur']?>">
    <form>
      <div class="form-group">
        <label for="formGroupExampleInput">Nama Pengurus</label>
        <input type="text" class="form-control" name="nama_pengurus" value="<?=$data_struktur['nama_pengurus']?>">
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
      <input type="submit" name="simpan" value="Ubah Struktur" class="btn btn-primary">

    </form>
  </body>
  </html>

