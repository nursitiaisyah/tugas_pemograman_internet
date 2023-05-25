<?php
include "koneksi.php";
$qry_get_kamar=mysqli_query($koneksi,"select * from kamar where id_kamar = '".$_GET['id_kamar']."'");
$nama_kamar=mysqli_fetch_array($qry_get_kamar);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>UBAH KAMAR</title>
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
  <h1><center>UBAH KAMAR</center></h1>
  <form action="proses_edit_kamar.php" method="post">
    <input type="hidden" name="id_kamar" value="<?=$nama_kamar['id_kamar']?>">
    <form>
      <div class="form-group">
        <label for="formGroupExampleInput">Nama Kamar</label>
        <input type="text" class="form-control" name="nama_kamar" value="<?=$nama_kamar['nama_kamar']?>" placeholder="Masukkan Nama">
      <br>
      <input type="submit" name="simpan" value="Ubah Kamar" class="btn btn-primary">

    </form>
  </body>
  </html>

