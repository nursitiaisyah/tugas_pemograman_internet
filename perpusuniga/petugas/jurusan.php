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
			</tr>
		</thead>
		<tbody>
			<h2><center>JURUSAN</center></h2>
			<?php
			include "koneksi.php";

			$qry_jurusan=mysqli_query($koneksi, "select * from jurusan");
			$no=0;
			while ($data_jurusan=mysqli_fetch_array($qry_jurusan)) {
			$no++;?>
			<tr>
				<td><?=$no?></td>
				<td><?=$data_jurusan['nama_jurusan']?></td>

			</tr>
			<?php	
			}
			?>
		</tbody>
	</table>

</body>
</html>

