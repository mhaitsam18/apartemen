<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
 ?>
<table border="1">
	<tr>
		<th>Nomor</th>
		<th>ID Penghuni</th>
		<th>Nama Penghuni</th>
		<th>Jenis Kelamin</th>
		<th>Nomor Telepon</th>
		<th>Email</th>
		<th>Umur</th>
		<th>Aksi</th>
	</tr>
	<?php
	$no=1;
	while ($row=$konek->fetch_assoc()) { ?>
			<tr>
				<th><?php echo $no; ?>.</th>
				<td><?php echo $row['id_penghuni']; ?></td>
				<td><?php echo $row['nama_penghuni']; ?></td>
				<td><?php echo $row['jenis_kelamin']; ?></td>
				<td><?php echo $row['no_telp']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['umur']; ?></td>
				<td>
					<a href="<?php base_url('Welcome/edit/') ?>?id_penghuni=<?=$row['id_penghuni']?>" class="btn btn-primary">Edit</a>
					<a href="<?php base_url() ?>hapus?id_penghuni=<?=$row['id_penghuni']?>" class="btn btn-danger">Hapus</a>
				</td>
			</tr>
	    <?php
	    $no++;
		} ?>
</table>
</body>
</html>
