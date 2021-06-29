<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<?php 
        $this->load->view('template/navbar');
    ?>

    <div class="form-control" style="width:600px; margin: 20px auto;">
    	<h2 align="center"> View Materi </h2>
	    <form method="post">
	    	<p align="center"> Pilih mata kuliah 
		    <select class="form-select" aria-label="Default select example" name="id_matakuliah" onchange="tampil_materi();">
				<option selected> Select - Mata kuliah</option>
				<?php
					$idx = 0;
					foreach ($data_matkul as $matkul) { ?>
						<option value = <?= $matkul['kode_matakuliah']; ?>> <?= $matkul['nama_matakuliah']; ?> </option>
				<?php } ?>
			</select>
			<button type="submit" class="btn btn-primary"> Tampilkan materi </button> </p>
			</p>
		</form>
	</div>

	<div style="width:1000px; margin: auto;">
	<?php if ($data_materi) {
		$idx = 0; ?>


		<div class="form-control" style="margin-top: 20px;" align="center"> <strong> Tabel Materi - <?= $data_materi[0]['nama_matakuliah']; ?></strong>
		<table class="table mt-5 table-bordered table-hover" >
	  		<thead class="thead-dark">
	  			<tr>
	  				<th scope="col" width="5%"> No </th>
	  				<th scope="col" align="center"> Kode Materi </th>
	  				<th scope="col" align="center"> Nama Materi </th>
	  				<th scope="col" align="center" width="30%"> File Materi </th>
	  				<?php if ($this->session->userdata('session_login') == 'pengajar') { ?>
					  <th scope="col" align="center"> Action </th>
					<?php } ?>
	  			</tr>
	  		</thead>

	  		<tbody>
				<?php foreach ($data_materi as $materi) {
					$idx = $idx + 1;
					echo "<tr>";
					echo "<th>".$idx."</th>";
					echo "<td>".$materi['kode_materi']."</td>";
					echo "<td>".$materi['nama_materi']."</td>";
					echo "<td> <a href=\"".base_url()."upload/".$materi['file_materi']."\" download> Download materi </a> </td>";
					if ($this->session->userdata('session_login') == 'pengajar') { ?>
						<td align="center"> 
							<a href="<?php echo site_url('pengajar_controller/edit/'); echo $materi['kode_materi']; ?>" type="button" class="btn btn-warning">
								<img src="<?= base_url()."assets/icon/edit.svg"; ?>"> 
							</a> 
							<a href="<?php echo site_url('pengajar_controller/delete/'); echo $materi['kode_materi']; ?>" type="button" class="btn btn-danger">
								<img src="<?= base_url()."assets/icon/trash.svg"; ?>"> 
							</a> 
						</td>
					<?php }
					echo "</tr>";
				} ?>
			</tbody>
		</table>
		</div>
	<?php } ?>
	</div>
  	<p id="space_materi"> </p>
    <?php 
        $this->load->view('template/footer');
    ?> 
</body>
</html>