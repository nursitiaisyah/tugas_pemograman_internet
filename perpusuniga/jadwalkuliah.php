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
				<th>HARI</th>
				<th>JAM</th>
				<th>MATA KULIAH</th>
				<th>NAMA DOSEN</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<h2><center>JADWAL KULIAH</center></h2>
		
			<a href="tambah_jadwalkuliah.php" class="btn btn-primary mb-1">Tambah</a>
			<?php
			include "koneksi.php";
			$qry_jadwalkuliah=mysqli_query($koneksi, "select * from jadwalkuliah join matakuliah on matakuliah.id_matkul=jadwalkuliah.id_matkul join dosen on dosen.id_dosen=jadwalkuliah.id_dosen");
			$no=0;
			while ($data_jadwalkuliah=mysqli_fetch_array($qry_jadwalkuliah)) {
			$no++;?>
			<tr>
				<td><?=$no?></td>
				<td><?=$data_jadwalkuliah['hari']?></td>
				<td><?=$data_jadwalkuliah['jam']?></td>
				<td><?=$data_jadwalkuliah['nama_matkul']?></td>
				<td><?=$data_jadwalkuliah['nama_dosen']?></td>

				<td><a href="edit_jadwal.php?id_jadwa=<?=$data_jadwalkuliah['id_jadwal']?>"class="btn btn-success">Edit</a> |
				<a href="delete_jadwal.php?id_jadwal=<?=$data_jadwalkuliah['id_jadwal']?>"onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Delete</a></td>

			</tr>
			<?php	
			}
			?>
		</tbody>
	</table>

</body>
</html>

