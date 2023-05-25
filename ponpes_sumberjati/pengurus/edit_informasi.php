<?php
include "koneksi.php";
$qry_get_informasi=mysqli_query($koneksi,"select * from informasi where id_informasi = '".$_GET['id_informasi']."'");
$data_informasi=mysqli_fetch_array($qry_get_informasi);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>UBAH INFORMASI </title>
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
  <h1><center>UBAH INFORMASI</center></h1>
  <form action="proses_edit_informasi.php" method="post">
    <input type="hidden" name="id_informasi" value="<?=$data_informasi['id_informasi']?>">
    <form>
      <div class="form-group">
        <label for="formGroupExampleInput">Tanggal Publikasi</label>
        <input type="text" class="form-control" name="tgl_publikasi" value="<?=$data_informasi['tgl_publikasi']?>">
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput2">Pengumuman</label>
        <input type="text" class="form-control" name="pengumuman" value="<?=$data_informasi['pengumuman']?>">
      </div>

      <br>
      <input type="submit" name="simpan" value="Ubah Informasi" class="btn btn-primary">

    </form>
  </body>
  </html>

