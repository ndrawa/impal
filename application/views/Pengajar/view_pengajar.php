<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title> View Pengajar </title>
	</head>
	<body>
		<?php 
			$this->load->view('template/navbar');
		?>
		<p class="h5 text-center mb-4">Tabel Pengajar</p>
		<div style="width:1200px; margin: auto;">
			<table class="table mt-5" border="1">
			  <tbody>
			  		<?php  $idx = 0; ?>
				    <tr class="table-active">
				      <td>No</td>
				      <td>Pengajar</td>
				      <td>ID Pengajar</td>
				      <td>Matkul</td>
				      <td>ID Matakuliah</td>
				    </tr>
				    <?php foreach ($pengajar as $pgr) {
						$idx = $idx + 1;
						echo "<tr>";
						echo "<td scope=\"row\">".$idx."</td>";
						echo "<td>".$pgr['nama']."</td>";
						echo "<td>".$pgr['kode_pengajar']."</td>";
						echo "<td>".$pgr['nama_matakuliah']."</td>";
						echo "<td>".$pgr['kode_matakuliah']."</td>";
						echo "</tr>";
					} ?>  
			   </tbody>
			</table> 
		</div>	   
	</body>
</html>

