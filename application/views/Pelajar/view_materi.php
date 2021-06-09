<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title> Materi - Pelajar</title>
</head>
<body>

	<?php 
		$this->load->view('template/navbar');
  		$this->load->view('template/back');
	?>

	<h1> Lihat Materi </h1>
	<div style="width:1000px; margin: auto;">
	<?php if ($data_materi) {
		$idx = 0; ?>
		<strong> Tabel Materi - <?= $data_materi[0]['nama_matakuliah']; ?></strong>
		<table class="table mt-5 table-bordered table-hover" >
	  		<thead class="thead-dark">
	  			<tr>
	  				<th scope="col"> No </th>
	  				<th scope="col"> Kode Materi </th>
	  				<th scope="col"> Nama Materi </th>
	  			</tr>
	  		</thead>

	  		<tbody>
				<?php foreach ($data_materi as $materi) {
					$idx = $idx + 1;
					echo "<tr>";
					echo "<th scope=\"row\">".$idx."</th>";
					echo "<td>".$materi['kode_materi']."</td>";
					echo "<td>".$materi['nama_materi']."</td>";
					echo "</tr>";
				} ?>
			</tbody>
		</table>
	<?php } ?>
	</div>
</body>
</html>