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
		<div class="container">
			<div class="row">
				<div class="form-control mt-5">
					<p class="h5 text-center mb-5 mt-4">Tabel Pengajar</p>
					<!-- <div style="width:1200px; margin: auto;"> -->

					<table class="table mt-5 table-bordered table-hover">
						<thead class="thead-dark">
							<tr>
								<th scope="col" width="5%"> No </th>
								<th scope="col" align="center"> Pengajar </th>
								<th scope="col" align="center"> ID Pengajar </th>
								<th scope="col" align="center"> Matkul </th>
								<th scope="col" align="center"> ID Matakuliah </th>
							</tr>
						</thead>

						<tbody>
							<?php  $idx = 0; ?>
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
					<!-- </div>	   -->
				</div>	  
			</div>	  
		</div>	  
		<?php 
			$this->load->view('template/footer');
		?>  
	</body>
</html>

