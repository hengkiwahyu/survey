<!DOCTYPE html>
<html>
<head>
	<title>Import Data Responden</title>
</head>
<body>
	<table class="table table-bordered">
		<tr>
			<td>id</td>
			<td>Usia</td>
			<td>Jenis Kelamin</td>
			<td>Pekerjaan</td>
			<td>Rute</td>
			<td>Waktu Berangkat</td>
			<td>PK1</td>
			<td>Waktu Pulang</td>
			<td>PK2</td>
			<td>PK3</td>
			<td>PK4</td>
			<td>PK5</td>
			<td>PK6</td>
			<td>PK7</td>
			<td>PK8</td>
			<td>PK9</td>
			<td>PK10</td>
		</tr>
		<?php 
		$no = 1;

		foreach ($data_survey as $srv) : ?> 

			{	
		
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $srv['usia']; ?></td>
			<td><?php echo $srv['jenis_klmin']; ?></td>
			<td><?php echo $srv['pekerjaan']; ?></td>
			<td><?php echo $srv['rute']; ?></td>
			<td><?php echo $srv['waktu_brkt']; ?></td>
			<td><?php echo $srv['pk1']; ?></td>
			<td><?php echo $srv['waktu_plng']; ?></td>
			<td><?php echo $srv['pk2']; ?></td>
			<td><?php echo $srv['pk3']; ?></td>
			<td><?php echo $srv['pk4']; ?></td>
			<td><?php echo $srv['pk5']; ?></td>
			<td><?php echo $srv['pk6']; ?></td>
			<td><?php echo $srv['pk7']; ?></td>
			<td><?php echo $srv['pk8']; ?></td>
			<td><?php echo $srv['pk9']; ?></td>
			<td><?php echo $srv['pk10']; ?></td>
			
		</tr>
		<?php endforeach; ?> 
	</table>

</body>
</html>