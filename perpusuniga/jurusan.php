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
				<th>NAMA JURUSAN</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<h2><center>JURUSAN</center></h2>
		
			<a href="tambah_jurusan.php" class="btn btn-primary mb-1">Tambah</a>

			<?php
			include "koneksi.php";

			$qry_jurusan=mysqli_query($koneksi, "select * from jurusan");
			$no=0;
			while ($data_jurusan=mysqli_fetch_array($qry_jurusan)) {
			$no++;?>
			<tr>
				<td><?=$no?></td>
				<td><?=$data_jurusan['nama_jurusan']?></td>
				

				<td><a href="edit_jurusan.php?id_jurusan=<?=$data_jurusan['id_jurusan']?>"class="btn btn-success">Edit</a> |	
				<a href="delete_jurusan.php?id_jurusan=<?=$data_jurusan['id_jurusan']?>"onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Delete</a></td>

			</tr>
			<?php	
			}
			?>
		</tbody>
	</table>

</body>
</html>

