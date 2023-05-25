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
				<th>NAMA MATA KULIAH</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<h2><center>MATA KULIAH</center></h2>
		
			<a href="tambah_matkul.php" class="btn btn-primary mb-1">Tambah</a>

			<?php
			include "koneksi.php";

			$qry_matakuliah=mysqli_query($koneksi, "select * from matakuliah");
			$no=0;
			while ($data_matakuliah=mysqli_fetch_array($qry_matakuliah)) {
			$no++;?>
			<tr>
				<td><?=$no?></td>
				<td><?=$data_matakuliah['nama_matkul']?></td>
				

				<td><a href="edit_matkul.php?id_matkul=<?=$data_matakuliah['id_matkul']?>"class="btn btn-success">Edit</a> |	
				<a href="delete_matkul.php?id_matkul=<?=$data_matakuliah['id_matkul']?>"onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Delete</a></td>

			</tr>
			<?php	
			}
			?>
		</tbody>
	</table>

</body>
</html>

