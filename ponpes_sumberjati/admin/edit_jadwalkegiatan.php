<?php
include "koneksi.php";
$qry_get_jadwalkegiatan=mysqli_query($koneksi,"select * from jadwalkegiatan where id_jadwal = '".$_GET['id_jadwal']."'");
$data_jadwalkegiatan=mysqli_fetch_array($qry_get_jadwalkegiatan);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>UBAH JADWAL KEGIATAN</title>
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
  <h1><center>UBAH JADWAL KEGIATAN</center></h1>
  <form action="proses_edit_jadwal.php" method="post">
    <input type="hidden" name="id_jadwal" value="<?=$data_jadwalkegiatan['id_jadwal']?>">
    <form>
      <div class="form-group">
        <label for="formGroupExampleInput">Jam</label>
        <input type="text" class="form-control" name="jam" value="<?=$data_jadwalkegiatan['jam']?>">
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput2">Nama Kegiatan</label>
        <input type="text" class="form-control" name="nama_kegiatan" value="<?=$data_jadwalkegiatan['nama_kegiatan']?>">
      </div>

      <br>
      <input type="submit" name="simpan" value="Ubah Jadwal Kegiatan" class="btn btn-primary">

    </form>
  </body>
  </html>

