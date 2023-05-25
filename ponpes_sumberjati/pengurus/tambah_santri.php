<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>TAMBAH SANTRI</title>
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
  <h1><center>TAMBAH DATA SANTRI</center></h1>
  <form action="proses_tambah_santri.php" method="post">
    <form>
      <div class="form-group">
        <label for="formGroupExampleInput">NIS</label>
        <input type="text" class="form-control" name="nis" placeholder="Masukkan NIS">
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput">Nama Santri</label>
        <input type="text" class="form-control" name="nama_santri" placeholder="Masukkan Nama Santri">
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput2">Tetala</label>
        <input type="text" class="form-control" name="tetala" placeholder="Masukkan Tetala">
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput2">Nama Ayah</label>
        <input type="text" class="form-control" name="nama_ayah" placeholder="Masukkan Nama Ayah">
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput2">Nama Ibu</label>
        <input type="text" class="form-control" name="nama_ibu" placeholder="Masukkan Nama Ibu">
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput2">Alamat</label>
        <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat">
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput2">Tanggal Masuk</label>
        <input type="text" class="form-control" name="tanggal_masuk" placeholder="Masukkan Tanggal Masuk">
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
        <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput2">Password</label>
        <input type="text" class="form-control" name="password" placeholder="Masukkan Password">
      </div>
      <br>
      <input type="submit" name="simpan" value="Tambah Santri" class="btn btn-primary">
    </form>
  </body>
  </html>
