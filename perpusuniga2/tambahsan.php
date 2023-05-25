<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
<!-- costum css -->
<link rel="stylesheet" href="style.css">
</head>
<style>
    /* mengatur warna backgroud dan padding pada tag body bagian atas agar form tidak menempel diatas */
body{
    background: orange;
    padding-top: 5vh;
    padding-bottom: 5vh;  
}
 
/* mengatur warna backgroud form */
form{
    background: #fff;
    width: 700px;
    height: 1100px;
    padding-left: 50px;
}
 
/* mengatur border dan padding class form-container */
.form-container{
    border-radius: 10px;
    padding: 100px;
}
</style>
  
<body>
    <section class="container-fluid">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
            <form class="form-container">
                <h4 class="text-center font-weight-bold"> TAMBAH DATA SANTRI </h4>
                <div class="form-group">
                    <label for="name">NIS :</label>
                    <input type="text" class="form-control" name="nis">
                </div>
                <div class="form-group">
                    <label for="name">Nama :</label>
                    <input type="text" class="form-control" name="nama_santri">
                </div>
                <div class="form-group">
                    <label for="name">Tempat Lahir :</label>
                    <input type="text" class="form-control" name="tempat_lahir">
                </div>
                <div class="form-group">
                    <label for="InputPassword">Tanggal Lahir :</label>
                    <input type="password" class="form-control" name="tanggl_lahir">
                </div>
                <div class="form-group">
                    <label for="InputPassword">Nama Ayah :</label>
                    <input type="password" class="form-control" name="nama_ayah">
                </div>
                <div class="form-group">
                    <label for="InputPassword">Nama Ibu :</label>
                    <input type="password" class="form-control" name="nama_ibu">
                </div>
                <div class="form-group">
                    <label for="InputPassword">Alamat :</label>
                    <input type="password" class="form-control" name="alamat">
                </div>
                <div class="form-group">
                    <label for="InputPassword">Tanggal Masuk :</label>
                    <input type="password" class="form-control" name="tanggal_masuk">
                </div>
                <div class="form-group">
                    <label for="InputPassword">Kamar :</label>
                    <input type="password" class="form-control" name="kamar">
                </div>
                <div class="form-group">
                    <label for="InputPassword">Username :</label>
                    <input type="password" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label for="InputPassword">Password :</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">TAMBAH SANTRI</button>
            </form>
        </section>
        </section>
    </section>
 
    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, danyang terakhit Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>