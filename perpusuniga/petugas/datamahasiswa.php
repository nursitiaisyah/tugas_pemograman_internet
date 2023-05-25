<?php
include "navbar.php";
include "css.php";
?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>NIM</th>
				<th>ALAMAT</th>
				<th>USERNAME</th>
				<th>PASSWORD</th>
				<th>JURUSAN</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<h2><center>DATA MAHASISWA</center></h2>
		
			<a href="tambah_mahasiswa.php" class="btn btn-primary mb-1">Tambah</a>
			<?php
			include "koneksi.php";
			$qry_mahasiswa=mysqli_query($koneksi, "select * from mahasiswa join jurusan on jurusan.id_jurusan=mahasiswa.id_jurusan");
			$no=0;
			while ($data_mahasiswa=mysqli_fetch_array($qry_mahasiswa)) {
			$no++;?>
			<tr>
				<td><?=$no?></td>
				<td><?=$data_mahasiswa['nama']?></td>
				<td><?=$data_mahasiswa['nim']?></td>
				<td><?=$data_mahasiswa['alamat']?></td>
				<td><?=$data_mahasiswa['username']?></td>
				<td><?=$data_mahasiswa['password']?></td>
				<td><?=$data_mahasiswa['nama_jurusan']?></td>

				<td><a href="edit_mhs.php?id_mahasiswa=<?=$data_mahasiswa['id_mahasiswa']?>"class="btn btn-success">Edit</a> |
				<a href="delete.php?id_mahasiswa=<?=$data_mahasiswa['id_mahasiswa']?>"onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Delete</a></td>

			</tr>
			<?php	
			}
			?>
		</tbody>
	</table>

</body>
</html>

